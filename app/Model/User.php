<?php

App::uses('User', 'Users.Model');
class AppUser extends User {
    public $alias = 'User';
    
    public $hasOne = array(
        'Customer' => array(
            'className'    => 'Customer',
            'dependent'    => true
        )
    );
    
    public $hasMany = array(
        'Order' => array(
            'className'     => 'Order',
            'foreignKey'    => 'user_id',
            'order'         => 'Comment.created DESC',
        )
    );
}
?>
