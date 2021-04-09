
// Setup Function
var $jq = jQuery.noConflict();
$jq(document).ready(function() {

// Facebook
var FB_share = "https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(document.URL)+"&t="+encodeURIComponent(document.URL);

$jq('.fb-social-share').each(function(){
this.href=FB_share;
});

// Twitter Share
var twitter_Share = "https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content%20" + encodeURIComponent(document.title)+":%20 "+encodeURIComponent(document.URL);

$jq('.twitter-social-share').each(function(){
this.href=twitter_Share;
});

//Pinterest
var pin_Share = "http://pinterest.com/pin/create/button/?url="+encodeURIComponent(document.title)+"&media="+encodeURIComponent(document.title)+"&description="+encodeURIComponent(document.URL);

$jq('.pinterest-social-share').each(function(){
this.href=pin_Share;
});

//Linkedin
var Linkedin_Share = "http://www.linkedin.com/shareArticle?mini=true&url="+encodeURIComponent(document.URL)+"&title="+encodeURIComponent(document.title);
$jq('.linkedin-social-share').each(function(){
this.href=Linkedin_Share ;
});

//Email
var email_Share = "mailto:?subject="+encodeURIComponent(document.title)+"&body="+encodeURIComponent(document.URL);
$jq('.email-social-share').each(function(){
this.href=email_Share ;
});

//Whatsapp
var whatsapp_Share = "whatsapp://send?text="+encodeURIComponent(document.title)+"&body="+encodeURIComponent(document.URL);
$jq('.whatsapp-social-share').each(function(){
this.href=whatsapp_Share ;
});

});

