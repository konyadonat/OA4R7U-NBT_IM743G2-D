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
    $query = 'SELECT * from kiado';
    $result = mysqli_query($connection,$query);
    
    $file = fopen('kiado.csv', 'w');
    
    while($sor = mysqli_fetch_assoc($result))
    {
        fputcsv($file, $sor);
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
    if(!filter_has_var(INPUT_POST,'submit') || 
            filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT)!=1){
        require VIEWS_DIR.'kiado/szerkeszt.php';
    }
    else
    {
        $id = get_p();
        $nev = filter_input(INPUT_POST, 'nev',FILTER_SANITIZE_STRING);

        $succes = update('UPDATE kiado SET nev=:nev WHERE id=:id',['id'=>$id,'nev'=>$nev]);
        if($succes ===true){
            header('Location:'.BASE_URL.'?E=kiado');
        }
        else{
            die('Sikertelen szerkesztés!');
        }
    }          
}
function hozzaad(){
    if(!filter_has_var(INPUT_POST,'submit') || 
            filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT)!=1){
                require VIEWS_DIR.'kiado/uj.php';
    }
    else
    {
        
        $nev = filter_input(INPUT_POST,'nev',FILTER_SANITIZE_STRING);
        $success= insert("INSERT INTO kiado(nev) VALUES"
                . " ('$nev')");
        header('Location:'.BASE_URL.'?E=kiado');
    }
}
