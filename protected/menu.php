<?php

$menu = [
            [
                'href' => BASE_URL.'index.php',
                'title' => 'Kezdőlap'
            ],
    
            [
                'href' => BASE_URL.'index.php?E=irok&M=lista',
                'title' => 'Íróink',
                'extra' => []
                
                
                
            ]
    
];

require_once CORE_DIR.'views.php';
print_menu($menu);
?>
</br>
