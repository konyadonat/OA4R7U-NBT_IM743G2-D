<?php

$public_functions = ['lista','megtekint','torol','szerkeszt','hozzaad','letolt'];
require_once CORE_DIR.'database_manager.php';


function letolt(){
    $host = "localhost";
    $username = "OA4R7U-NBT_IM743G2-D";
    $password = "Y5Jnyk3pGvN4Wrpj";
    $dbname = "OA4R7U-NBT_IM743G2-D";
    
    $connection = mysqli_connect($host,$username,$password,$dbname);
    if(!$connection){
        die('Kapcsolódási hiba!');
    }  
    $query = 'SELECT * from kolcsonzo';
    $result = mysqli_query($connection,$query);
    
    $file = fopen('kolcsonzo.csv', 'w');
    
    while($sor = mysqli_fetch_assoc($result))
    {
        fputcsv($file, $sor);
    }

    fclose($file);
    
    require_once VIEWS_DIR.'kolcsonzo/lista.php';
}

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

function torol (){
    $id = get_p();
    $succes = delete('DELETE FROM kolcsonzo WHERE id =:id',['id' =>$id]);
    
    if($succes ===true){
        header('Location:'.BASE_URL.'?E=kolcsonzo');
    }
    else{
        die('Sikertelen törlés!');
    }
}

function szerkeszt (){
    
}
function hozzaad(){
    
}
