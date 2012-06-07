<?php

class News extends Phalcon_Model_Base {

	/**
	 * @var integer
	 */
	public $id;

	/**
	 * @var string
	 */
	public $short_title;

	/**
	 * @var string
	 */
	public $title;

	/**
	 * @var integer
	 */
	public $published;

	/**
	 * @var integer
	 */
	public $updated;	

	/**
	 * @var string
	 */
	public $image;

	/**
	 * @var string
	 */
	public $content;

	public function getUri(){
		return date('Y/m', $this->published).'/'.$this->short_title;
	}

	public function getPublishedDate(){
		return strftime('%d %b %Y', $this->published);
	}

}

