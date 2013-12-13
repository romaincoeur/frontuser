<?php
return array(
    'controller_url'  => 'admin/frontuser/frontuser/crud',
    'model' => 'Model\\Auth_User',
    'layout' => array(
        'large' => true,
        'title' => 'username',
        'content' => array(
            'champs_de_base' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('Champs de base'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                                'group_id',
                                'email',
                                'last_login',
                                'login_hash',
                                'last_hash',
                                'profile_fields'
                            ),
                        ),
                    ),
                ),
            ),
            'changer_le_mot_de_passe' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('Changer le mot de passe'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'champs_ajoutes' => array(
                'view' => 'nos::form/expander',
                'params' => array(
                    'title'   => __('Champs ajout&eacute;s'),
                    'nomargin' => true,
                    'options' => array(
                        'allowExpand' => false,
                    ),
                    'content' => array(
                        'view' => 'nos::form/fields',
                        'params' => array(
                            'fields' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'id' => array (
            'label' => 'ID: ',
            'form' => array(
                'type' => 'hidden',
            ),
            'dont_save' => true,
        ),
        'username' => array(
            'label' => __('username'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'password' => array(
            'label' => __('password'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'group_id' => array(
            'label' => __('group_id'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'email' => array(
            'label' => __('email'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'last_login' => array(
            'label' => __('last_login'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'login_hash' => array(
            'label' => __('login_hash'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'last_hash' => array(
            'label' => __('last_hash'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'profile_fields' => array (
            'label' => __('profile_fields'),
            'form' => array(
                'type' => 'textarea',
                'rows' => '6',
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
        'deleting button 1 item' => __('Yes, delete this item'),
        'deleting button N items' => __('Yes, delete these {{count}} items'),

        'deleting wrong confirmation' => __('We cannot delete this item as the number of sub-items you’ve entered is wrong. Please amend it.'),

        '1 item' => __('1 item'),
        'N items' => __('{{count}} items'),

        # Keep only if the model has the behaviour Contextable
        'deleting with N contexts' => __('This item exists in <strong>{{context_count}} contexts</strong>.'),
        'deleting with N languages' => __('This item exists in <strong>{{language_count}} languages</strong>.'),

        # Keep only if the model has the behaviours Contextable + Tree
        'deleting with N contexts and N children' => __('This item exists in <strong>{{context_count}} contexts</strong> and has <strong>{{children_count}} sub-items</strong>.'),
        'deleting with N contexts and 1 child' => __('This item exists in <strong>{{context_count}} contexts</strong> and has <strong>one sub-item</strong>.'),
        'deleting with N languages and N children' => __('This item exists in <strong>{{language_count}} languages</strong> and has <strong>{{children_count}} sub-items</strong>.'),
        'deleting with N languages and 1 child' => __('This item exists in <strong>{{language_count}} languages</strong> and has <strong>one sub-item</strong>.'),

        # Keep only if the model has the behaviour Twinnable
        'translate error parent not available in context' => __('We’re afraid this item cannot be added to {{context}} because its <a>parent</a> is not available in this context yet.'),
        'translate error parent not available in language' => __('We’re afraid this item cannot be translated into {{language}} because its <a>parent</a> is not available in this language yet.'),
        'translate error impossible context' => __('This item cannot be added in {{context}}. (How come you get this error message? You’ve hacked your way into here, haven’t you?)'),

        # Keep only if the model has the behaviour Tree
        'deleting with 1 child' => __('This item has <strong>1 sub-item</strong>.'),
        'deleting with N children' => __('This item has <strong>{{children_count}} sub-items</strong>.'),
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
