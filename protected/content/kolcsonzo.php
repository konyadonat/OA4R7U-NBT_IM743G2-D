<?php

$public_functions = ['lista','megtekint','torol','szerkeszt','hozzaad'];
require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT * FROM kolcsonzo';
    $result = select($query);
    require_once VIEWS_DIR.'kolcsonzo/lista.php';
}
