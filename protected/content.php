<?php
    
    if(!filter_has_var(INPUT_GET,'E')){
        $egyseg = START_CONTENT;
    }
    else{
        $egyseg= filter_input(INPUT_GET,'E',FILTER_SANITIZE_STRING);
    }
    
    $egysegEleres = CONTENT_DIR.$egyseg.'.php';
    
    if(!file_exists($egysegEleres)){
        header('Location: '.BASE_URL);
    }
    
    require_once $egysegEleres;
    $operation= 'lista';
    if(filter_has_var(INPUT_GET,'M')){
        $local_operation = filter_input(INPUT_GET, 'M', FILTER_SANITIZE_STRING);
    
        if($local_operation == false){
            header ('Location: '.BASE_URL);
        }
        
    
        if(!function_exists($local_operation) || !in_array($local_operation, $public_functions)){
            header ('Location: '.BASE_URL);
        }
    
        $operation = $local_operation;
    }
    $operation();
