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
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script src="<?php echo URL; ?>public/js/custom.js"></script>
    <script src="<?php echo URL; ?>public/js/jquery.masonry.js"></script>

    <script src="<?php echo URL; ?>public/js/HTML5script.js"></script>
    <script src="<?php echo URL; ?>public/js/file-upload.js"></script>
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
<body>
<div id="wrapper">
<?php Session::init(); ?>
    <header>
        <div class="fitScreenBar"><div class="fitScreen"><img src="<?php echo URL;?>public/images/fitScreen.png">Fit to screen</div></div>
    <div class="header">
        <div class="logo">
            <a href="index.php">
                <div id="logo_img"></div>
            </a>
        </div>
    <nav id="menu">
        
        <?php 
        
        echo $this->getMenu;
        ?>
        
    </nav>
    <div class="clr"></div>
    </div>
</header>
<div id="white_full" class="hide" onclick="$('.hide').css('display','none').html('')"></div>
<div id="white_box" class="hide"></div>
<div id="container">
    
    