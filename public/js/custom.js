var mapZoom = 0;
var BGnum = 0;
var frame = 240;
var URL='/test/';
var std = ({
        fontFamily: 'Akkurat',
        color: '#7f7e82',
        letterSpacing: '0.3em',
        fontSize: '11px',
    });
    var h2 = ({
        fontFamily: 'Akkurat',
        color: '#7f7e82',
        letterSpacing: '0.3em',
        fontSize: '18px',
    });
    var h3 = ({
        fontFamily: 'Akkurat',
        color: '#2d2427',
        letterSpacing: '0.3em',
        fontSize: '13px',
    });
    var link = ({
        fontFamily: 'Akkurat',
        color: '#807f83',
        letterSpacing: '0.3em',
        fontSize: '11px',
        hover: {
            color: '#2d2427',
            fontSize: '11px'
        }
    });
    var menuLink = ({
        fontFamily: 'Akkurat',
        color: '#7f7e82',
        letterSpacing: '0.3em',
        fontSize: '11px',
        hover: {
            color: '#2d2427',
            fontSize: '11px'
        }
    });
    var menu = ({
        fontFamily: 'Akkurat',
        color: '#2d2427',
        letterSpacing: '0.3em',
        fontSize: '13px',
    });
    var frameContent = ({
        fontFamily: 'Akkurat_bold',
        color: '#2d2427',
        letterSpacing: '0.8em',
        fontSize: '13px',
    });
    var mapLinks = ({
        fontFamily: 'Akkurat',
        color: '#2facd5',
        letterSpacing: '0.3em',
        fontSize: '11px',
    });
    var mapLinksSel = ({
        fontFamily: 'Akkurat',
        color: '#7f7e82',
        letterSpacing: '0.3em',
        fontSize: '11px',
    });  
$(document).ready(function() {
    if(!checkCookie('fitScreen')) setCookie('fitScreen','y');
    $('.fitScreen').on("click", function() {
        if(getCookie('fitScreen')==='y') setCookie('fitScreen','n');
        else setCookie('fitScreen','y');


    });
    $('header').on('mouseenter', function() {
        $('.menuOpt').queue(function() {
            $(this).clearQueue();
            $(this).not('.selected').animate({
                opacity: 1,
                height: '17px',
                margin: '5px auto'
            }, 500);
        });
    }).on('mouseleave', function() {
        $('.menuOpt').queue(function() {
            $(this).clearQueue();
            $(this).not('.selected').animate({
                opacity: 0,
                height: '0px'
            }, 500);
        });
    });
    reloadCufon();
    

});
function reloadCufon(){
    Cufon.replace('p,span,label', std);
    Cufon.replace('.menuOpt', menuLink);
    Cufon.replace('.menuTitlespan', menu);
    Cufon.replace('.frameContent', frameContent);
    Cufon.replace('.link', link);
    Cufon.replace('.bold', frameContent);
    Cufon.replace('.mapLinks', mapLinks);
    Cufon.replace('.mapLinksSel', mapLinksSel);
    Cufon.replace('h2', h2);
    Cufon.replace('h3', h3); 
}
function setCookie(c_name, value, exdays)
{
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString())+"; path=/";
    document.cookie = c_name + "=" + c_value;
}
function unsetCookie(c_name)
{
    setCookie(c_name, '', Date()-10000);
    
}
function getCookie(c_name)
{
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1)
    {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1)
    {
        c_value = null;
    }
    else
    {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1)
        {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}
function checkCookie(c_name)
{
    var ck = getCookie(c_name);
    if (ck != null && ck != "")
    {
        return true;
    }
    else
    {
        return false
    }
}