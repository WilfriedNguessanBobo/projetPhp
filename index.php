<?php
$source = new DOMDocument();
$source->load('source.xml');
$website = $source->getElementsByTagName('website');
$pages = $source->getElementsByTagName('page');
$title = $source->getElementsByTagName('title');
$content = $source->getElementsByTagName('content');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
   $page = 0; 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <title><?php echo $title->item($page)->nodeValue; ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php
                        foreach ($pages as $id => $pages_cont) {
                                $attrib = $pages_cont->getAttribute('id') - 1;
                                $menu = $pages_cont->getElementsByTagName('menu');
                                ?>
                                <li class="active"><a href="index.php?<?php echo 'page=' . $attrib; ?>"><?= $menu->item(0)->nodeValue; ?></a>

                                </li>

                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
       <p><?php echo $content->item($page)->nodeValue; ?></p>
    </body>
</html>