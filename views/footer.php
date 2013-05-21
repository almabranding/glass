<div class="clr"></div></div><div class="clr"></div>
<footer>
    <div class="mapSubBar clr">
    <div class="barLogo"><a href='http://www.terragroup.com' target='_blank'><img alt="Terra Group" src="/public/images/terraLogo.png" /></a></div>
    <div class="barText"><a href='http://www.terragroup.com/about' target='_blank'>&copy;TERRA GROUP 2013</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='<?php echo URL;?>/page/view/disclaimer'>DISCLAIMER</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='<?php echo URL;?>page/view/contact'>CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a id="lemon" href='http://www.lemonyellow.com/' target="_blank" onmouseover="changeFoot('LEMON YELLOW');" onmouseout="changeFoot('SITE CREDITS');">SITE CREDITS</a></div>
    </div>
</footer>
</div>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
    <script src="<?php echo URL;?>public/js/mobile.js"></script>
    <script src="<?php echo URL;?>public/js/cufon-yui.js"></script>
    <script src="<?php echo URL;?>public/js/Akkurat_400.font.js"></script>
<?php
    if (isset($this->js)) 
        foreach ($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
?>
</body>
</html>