<?php
return array(
    'name'    => 'Front User',
    'version' => '0.1',
    'provider' => array(
        'name' => 'Unknown', //@todo: to be defined
    ),
    'namespace' => "FrontUser",
    'permission' => array(
    ),
    'icons' => array(
        64 => 'static/apps/frontuser/img/64/icon.png',
        32 => 'static/apps/frontuser/img/32/icon.png',
        16 => 'static/apps/frontuser/img/16/icon.png',
    ),
    'launchers' => array(
        'FrontUser::Frontuser' => array(
            'name'    => 'Front User', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/frontuser/frontuser/appdesk', // url to load
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

        'frontuser_enhancer' => array(
            'title' => 'Front user tool',
            'desc'  => '',
            'enhancer' => 'frontuser/front/main',
        ),

        'frontuser_enhancer_quickRegTool' => array(
            'title' => 'Front user - Quick registration tool',
            'desc'  => '',
            'enhancer' => 'frontuser/front/quickReg',
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
                    'url' => 'admin/front_user/post/insert_update/?context={{context}}&title={{urlencode:'.\Nos\DataCatcher::TYPE_TITLE.'}}&summary={{urlencode:'.\Nos\DataCatcher::TYPE_TEXT.'}}&thumbnail={{urlencode:'.\Nos\DataCatcher::TYPE_IMAGE.'}}',
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
