<?php
$public_functions = ['lista','megtekint','torol','szerkeszt','hozzaad','letolt'];
require_once CORE_DIR.'database_manager.php';

function letolt(){
    
    $query = 'SELECT * from kiado';
    $result = select($query);
    
    $file = fopen('kiado.csv', 'w');
    
    foreach ($result as $line) {
        fputcsv($file, $line);
    }
    fclose($file);
    
    require_once VIEWS_DIR.'kiado/lista.php';
}

function lista(){
    $query = 'SELECT * FROM kiado';
    $result = select($query);
    require_once VIEWS_DIR.'kiado/lista.php';
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
    
    $result = select('SELECT * FROM kiado WHERE id =:id',TRUE, ['id' => $id]);
    
    if($result === false){
        die('Nincs ilyen rekord!');
    }
    
    require_once VIEWS_DIR.'kiado/reszletek.php';
}

function torol (){
    $id = get_p();
    $succes = delete('DELETE FROM kiado WHERE id =:id',['id' =>$id]);
    
    if($succes ===true){
        header('Location:'.BASE_URL.'?E=kiado');
    }
    else{
        die('Sikertelen törlés!');
    }
}

function szerkeszt (){
    
}
function hozzaad(){
    
}
