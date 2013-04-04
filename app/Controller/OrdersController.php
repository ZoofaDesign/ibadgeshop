<?php

App::uses('AppController', 'Controller');

/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {

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
        $this->Order->recursive = 0;
        $this->set('orders', $this->paginate());
    }

    public function dashboard()
    {
        $this->Order->recursive = 0;
        $this->set('orders', $this->paginate());
    }

    public function bestel()
    {
        $this->layout = 'bestel';
        if ($this->request->is('post'))
        {
            $this->Order->create();

            $this->request->data['Order']['price'] = 10;
            $this->request->data['Order']['sizes'] = '5x10';

            $data = array(
                'User' => array('email' => $this->request->data['Order']['User']['email']),
                'User' => array(
                    array('Customer' => array(
                            'naam' => 'mad',
                            'groespnaam' => 'coder',
                        )),
                ),
            );
            if ($this->Order->saveAssociated($this->request->data))
            {
                $this->Session->setFlash(__('Uw bestelling is succesvol geplaatst'));
                $this->redirect(array('action' => 'view', $this->Order->id));
            }
            else
            {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
            }

            //$this->addCustomer();
            //User aanmaken
            //$this->request->data['User']['tos'] = true;
            //$this->request->data['User']['email_verified'] = true;
            //if ($this->User->add($this->request->data)) {
            //	$this->Session->setFlash(__d('users', 'The User has been saved'));
            //	$this->redirect(array('action' => 'complete'));
            //}
            //$this->set('roles', Configure::read('Users.roles'));     
        }
        //$users = $this->User;
        //$this->set(compact('users'));
    }

    private function addCustomer()
    {
        
    }

    public function checkout($id = null)
    {
        
    }

    public function redirectAction()
    {
        $storename = 'YOUR STORE';
        $order_id = 'Orderid 123';
        $amount = '1200';
        $description = 'Order ' . $order_id . ' at ' . $storename;
        $signature = sha1(
                '1234567890' .
                $order_id .
                $amount .
                $description .
                'YOURSERVERSECRET'
        );
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //REDIRECT URL TOEVOEGEN -> NA BETALING WHERE TO GO
        $redirecturl = 'http://your.redirect.url/goback';
        $request = '<?xml version="1.0" encoding="UTF-8"?>
<MPI_Interface>
<Authorize>
<version>1.1</version>
<Merchant>
<uid>' . '1234567890' . '</uid>
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

        $xmlurl = $this->xmlPost('https://www.ebonline.be/(test/)mpi/authenticate', $request);
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



            //User aanmaken
            //$this->request->data['User']['tos'] = true;
            //$this->request->data['User']['email_verified'] = true;
            //if ($this->User->add($this->request->data)) {
            //	$this->Session->setFlash(__d('users', 'The User has been saved'));
            //	$this->redirect(array('action' => 'complete'));
            //}
            //$this->set('roles', Configure::read('Users.roles'));     
        }
        //$users = $this->User;
        //$this->set(compact('users'));
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
        $users = $this->Order->User->find('list');
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

    public function getOrderByStatus($id, $status)
    {
        if (!$this->Order->exists($id))
        {
            throw new NotFoundException(__('Invalid order'));
        }
        $options = array('conditions' => array('Order.' . $this->Order->status => $status));
        $this->set('orders', $this->Order->find('all', $options));
    }

}
