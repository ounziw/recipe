<?php

namespace Recipe;

class Model_Menu extends \Nos\Orm\Model
{

    protected static $_primary_key = array('menu_id');
    protected static $_table_name = 'menus';

    protected static $_properties = array(
        'menu_id',
        'menu_title',
        'menu_description',
        'menu_price',
        'menu_reserve',
        'menu_start',
        'menu_end',
        'menu_virtual_name' => array(
            'default' => null,
            'data_type' => 'varchar',
            'null' => false,
            'character_maximum_length' => 100,
        ),
        'menu_publication_status',
        'menu_publication_start',
        'menu_publication_end',
        'menu_created_at',
        'menu_updated_at',
    );

    protected static $_title_property = 'menu_title';

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'mysql_timestamp' => true,
            'property'=>'menu_created_at'
        ),
        'Orm\Observer_UpdatedAt' => array(
            'mysql_timestamp' => true,
            'property'=>'menu_updated_at'
        )
    );

    protected static $_behaviours = array(
        'Nos\Orm_Behaviour_Publishable' => array(
            'publication_state_property' => 'menu_publication_status',
            'publication_start_property' => 'menu_publication_start',
            'publication_end_property' => 'menu_publication_end',
        ),
        'Nos\Orm_Behaviour_Urlenhancer' => array(
            'enhancers' => array('recipe_menu'),
        ),
        'Nos\Orm_Behaviour_Virtualname' => array(
            'virtual_name_property' => 'menu_virtual_name',
        ),
        /*
        'Nos\Orm_Behaviour_Twinnable' => array(
            'context_property'      => 'menu_context',
            'common_id_property' => 'menu_context_common_id',
            'is_main_property' => 'menu_context_is_main',
            'common_fields'   => array(),
        ),
        */
        /*
        'Nos\Orm_Behaviour_Author' => array(
            'created_by_property' => 'menu_created_by_id',
            'updated_by_property' => 'menu_updated_by_id',
        ),
        */
    );

    protected static $_belongs_to  = array(
        /*
        'key' => array( // key must be defined, relation will be loaded via $menu->key
            'key_from' => 'menu_...', // Column on this model
            'model_to' => 'Recipe\Model_...', // Model to be defined
            'key_to' => '...', // column on the other model
            'cascade_save' => false,
            'cascade_delete' => false,
            //'conditions' => array('where' => ...)
        ),
        */
    );
    protected static $_has_one   = array();
    protected static $_has_many  = array(
        /*
        'key' => array( // key must be defined, relation will be loaded via $menu->key
            'key_from' => 'menu_...', // Column on this model
            'model_to' => 'Recipe\Model_...', // Model to be defined
            'key_to' => '...', // column on the other model
            'cascade_save' => false,
            'cascade_delete' => false,
            //'conditions' => array('where' => ...)
        ),
        */
    );
    protected static $_many_many = array(
        /*
            'key' => array( // key must be defined, relation will be loaded via $menu->key
                'table_through' => '...', // intermediary table must be defined
                'key_from' => 'menu_...', // Column on this model
                'key_through_from' => '...', // Column "from" on the intermediary table
                'key_through_to' => '...', // Column "to" on the intermediary table
                'key_to' => '...', // Column on the other model
                'cascade_save' => false,
                'cascade_delete' => false,
                'model_to'       => 'Recipe\Model_...', // Model to be defined
            ),
        */
    );

    protected static $_twinnable_belongs_to = array();
    protected static $_twinnable_has_one    = array();
    protected static $_twinnable_has_many   = array();
    protected static $_twinnable_many_many  = array();
    protected static $_attachment           = array();
}
