<?php
App::uses('AppModel', 'Model');
/**
 * Design Model
 *
 * @property Order $Order
 */
class Design extends AppModel {

  public $actsAs = array(
	'Uploader.Attachment' => array(
		'image' => array(
			'nameCallback' => '',
			'tempDir' => TMP,
			'uploadDir' => '/var/www/app/webroot/designs/',
			'finalPath' => 'designs/',
			'dbColumn' => 'image',
			'metaColumns' => array(),
			'defaultPath' => '',
			'overwrite' => false,
			'allowEmpty' => false,
		)
	)
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
