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
                    ],
                    [
                        'href' => BASE_URL.'index.php?E=irok&M=uj',
                        'title' => 'Író felvétele',
                        'extra' => ['target' => '_blank']
                    ]
                ]
                
            ]
    
];

require_once CORE_DIR.'views.php';
print_menu($menu);
?>
</br>
