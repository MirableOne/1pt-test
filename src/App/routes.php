<?php

//todo: create from some factory - lalala
$router = new \Kernel\Router();

//laravel way
$router->get('/', 'QuestionController:get', ['lang']);
$router->post('/', 'QuestionController:post');