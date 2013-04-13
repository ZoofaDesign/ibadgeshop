<?php
App::uses('AppModel', 'Model');
/**
 * Design Model
 *
 * @property Order $Order
 */
class Design extends AppModel {
public $actsAs = array(
        'Upload.Upload' => array(
            'image' => array(
                'thumbnails' => false,
                'thumbnailMethod' => 'php',
            )
        )
    );
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id'
		)
	);
}
