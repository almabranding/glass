<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Imagenation</title>
    <meta charset="UTF-8"> 
    <meta property="og:site_name" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    
    <script src="http://www.google.com/jsapi"></script>
    <script>google.load("jquery", "1");</script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script src="<?php echo URL;?>public/js/jquery.ez-bg-resize.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
    <script src="<?php echo URL;?>public/js/jquery.masonry.js"></script>
    <script src="<?php echo URL;?>public/js/cufon-yui.js"></script>
    <script src="<?php echo URL;?>public/js/Akkurat_400.font.js"></script>
    <script type="text/javascript">
    Cufon.set('fontSize', '12px').replace('p,span', { fontFamily: 'Akkurat'});
    Cufon.set('fontSize', '12px').set('letterSpacing', '0.5em').replace('.accessFrame p,.accessFrame span,.accessFrame label', { fontFamily: 'Akkurat'});
    </script>
    
    <?php
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo "$js";
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
    
    