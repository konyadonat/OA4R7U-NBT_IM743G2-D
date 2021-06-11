<?php

$menu = [
            [
                'href' => BASE_URL.'index.php',
                'title' => 'Kezdőlap'
            ],
    
            [
                'href' => BASE_URL.'index.php?E=irok&M=lista',
                'title' => 'Íróink',
            ],
            [
                'href' => BASE_URL.'index.php?E=kiado&M=lista',
                'title' => 'Kiadók'
            ],
            [
                'href' => BASE_URL.'index.php?E=konyvtar&M=lista',
                'title' => 'Könyvtárak'
            ],
            [
                'href' => BASE_URL.'index.php?E=konyv&M=lista',
                'title' => 'Könyvek'
            ],
            [
                'href' => BASE_URL.'index.php?E=kolcsonzok&M=lista',
                'title' => 'Kölcsönzőink'
            ]
    
];

require_once CORE_DIR.'views.php';
print_menu($menu);
?>
</br>
