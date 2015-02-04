<?php

namespace Recipe;

use Nos\Controller_Front_Application;

use View;

class Controller_Front_Menu extends Controller_Front_Application
{
    public $page_from = false;

    public function before()
    {
        $this->format = array_key_exists(\Input::extension(), $this->_supported_formats) ? \Input::extension() : 'html';

        parent::before();
    }

    public function action_main($args = array())
    {
        $this->page_from = $this->main_controller->getPage();

        $this->config['item_per_page'] = (int) isset($args['item_per_page']) ? $args['item_per_page'] : 1;
        $this->config['startdate'] = isset($args['startdate']) ? $args['startdate'] : false;
        $this->config['enddate'] = isset($args['enddate']) ? $args['enddate'] : false;

        $enhancer_url = $this->main_controller->getEnhancerUrl();

        if (!empty($enhancer_url)) {
            $segments = explode('/', $enhancer_url);

            if (!empty($segments[0])) {
                return $this->display_menu($segments[0]);
            }

            throw new \Nos\NotFoundException();
        }

        if ($this->format != 'html') {
            $this->main_controller->setHeader('Content-Type', $this->_supported_formats[$this->format]);
            return $this->main_controller->sendContent($this->response($this->_display_list_menu()));
        } else {
            return $this->display_list_menu();
        }
    }

    public function action_home($args = array())
    {
        $this->page_from = $this->main_controller->getPage();
        $this->config['item_per_page'] = (int) isset($args['item_per_page']) ? $args['item_per_page'] : 10;
        $this->config['startdate'] = isset($args['startdate']) ? $args['startdate'] : false;
        $this->config['enddate'] = isset($args['enddate']) ? $args['enddate'] : false;

        return $this->display_list_menu();
    }

    protected function _display_list_menu()
    {
        $params = array(
            'where' => array(),
            'order_by' => array(
                'menu_id' => 'ASC'
            ),
            'limit' => $this->config['item_per_page']
        );

        $params['where'][] = array('published', true);
        if ($this->config['startdate']) {
            $params['where'][] = array('menu_start', '>=', $this->config['startdate']);
        }
        if ($this->config['enddate']) {
            $params['where'][] = array('menu_start', '<', $this->config['enddate']);
        }

        $menu_list =  Model_Menu::find('all', $params);

        return $menu_list;
    }

    protected function display_list_menu()
    {

        $menu_list = $this->_display_list_menu();

        return \View::forge('front/menu_list', array(
            'menu_list' => $menu_list,
        ), false);
    }


    protected function display_menu($virtual_name)
    {
        $menu = Model_Menu::find('first', array(
            'where' => array(
                array('menu_virtual_name', '=', $virtual_name)
            )
        ));

        if (empty($menu)) {
            throw new \Nos\NotFoundException();
        }

        $title = $menu->menu_title;
        $this->main_controller->setItemDisplayed(
            $menu,
            array(
                //'meta_description' => $title,
                //'meta_keywords' => '',
            ),
            array(
                'title' => ':page_title - '.$title,
            )
        );

        return \View::forge('front/menu_item', array(
            'menu' => $menu,
        ), false);
    }

    public static function getUrlEnhanced($params = array())
    {
        $item = \Arr::get($params, 'item', false);
        if ($item) {
            // url built according to $item'class
            switch (get_class($item)) {
                case 'Recipe\Model_Menu' :
                    return $item->virtual_name().'.html';
                    break;

                default:
                    return false;
            }
        }

        return '';
    }
}
