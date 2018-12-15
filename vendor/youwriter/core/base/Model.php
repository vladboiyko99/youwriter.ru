<?php
/**
 * Created by PhpStorm.
 * User: vaif
 * Date: 11.12.2018
 * Time: 22:53
 */

namespace youwriter\base;
use youwriter\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public  $rules = [];

    public function  __construct()
    {
        Db::instance();
    }


}