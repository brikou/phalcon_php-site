<?php

class DocumentationController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon_Tag::setTitle('Documentation');
        parent::initialize();
    }

    public function indexAction()
    {
    }
}
