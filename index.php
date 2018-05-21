<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('./config/config.php');
require_once(PATH_CONTROLLER . 'DefaultController.php');

return DefaultController::getInstance()->indexAction();
