<?php

error_reporting(E_ALL);

require 'app/config/config.php';

$modelManager = new Phalcon_Model_Manager();
$modelManager->setModelsDir(__DIR__.'/'.$config->phalcon->modelsDir);

Phalcon_Db_Pool::setDefaultDescriptor($config->database);

$categoriesCode = array();
foreach(Categories::find() as $category){
	$categoriesCode[$category->name] = $category->id;
}

foreach(News::find() as $new){	
	foreach($new->getNewsCategories() as $newCategory){
		$newCategory->delete();
	}
	$categories = array();
	if(stripos($new->title, 'conf')!==false){
		$categories['conf'] = true;
	}
	if(stripos($new->title, 'world')!==false){
		$categories['conf'] = true;
	}
	if(stripos($new->title, 'Rio')!==false){
		$categories['conf'] = true;
	}
	if(stripos($new->title, 'phpDay')!==false){
		$categories['conf'] = true;
	}
	if(stripos($new->title, 'NW')!==false){
		$categories['conf'] = true;
	}
	if(stripos($new->title, 'liberados')!==false){
		$categories['releases'] = true;
	}
	if(stripos($new->title, 'released')!==false){
		$categories['releases'] = true;
	}
	if(stripos($new->title, '(CVE')!==false){
		$categories['security'] = true;
	}
	if(stripos($new->title, 'testing')!==false){
		$categories['testing'] = true;
	}
	if(stripos($new->title, 'security')!==false){
		$categories['security'] = true;
	}
	if(preg_match('/ [0-9]{4}/', $new->title)){
		$categories['conf'] = true;
	}
	if(preg_match('/RC[0-9]{1}/', $new->title)){
		$categories['testing'] = true;
	}
	if(stripos($new->title, 'alpha')!==false){
		$categories['testing'] = true;
	}
	if(stripos($new->title, 'beta')!==false){
		$categories['testing'] = true;
	}
	if(stripos($new->title, 'documentation')!==false){
		$categories['documentation'] = true;
	}
	if(count($categories)==0){
		$categories['other'] = true;	
	}
	foreach($categories as $category => $one){
		$newCategory = new NewsCategories();
		$newCategory->news_id = $new->id;
		$newCategory->categories_id = $categoriesCode[$category];
		$newCategory->save();
	}
}
