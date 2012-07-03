<?php

class AboutController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon_Tag::setTitle('Links');
        parent::initialize();
    }

    public function indexAction()
    {
    }
}
