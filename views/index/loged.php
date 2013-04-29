<style>
    #wrapper{
        padding-bottom: 0px;
    }
    #container {
        top: 162px;
        width: 100%;
        max-width: 100%;
    }
    footer {
        z-index: 1;
    }
</style>
<div id="imgFull">
    <div class="preload preloadW"></div>
    <img class="imgBG" id="imgBG" src="/public/images/bg4.jpg" alt="Bg"> 
</div>
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