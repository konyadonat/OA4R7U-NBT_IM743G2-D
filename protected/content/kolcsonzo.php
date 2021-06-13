<?php

$public_functions = ['lista','megtekint','torol','szerkeszt','hozzaad'];
require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT * FROM kolcsonzo';
    $result = select($query);
    require_once VIEWS_DIR.'kolcsonzo/lista.php';
}
function get_p(){
    if(!filter_has_var(INPUT_GET, 'P')){
        die('Helytelen paraméter!');
    }
    $id = filter_input(INPUT_GET, 'P', FILTER_VALIDATE_INT);
    if($id === false){
        die('Helytelen paraméter!');
    }
    return $id;
}

function megtekint(){
    $id = get_p();
    
    $result = select('SELECT * FROM kolcsonzo WHERE id =:id',TRUE, ['id' => $id]);
    
    if($result === false){
        die('Nincs ilyen rekord!');
    }
    
    require_once VIEWS_DIR.'kolcsonzo/reszletek.php';
}
