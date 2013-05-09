<style>
    @media only screen 
    and (min-device-width : 320px) 
    and (max-device-width : 480px) {
        .imgBG{
            width: 100% !important;
            height: 100% !important;
        }
    }
</style>
<body style="overflow: hidden;">
    <div class="accessFrame">
        <?php echo $this->page['content'];?>
    </div>
    <div id="body">
        <div id='info' class="labels <?php echo $this->label;?>"></div>
        <div class="labelNext labels"></div>
        <div class="preload"></div>
        <div id="body-background" class="">
            <img class="imgBG" src="" alt="Bg">
            <div class="logoBox" style="margin-top: 40px;">
                <img src="<?php echo URL;?>public/images/logoWhite.png" alt="Glass">
            </div>  
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script>
        <?php
        /*
         * OBTENEMOS TODA LA GALERYA Y LA CONVERTIMOS EN UN ARRAY DE JS
         */
        foreach ($this->gallery as $value) { 
            $php_array[]=URL.UPLOAD.$value['page'].'/'.$value['img'];
        }
        $js_array = json_encode($php_array);
        $js_array=str_replace('\\/', '/', $js_array);
        echo "var BGImageArray = ". $js_array . ";\n";
        ?>  
    </script>
    <?php
    if (isset($this->js)) 
        foreach ($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
    ?>
    <script src="<?php echo URL;?>public/js/cufon-yui.js"></script>
    <script src="<?php echo URL;?>public/js/Akkurat_400.font.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
</body>
</html>