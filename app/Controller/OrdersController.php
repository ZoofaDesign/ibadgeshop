<?php

App::uses('AppController', 'Controller');

/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {

   // public $components = array('ImageUploader');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'admin';
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 'nieuw','Order.type' => 'order'))));
    }

    public function dashboard()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 1,'Order.type' => 'order'), 'limit' => '10', 'order' => array('Order.created'))));
        $this->set('stalen', $this->Order->find('all',array('conditions' => array('Order.status' => 1,'Order.type' => 'staal'), 'limit' => '10', 'order' => array('Order.created'))));
    }

    public function bestel()
    {
        $this->layout = 'bestel';
        
        if ($this->request->is('post'))
        {
            $this->Order->create();
            xdebug_break();
            $customer = $this->Order->Customer->create();
            $customer = $this->Order->Customer->save($this->request->data);

            if (!empty($customer))
            {
                $size = 0;
                
                if ($this->request->data['Design']['format'] === 'rechthoek')
                {
                    $size = $this->request->data['Design']['breedte'] + $this->request->data['Design']['hoogte'];
                    $this->request->data['Design']['diameter'] = 0;
                }
                elseif ($this->request->data['Design']['format'] === 'rond')
                {
                    $size = $this->request->data['Design']['diameter'] * 2;
                }
                elseif ($this->request->data['Design']['format'] === 'anders')
                {
                    $size = $this->request->data['Design']['specialHoogte'] + $this->request->data['Design']['specialBreedte'];
                    $this->request->data['Design']['hoogte'] = $this->request->data['Design']['specialHoogte'];
                    $this->request->data['Design']['breedte'] = $this->request->data['Design']['specialBreedte'];
                    $this->request->data['Design']['diameter'] = 0;
                }
                $prijs = $customer['Order']['aantal'] * $size;
                $this->request->data['Design']['size'] = $size;
                $this->request->data['Order']['price'] = $prijs;
                $this->request->data['Order']['type'] = 'order';

                $this->request->data['Order']['customer_id'] = $customer['Customer']['klant_id'];

                if ($this->Order->save($this->request->data))
                {
                    $this->request->data['Design']['order_id'] = $this->Order->id;
                    if ($this->Order->Design->save($this->request->data))
                    {
                        $this->Session->setFlash(__('Uw bestelling is succesvol geplaatst'));
                        $this->redirect(array('action' => 'checkout', $this->Order->id));
                    }
                }
                else
                {
                    $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
                }
            }
        }
    }
    
    public function bestel_staal($param)
    {
        $this->layout = 'bestel';
        $size = 0;
                if ($customer['Design']['diameter'] === '')
                {
                    $size = $customer['Design']['breedte'] + $customer['Design']['hoogte'];
                }
                elseif ($customer['Design']['breedte'] == '' && $customer['Design']['hoogte'] !== '')
                {
                    $size = $customer['Design']['diameter'] * 2;
                }
                $prijs = $customer['Order']['aantal'] * $size;
                $this->request->data['Order']['price'] = $prijs;
                $this->request->data['Order']['type'] = 'staal';
                $this->request->data['Order']['aantal'] = $customer['Order']['aantal'];
                $this->request->data['Design']['format'] = $customer['Design']['format'];
                $this->request->data['Order']['customer_id'] = $customer['Customer']['klant_id'];

                if ($this->Order->save($this->request->data))
                {
                    $this->request->data['Design']['order_id'] = $this->Order->id;
                    if ($this->Order->Design->save($this->request->data))
                    {
                        $this->Session->setFlash(__('Uw bestelling is succesvol geplaatst'));
                        $this->redirect(array('action' => 'checkout', $this->Order->id));
                    }
                }
                else
                {
                    $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
                }
    }

    public function checkout($id = null)
    {
        $this->layout = 'bestel';
        //Tonen van order gegevens
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.id' => $id));
        $this->set('order', $this->Order->find('first', $options));
        
        
    }

    public function betaling($id)
    {
        $this->layout = 'bestel';
        $storename = 'Ibadge';
        $order_id = 'o'.$this->Order->id .'c'. $this->Order->Customer->klant_id;
        $amount = $this->Order->aantal;
        $description = 'Order ' . $order_id . ' at ' . $storename;
        $signature = sha1(
                '9058760101' .
                $order_id .
                $amount .
                $description .
                'C058761500'
        );
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //REDIRECT URL TOEVOEGEN -> NA BETALING WHERE TO GO
        $redirecturl = 'http://ibadge.local/orders/betaling_response';
        $request = '<?xml version="1.0" encoding="UTF-8"?>
<MPI_Interface>
<Authorize>
<version>1.1</version>
<Merchant>
<uid>' . '9058760101' . '</uid>
<beneficiary>' . $storename . '</beneficiary>
<title>' . $storename . '</title>
<redirecttype>' . 'DIRECT' . '</redirecttype>
<redirecturl>' . $redirecturl . '</redirecturl>
</Merchant>
<Customer>
<country>' . 'BE' . '</country>
<ip>' . $ip . '</ip>
</Customer>
<Transaction>
<orderid>' . $order_id . '</orderid>
<amount>' . $amount . '</amount>
<description>' . $description . '</description>Version 1.0, Page 29 of 29
Copyright © Europabank NV 2011
</Transaction>
<hash>' . $signature . '</hash>
</Authorize>
</MPI_Interface>';
        // post request and get reply

        $xmlurl = $this->xmlPost('https://www.ebonline.be/test/mpi/authenticate', $request);
        if (!$xmlurl)
            return false;
        if (!$xml = simplexml_load_string($xmlurl))
        {
            trigger_error('Error reading XML string', E_USER_ERROR);
        }
        if ($xml->Error)
            echo $xml->Error;
        else
        //hier gewoon redirect doen met cake ipv header te setten
            header("Location: " . $xml->Response->url);
        exit();
    }

    function xmlPost($url, $data, $optional_headers = 'Content-Type: text/xml')
    {
        $params = array('http' => array('method' => 'POST', 'content' => $data));
        if ($optional_headers !== null)
        {
            $params['http']['header'] = $optional_headers;
        }
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp)
        {
            return false;
        }
        $response = @stream_get_contents($fp);
        return $response;
    }
    
    public function betaling_response(){
        
    }
    
    public function betaling_geslaagd(){
        
    }
    
    public function betaling_mislukt(){
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
        $this->set('order', $this->Order->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post'))
        {
            $this->Order->create();
            if ($this->Order->save($this->request->data))
            {
                $this->Session->setFlash(__('The order has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        }
    }

    public function complete($param)
    {
        //Na bestelling user naar deze aciton doorverwijzen, 
        //Hier zal mail worden verstuurd en eveneens de bestelling op scherm worden getoond
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            if ($this->Order->save($this->request->data))
            {
                $this->Session->setFlash(__('The order has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }
        }
        else
        {
            $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
            $this->request->data = $this->Order->find('first', $options);
        }
        $users = $this->Order->Customer->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->Order->id = $id;
        if (!$this->Order->exists())
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Order->delete())
        {
            $this->Session->setFlash(__('Order deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Order was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    private function getOrderByStatus($id, $status)
    {
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.status' . $this->Order->status => $status));
        $this->set('orders', $this->Order->find('all', $options));
    }

    public function nieuw()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 'nieuw','Order.type' => 'order'))));
    }

    public function producing()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 6,'Order.type' => 'order'))));
    }

    public function manuf_examples()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 2,'Order.type' => 'order'))));
    }

    public function manuf_produced()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 7,'Order.type' => 'order'))));
    }

    public function verzonden()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 8,'Order.type' => 'order'))));
    }

    public function verzonden_klant()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 9,'Order.type' => 'order'))));
    }

    public function voorbeelden()
    {
        $this->Order->recursive = 1;
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.status' => 5,'Order.type' => 'order'))));
    }

    public function stalen()
    {
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.type' . $this->Order->status => $status));
        $this->set('orders', $this->Order->find('all',array('conditions' => array('Order.type' => 'order'))));
    }
    
    public function stalen_accepted(){
        //Hier code die die de stalen
    }
    
    public function accept_staal(){
    
    }

}
