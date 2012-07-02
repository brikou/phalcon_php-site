<?php

class ControllerBase extends Phalcon_Controller
{

    protected function _getTransPath()
    {
        $translationPath = '../app/messages/';
        $language = Phalcon_Session::get("language");
        if (!$language) {
            Phalcon_Session::set("language", "en");
        }
        if ($language=='es'||$language=='en') {
            return $translationPath.$language;
        } else {
            return $translationPath.'en';
        }
    }

    /**
     * Loads a translation for the whole site
     */
    public function loadMainTrans()
    {

        $translationPath = $this->_getTransPath();
        require $translationPath."/main.php";

        //Return a translation object
        $mainTranslate = new Phalcon_Translate("Array", array(
            "content" => $messages
        ));

        //Set $mt as main translation object
        $this->view->setVar("mt", $mainTranslate);
      }

      /**
       * Loads a translation for the active controller
       */
      public function loadCustomTrans($transFile)
      {

          $translationPath = $this->_getTransPath();
        require $translationPath.'/'.$transFile.'.php';

        //Return a translation object
        $controllerTranslate = new Phalcon_Translate("Array", array(
            "content" => $messages
        ));

        //Set $t as controller's translation object
        $this->view->setVar("t", $controllerTranslate);

      }

    public function initialize()
    {
        Phalcon_Tag::prependTitle('PHP: ');
        $this->loadMainTrans();
    }

}
