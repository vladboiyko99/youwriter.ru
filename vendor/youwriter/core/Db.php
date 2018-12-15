<?php
/**
 * Created by PhpStorm.
 * User: vaif
 * Date: 11.12.2018
 * Time: 23:06
 */

namespace youwriter;


class Db
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if(!\R::testConnection())
        {
            throw new \Exception("Нет соединения с БД", 500);
        }
        \R::freeze(true);
        if (DEBUG)
        {
            \R::debug(true, 1);
        }
    }


}