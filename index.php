<?= require_once './protected/config/config.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?=CHARSET?>">
        <meta name="<?=NAME?>" content="<?=CONTENT?>">
        <title><?=Title?></title>
        
        <?php if(!empty(CSS)){ 
           $css_Item_Count = count(CSS); 
           
           for($i = 0;$i < $css_Item_Count;$i++){
              echo '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
           }
        }?>
        
    </head>
    <body>
        <?php include VIEWS_DIR.'header.php'; ?> 
        <?php require PROTECTED_DIR.'menu.php';?>
        <?php require PROTECTED_DIR.'content.php';?>
        <?php include VIEWS_DIR.'footer.php';?> 
    </body>
</html>
