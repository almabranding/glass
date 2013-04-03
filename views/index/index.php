<body>
    
    <div class="accessFrame">
        <div class="frameContent">
            <p class="title" style="color:#000;">GLASS</p>
            <p>120 OCEAN DRIVE<br>MIAMI BEACH</p>
            <p>18 FLOORS,<br>10 RESIDENCES,<br>360 VIEWS</p>
            <p>STARTING AT 7 MILLION</p>
            <p>2,500 SQ FT ON FLOORS 6 & 7<br>3,000 SQ FT ON FLOORS 8 - 15<br>9,000SQ FT ON SINGLE PH<br>(OCCUPYING FLOORS 16 - 18)</p>
            <br>
            <br><p class="link startForm"> ACCESS THE WEBSITE</p>
        </div>
        <div class="frameForm">
            <p class="title" style="">PLEASE COMPLETE<br>THE FORM BELOW TO<br>ACCESS THE GLASS<br> WEBSITE</p>
            <p>GLASS<br>120 Ocean Drive<br>Miami Beach, Florida 33139<br>glass120ocean.com</p>
            <p>Representation:<br>Eloy Carmenale<br>ONE Sotheby's International Realty<br>119 Washington Avenue, Suite 600<br>Miami Beach, FL 33139<br>305.282.7179</p>
            <p>Owned and developed by Terra Group.<br>Broker participation welcome.</p>
            <div>
                <form>
                    <div>
                        <label>Name</label>
                        <input type='text' value='' name="name">
                    </div> 
                    <div>
                        <label>Last name</label>
                        <input type='text' value='' name="name">
                    </div>   
                    <div>
                        <label>Email address</label>
                        <input type='text' value='' name="name">
                    </div>   
                    <div>
                        <label>Subject</label>
                        <input type='text' value='' name="name">
                    </div>   
                    <div>
                        <label>Message</label>
                        <textarea value='' name="name"></textarea>
                    </div>
                    <div><input type="submit" value="SUBMIT"></div>
                </form>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div id="body-background" class=""><img src="<?php echo URL.'public/images/homeBackground.jpg';?>" alt="Bg">
    <div class="logoBox" style="margin-top: 40px;">
        <img src="<?php echo URL;?>public/images/logoWhite.png" alt="Glass">
    </div>
    
    <div class="labelInfo"></div><div class="labelNext"></div>
    </div>
<script>
$(document).ready(function() {
    $("#body-background").ezBgResize({
        img     : "<?php echo URL.'public/images/homeBackground.jpg';?>", // Relative path example.  You could also use an absolute url (http://...).
        opacity : 1, // Opacity. 1 = 100%.  This is optional.
        center  : true // Boolean (true or false). This is optional. Default is true.
    });
    $('.labelInfo').on('click',function(){
        var frame=250;
        var bg=$( '#body-background' );
        var img=$( '#body-background > img' );
        var x=new Image;
        x.src=img.attr('src');
        var frameW=frame;
        var frameH=(x.height*frame)/x.width;
        if(bg.hasClass('backgroundMove')){  
            bg.css('left',frame+'px').removeClass("backgroundMove").animate({left:'0px'},1000);
            img.animate({/*width:'+='+frameW+'px',height:'+='+frameH+'px'*/},1000);
        }else{
            bg.animate({left:frame+'px'},1000,function(){
                bg.addClass("backgroundMove");
            });
            img.animate({/*width:'-='+frameW+'px',height:'-='+frameH+'px'*/},1000);
        }

    });
    $('.startForm').on('click',function(){
        $('.frameContent').toggle();
        $('.frameForm').toggle();
    });
});

</script>
</body>
</html>