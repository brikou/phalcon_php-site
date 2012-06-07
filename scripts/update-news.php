<?php

error_reporting(E_ALL);

require 'app/config/config.php';

$feedContent = file_get_contents("feed.xml");

$dom = DOMDocument::loadXML($feedContent);

$list = $dom->getElementsByTagName("entry");

$entries = array();
foreach($list as $entry){
	$dataEntry = array();
	$items = array("title", "published", "updated");
	foreach($items as $item){
		$list = $entry->getElementsByTagName($item);
		$dataEntry[$item] = $list->item(0)->nodeValue;
	}

	$list = $entry->getElementsByTagName("content");

	$domContent = new DOMDocument();	
	$domContent->loadXML("<div></div>");
	
	$node = $domContent->importNode($list->item(0), true);	
	$domContent->documentElement->appendChild($node);

	$dataEntry["content"] = str_replace('default:', '', $domContent->saveHTML());

	$dataEntry["categories"] = array();
	$categories = $entry->getElementsByTagName("category");
	foreach($categories as $category){
		$dataEntry["categories"][$category->getAttribute("term")] = $category->getAttribute("label");
	}

	$entries[] = $dataEntry;
}

$modelManager = new Phalcon_Model_Manager();
$modelManager->setModelsDir(__DIR__.'/'.$config->phalcon->modelsDir);

Phalcon_Db_Pool::setDefaultDescriptor($config->database);

foreach($entries as $entry){

	$shortTitle = preg_replace('/[ ]+/', '-', $entry['title']);
	$shortTitle = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', $shortTitle));
	$shortTitle = preg_replace('/[\-]+/', '-', $shortTitle);

	$news = News::findFirst("short_title='$shortTitle'");
	if($news==false){
		$news = new News($modelManager);
		$news->language = 'es';
		$news->short_title = $shortTitle;
		$news->title = $entry['title'];
		$published = date_parse($entry['published']);
		$news->published = mktime($published['hour'], $published['minute'], $published['second'], $published['month'], $published['day'], $published['year']);
		$news->year = $published['year'];

		$updated = date_parse($entry['updated']);
		$news->updated = mktime($updated['hour'], $updated['minute'], $updated['second'], $updated['month'], $updated['day'], $updated['year']);
		$news->content = addslashes($entry['content']);		
		if($news->save()==false){
			foreach($news->getMessages() as $message){
				echo 'Error while inserting News: ', $message->getMessage(), PHP_EOL;
				return;
			}
		}
	}

}
