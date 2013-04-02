/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function FB(link)
{   
    window.open('https://www.facebook.com/sharer/sharer.php?u='+link,'','width=600,height=200');
}
function pin(link)
{   
    window.open('https://www.facebook.com/sharer/sharer.php?u='+link,'','width=600,height=200');
}
function twitter(hash,text,related){
    $('body').append('<a id="tiwtter" name="twitter" href="https://twitter.com/intent/tweet?button_hashtag='+hash+'&text='+text+'" class="twitter-hashtag-button opacity"></a>');
    //$('body').append('<a id="tiwtter" name="twitter" href="https://twitter.com/share?hashtags='+hash+'&related='+related+'&text='+text+'" class="twitter-share-button" class="twitter-hashtag-button opacity"></a>');
    //$('#tiwtter').html('Tweet #TwitterStories');
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0];
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src="https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document,"script","twitter-wjs");
//!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
window.open($('#tiwtter').attr('href'), '_blank','scrollbars=1, width=580,height=300');
$('#tiwtter').remove();
}