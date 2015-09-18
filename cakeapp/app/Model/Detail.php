<?php
App::uses('AppModel', 'Model');
/**
 * Detail Model
 *
 * @property Header $Header
 */
class Detail extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Header' => array(
			'className' => 'Header',
			'foreignKey' => 'header_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
