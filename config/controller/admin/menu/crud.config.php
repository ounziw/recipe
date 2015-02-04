<?php
return array(
    'controller_url'  => 'admin/recipe/menu/crud',
    'model' => 'Recipe\Model_Menu',
    'layout' => array(
        'large' => true,
        'title' => 'menu_title',
        'medias' => array('medias->image->medil_media_id'),
        'content' => array(
            '' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('プロパティ'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                                'menu_description',
                                'menu_price',
                                'menu_reserve'
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'menu' => array(
            __('URL') => array('menu_virtual_name'),
            __('補足') => array(
                'menu_start',
                'menu_end'
            ),
        ),
    ),
    'fields' => array(
        'menu__id' => array (
            'label' => 'ID: ',
            'form' => array(
                'type' => 'hidden',
            ),
            'dont_save' => true,
        ),
        'menu_title' => array(
            'label' => __('タイトル'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'medias->image->medil_media_id' => array(
            'label' => '',
            'renderer' => 'Nos\Media\Renderer_Media',
            'form' => array(
                'title' => __('画像'),
            ),
        ),
        'menu_description' => array (
            'label' => __('説明'),
            'form' => array(
                'type' => 'textarea',
                'rows' => '6',
            ),
        ),
        'menu_price' => array(
            'label' => __('価格'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'menu_reserve' => array(
            'label' => __('要予約'),
            'form' => array(
                'type' => 'checkbox',
                'value' => '1',
                'empty' => '0',
            ),
        ),
        'menu_start' => array(
            'label' => __('提供開始日'),
            'renderer' => 'Nos\Renderer_Datetime_Picker',
        ),
        'menu_end' => array(
            'label' => __('提供終了日'),
            'renderer' => 'Nos\Renderer_Datetime_Picker',
        ),
        'menu_virtual_name' => array(
            'label' => __('URL: '),
            'renderer' => 'Nos\Renderer_Virtualname',
            'validation' => array(
                'required',
                'min_length' => array(2),
            ),
        ),
    )
    /* UI texts sample
    'i18n' => array(
        // Crud
        // Note to translator: Default copy meant to be overwritten by applications (e.g. The item has been deleted > The page has been deleted). The word 'item' is not to feature in Novius OS.
        'notification item added' => __('Done! The item has been added.'),
        'notification item saved' => __('OK, all changes are saved.'),
        'notification item deleted' => __('The item has been deleted.'),

        // General errors
        'notification item does not exist anymore' => __('This item doesn’t exist any more. It has been deleted.'),
        'notification item not found' => __('We cannot find this item.'),

        // Deletion popup
        'deleting item title' => __('Deleting the item ‘{{title}}’'),

        # Delete action's labels
        'deleting button N items' => n__(
            'Yes, delete this item',
            'Yes, delete these {{count}} items'
        ),

        'deleting wrong confirmation' => __('We cannot delete this item as the number of sub-items you’ve entered is wrong. Please amend it.'),

        'N items' => n__(
            '1 item',
            '{{count}} items'
        ),

        # Keep only if the model has the behaviour Contextable
        'deleting with N contexts' => n__(
            'This item exists in <strong>one context</strong>.',
            'This item exists in <strong>{{context_count}} contexts</strong>.'
        ),
        'deleting with N languages' => n__(
            'This item exists in <strong>one language</strong>.',
            'This item exists in <strong>{{language_count}} languages</strong>.'
        ),

        # Keep only if the model has the behaviour Twinnable
        'translate error parent not available in context' => __('We’re afraid this item cannot be added to {{context}} because its <a>parent</a> is not available in this context yet.'),
        'translate error parent not available in language' => __('We’re afraid this item cannot be translated into {{language}} because its <a>parent</a> is not available in this language yet.'),
        'translate error impossible context' => __('This item cannot be added in {{context}}. (How come you get this error message? You’ve hacked your way into here, haven’t you?)'),

        # Keep only if the model has the behaviour Tree
        'deleting with N children' => n__(
            'This item has <strong>one sub-item</strong>.',
            'This item has <strong>{{children_count}} sub-items</strong>.'
        ),
    ),
    */
    /*
    Tab configuration sample
    'tab' => array(
        'iconUrl' => 'static/apps/{{application_name}}/img/16/icon.png',
        'labels' => array(
            'insert' => __('Add an item'),
            'blankSlate' => __('Translate an item'),
        ),
    ),
    */
);
