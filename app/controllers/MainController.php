<?php
/**
 * Created by PhpStorm.
 * User: vaif
 * Date: 08.12.2018
 * Time: 17:52
 */

namespace app\controllers;

use youwriter\App;

class MainController extends AppController
{

    public function indexAction()
    {
        //echo __METHOD__;
        $this->setMeta(App::$app->getProperty('name'), 'Описания', 'ключи');
        $this->set(['name' => 'andrei','age'=>30]);
    }
}