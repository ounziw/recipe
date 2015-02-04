<?php
return array(
    'name'    => '料理',
    'version' => 'WIP', //@todo: to be defined
    'provider' => array(
        'name' => 'Unknown', //@todo: to be defined
    ),
    'namespace' => "Recipe",
    'permission' => array(
    ),
    'icons' => array( //@todo: to be defined
        64 => 'static/apps/recipe/img/64/icon.png',
        32 => 'static/apps/recipe/img/32/icon.png',
        16 => 'static/apps/recipe/img/16/icon.png',
    ),
    'launchers' => array(
        'Recipe::Menu' => array(
            'name'    => 'Menu', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/recipe/menu/appdesk', // url to load
                ),
            ),
        ),
    ),
    /* Launcher configuration sample
    'launchers' => array(
        'key' => array( // key must be defined
            'name'    => 'name of the launcher', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'url to load', // URL to load
                ),
            ),
        ),
    ),
    */
    // Enhancer configuration sample
    'enhancers' => array(
        'recipe_menu' => array( // key must be defined
            'title' => '料理 Menu',
            'desc'  => '',
            'enhancer' => 'recipe/front/menu/main',
            'iconUrl' => 'static/apps/noviusos_blog/img/blog-16.png',
            'urlEnhancer' => 'recipe/front/menu/main', // URL of the enhancer
            'dialog' => array(
                'contentUrl' => 'admin/recipe/enhancer/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
        'recipe_menulink' => array( // key must be defined
            'title' => '料理 へのリンク',
            'desc'  => '',
            'enhancer' => 'recipe/front/menu/home',
            'iconUrl' => 'static/apps/noviusos_blog/img/blog-16.png',
            //'urlEnhancer' => 'recipe/front/menu/main', // URL of the enhancer
            'dialog' => array(
                'contentUrl' => 'admin/recipe/enhancer/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
    /* Data catcher configuration sample
    'data_catchers' => array(
        'key' => array( // key must be defined
            'title' => 'title',
            'description'  => '',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/recipe/post/insert_update/?context={{context}}&title={{urlencode:'.\Nos\DataCatcher::TYPE_TITLE.'}}&summary={{urlencode:'.\Nos\DataCatcher::TYPE_TEXT.'}}&thumbnail={{urlencode:'.\Nos\DataCatcher::TYPE_IMAGE.'}}',
                    'label' => 'label of the data catcher',
                ),
            ),
            'onDemand' => true,
            'specified_models' => false,
            // data examples
            'required_data' => array(
                \Nos\DataCatcher::TYPE_TITLE,
            ),
            'optional_data' => array(
                \Nos\DataCatcher::TYPE_TEXT,
                \Nos\DataCatcher::TYPE_IMAGE,
            ),
        ),
    ),
    */
);
