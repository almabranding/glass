<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Glass</title>
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
    
    Cufon.set('fontSize', '12px').set('color', '#2d2427').set('letterSpacing', '0.3em').replace('.menuTitle', { fontFamily: 'Akkurat'});
    Cufon.set('fontSize', '11px').set('color', '#807f83').set('letterSpacing', '0.3em').replace('p,span,label,.menuOpt', { fontFamily: 'Akkurat'});
    Cufon.set('fontSize', '13px').set('color','#2f292b').set('letterSpacing', '1em').replace('.title,', { fontFamily: 'Akkurat'});
    Cufon.set('fontSize', '14px').set('color','#2f292b').set('letterSpacing', '1em').replace('h1', { fontFamily: 'Akkurat'});
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
    
    