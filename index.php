<?php
//Require Router php rile
require_once 'router.php';

//Get the path
$path = isset($_GET['path']) ? $_GET['path'] : '';
//get id
$id = isset($_GET['id']) ? intval($_GET['id']) : null; 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

Router::route($path, $id, $page);
