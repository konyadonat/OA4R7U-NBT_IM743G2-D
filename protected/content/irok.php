<?php

$public_functions = ['lista','megtekint','torol','szerkeszt','hozzaad'];
require_once CORE_DIR.'database_manager.php';

function lista(){
    $query = 'SELECT * FROM irok';
    $result = select($query);
    require_once VIEWS_DIR.'irok/lista.php';
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
    
    $result = select('SELECT * FROM irok WHERE id =:id',TRUE, ['id' => $id]);
    
    if($result === false){
        die('Nincs ilyen rekord!');
    }
    
    require_once VIEWS_DIR.'irok/reszletek.php';
}

function torol (){
    $id = get_p();
    $succes = delete('DELETE FROM irok WHERE id =:id',['id' =>$id]);
    
    if($succes ===true){
        header('Location:'.BASE_URL.'?E=irok');
    }
    else{
        die('Sikertelen törlés!');
    }
}

function szerkeszt (){
   
    
    if(!filter_has_var(INPUT_POST,'submit') || 
            filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT)!=1){
        require VIEWS_DIR.'irok/szerkeszt.php';
    }
    else
    {
        $id = get_p();
        $nev = filter_input(INPUT_POST, 'nev',FILTER_SANITIZE_STRING);
        $konyvekszama = filter_input(INPUT_POST,'konyvekszama',FILTER_SANITIZE_NUMBER_INT);

        $succes = update('UPDATE irok SET nev=:nev, konyvekszama =:konyvekszama WHERE id=:id',['id'=>$id,'nev'=>$nev,'konyvekszama'=>$konyvekszama]);
        if($succes ===true){
            header('Location:'.BASE_URL.'?E=irok');
        }
        else{
            die('Sikertelen szerkesztés!');
        }
    }          
    
    
}
function hozzaad(){
    if(!filter_has_var(INPUT_POST,'submit') || 
            filter_input(INPUT_POST, 'submit', FILTER_VALIDATE_INT)!=1){
                require VIEWS_DIR.'irok/uj.php';
    }
    else{
        echo 'feldolgozás';
        
        $nev = filter_input(INPUT_POST, 'nev',FILTER_SANITIZE_STRING);
        $ev = filter_input(INPUT_POST,'szuletesiev',FILTER_SANITIZE_NUMBER_INT);
        $konyvekszama = filter_input(INPUT_POST,'konyvekszama',FILTER_SANITIZE_NUMBER_INT);

        
        echo $nev,$ev,$konyvekszama;
        $success= insert('INSERT INTO irok(nev,szuletesiev,konyvekszama)'
                . ' VALUES(:nev,:szuletesiev,:konyvekszama)',
                ['nev' => $nev,'szuletesiev' => $ev,'konyvekszama' => $konyvekszama]);
        //$query ='INSERT INTO irok(nev,ev,konyvekszama)'
        //        . 'VALUES(:nev,:ev,:konyvekszama)';       
        
}
}