<?php

App::uses('AppController', 'Controller');

/**
 * OrderMessages Controller
 *
 * @property OrderMessage $OrderMessage
 */
class OrderMessagesController extends AppController {

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
        $this->OrderMessage->recursive = 0;
        $this->set('orderMessages', $this->paginate());
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
        if (!$this->OrderMessage->exists($id))
        {
            throw new NotFoundException(__('Invalid order message'));
        }
        $options = array('conditions' => array('OrderMessage.' . $this->OrderMessage->primaryKey => $id));
        $this->set('orderMessage', $this->OrderMessage->find('first', $options));
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
            $this->OrderMessage->create();
            if ($this->OrderMessage->save($this->request->data))
            {
                $this->Session->setFlash(__('The order message has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The order message could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderMessage->Order->find('list');
        $this->set(compact('orders'));
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
        if (!$this->OrderMessage->exists($id))
        {
            throw new NotFoundException(__('Invalid order message'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            if ($this->OrderMessage->save($this->request->data))
            {
                $this->Session->setFlash(__('The order message has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The order message could not be saved. Please, try again.'));
            }
        }
        else
        {
            $options = array('conditions' => array('OrderMessage.' . $this->OrderMessage->primaryKey => $id));
            $this->request->data = $this->OrderMessage->find('first', $options);
        }
        $orders = $this->OrderMessage->Order->find('list');
        $this->set(compact('orders'));
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
        $this->OrderMessage->id = $id;
        if (!$this->OrderMessage->exists())
        {
            throw new NotFoundException(__('Invalid order message'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->OrderMessage->delete())
        {
            $this->Session->setFlash(__('Order message deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Order message was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
