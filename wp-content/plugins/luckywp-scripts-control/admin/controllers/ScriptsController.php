<?php

namespace luckywp\scriptsControl\admin\controllers;

use luckywp\scriptsControl\core\admin\AdminController;
use luckywp\scriptsControl\core\Core;

class ScriptsController extends AdminController
{

    public function actionIndex()
    {
        $this->render('index', [
            'itemsByArea' => Core::$plugin->items->findAllGroupedByArea(),
        ]);
    }

    public function actionSettings()
    {
        $this->render('settings');
    }
}
