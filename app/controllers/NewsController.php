<?php

class NewsController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateAfter(array('main'));
        parent::initialize();
    }

    public function index()
    {
        return $this->_forward('index/index');
    }

    private function _getSanizitedTitleId()
    {
        return preg_replace('/[^a-z0-9\-]/', '', $this->_getParam('title'));
    }

    public function showAction()
    {

        $title = $this->_getSanizitedTitleId();

        $new = News::findFirst("short_title='$title'");
        if ($new == false) {
            return $this->_forward('index/index');
        }

        $activeYear = $this->filter->sanitize($this->_getParam('year'), "int");

        Phalcon_Tag::setTitle($new->title);

        $this->view->setVar("new", $new);
        $this->view->setVar("activeYear", $activeYear);
        $this->view->setVar("years", News::count(array('group' => 'year')));
    }

    public function showYearAction()
    {

        $activeYear = $this->filter->sanitize($this->_getParam('year'), "int");

        Phalcon_Tag::setTitle('News');

        $this->view->setVar("news", News::find(array("year='$activeYear'", "order" => "published DESC")));
        $this->view->setVar("activeYear", $activeYear);
        $this->view->setVar("years", News::count(array('group' => 'year')));
    }

    public function taggedAction($tag)
    {

        $tag = $this->filter->sanitize($tag, "alphanum");

        Phalcon_Tag::setTitle('Tagged '.$tag);

        $category = Categories::findFirst("name='$tag'");
        if ($category == false) {
            return $this->_forward('index/index');
        }

        $news = array();
        $newsCategories = NewsCategories::find(array("categories_id='".$category->id."'"));
        foreach ($newsCategories as $newCategory) {
            $news[] = $newCategory->getNews();
        }

        $this->view->setVar("activeYear", 0);
        $this->view->setVar("tag", $tag);
        $this->view->setVar("news", $news);
        $this->view->setVar("years", News::count(array('group' => 'year')));
    }

}
