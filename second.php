
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php 
$source = new DOMDocument();
$source ->load('source.xml');
$pages = $source->getElementsByTagName('page');
$page= 1;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP PHP</title>
    </head>
    <body>
        <?php 
        foreach ($pages as $id =>$pages_cont) {             
            $attrib = $pages_cont->getAttribute('id');
            $content= $pages_cont->getElementsByTagName('content');
            $title= $pages_cont->getElementsByTagName('title');
            $menu= $pages_cont->getElementsByTagName('menu');
            for ($index = 0; $index < count($attrib); $index++) {        
             
        ?>
           
        <a href="index.php?<?php echo 'page='.$attrib; ?>"><?php echo $title->item($index)->nodeValue; ?></a>
        
        <?php 
            }
        }
                   
        ?>
         
         
         
    </body>
</html>