<?php

class IndexController extends ControllerBase 
{

	public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon_Tag::setTitle('Hypertext Preprocesor');
        $this->loadCustomTrans('index');
        parent::initialize();
    }

	public function indexAction()
	{

		$language = Phalcon_Session::get('language');
		$news = News::find(array("language='$language'", "limit" => 5, "order" => "published desc"));
		if (count($news) == 0) {
			$news = News::find(array("language='en'", "limit" => 5, "order" => "published desc"));
		}

		//Query the last 5 news
		$this->view->setVar("news", $news);
	}

	public function setLanguageAction($language='')
	{
		//Change the language, reload translations if needed
		if ($language == 'en' || $language == 'es') {
			Phalcon_Session::set('language', $language);
			$this->loadMainTrans();
			$this->loadCustomTrans('index');
		}

		//Go to the last place 
		$referer = $this->request->getHTTPReferer();
		if(strpos($referer, $this->request->getHttpHost()."/")!==false){
			return $this->response->setHeader("Location", $referer);
		} else {
			return $this->_forward("index/index");
		}
	}

}

