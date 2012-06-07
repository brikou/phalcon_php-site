<?php

class Categories extends Phalcon_Model_Base {

	/**
	 * @var integer
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;


	public function initialize(){
		$this->hasMany('id', 'NewsCategories', 'categories_id');
	}

}

