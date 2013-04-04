<?php
App::uses('AppController', 'Controller');
/**
 * Customers Controller
 *
 */
class CustomersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
        
        
        public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'admin';
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
        if (!$this->Customer->exists($id))
        {
            throw new NotFoundException(__('Invalid customer'));
        }
        $options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
        $this->set('customer', $this->Customer->find('first', $options));
    }
    
    public function bestel(){
        $this->layout = 'bestel';
        if ($this->request->is('post'))
        {
            $this->Customer->create();
            $customer = $this->Customer->save($this->request->data);
            $this->request->data['Order']['price'] = 10;
            $this->request->data['Order']['sizes'] = '5x10';
            if (!empty($customer))
            {
                $this->request->data['Order']['customer_id'] = $customer->klant_id;
                if ($this->Customer->Order->save($this->request->data))
                {
                    $this->Session->setFlash(__('Uw bestelling is succesvol geplaatst'));
                    $this->redirect(array('action' => 'view', $this->Order->id));
                }
                else
                {
                    $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
                }
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
}
