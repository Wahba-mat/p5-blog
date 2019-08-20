<?php

require 'controller/Router.php';
session_start();
$router = new Router();
$router->routerRequest();
