<?php

namespace youwriter;


class App
{
    public static $app;

    public function  __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
       // var_dump($query);
        session_start();
        self::$app = Registry::instance();
        $this->getparsms();
        new ErrorHandler();
        Router::dispatch($query);

    }

    protected function getparsms ()
    {
        $params = require_once CONF . '/params.php';
        if(!empty($params))
        {
            foreach ($params as $k => $v)
            {
                self::$app->setProperty($k,$v);
            }
        }
    }

}