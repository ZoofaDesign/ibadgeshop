<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('Cookie');

    public function beforeFilter()
    {
        parent::beforeFilter();
       $this->restoreLoginFromCookie();   
        
    }

    public function restoreLoginFromCookie()
    {
        $this->Cookie->name = 'Users';
        $cookie = $this->Cookie->read('rememberMe');
        if (!empty($cookie) && !$this->Auth->user())
        {
            $data['User'][$this->Auth->fields['username']] = $cookie[$this->Auth->fields['username']];
            $data['User'][$this->Auth->fields['password']] = $cookie[$this->Auth->fields['password']];
            $this->Auth->login($data);
        }
    }
}
