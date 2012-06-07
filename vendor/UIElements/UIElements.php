<?php

/**
 * UIElements
 *
 * Helps to build UI elements for the application
 */
abstract class UIElements
{
    private static $_headerMenu = array(        
        'pull-left' => array(
            'index' => array(
                'caption' => 'home',
                'action' => 'index'
            ),
            'downloads' => array(
                'caption' => 'downloads',
                'action' => 'index'
            ),
            'documentation' => array(
                'caption' => 'docs',
                'action' => 'index'
            ),
            'help' => array(
                'caption' => 'help',
                'action' => 'index'
            ),
            'mailing' => array(
                'caption' => 'mailing',
                'action' => 'index'
            ),
            'wiki' => array(
                'caption' => 'Wiki',
                'url' => 'https://wiki.php.net/'
            ),
            'bugs' => array(
                'caption' => 'bugs',
                'url' => 'https://bugs.php.net/'
            ),
            'links' => array(
                'caption' => 'links',
                'action' => 'index'
            ),
            'about' => array(
                'caption' => 'about',
                'action' => 'index',
                'special' => true
            )
        )
    );

    private static $_tabs = array(
        'Invoices' => array(
            'controller' => 'invoices',
            'action' => 'index',
            'any' => false
        ),
        'Companies' => array(
            'controller' => 'companies',
            'action' => 'index',
            'any' => true
        ),
        'Products' => array(
            'controller' => 'products',
            'action' => 'index',
            'any' => true
        ),
        'Product Types' => array(
            'controller' => 'producttypes',
            'action' => 'index',
            'any' => true
        ),
        'Your Profile' => array(
            'controller' => 'invoices',
            'action' => 'profile',
            'any' => false
        )
    );

    /**
     * Builds header menu with left and right items
     *
     * @param  Phalcon_View $view
     * @param  Phalcon_Translate $translate
     * @return string
     */
    public static function getMenu($view, $translate)
    {
        $auth = Phalcon_Session::get('auth');
        if ($auth) {
            self::$_headerMenu['pull-right']['session'] = array(
                'caption' => 'Log Out',
                'action' => 'end'
            );
        } else {
            unset(self::$_headerMenu['pull-left']['invoices']);
        }

        echo '<div class="nav-collapse">';
        $controllerName = $view->getControllerName();
        foreach (self::$_headerMenu as $position => $menu) {
            echo '<ul class="nav ', $position, '">';
            foreach ($menu as $controller => $option) {
                if(!isset($option['special'])) {
                    if ($controllerName == $controller) {
                        echo '<li class="active">';
                    } else {
                        echo '<li>';
                    }
                } else {
                     echo '<li class="special">';
                }
                if(isset($option['action'])){
                    echo Phalcon_Tag::linkTo($controller.'/'.$option['action'], $translate[$option['caption']]);
                } else {
                    if(isset($option['url'])){
                        echo '<a href="'.$option['url'].'">'.$translate[$option['caption']].'</a>';
                    }
                }
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
    }

    public static function getTabs($view)
    {
        $controllerName = $view->getControllerName();
        $actionName = $view->getActionName();
        echo '<ul class="nav nav-tabs">';
        foreach (self::$_tabs as $caption => $option) {
            if ($option['controller'] == $controllerName && ($option['action'] == $actionName || $option['any'])) {
                echo '<li class="active">';
            } else {
                echo '<li>';
            }
            echo Phalcon_Tag::linkTo($option['controller'].'/'.$option['action'], $caption), '<li>';
        }
        echo '</ul>';
    }

    public static function disclaimer($translate){
        echo '<div class="alert alert-info">
        <a class="close" data-dismiss="alert" href="#">×</a>
        ', $translate->_('disclaimer', array(
            'framework' => '<a href="http://phalconphp.com">Phalcon PHP Framework</a>',
            'official' => '<a href="https://www.php.net">'.$translate['accessOf'].'</a>'
        )), '        
        </div>';
    }
}
