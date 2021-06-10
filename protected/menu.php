<?php

$menu = [
            [
               'href' => '#',
                'title' => 'Íróink',
                'extra' => [],
                'childs' => 
                [
                    [
                        'href' => BASE_URL.'index.php?E=irok&M=lista',
                        'title' => 'Íróink listázása',
                        'extra' => []
                    ]  
                ]
                
            ]
    
];

require_once CORE_DIR.'views.php';
print_menu($menu);
?>
</br>
