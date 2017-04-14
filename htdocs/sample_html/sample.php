<?php

$lang_name = "en";

if(isset($_GET['langCode']))
	$lang_name = $_GET['langCode'];

$file_name = $lang_name . ".php";
include $file_name;
include "res.php";

echo $localization['bodySite'][0];

?>

<!DOCTYPE html>
<!-- saved from url=(0027)http://trizen-industry.com/ -->
<html lang="en-US"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Try PHP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/trizen-industry.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.1"}};
			!function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d");return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(String.fromCharCode(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(String.fromCharCode(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(String.fromCharCode(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(String.fromCharCode(55357,56835),0,0):e.fillText(String.fromCharCode(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
			document.cookie = "language_cookie=en";
		</script>

		<style type="text/css">
			img.wp-smiley,
			img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
			}
		</style>
<link rel="stylesheet" id="respslidercss-css" href="./sample_files/responsiveimgslider.css" type="text/css" media="all">
<link rel="stylesheet" id="happenstance-style-css" href="./sample_files/style.css" type="text/css" media="all">
<style id="happenstance-style-inline-css" type="text/css">
#wrapper #header .header-content .site-title, #wrapper #header .header-content .site-description, #wrapper #header .header-content .header-logo { max-width: 100%; }
</style>
<link rel="stylesheet" id="happenstance-elegantfont-css" href="./sample_files/elegantfont.css" type="text/css" media="all">
<link rel="stylesheet" id="happenstance-google-font-default-css" href="./sample_files/css" type="text/css" media="all">
<link rel="stylesheet" id="cyclone-slider-plugin-styles-css" href="./sample_files/saved_resource" type="text/css" media="all">
<script type="text/javascript" src="./sample_files/jquery.js"></script>
<script type="text/javascript" src="./sample_files/jquery-migrate.min.js"></script>

<?php
	$browserLanguage = "en";
	echo "<script type='text/javascript' src='./sample_files/jquery.slides.min.js'></script>";
	echo "<script type='text/javascript' src='./localization/localization.js'></script>";
	echo "<script type='text/javascript' src='./localization/".$browserLanguage."_flow1.js'></script>";
?>

<!--[if lt IE 9]>
<script type='text/javascript' src='http://trizen-industry.com/wp-content/themes/happenstance/js/html5.js?ver=3.6'></script>
<![endif]-->
<script type="text/javascript" src="./sample_files/jquery.cycle.all.min.js"></script>
<link rel="https://api.w.org/" href="http://trizen-industry.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://trizen-industry.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://trizen-industry.com/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.4.1">
<link rel="canonical" href="./sample_files/sample.php">
<link rel="shortlink" href="./sample_files/sample.php">
<!--[if IE]>
<style type="text/css" media="screen">
#container-shadow {
        behavior: url("http://trizen-industry.com/wp-content/themes/happenstance/css/pie/PIE.php");
        zoom: 1;
}
</style>
<![endif]-->
<link rel="icon" href="http://trizen-industry.com/wp-content/uploads/2016/01/cropped-logo_new-32x32.png" sizes="32x32">
<link rel="icon" href="http://trizen-industry.com/wp-content/uploads/2016/01/cropped-logo_new-192x192.png" sizes="192x192">

</head>
<body class="home page page-id-9 page-template page-template-template-full-width page-template-template-full-width-php" id="wrapper"><div class="scroll-top arrow_carrot-up" style="display: none;"></div>
<div class="pattern"></div>

<div id="container">
<div id="container-shadow">
  <header id="header">

    <div class="header-content-wrapper">
    <div class="header-content">
     <h4 style="width:70%;">Choose Language: &nbsp;  <select style="width:15%;"  Onchange="changeLangauge(this.value)">
		<option value="en">English</option>
		<option value="de">Deutsche</option>
		<option value="hi">Hindi</option>
		<option value="fe">French</option>
		<option value="bu">Bulgarian</option>
	</select>
	</h4>
    </div>
    </div>
  <div class="menu-box-container">
    <div class="menu-box-wrapper">
    <div class="menu-box">
      <a class="link-home" href="./sample_files/sample.php"><i class="icon_house" aria-hidden="true"></i></a>
	  <div id="nav" class="menu"><ul><li class="page_item page-item-9 current_page_item"><a href="./sample_files/sample.php">
	  <?php echo $aboutUs ?></a></li><li class="page_item page-item-6">
	  <a href="./sample_files/sample.php"><?php echo $vision ?></a></li>
	  <li class="page_item page-item-13"><a href="./sample_files/sample.php">
	  <?php echo "$serviceOfferings" ?></a></li><li class="page_item page-item-15">
	  <a href="./sample_files/sample.php"><?php echo "$engineeringServices" ?></a></li><li class="page_item page-item-17"><a href="./sample_files/sample.php"><?php echo "$specialServices" ?></a></li><li class="page_item page-item-19"><a href="./sample_files/sample.php"><?php echo "$ourStrengths" ?></a></li><li class="page_item page-item-22"><a href="./sample_files/sample.php"><?php echo "$qualitySystems" ?></a></li><li class="page_item page-item-24"><a href="./sample_files/sample.php"><?php echo "$contact" ?></a></li></ul></div>
    </div>
    </div>
  </div>

<div class="headerslider">
 	  <div id="slides" class="design-1" style="overflow: hidden;">
	<div class="slidesjs-container" style="overflow: hidden; position: relative; width: 1170px; height: 399.90234375px;"><div class="slidesjs-control" style="position: relative; left: 0px; width: 1170px; height: 399.90234375px; transform: translateX(-1170px); transition-duration: 500ms;"><div class="slide-image slidesjs-slide" slidesjs-index="0" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0001.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0001" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0001-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0001-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0001-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0001-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0001.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="1" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0002.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0002" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0002-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0002-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0002-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0002-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0002.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="2" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1200" height="1600" src="./sample_files/IMG-20160103-WA0003.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0003" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0003-225x300.jpg 225w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0003-768x1024.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0003-1170x1560.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0003.jpg 1200w" sizes="(max-width: 1200px) 100vw, 1200px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="3" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0004.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0004" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0004-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0004-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0004-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0004-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0004.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="4" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 10; display: block; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0006.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0006" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0006-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0006-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0006-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0006-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0006.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="5" style="position: absolute; top: 0px; left: 1170px; width: 100%; z-index: 10; display: block; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0008.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0008" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0008-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0008-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0008-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0008-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0008.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="6" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA0009.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0009" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0009-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0009-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0009-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0009-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0009.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="7" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1200" height="1600" src="./sample_files/IMG-20160103-WA0010.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0010" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0010-225x300.jpg 225w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0010-768x1024.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0010-1170x1560.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0010.jpg 1200w" sizes="(max-width: 1200px) 100vw, 1200px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="8" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1200" height="1600" src="./sample_files/IMG-20160103-WA0012.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0012" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0012-225x300.jpg 225w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0012-768x1024.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0012-1170x1560.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0012.jpg 1200w" sizes="(max-width: 1200px) 100vw, 1200px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="9" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1200" height="1600" src="./sample_files/IMG-20160103-WA0013.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0013" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0013-225x300.jpg 225w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0013-768x1024.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0013-1170x1560.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0013.jpg 1200w" sizes="(max-width: 1200px) 100vw, 1200px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="10" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1200" height="1600" src="./sample_files/IMG-20160103-WA0007.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0007" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0007-225x300.jpg 225w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0007-768x1024.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0007-1170x1560.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA0007.jpg 1200w" sizes="(max-width: 1200px) 100vw, 1200px">
</div><div class="slide-image slidesjs-slide" slidesjs-index="11" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
<img width="1600" height="1200" src="./sample_files/IMG-20160103-WA00141.jpg" class="attachment-url size-url wp-post-image" alt="IMG-20160103-WA0014[1]" srcset="http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA00141-300x225.jpg 300w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA00141-768x576.jpg 768w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA00141-1024x768.jpg 1024w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA00141-1170x878.jpg 1170w, http://trizen-industry.com/wp-content/uploads/2016/01/IMG-20160103-WA00141.jpg 1600w" sizes="(max-width: 1600px) 100vw, 1600px">
</div></div></div>		<a class="slidesjs-previous slidesjs-navigation" href="http://trizen-industry.com/#" title="Previous">Previous</a><a class="slidesjs-next slidesjs-navigation" href="http://trizen-industry.com/#" title="Next">Next</a><a class="slidesjs-play slidesjs-navigation slidesjs-playing" href="http://trizen-industry.com/#" title="Play" style="display: none;">Play</a><a class="slidesjs-stop slidesjs-navigation" href="http://trizen-industry.com/#" title="Stop" style="">Stop</a><ul class="slidesjs-pagination"><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="0" class="">1</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="1" class="">2</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="2" class="">3</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="3" class="">4</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="4" class="">5</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="5" class="active">6</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="6" class="">7</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="7" class="">8</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="8" class="">9</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="9" class="">10</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="10" class="">11</a></li><li class="slidesjs-pagination-item"><a href="http://trizen-industry.com/#" data-slidesjs-item="11" class="">12</a></li></ul></div>

	<script type="text/javascript">
	 jQuery(function() {

      jQuery('#slides.design-1').slidesjs({
		width: 1024,
        height: 350,
		start: 1,
        play: {
          active: true,
          auto: true,
          interval: 2000,
          swap: true,
		  effect: "slide"
        },

	 effect: {
      slide: {
        speed: 1000
      },
      fade: {
        speed: 1000,
        crossfade: true
      }
    },
	navigation: {
     active: true,
	  effect: "slide"
	  },

	pagination: {
      active: true,
	   effect: "slide"

    }

      });


    });



	$( "body" ).on( "change", "#language", function() {
	//$( "body" ).delegate( "#language", "change", function() {
	alert("fdfd");
});

 function changeLangauge(value){
 alert(value);
	window.location.href = "sample.php?langCode=" + value;
 }


	</script>

	 </div>
  </header> <!-- end of header -->
  <div id="wrapper-content">
  <div id="main-content">
  <div id="content">    <div class="content-headline">
      <h1 class="entry-headline"><span class="entry-headline-text">ABOUT US</span></h1>
    </div>
    <div class="entry-content">
<p>We are a group of Engineers with combined experience of more than 60 years in large multi-national organizations. We bring in the experience of Process Engineering, Industrial Engineering, Operations Management, Sourcing &amp; Vendor Development and Supply Chain Management expertise in global operations.</p>
<p>The founding members have worked in large industrial houses, in the field of Automotive Industry, Electrical &amp; Electronics Industries and IT Industries. The founders have hands on experience in global Supply Chain Management, Operations Management and Quality Management. They bring the experience of integration of engineering in to Supply Chain Management.</p>
<p> We offer the sourcing and engineering services to our customers with a strong focus on best-fit solutions. We strive to achieve long term association with both customers and suppliers. We conduct business in a transparent manner to build confidence with every transaction of the engagement.</p>
<p>We have our offices in Xiamen in China and our Indian office is located in Mysore, so that, we are closer to both the customers and suppliers.</p>

<div id="comments" class="comments-area comments-area-post">



</div><!-- #comments .comments-area -->    </div>
  </div> <!-- end of content -->
  </div> <!-- end of main-content -->
  </div> <!-- end of wrapper-content -->
<footer id="wrapper-footer">
<div class="footer-signature"><div class="footer-signature-content">			<div class="textwidget">Copyright © </div>
		</div></div></footer>  <!-- end of wrapper-footer -->
</div> <!-- end of container-shadow -->
</div> <!-- end of container -->
<script type="text/javascript" src="./sample_files/placeholders.js"></script>
<script type="text/javascript" src="./sample_files/scroll-to-top.js"></script>
<script type="text/javascript" src="./sample_files/menubox.js"></script>
<script type="text/javascript" src="./sample_files/selectnav.js"></script>
<script type="text/javascript" src="./sample_files/responsive.js"></script>
<script type="text/javascript" src="./sample_files/wp-embed.min.js"></script>


</body></html>