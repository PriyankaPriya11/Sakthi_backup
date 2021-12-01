<!DOCTYPE html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="no-referrer-when-downgrade" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); } ?>
	<title> <?php echo $word; ?> - LiveLife.guide - Find Your Live Life Guide</title>
	<!--<link rel="icon" href="https://www.livelife.guide/wp-content/uploads/2018/04/icon.png" type="image/gif" sizes="16x16">-->
	<link rel="icon" href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2019/02/cropped-lg_fav.png" type="image/gif" sizes="16x16">

	<link rel="dns-prefetch" href="//csr.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//config.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//appapi.inspsearchapi.com" />
	<link rel="dns-prefetch" href="//glogger.stuff.com" />
	<style>
		/*! CSS Used from: https://www.livelife.guide/wp-content/themes/gridlove-child-theme/css/cc_search.css */
*{margin:0px;border:0px;padding:0px;}
body{color:#5e5e5e;font-family:arial, sans-serif!important;}
.gridlove-copyright.footer-menu ul li{float:none;list-style:none;margin-right:15px;display:inline-block;}
.search.search-results  #menu-footer-menu{position:relative;z-index:2;}
.col.col-lg-6.gridlove-copyright.text-right.footer-menu a{color:#807e82;font-family:'Cabin';font-weight:700;}
.col.col-lg-6.gridlove-copyright.text-right.footer-menu a:hover{color:#595463;}
.gridlove-footer .container .gridlove-copyright{font-size:16px;}
.text-left{text-align:left;}
.text-right{text-align:right;}
.header-search{float:right;width:350px;}
.search-results .gridlove-posts{background:#fff;padding-top:0;}
.search-results .gridlove-site-content{background:#fff;}
.gridlove-slot-r.cent{right:32%;}
.search .header-search{width:450px;}
.search .header-search .gridlove-search-form input[type="text"]{padding:15px 0;max-width:100%;width:78.1%;background:#fff url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/css/images/search-icon.png) no-repeat 9px 9px;text-indent:40px;background-size:18px 18px;margin-top:28px;font-weight:900;font-size:20px;font-family:'Lato';}
body.search.search-results{font-family:'Arial'!important;}
.search.search-results{background-color:#fff!important;}
.search.search-results #footer{background-color:#fff!important;}
.col.col-lg-6.gridlove-copyright.text-right.footer-menu a,.gridlove-footer .container .gridlove-copyright{font-family:arial;font-weight:normal;font-size:12px;}
.search.search-results .gridlove-header-shadow.gridlove-site-header{background:#fff!important;}
.search.search-results .gridlove-site-branding img{margin:6px 10px;max-width:83px!important;}
.search.search-results .gridlove-header-shadow.gridlove-site-header{margin:0;}
.search-results #header .gridlove-slot-l{left:0!important;}
.cc-wrapp-search-from input[type='text']{background:unset!important;height:38px!important;border-top-left-radius:3px!important;border-bottom-left-radius:3px!important;color:#333!important;font-size:16px!important;padding:0!important;text-indent:15px!important;margin:0px!important;border:1px solid rgba(94,94,94,0.2);font-weight:normal!important;font-family:arial!important;color:#8e8e8e!important;}
.cc-wrapp-search-from form{display:flex;}
.cc-submit-btn{background-color:#f2f2f2;border:1px solid #f2f2f2;border-radius:2px;color:#757575;cursor:pointer;font-family:arial,sans-serif;font-size:13px;font-weight:bold;min-width:54px;padding:10px 13px;text-align:center;margin-left:20px;}
.cc-submit-btn:hover{box-shadow:0 1px 1px rgba(0,0,0,0.1);color:#222;}
.cc-submit-btn:after{content:"Search Guides";}
.search.search-results .gridlove-site-header{height:auto;box-shadow:unset;border:0;}
.cc-searchpage-header-sty{display:flex;justify-content:flex-start;height:100%;padding:10px 0px 0px!important;}
.search-results #header .gridlove-slot-l,.search-results .gridlove-slot-r.cent{position:unset;}
.search.search-results .header-search{width:652px!important;}
.search.search-results #content{max-width:100%!important;margin-top:20px;margin-left:100px!important;min-height:calc(100vh - 165px);}
.cc-wrapp-search-pages{display:flex;width:1080px;}
.search.search-results .row.gridlove-posts.yoyo2{max-width:652px;margin-right:0;min-width:652px;}
.cc-submit-btn{display:block!important;}
.screen-reader-text{display:none!important;}
.search.search-results #footer{width:90%!important;margin:0px auto!important;padding:40px!important;}
.cc-sidebar-content-fixed{position:relative;padding-top:25px;padding-left:10px;}
.cc-sidebar-stick .cc-sidebar-content-fixed{position:fixed;top:0px;left:752px;width:300px;min-width:400px;height:100%!important;}
.search.search-results .gridlove-footer .container .row{display:flex;justify-content:space-between;}
.lds-roller{display:inline-block;position:relative;width:64px;height:64px;}
.lds-roller div{animation:lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;transform-origin:32px 32px;}
.cc-page-loader{height:calc(100vh - 200px);width:100%;display:flex;justify-content:center;align-items:center;}
.lds-roller div:after{content:" ";display:block;position:absolute;width:6px;height:6px;border-radius:50%;background:#b5b47d;margin:-3px 0 0 -3px;}
.lds-roller div:nth-child(1){animation-delay:-0.036s;}
.lds-roller div:nth-child(1):after{top:50px;left:50px;}
.lds-roller div:nth-child(2){animation-delay:-0.072s;}
.lds-roller div:nth-child(2):after{top:54px;left:45px;}
.lds-roller div:nth-child(3){animation-delay:-0.108s;}
.lds-roller div:nth-child(3):after{top:57px;left:39px;}
.lds-roller div:nth-child(4){animation-delay:-0.144s;}
.lds-roller div:nth-child(4):after{top:58px;left:32px;}
.lds-roller div:nth-child(5){animation-delay:-0.18s;}
.lds-roller div:nth-child(5):after{top:57px;left:25px;}
.lds-roller div:nth-child(6){animation-delay:-0.216s;}
.lds-roller div:nth-child(6):after{top:54px;left:19px;}
.lds-roller div:nth-child(7){animation-delay:-0.252s;}
.lds-roller div:nth-child(7):after{top:50px;left:14px;}
.lds-roller div:nth-child(8){animation-delay:-0.288s;}
.lds-roller div:nth-child(8):after{top:45px;left:10px;}
@media only screen and (max-width:1023px){
*{box-sizing:border-box;}
.gridlove-slot-l{order:2;}
#header.gridlove-site-header{padding:0 10px;}
.cc-wrapp-search-pages,.search.search-results .row.gridlove-posts.yoyo2{width:100%;}
.search.search-results .row.gridlove-posts.yoyo2{max-width:652px!important;padding:0 24px;min-width:100%;}
.search.search-results #content{margin-left:0px!important;}
.search.search-results .header-search{width:100%!important;}
.cc-searchpage-header-sty .gridlove-slot-r.cent{width:85%;}
.search.search-results #footer{width:100%;}
.search.search-results .gridlove-site-branding img{margin-left:0px!important;}
.search.search-results .gridlove-site-branding img{margin:6px 10px 0;max-width:98px!important;}
}
@media only screen and (max-width:600px){
.search.search-results .row.gridlove-posts.yoyo2{padding:0px;background:#ddd;}
.cc-wrapp-search-pages{background:#ddd;padding:5px 0;}
.search.search-results .gridlove-footer .container .row{flex-wrap:wrap;}
.search.search-results .gridlove-footer .container .row .gridlove-copyright{width:100%;}
.gridlove-copyright.text-left{order:3;text-align:center;margin-top:15px;}
.search.search-results .gridlove-footer .container .row .gridlove-copyright.footer-menu #menu-footer-menu li{display:block;float:unset;text-align:center;margin:10px 0px;font-size:13px;}
.search.search-results .gridlove-footer .container .row .gridlove-copyright.footer-menu #menu-footer-menu li a{color:#807e82!important;}
.search.search-results #footer{width:100%!important;padding:40px!important;background:#f9f9f9!important;color:#9b9b9b;}
.cc-submit-btn{margin-left:6px;}
}
#cookie-law-info-again{box-shadow:unset!important;background-color:grey!important;color:#fff!important;display:block!important;}
@media only screen and (max-width:767px){
.cc-searchpage-header-sty{flex-direction:column;}
.cc-searchpage-header-sty .gridlove-slot-l{order:1;text-align:center;}
.search.search-results .gridlove-site-branding img{margin:0px 0px 8px 0px;max-width:220px!important;}
.cc-searchpage-header-sty .gridlove-slot-r.cent{order:2;width:100%;}
.cc-searchpage-header-sty .gridlove-slot-r.cent #searchform{display:flex;justify-content:center;}
.cc-searchpage-header-sty .gridlove-slot-r.cent #searchform .cc-submit-btn{background-color:#4A90E2;cursor:pointer;width:53px;border:0px;background-image:url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/images/search.png);background-size:28px;background-position:center center;background-repeat:no-repeat;border-radius:0px 3px 3px 0px;font-size:0px;margin:0px;border-radius:0 25px 25px 0;}
}
#cookie-law-info-bar{box-shadow:0 1px 3px rgba(33,41,52,.75)!important;text-align:unset!important;}
.cc-left-side{margin-left:85%;}
@media only screen and (min-width:768px){
.cc-temp-header-two{background-color:#f9f9f9;padding:10px 15px 10px 100px!important;justify-content:space-between;}
.cc-temp-header-two .cc-wrapp-search-from form{border:1px solid #ebebeb;box-shadow:inset 0 1px 1px rgba(0,0,0,.075);display:flex;max-width:680px;width:100%;justify-content:space-between;}
.cc-temp-header-two .cc-wrapp-search-from form  .cc-submit-btn{max-width:40px!important;margin:0;font-size:0px;background-color:transparent;background-image:url(https://www.livelife.guide/wp-content/themes/gridlove-child-theme/images/cc-search-bt.svg);padding:0px;background-repeat:no-repeat;background-position:74%;box-shadow:unset;border:0px;}
.cc-temp-header-two .header-search .gridlove-search-form input[type="text"]{border:0px;width:100%!important;}
}
@media only screen and (max-width:767px){
.cc-temp-header-two.cc-searchpage-header-sty{flex-direction:row;padding-top:0px!important;}
.cc-temp-header-two .gridlove-slot-r{order:1;}
.cc-temp-header-two .gridlove-slot-l{order:2;}
.cc-temp-header-two  .gridlove-slot-r.cent{display:flex;justify-content:center;align-items:center;}
.cc-temp-header-two  .gridlove-slot-r.cent  .cc-wrapp-search-from{width:100%;}
.cc-temp-header-two .header-search .gridlove-search-form input[type="text"]{width:100%;}
.cc-temp-header-two .gridlove-site-branding img{margin:8px 0px 0px 0px!important;}
.cc-temp-header-two .gridlove-slot-r.cent #searchform .cc-submit-btn{background-color:#acacad;border-radius:0px!important;min-width:unset!important;width:40px;background-size:24px;}
}
@media only screen and (min-width:768px) and (max-width: 980px){
.cc-temp-header-two{padding:10px 15px!important;}
.search.search-results .cc-temp-header-two  .gridlove-site-branding img{margin-left:15px!important;}
}
@media only screen and (max-width:567px){
.cc-temp-header-two.cc-searchpage-header-sty{align-items:center;}
.cc-temp-header-two.cc-searchpage-header-sty{padding-top:10px!important;}
.search.search-results .cc-temp-header-two .gridlove-site-branding img{max-width:105px!important;}
.cc-temp-header-two .header-search .gridlove-search-form input[type="text"]{border-radius:0px!important;}
}
.modal{position:fixed;left:0;top:0;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.5);opacity:0;visibility:hidden;transform:scale(1.1);transition:visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;}
.modal-content{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);background-color:white;padding:1rem 1.5rem;width:24rem;border-radius:0.5rem;}
.close-button{float:right;width:1.5rem;line-height:1.5rem;text-align:center;cursor:pointer;border-radius:0.25rem;background-color:lightgray;}
.close-button:hover{background-color:darkgray;}
.cc-left-side{margin-left:85%;margin-top:-33px;Display:none;}
.cookie_action_close_header{background-color:#0ab0ff!important;}
.modal{position:fixed;left:0;top:0;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.5);opacity:0;visibility:hidden;transform:scale(1.1);transition:visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;}
.modal-content{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);background-color:white;padding:1rem 1.5rem;width:24rem;border-radius:0.5rem;}
.close-button{float:right;width:1.5rem;line-height:1.5rem;text-align:center;cursor:pointer;border-radius:0.25rem;background-color:lightgray;}
.close-button:hover{background-color:darkgray;}
.modal img{width:55%!important;margin-top:1px;margin-left:auto;margin-right:auto;display:block;}
.modal-content{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);background-color:white;padding:1rem 1.5rem;width:24rem;}
@media (max-width:768px){
.modal-content{width:22rem;}
}
.modal h3{color:#363636;text-align:center;font-size:16px;padding:10px;}
.modal p{color:#000;padding:10px;margin-left:auto;margin-right:auto;display:block;font-size:13px;text-align:center;}
.cookie_action_close_header_reject{color:rgb(255, 255, 255);background-color:rgb(128,128,128)!important;text-transform:uppercase;font-size:14px!important;margin-bottom:10px;border-radius:3px;margin-top:20px;margin-right:10px;width:110px;}
.cookie_action_close_header_reject:hover{background-color:rgb(60,60,60,1)!important;}
span.one{font-weight:bold;font-size:16px;color:#363636;text-transform:capitalize;}
@media (max-width:768px){
span.one{position:absolute;top:4%;text-transform:capitalize;}
}
.two{position:absolute;top:38%;font-size:13px;width:97%!important;}
@media (max-width:768px){
.two{width:94%;position:absolute;font-size:10px;top:22%;text-align:justify;}
}
.three{position:absolute;top:80%;font-size:smaller;}
@media (max-width: 768px){
.three{position:absolute;top:73%;font-size:8.5px;text-align:justify;width:93%;}
}
span.close-button{position:absolute;top:6%;right:2%;background:#fff0;color:#0ab0ff;font-size:20px;font-weight:700;}
@media (max-width: 768px){
span.close-button{position:absolute;top:0%;right:0%;}
}
.cookie_action_close_header{background-color:#0ab0ff!important;margin-left:112px;margin-top:60px!important;}
#cookie-law-info-bar{border-top:1px solid #0ab0ff;height:75px;}
@media (max-width:768px){
#cookie-law-info-bar{height:120px;}
}
.green.cli-plugin-button{background-color:#04a710!important;padding-top:9px!important;width:110px;font-family:inherit;text-transform:uppercase;}
.green.cli-plugin-button:hover{background-color:#014205!important;}
.cli-wrapper{max-width:90%;float:none;margin:0 auto;margin-left:5px!important;}
@media (max-width:768px){
.cli-wrapper{margin-left:-5px!important;}
}
@media (max-width:768px){
#cookie-law-info-again{width:50%!important;}
}
@media (max-width:768px){
.menu{display:flex;justify-content:space-between;margin-top:-20px;width:112%;margin-left:-20px;}
}
.box-inner-ptbr.box-col-b.entry-sm-overlay{margin-top:0px;}
@media only screen and (min-width:200px) and (max-width:319px){
.box-inner-ptbr.box-col-b.entry-sm-overlay{margin-top:-11px;margin-left:5px;margin-right:5px;}
}
@media only screen and (min-width:320px) and (max-width:767px){
.box-inner-ptbr.box-col-b.entry-sm-overlay{margin-left:10px;margin-right:10px;}
}
@media only screen and (min-width:770px) and (max-width:980px){
.web1{margin-top:10px;}
.box-inner-ptbr.box-col-b.entry-sm-overlay{height:155px;}
}
@media only screen and (min-width:600px) and (max-width:767px){
.web1{margin-top:10px;margin-left:10px;margin-right:10px;}
}
@media only screen and (min-width:400px) and (max-width:599px){
.web1{margin-top:0px;margin-left:10px;margin-right:10px;}
}
@media only screen and (min-width:320px) and (max-width:399px){
.web1{margin-top:30%;margin-left:10px;margin-right:10px;}
}
@media only screen and (min-width:200px) and (max-width:319px){
.web1{margin-top:-5%;padding:8px;}
}
@media only screen and (min-width:320px) and (max-width:767px){
.search.search-results .row.gridlove-posts.yoyo2{padding:0px;background:#ffffff;}
}
.search.search-results #content{margin-top:10px;}
.web2{margin-top:-9px;}
@media only screen and (min-width:320px) and (max-width:767px){
.web2{margin:0 10px;}
div[data-s1search="mainline-bottom"]{padding:0 5px;}
}
@media only screen and (min-width:200px) and (max-width:319px){
.web2{margin:0 10px;}
}
@media only screen and (max-width: 567px){
.search.search-results .cc-temp-header-two .gridlove-site-branding img{max-width:52.5px!important;margin-left:2px!important;}
}
@media only screen and (max-width: 600px){
.search.search-results .row.gridlove-posts.yoyo2{padding:0px;background:#fff;}
}
@media only screen and (max-width: 600px){
.cc-wrapp-search-pages{background:#fffdfd;padding:5px 0;}
}
#relatedResults iframe,.web1 iframe{position:relative;}
@media only screen and (max-width:425px){
#relatedResults-mobile{display:none;}
}
#relatedResults iframe{height:auto!important;}
@media only screen and (min-width:1200px){
.web2{margin-top:20px;}
}
html body .cc-sidebar-content-fixed{top:60px!important;}
#relatedResults{margin:0;}
.cc-sidebar-stick .cc-sidebar-content-fixed{position:fixed;top:0px;left:752px;width:300px;min-width:284px!important;height:100%!important;}
.cc-sidebar-stick .cc-sidebar-content-fixed{position:absolute;}
.search.search-results #footer{width:90%!important;margin:0px 0 0 auto!important;padding:40px!important;position:relative;}
@media only screen and (max-width:1023px){
.cc-sidebar-stick{display:none;}
}
.ss-ar{color:#666;font-size:14px;font-weight:400;text-transform:uppercase;margin:0;}
.search.search-results #footer{background-color:#ffffff08!important;}
@media only screen and (min-width:769px) and (max-width:1024px){
.search.search-results #content{max-width:100%!important;margin-top:20px;margin-left:90px!important;min-height:calc(100vh - 165px);}
.cc-temp-header-two{background-color:#f9f9f9;padding:10px 15px 10px 90px!important;justify-content:space-between;}
.cc-sidebar-stick .cc-sidebar-content-fixed{position:fixed;top:0px;left:752px;width:300px;min-width:284px!important;height:100%!important;}
}
@media only screen and (min-width:1920px) and (max-width:1999px){
.container p{margin-left:-172%;margin-top:5%;}
}
@media only screen and (min-width:768px) and (max-width:1023px){
.container p{margin-left:-48.5%;margin-top:-22%;}
}
@media only screen and (min-width:1024px) and (max-width:1365px){
.container p{margin-left:-64.5%;margin-top:-2%;}
}
@media only screen and (min-width:1366px) and (max-width:1439px){
.container p{margin-left:-105.5%;margin-top:-2%;}
}
@media only screen and (min-width:1340px) and (max-width:1919px){
.container p{margin-left:-112.5%;margin-top:-2%;}
}
@media (max-width: 768px){
.menu{display:flex;justify-content:space-between;margin-top:-20px;width:112%;margin-left:-20px;}
.search.search-results #footer{width:90%!important;margin:0 0 0 26px!important;padding:40px!important;position:relative;}
}
.ss-lt{display:none;}
.tmplt4.ss-lt{margin-bottom:10px;}
@media only screen and (max-width: 767px){
.tmplt4.ss-lt{margin-left:10px;margin-right:10px;}
}
.tmpltfour #relatedResults iframe{min-height:300px;}
div#gcsa-bottom iframe{margin-top:10px;}
.cc-sidebar-content-fixed.tmpltfour{position:absolute!important;}
#relatedResults iframe{height:auto!important;}
/*! CSS Used from: https://www.livelife.guide/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-public.css ; media=all */
@media all{
#cookie-law-info-bar{font-size:10pt;margin:0 auto;padding:10px 10px;position:absolute;text-align:center;width:100%;z-index:99999;box-shadow:rgba(0,0,0,.5) 0px 5px 10px;display:none;left:0px;}
#cookie-law-info-again{font-size:10pt;margin:0;padding:5px 10px;text-align:center;z-index:9999;cursor:pointer;box-shadow:#161616 2px 2px 5px 2px;}
#cookie-law-info-bar span{vertical-align:middle;}
.cli-plugin-button,.cli-plugin-button:visited{display:inline-block;padding:8px 16px 8px;color:#fff;text-decoration:none;-moz-border-radius:4px;-webkit-border-radius:4px;position:relative;cursor:pointer;text-decoration:none;}
.cli-accept-button{font-family:Courier;font-variant:small-caps;}
.cli-plugin-button:hover{background-color:#111;color:#fff;text-decoration:none;}
.cli-plugin-button,.cli-plugin-button:visited,.medium.cli-plugin-button,.medium.cli-plugin-button:visited{font-size:13px;font-weight:500;line-height:1;}
.green.cli-plugin-button,.green.cli-plugin-button:visited{background-color:#91bd09;}
.green.cli-plugin-button:hover{background-color:#749a02;}
@media only screen and (max-width:768px){
.cli-plugin-button{margin:10px;}
}
}
/*! CSS Used from: https://www.livelife.guide/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-gdpr.css ; media=all */
@media all{
.cli-wrapper{max-width:100%;float:none;margin:0 auto;}
#cookie-law-info-bar a{cursor:pointer;}
}
/*! CSS Used from: Embedded */
.cc-sidebar-content-fixed{top:10%!important;}
/*! CSS Used keyframes */
@keyframes lds-roller{0%{transform:rotate(0deg);}100%{transform:rotate(360deg);}}
.tmplt4.ss-lt .ss-article-results { margin: 10px 0 0;}
.tmplt4.ss-lt { margin-top: 10px;}
.cc-article-results .articles-knowzo__url { color: #009933 !important;}
.cc-article-results span.articles-knowzo__description { line-height: 13px !important;}
	</style>
	<!-- <link rel="stylesheet" href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/themes/gridlove-child-theme/css/cc_search.css"></script>
	<link rel='stylesheet' id='cookie-law-info-css'  href='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-public.css' type='text/css' media='all' />
	<link rel='stylesheet' id='cookie-law-info-gdpr-css'  href='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/css/cookie-law-info-gdpr.css' type='text/css' media='all' /> -->

	<?php //wp_head(); ?>
	<script type='text/javascript' src='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-includes/js/jquery/jquery.js'></script>
	<script type='text/javascript' src='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-includes/js/jquery/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/themes/gridlove-child-theme/js/jQuery.highlight.js' defer></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var Cli_Data = {"nn_cookie_ids":[],"cookielist":[]};
		var log_object = {"ajax_url":"http:\/\/www.livelife.guide\/wp-admin\/admin-ajax.php"};
		/* ]]> */
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KF5QNLQ');</script>
	<!-- End Google Tag Manager -->
	<script type='text/javascript' src='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/plugins/webtoffee-gdpr-cookie-consent/public/js/cookie-law-info-public.js' defer></script>
	
	<script>
		function readCookie(name) {
			var nameEQ = encodeURIComponent(name) + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
            }
            return null;
            }
            </script>
            <style>
	.cc-sidebar-content-fixed{top:10% !important;}
	</style>
	<?php
	require_once('wp-config.php');
	$timezone = date_default_timezone_get();
	date_default_timezone_set('GMT');
	$datetime = date('YmdHi', time() + 30);
	date_default_timezone_set($timezone);
		if(isset($_REQUEST['q'])){
			$related_search = $_REQUEST['q'];
		}else if(isset($_REQUEST['q'])){
			$related_search = $_REQUEST['q'];
		}
		if(isset($_REQUEST['swpquery']))
		{ 
			if($related_search ==''){
			$word = $_REQUEST['swpquery'];
			}else{
				$word = $related_search;
			}
		}
		//getting  llgagid
		if(isset($_REQUEST['llgagid']))
		{ 
			$llgaid_one = $_REQUEST['llgagid'];
		}
		if(isset($_REQUEST['llgaid']))
		{ 
			$llgaid_two = $_REQUEST['llgaid'];
		}
		if(isset($_REQUEST['llgcid']))
		{ 
			$llgcid_one = $_REQUEST['llgcid'];
		}
		if(isset($_REQUEST['llgkid']))
		{ 
			$llgkid_three = $_REQUEST['llgkid'];
		}



		if(isset($_REQUEST['FID'])){
			$FID = $_REQUEST['FID'];
		}else if(isset($_REQUEST['fid'])){
			$FID = $_REQUEST['fid'];
		}
		if(empty($_REQUEST['FID']))
		{
			$_REQUEST['FID']=5;
			$FID=5;
		}

		if(isset($_REQUEST['CID'])){
			$CID = $_REQUEST['CID'];
		}else if(isset($_REQUEST['cid'])){
			$CID = $_REQUEST['cid'];
		}

		if(isset($_REQUEST['rtds'])){
			$RTDS = $_REQUEST['rtds'];
		}else if(isset($_REQUEST['RTDS'])){
			$RTDS = $_REQUEST['RTDS'];
		}

		$tempvar = array();
		if( have_rows('customparams', 'option') ):
		while( have_rows('customparams', 'option') ): the_row();
		// Get the sub field called "select".
		$tempid = get_sub_field_object('field_5dd22f735686d');
		$fid = get_sub_field_object('field_5dd22f2c5686c');
		// Get its value.
		foreach ($fid as $key => $value) 
		{
			if($key == 'value' & $value == $FID)
			{
				$tempvar[] = $tempid['value'];
			}
		}
		endwhile;
		endif;
		if(isset($tempvar[0])){
		$tmplt = $tempvar[0];
		}else if(isset($tempvar[0])){
		$tmplt = $tempvar[0];
		} else {
		$tmplt = 2;
		}
		$geo_detail = get_currency_code();
		$country_code = $geo_detail['geoplugin_countryCode'];
		$continent_code = $geo_detail['geoplugin_continentCode'];

		$access_key = "Gp-PFae4v2TxdO61iVo2G1ld";

		$create_sig = trim($datetime.$access_key.$word);
		$sha_val = sha1($create_sig, true);

		$final_val_1 = str_replace(array('+', '/'), array('-', '_'), trim(base64_encode($sha_val), '=='));
		
	?>
	<script >
	//var signature_key = '<?php echo $final_val; ?>';
	var result_count = '<?php echo $GLOBALS[ 'result_count' ]; ?>';
	var signature_key = '<?php echo $final_val_1 ?>';
/* 	console.log(signature_key);
	console.log(result_count); */
	var word = '<?php echo $word; ?>';
	var FID = '<?php  echo $FID; ?>';
	var CID = '<?php  echo $CID; ?>';
	var tmplt = '<?php echo $tmplt; ?>';
	var RTDS = '<?php echo $RTDS; ?>';
	var segment_id = 'llguide'+FID;
	var country_code = '<?php echo $country_code; ?>';
	var continent_code = '<?php echo $continent_code; ?>';
	var cookie_policy = readCookie("viewed_cookie_policy");
		console.log(cookie_policy);
	if ((result_count > 3) && (result_count < 7)){
		segment_id = 'llguide'+FID+'b';
	}
	console.log(segment_id);
	function onResolved(msg) {
		console.log(msg);
        console.log('completed');
		// if(cookie_policy == null && continent_code == 'EU')
		// {
		// 	jQuery(".cc-page-loader").css("display", "none");
		// 	jQuery('#content').css("display", "block");
		// }
		var f=jQuery('#relatedResults iframe');
		var d = f.contents().find('div.embedded-layout__region').html();
		 if(d.trim().length == 0){
		 	jQuery("#relatedResults").css("display", "none");
		 }else{
		 	jQuery("#relatedResults").css("display", "block");
		 }
		jQuery('#ss-frame-1 iframe').css('height','auto');
			
		if(continent_code != 'EU')
		{
			jQuery(".cc-page-loader").css("display", "none");
			jQuery(".layout-simple.ads_top").css("display", "block");
			jQuery(".layout-simple.ads_bottom").css("display", "block");
			jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
			jQuery('#content').css("display", "block");
		}
		else if ((continent_code == 'EU'))
		{
			jQuery(".cc-page-loader").css("display", "none");
			jQuery(".layout-simple.ads_top").css("display", "block");
			jQuery(".layout-simple.ads_bottom").css("display", "block");
			jQuery(".layout-simple.cc-mobile-relatedResults").css("display", "block");
			jQuery('#content').css("display", "block");
		}
		else if ((continent_code == 'EU') && (cookie_policy == 'no' ) )
		{
			jQuery(".cc-page-loader").css("display", "none");
			jQuery('#content').css("display", "block");
		}
		
		//jQuery(".cc-sidebar-content.relatedResults").css("display", "block");
		jQuery('#relatedResults iframe').contents().find("body").on('click', 'a.aylf-bing-sidebar__title', function(e) {
			e.preventDefault();
			e.stopPropagation();
			var __dataQuery=e.target.parentNode.getAttribute('data-query');
			if(e.target.tagName.toLowerCase() == 'a')
				__dataQuery=e.target.getAttribute('data-query');
			localStorage.setItem('__query',__dataQuery);
			// top.location='/search/?swpquery='+__dataQuery+'&FID='+FID+'&CID='+CID+'&TYPE=BROAD';
			top.location='<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/search2.php/?swpquery='+__dataQuery+'&FID='+FID+'&CID='+CID+'&TYPE=BROAD&tmplt='+tmplt+'&rtds='+RTDS+'llgagid='+llgagid+'llgaid='+llgaid+'llgcid='+llgcid+'llgkid='+llgkid;
			return false;
		});
		jQuery('#relatedResults-mobile #relatedResults iframe').contents().find("head")
      		.append(jQuery("<style type='text/css'> .aylf-bing-sidebar .aylf-bing-sidebar__label{font-size: 14px !important; padding-bottom: 5px !important; text-transform: uppercase !important; width: 100% !important;} .sidebar-results .aylf-bing-sidebar{display: flex !important; flex-wrap: wrap !important;} .aylf-bing-sidebar .aylf-bing-sidebar__result{width: 48% !important; margin: 0 !important;} @media only screen and (max-width:374px) {.aylf-bing-sidebar .aylf-bing-sidebar__result{width: 100% !important;;}}</style>"));
		jQuery('#relatedResults iframe').contents().find("head")
      		.append(jQuery("<style type='text/css'> .aylf-bing-sidebar .aylf-bing-sidebar__label{font-size: 14px !important; padding-bottom: 5px !important; text-transform: uppercase !important; width: 100% !important;}</style>"));

		jQuery('#relatedResults-mobile').contents().find("head")
      		.append(jQuery("<style type='text/css'> #relatedResults iframe {height: auto !important;}</style>"));

      		jQuery('#ss-frame-1 iframe').contents().find("head").append(jQuery("<style type='text/css'>html body .aylf-bing__result {width: 50%; float: left; margin: 4px 0 !important; font-size: 16px !important;} @media only screen and (max-width: 767px) {.aylf-bing__result {width: 100% ; }}</style>"));
      		jQuery('#ss-frame iframe').contents().find("head").append(jQuery("<style type='text/css'>.ads-bing-belly {background: none !important; margin-bottom: 10px !important;}}</style>"));
      		jQuery(".ss-lt").css("display", "block");
			  jQuery(".web1 .ss-ar").css("display", "block"); 
               jQuery('.web1 #ss-frame iframe').contents().find("head")
      		.append(jQuery("<style type='text/css'> html body .web-bing__title{font-size: 18px;} html body .web-bing__url{font-size: 14px; color: #009933;} html body span.web-bing__description { font-size: 13px;}</style>"));
		/*jQuery('#mainResults iframe').contents().find("head")
			.append(jQuery("<style type='text/css'> .embedded-layout { display: none !important; } </style>"));*/
    }
    function onRejected(msg) {
        console.log(msg);
    }
	var accept_policy = true;
	if((cookie_policy == 'yes') && (continent_code == 'EU')){
		accept_policy = true;
	}else if((cookie_policy == 'no') && (continent_code == 'EU')){ 
		accept_policy = false;
	} else if(continent_code != 'EU'){
		accept_policy = true;
	}

	window.s1search = window.s1search || function () { (window.s1search.q = window.s1search.q || []).push(arguments) };
		window.s1search('config', {
			category: "web",
			domain: "www.livelife.guide", 
			partnerId: 41117,
			isTest: false,
			onComplete: onResolved,
			onError: onRejected,
			query: word,
			segment: segment_id,
			signature: signature_key,
			linkTarget : '_blank',
            clickTrackingUrl: 'https://www.livelife.guide/trk-postback/?sub1={extra_args[p]}&sub2={info[subsequent_search]}&sub3={extra_args[b]}&sub4={info[segment]}&sub5={extra_args[position]}&clickid='+CID,
			gdprOptIn: accept_policy
		});
		console.log(window.s1search);
	</script>
	
</head>
<body class = "search search-results chrome cc-temp-1 SDK_Search">
	<?php
		if(isset($_REQUEST['FID'])){
			$id = $_REQUEST['FID'];
		}else if(isset($_REQUEST['fid'])){
			$id = $_REQUEST['fid'];
		}
		if(empty($_REQUEST['FID']))
		{
			$_REQUEST['FID']=5;
			$id=5;
		}
		$word = "";
        if(isset($_REQUEST['swpquery'])){ $word = $_REQUEST['swpquery']; $word = str_replace("+"," ",$word); }?>
	<header id="header" class="gridlove-site-header hidden-md-down gridlove-header-shadow">
			<?php if($tmplt == 1): ?>
			<div class="cc-searchpage-header-sty">
				<div class="gridlove-slot-l">
					<?php //get_template_part('template-parts/header/elements/logo');  ?>
					<div class="gridlove-site-branding  ">
						<span class="site-title h1"><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>" rel="home">
						<img src="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/themes/gridlove-child-theme/images/livelife-logo" alt="livelife">
						</a></span>
					</div>
				</div>
				<div class="gridlove-slot-r cent">
					<div class="cc-wrapp-search-from">
						<div class="header-search">
                            <?php //get_search_form(); ?>
                            <form role="search" method="get" id="searchform" action="<?php echo "https://" . $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" class="gridlove-search-form">
                                <label class="screen-reader-text" for="s"> Search For</label>
								<input class="search_field" type="text" placeholder="Search Guides..." value="<?php if($related_search ==''): echo $word;else: echo $related_search; endif;?>" name="swpquery" title="Search for:">
								<input type="hidden" name="FID" value="<?php $id; ?>">
								<?php      if(!empty($llgaid_one)) {?>
								<input type="hidden" name="llgagid" value="<?php echo $llgaid_one;?>">
								<?php  }?>
								<?php      if(!empty($llgaid_two)) {?>
								<input type="hidden" name="llgaid" value="<?php echo $llgaid_two;?>">
								<?php  }?>
								<?php      if(!empty($llgcid_one)) {?>
								<input type="hidden" name="llgcid" value="<?php echo $llgcid_one;?>">
								<?php  }?>
								<?php      if(!empty($llgkid_three)) {?>
								<input type="hidden" name="llgkid" value="<?php echo $llgkid_three;?>">
								<?php  }?>
                                <input type="hidden" name="CID" value="<?php echo time(); ?>">
								<input type="hidden" name="TYPE" value="EXACT">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($tmplt == 2): ?>
			<div class="cc-searchpage-header-sty cc-temp-header-two">
				<div class="gridlove-slot-r cent temp_2 ">
					<div class="cc-wrapp-search-from">
						<div class="header-search">
                            <?php //get_search_form(); ?>
                            <form role="search" method="get" id="searchform" action="<?php echo "https://" . $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" class="gridlove-search-form">
                                <label class="screen-reader-text" for="s"> Search For</label>
								<input class="search_field" type="text" placeholder="Search Guides..." value="<?php if($related_search ==''): echo $word;else: echo $related_search; endif;?>" name="swpquery" title="Search for:">
								<input type="hidden" name="FID" value="<?php echo $id; ?>">
								<?php  if(!empty($llgaid_one)) {?>
								<input type="hidden" name="llgagid" value="<?php echo $llgaid_one;?>">
								<?php  }?>
								<?php  if(!empty($llgaid_two)) {?>
								<input type="hidden" name="llgaid" value="<?php echo $llgaid_two;?>">
								<?php  }?>
								<?php  if(!empty($llgcid_one)) {?>
								<input type="hidden" name="llgcid" value="<?php echo $llgcid_one;?>">
								<?php  }?>
								<?php  if(!empty($llgkid_three)) {?>
								<input type="hidden" name="llgkid" value="<?php echo $llgkid_three;?>">
								<?php  }?>
								<?php if ($CID == ""){?>
                                    <input type="hidden" class="test" name="CID" value="<?php echo time(); ?>">
								<?php }else{ ?>
                                    <input type="hidden" class="test" name="CID" value="<?php echo $CID; ?>">
								 <?php  }?>
								<input type="hidden" name="TYPE" value="EXACT">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
				<div class="gridlove-slot-l">
					<div class="gridlove-site-branding  ">
					<span class="site-title h1"><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>" rel="home">
						<img src="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/themes/gridlove-child-theme/images/livelife-logo" alt="livelife">
						</a></span>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if($tmplt == 3 || $tmplt == 4): ?>
			<div class="cc-searchpage-header-sty cc-temp-header-two">
				<div class="gridlove-slot-r cent temp_2 ">
					<div class="cc-wrapp-search-from">
						<div class="header-search">
                            <?php //get_search_form(); ?>
                            <form role="search" method="get" id="searchform" action="<?php echo "https://" . $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" class="gridlove-search-form">
                                <label class="screen-reader-text" for="s"> Search For</label>
								<input class="search_field" type="text" placeholder="Search Guides..." value="<?php if($related_search ==''): echo $word;else: echo $related_search; endif;?>" name="swpquery" title="Search for:">
								<input type="hidden" name="FID" value="<?php echo $id; ?>">
								<?php  if(!empty($llgaid_one)) {?>
								<input type="hidden" name="llgagid" value="<?php echo $llgaid_one;?>">
								<?php  }?>
								<?php  if(!empty($llgaid_two)) {?>
								<input type="hidden" name="llgaid" value="<?php echo $llgaid_two;?>">
								<?php  }?>
								<?php  if(!empty($llgcid_one)) {?>
								<input type="hidden" name="llgcid" value="<?php echo $llgcid_one;?>">
								<?php  }?>
								<?php  if(!empty($llgkid_three)) {?>
								<input type="hidden" name="llgkid" value="<?php echo $llgkid_three;?>">
								<?php  }?>
                                <?php if ($CID == ""){?>
                                    <input type="hidden" class="test" name="CID" value="<?php echo time(); ?>">
                                <?php }else{ ?>
                                    <input type="hidden" class="test" name="CID" value="<?php echo $CID; ?>">
                                <?php  }?>
								<input type="hidden" name="TYPE" value="EXACT">
                                <button type="submit" class="cc-submit-btn"></button>
                            </form>
                        </div>
					</div>
				</div>
				<div class="gridlove-slot-l">
					<div class="gridlove-site-branding  ">
						<span class="site-title h1"><a href="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>" rel="home">
						<img src="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/themes/gridlove-child-theme/images/livelife-logo" alt="livelife">
						</a></span>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- <div class="gridlove-header-wrapper">
				<div class="gridlove-header-1 gridlove-header-middle container">
				</div>
			</div> -->
	</header>
	<div class="modal">
    <div class="modal-content">
		<span class="close-button">×</span>
		<img src="<?php echo "https://" . $_SERVER['SERVER_NAME'] ?>/wp-content/uploads/2018/04/livelife-logonew_small.png" style="width:24em;" />
		<h3>We Value your Privacy</h3>
		<p>By using this site,you agree to our use of cookies and information to provide personalized content and ads and measure and analyze site usage.</p>
        <p style="text-align:center;"><p style="text-align:center;"> <a href="#" id="cookie_action_close_header_reject" class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header_reject cli_action_button" data-cli_action="reject" style="color: rgb(255, 255, 255); background-color: rgb(128, 128, 128);">Reject</a><a href="#" class="cli_action_button cli-accept-button medium cli-plugin-button green" data-cli_action="accept">ACCEPT</a></p></p>
    </div>
</div>
<div class="cc-page-loader">
		<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>
	<?php //get_template_part( 'template-parts/header/responsive' ); ?>
<?php
function get_currency_code(){
    $ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.geoplugin.net/json.gp?ip='.$ip);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $response = curl_exec($ch);
    curl_close($ch);
    return $result = json_decode($response, true);
}