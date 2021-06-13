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
    $query = 'SELECT * from konyvtar';
    $result = mysqli_query($connection,$query);
    
    $file = fopen('konyvtar.csv', 'w');
    
    while($sor = mysqli_fetch_assoc($result))
    {
        fputcsv($file, $sor);
    }

    fclose($file);
    
    require_once VIEWS_DIR.'konyvtar/lista.php';
}

function lista(){
    $query = 'SELECT * FROM konyvtar';
    $result = select($query);
    require_once VIEWS_DIR.'konyvtar/lista.php';
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
    
    $result = select('SELECT * from konyvtar WHERE id =:id',TRUE, ['id' => $id]);
    
    if($result === false){
        die('Nincs ilyen rekord!');
    }
    
    require_once VIEWS_DIR.'konyvtar/reszletek.php';
}

function torol (){
    $id = get_p();
    $succes = delete('DELETE FROM konyvtar WHERE id =:id',['id' =>$id]);
    
    if($succes ===true){
        header('Location:'.BASE_URL.'?E=konyvtar');
    }
    else{
        die('Sikertelen törlés!');
    }
}

function szerkeszt (){
    
}
function hozzaad(){
    if(!filter_has_var(INPUT_POST,'submit') || 
            filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT)!=1){
                require VIEWS_DIR.'konyvtar/uj.php';
    }
    else
    {
        
        $nev = filter_input(INPUT_POST,'nev',FILTER_SANITIZE_STRING);
        $iranyitoszam = filter_input(INPUT_POST, 'iranyitoszam',FILTER_SANITIZE_NUMBER_INT);
        $cim = filter_input(INPUT_POST, 'cim',FILTER_SANITIZE_STRING);
        $success= insert("INSERT INTO konyvtar(nev,iranyitoszam,cim) VALUES"
                . " ('$nev','$iranyitoszam','$cim')");
        header('Location:'.BASE_URL.'?E=konyvtar');
    }
}

