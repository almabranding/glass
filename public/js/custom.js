var mapZoom = 0;
var BGnum = 0;
var frame = 240;
var URL = '/';
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
    fontSize: '13px'
});
var menuMobile = ({
    fontFamily: 'Akkurat',
    color: '#2d2427',
    letterSpacing: '0.3em',
    fontSize: '9px'
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
var logo = ({
    fontFamily: 'Akkurat',
    color: '#000000',
    letterSpacing: '0.3em',
    fontSize: '13px',
});
$(document).ready(function() {
    if (!checkCookie('fitScreen'))
        setCookie('fitScreen', 'y');
    $('.fitScreen').on("click", function() {
        if (getCookie('fitScreen') === 'y')
            setCookie('fitScreen', 'n');
        else
            setCookie('fitScreen', 'y');


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
function reloadCufon() {
    Cufon.replace('p,span:not(.nocufon),label', std);
    Cufon.replace('.menuOpt', menuLink);
    Cufon.replace('.menuTitlespan', menu);
    Cufon.replace('.logo', logo);
    Cufon.replace('.frameContent', frameContent);
    Cufon.replace('.link', link);
    Cufon.replace('.bold', frameContent);
    Cufon.replace('.mapLinks', mapLinks);
    Cufon.replace('.mapLinksSel', mapLinksSel);
    Cufon.replace('h2', h2);
    Cufon.replace('h3', h3);
    //Cufon.replace('.mobileHeader span', menuMobile);
}
function setCookie(c_name, value, exdays)
{
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString()) + "; path=/";
    document.cookie = c_name + "=" + c_value;
}
function unsetCookie(c_name)
{
    setCookie(c_name, '', Date() - 10000);

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
function changeFoot(texto) {
    $('#lemon').queue(function() {
        $(this).clearQueue();
        $(this).animate({'color': '#CACACA'}, {
            complete: function() {
                $(this).text(texto);
                $(this).animate({'color': '#ffffff'});
            }});
    });
}
function remove_cufon(selector) {
    $(selector).each(function() {
        var g = '';
        $(this).find('cufon').each(function() {
            $(this).find('cufontext').each(function() {  
                g = g + $(this).html();
            });
            //if(g!='')$(this).html($.trim(g));
        }); 
        if(g!='') $(this).html($.trim(g));
    }); 
    return true;
}
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};