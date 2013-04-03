<body> 
    <div class="centered loginBox">
        <p class="title">PLEASE ENTER DE PASSCODE<BR>FROM YOUR WELCOME EMAIL</p><br>
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
    <div id="background" class=""><img src="<?php echo URL.'public/images/loginBackground.jpg';?>" alt="Bg"></div>
    <script>
        $(document).ready(function() {
            $("#background").ezBgResize({
                img: "<?php echo URL . 'public/images/loginBackground.jpg'; ?>", // Relative path example.  You could also use an absolute url (http://...).
                opacity: 1, // Opacity. 1 = 100%.  This is optional.
                center: true // Boolean (true or false). This is optional. Default is true.
            });
        });
    </script>
</body>
</html>