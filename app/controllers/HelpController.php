<?php

class HelpController extends ControllerBase
{
	
	public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon_Tag::setTitle('Getting Help');
        parent::initialize();
    }

	public function indexAction()
	{
		
	}

}