<?php

class NewsCategories extends Phalcon_Model_Base {

	/**
	 * @var integer
	 */
	public $id;

	/**
	 * @var integer
	 */
	public $news_id;

	/**
	 * @var integer
	 */
	public $categories_id;

	public function initialize(){
		$this->belongsTo('news_id', 'News', 'id');
		$this->belongsTo('categories_id', 'Categories', 'id');
	}


}

