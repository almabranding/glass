<body>
    <div id="wrapper">
        <?php Session::init(); ?>
        <header>
            <div class="fitScreenBar"><div class="fitScreen"><img src="<?php echo URL; ?>public/images/fitScreen.png">Fit to screen</div></div>
            <div class="mobileHeader">
                <a href="<?php echo URL; ?>"><div class="logo"><div>
                    
                    <img src="<?php echo URL.'public/images/mobileLogo.jpg';?>">
                        </div> 
                </div></a>
                <nav id="menu">
                    <?php echo Menu::getMovil($this->url); ?>
                </nav>
                <div class="clr"></div>
            </div>
            <div class="header">
                <div class="logo">
                    <a href="<?php echo URL; ?>">
                        <img id="logo_img" src="/public/images/logo.png"><br/><p class='menuTitlespan'>MIAMI BEACH</p>
                    </a>
                </div>
                <nav id="menu">
                    <?php echo Menu::getMenu($this->url); ?>
                </nav>
                <div class="clr"></div>
            </div>
        </header>
        <div id="white_full" class="hide" onclick="$('.hide').css('display', 'none').html('')"></div>
        <div id="white_box" class="hide"></div>
        <div id="container">

