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
                <form action="form/register" method="post" id="contactform">
                    <fieldset>
                        <label>Name</label>
                        <input type='text' value='' name="name">
                    </fieldset> 
                    <fieldset>
                        <label>Last name</label>
                        <input type='text' value='' name="last">
                    </fieldset>   
                    <fieldset>
                        <label>Email address</label>
                        <input type='text' value='' name="email">
                    </fieldset>   
                    <fieldset>
                        <label>Subject</label>
                        <input type='text' value='' name="subject">
                    </fieldset>   
                    <fieldset>
                        <label>Message</label>
                        <textarea value='' name="message"></textarea>
                    </fieldset>
                    <fieldset><input type="submit" value="SUBMIT"></fieldset>
                </form>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div id="body">
        
        <div class="labelInfo"></div><div onclick="location.href='login'" class="labelNext"></div>
    <div id="body-background" class=""><img src="<?php echo URL.'public/images/testBG.jpg';?>" alt="Bg">
    <div class="logoBox" style="margin-top: 40px;">
        <img src="<?php echo URL;?>public/images/logoWhite.png" alt="Glass">
    </div>  
    
    </div>
    </div>
<script>
$(document).ready(function() {
    var h;
     var frame=250;
    $("#body-background").ezBgResize({
        img     : "<?php echo URL.'public/images/testBG.jpg';?>"
    });
    /*$('.labelInfo').on('click',function(){
        var frame=250;
        var bg=$( '#body-background' );
        var img=$( '#body-background > img' );
        var x=new Image;
        x.src=img.attr('src');
        var frameW=frame;
        var frameH=(x.height*frame)/x.width; 
        if(bg.hasClass('backgroundMove')){ 
            bg.css('left',frame).removeClass("backgroundMove").animate({
                left:'0px',
                width:'+='+frameW+'px'
            },500,function(){
            });
            img.animate({
                width:'+='+frameW+'px',
                height:'+='+frameH+'px',
            },500);
        }else{
            bg.animate({
                left:frame+'px',
                width:'-='+frameW+'px'
            },500,function(){
                bg.addClass("backgroundMove");
            });
            img.animate({
                width:'-='+frameW+'px',
                height:'-='+frameH+'px',
            },500);
        }

    });*/
    $('.labelInfo').on('mouseover',function(){
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:'85%',
                    left:'15%'
                },
                {
                    duration:500,
                    step: function(now, fx) {    
                        $(this).change();    
                    }
                });
            });
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                width:'15%'
            },500);
        });
        
    });
    $('#body-background').on('mouseover',function(){
        $('.accessFrame').queue(function () {
            $(this).clearQueue();
            $(this).animate({
                width:'0%'
            },500);
        });
        $('#body').queue(function () {
            $(this).clearQueue();
            $(this).animate(
                {
                    width:'100%',
                    left: 0
                },
                {
                    duration:500,
                    step: function(now, fx) {    
                        $(this).change();    
                    }
                }
                );
        });
        
    });
    $('.startForm').on('click',function(){
        $('.frameContent').toggle();
        $('.frameForm').toggle();
    });
});

</script>
</body>
</html>