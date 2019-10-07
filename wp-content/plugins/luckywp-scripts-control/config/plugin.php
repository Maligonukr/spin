<?php
return [
    'textDomain' => 'lwpsc',
    'bootstrap' => [
        'admin',
        'front',
    ],
    'pluginsLoadedBootstrap' => [
        'settings',
    ],
    'components' => [
        'admin' => \luckywp\scriptsControl\admin\Admin::className(),
        'front' => \luckywp\scriptsControl\front\Front::className(),
        'items' => \luckywp\scriptsControl\plugin\repositories\ItemRepository::className(),
        'options' => \luckywp\scriptsControl\core\wp\Options::className(),
        'rate' => \luckywp\scriptsControl\admin\Rate::className(),
        'request' => \luckywp\scriptsControl\core\base\Request::className(),
        'settings' => [
            'class' => \luckywp\scriptsControl\plugin\Settings::className(),
            'initGroupsConfigFile' => __DIR__ . '/settings.php',
        ],
        'view' => \luckywp\scriptsControl\core\base\View::className(),
    ],
];
