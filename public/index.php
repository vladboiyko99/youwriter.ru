<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/function.php';

new \youwriter\App();

throw new Exception('Страница не найдена', 404);
