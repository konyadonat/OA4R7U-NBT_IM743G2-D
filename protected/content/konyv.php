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
    $query = 'SELECT * from konyv';
    $result = mysqli_query($connection,$query);
    
    $file = fopen('konyv.csv', 'w');
    
    while($sor = mysqli_fetch_assoc($result))
    {
        fputcsv($file, $sor);
    }

    fclose($file);
    
    require_once VIEWS_DIR.'konyv/lista.php';
}

function lista(){
    $query = 'SELECT * FROM konyv';
    $result = select($query);
    require_once VIEWS_DIR.'konyv/lista.php';
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
    
    $result = select('SELECT * FROM konyv WHERE id =:id',TRUE, ['id' => $id]);
    
    if($result === false){
        die('Nincs ilyen rekord!');
    }
    
    require_once VIEWS_DIR.'konyv/reszletek.php';
}

function torol (){
    $id = get_p();
    $succes = delete('DELETE FROM konyv WHERE id =:id',['id' =>$id]);
    
    if($succes ===true){
        header('Location:'.BASE_URL.'?E=konyv');
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
                require VIEWS_DIR.'konyv/uj.php';
    }
    else
    {
        $kiadoid=filter_input(INPUT_POST,'kiadoid', FILTER_SANITIZE_NUMBER_INT);
        $iroid=filter_input(INPUT_POST,'iroid', FILTER_SANITIZE_NUMBER_INT);
        $konyvtarid = filter_input(INPUT_POST,'konyvtarid', FILTER_SANITIZE_NUMBER_INT);
        $cim = filter_input(INPUT_POST, 'cim',FILTER_SANITIZE_STRING);
        $tema = filter_input(INPUT_POST,'tema',FILTER_SANITIZE_STRING);
        $kiadaseve = filter_input(INPUT_POST, 'kiadaseve',FILTER_SANITIZE_NUMBER_INT);
        
        $success= insert("INSERT INTO konyv(kiadoid,iroid,konyvtarid,cim,tema,kiadaseve) VALUES"
                . " ('$kiadoid','$iroid','$konyvtarid','$cim','$tema','$kiadaseve')");
        header('Location:'.BASE_URL.'?E=konyv');
    }
}


