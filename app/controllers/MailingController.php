<?php

class MailingController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon_Tag::setTitle('Mailing Lists');
        parent::initialize();
    }

    public function indexAction()
    {
    }
}
