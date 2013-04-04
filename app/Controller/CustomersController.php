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
}
