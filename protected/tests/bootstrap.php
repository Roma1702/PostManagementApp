<?php

// change the following paths if necessary
$yiit='C:\xampp\yii-1.1.28.23448d\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
