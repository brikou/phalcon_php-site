<?php

error_reporting(E_ALL);

require 'app/config/config.php';

$str = '
<span class="event_NLD vevent"><abbr title="2012-06-07" class="dtstart">07</abbr>. <a href="http://www.php.net/cal.php?id=5130" class="summary">Dutch PHP Conference 2012</a></span><br />
<span class="event_RUS vevent"><abbr title="2012-06-09" class="dtstart">09</abbr>. <a href="http://www.php.net/cal.php?id=5312" class="summary">DevConf 2012</a></span><br />
<span class="event_USA vevent"><abbr title="2012-06-29" class="dtstart">29</abbr>. <a href="http://www.php.net/cal.php?id=5326" class="summary">Lone Star PHP - Dallas, TX</a></span><br />
';

foreach (explode("<br />") as $line) {
    $dom
}

/*$modelManager = new Phalcon_Model_Manager();
$modelManager->setModelsDir(__DIR__.'/'.$config->phalcon->modelsDir);

Phalcon_Db_Pool::setDefaultDescriptor($config->database);

foreach ($entries as $entry) {

    $shortTitle = preg_replace('/[ ]+/', '-', $entry['title']);
    $shortTitle = strtolower(preg_replace('/[^a-zA-Z0-9\-]/', '', $shortTitle));
    $shortTitle = preg_replace('/[\-]+/', '-', $shortTitle);

    $news = News::findFirst("short_title='$shortTitle'");
    if ($news==false) {
        $news = new News($modelManager);
        $news->short_title = $shortTitle;
        $news->title = addslashes($entry['title']);
        $news->year = $entry['year'];
        $news->published = $entry['published'];
        $news->updated = $entry['published'];
        $news->content = addslashes($entry['content']);
        if ($news->save()==false) {
            foreach ($news->getMessages() as $message) {
                echo 'Error while inserting News: ', $message->getMessage(), PHP_EOL;

                return;
            }
        }
    }

}*/
