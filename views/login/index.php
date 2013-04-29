<body> 
    <div class="centered loginBox">
        <p class="title">PLEASE ENTER THE PASSCODE<BR>FROM YOUR WELCOME EMAIL</p><br>
        <form action="login/run" method="post" id="contactform">
            <fieldset>
                <label>E-Mail Address</label>
                <input type='text' value='' name="email">
            </fieldset> 
            <fieldset>
                <label>Passcode</label>
                <input type='password' value='' name="passcode">
            </fieldset>   
            <br>
            <fieldset><input type="submit" value="SUBMIT"></fieldset>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
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