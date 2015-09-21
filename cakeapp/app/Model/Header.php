<?php
App::uses('AppModel', 'Model');
/**
 * Header Model
 *
 * @property Detail $Detail
 */
class Header extends AppModel {

	public $actsAs = ['Search.Searchable'];
	public $filterArgs = [
		'name' => ['type' => 'like'],
		'detail_name' => ['type' => 'like', 'field' => 'Detail.name']
	];
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Detail' => array(
			'className' => 'Detail',
			'foreignKey' => 'header_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
