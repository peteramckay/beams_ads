<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="cleartype" content="on"> <!--Optimizes type for display on screens. See http://bit.ly/VSo5V4 -->
  <meta name="HandheldFriendly" content="True"> <!-- Optimizes for feature phones. See http://bit.ly/11DVPh3-->
  <meta name="MobileOptimized" content="320"/> <!-- Optimizes for Windows. See http://bit.ly/11DVPh3-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!--This tag optimizes for IE. See http://bit.ly/SBsYUu -->
  <!--[if IE lt 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <title>Roscoe.TV</title>
  <link rel="shortcut icon" type="image/x-icon" href="http://roscoe.tv/favicon.ico">
  <link rel="icon" type="image/x-icon" href="http://roscoe.tv/favicon.ico" />
  <link rel="apple-touch-icon" href="http://roscoe.tv/favicon.ico" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.structure.min.css" />
  <style>

    .navlink:first-child {
      background-color: #DEDEDE;
    }

    .navlink:first-child a {
      color: #590000
    }
    
    .contentcontainer2 {padding: 0}

    .reportPannel {padding: 0}

    .Cwidth100 {padding: 0;
      position: relative;

      /* This one seems to be having probs with ads...
      top: -1.5em
      */

     }

    .Cwidth100 img {
      position: relative;
      top: 1em;
      padding-right: 1em;
      width: 50px;
      height: auto
    }

    iframe {}

    #home_video_html5_api {}

    #abuselink {
      font-size: 0.9em;
      display: inline-block;
    }

    @media screen and (max-width: 536px) {/* smartphone style*/
      iframe {width: 460px; height: 260px;}
      #home_video_html5_api {width: 460px; height: auto;}
     .subnavbar li {
      width: auto
      }

    } /*End 536px breakpoint*/

    @media screen and (max-width:475px) {/* smartphone style*/
      iframe {width: 410px; height: 245px;}
      #home_video_html5_api {width: 410px; height: auto;}
      .Cwidth100 {overflow: hidden; padding-bottom: 2em}

      .Cwidth100 img {width: 45px; height: auto}


    } /* End 475px breakpoint */

    @media screen and (max-width:415px) {/* smartphone style*/
      iframe {width: 350px; height: 215px;}
      #home_video_html5_api {width: 350px; height: auto;}
    } /* End 415px breakpoint */

    @media screen and (max-width:354px) {/* smartphone style*/
      iframe {width: 310px; height: 190px;}
      #home_video_html5_api {width: 310px; height: auto;}
    } /* End 354px breakpoint */

    @media screen and (max-width:315px) {/* smartphone style*/
      iframe {width: 232px; height: 145px;}
      #home_video_html5_api {width: 232px; height: auto;}
      #abuselink {position: relative; top: 0.75em}
    } /* End 315px breakpoint */

    @media screen and (max-width:233px) {/* smartphone style*/
      iframe {width: 170px; height: 110px;}
      #home_video_html5_api {width: 170px; height: auto;}
    } /* End 233px breakpoint */

    @media screen and (max-width:172px) {/* smartphone style*/
      iframe {width: 110px; height: 80px;}
      #home_video_html5_api {width: 110px; height: auto;}
    } /* End 172px breakpoint */

  </style>
  <link href="http://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet" type="text/css">
  <link href="../css/ads.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/boilerplate.css"> 
  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38626596-1']);
    _gaq.push(['_setDomainName', 'roscoe.tv']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script src="../js/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="http://www.google.com/jsapi"></script>
  <script src="../js/jquery.horizontalNav.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="../js/video.js"></script>
  <!-- Deactivating for now these old scripts that were in earlier versions of the app. Keeping code intact in comment form in case we need to revive any of it later. -pm 2/22/13
  <script src="../js/jquery.animate-enhanced.min.js"></script>
  <script src="../js/jqm.globals.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script src="../js/jquery-1.4.2.min.js"></script>
  -->
  <script>
    $(document).ready(function(){
      window.scrollTo(0, 1);
     // This helps obscure browser elements on mobile devices to give the app more visual real estate onscreen. H/t dev Mark Hammonds at http://bit.ly/oFR2V5
      $('.nav-wrapper').horizontalNav();
    };
    }); // End ready
  </script>
  <script type="text/javascript">

$(document).ready(function(){
	var l = readCookie("latlng");
	//alert("three");
	if(l==null){
	document.getElementById("selectedDate").innerHTML = "";
	}else{
	document.getElementById("selectedDate").innerHTML = l;
	}

	});

	function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
	var c = ca[i];
	while (c.charAt(0)==' ') c = c.substring(1,c.length);
	if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
	}
	function setupVideo() {
	//window.alert("setupVideo");
	var qsParm = new Array();
	var query = window.location.search.substring(1);
	var parms = query.split('&');
	for (var i=0; i<parms.length; i++) {
	//alert(" Value = "+ i + " : " + parms[i]);
	var pos = parms[i].indexOf('=');
	if (pos > 0) {			
	var key = parms[i].substring(0,pos);
	var val = parms[i].substring(pos+1);
	qsParm[key] = val;
	}
	}
	var str=qsParm["flag"];
	var n= -1;

	try{
	n = str.search("youtube");
	}catch(err)
	{		
	}

	//alert("Arvind "+qsParm["flag"] + ":" + n);
	if(n >= 0)
	{
	document.getElementById("youtubeplayer").style.display = "block";
	document.getElementById("home_video_html5_api").style.display = "none";
	var youtubeP = document.getElementById("youtubeplayer");
	//youtubeP.src = qsParm["urlmp4"];
	youtubeP.src = decodeURIComponent(qsParm["urlmp4"]);
	// You will probably get your video name differently
	var videoName = decodeURIComponent(qsParm["urlmp4"]);
	//videoName = decodeURIComponent(videoName);
	//alert(qsParm["urlmp4"]);
	//alert(videoName);
	//window.alert("videoName "+qsParm["urlmp4"]);
	// Get all of the uri's we support
	var indexOfExtension = videoName.lastIndexOf(".");
	//window.alert("found index of extension " + indexOfExtension);
	var extension = videoName.substr(indexOfExtension, videoName.length - indexOfExtension);
	//window.alert("extension is " + extension);
	//var ogguri = encodeURI(videoName.replace(extension, ".ogv"));
	//var webmuri = encodeURI(videoName.replace(extension, ".webm"));
	//var mp4uri = encodeURI(videoName.replace(extension, ".mp4"));
	var ogguri = (videoName.replace(extension, ".ogv"));
	var webmuri = (videoName.replace(extension, ".webm"));
	var mp4uri = (videoName.replace(extension, ".mp4"));
	//window.alert(" URI is " + webmuri);
	// Get the video element
	var v = document.getElementById("home_video_html5_api");

	//window.alert(" media is " + v);

	// Test for support

	if (v.canPlayType("video/ogg")) {
	v.setAttribute("src", ogguri);
	//window.alert("can play ogg "+ogguri);
	}
	else if (v.canPlayType("video/mp4")) {
	v.setAttribute("src", mp4uri);
	//window.alert("can play mp4");
	}
	else if (v.canPlayType("video/webm")) {
	v.setAttribute("src", webmuri);
	//window.alert("can play webm");
	}
	else {
	window.alert("Can't play anything");
	}
	v.load();
	v.play();
	}
	else
	{
	document.getElementById("youtubeplayer").style.display = "none";
	document.getElementById("home_video_html5_api").style.display = "block";
	var videoName = qsParm["urlmp4"];
	//window.alert("videoName "+qsParm["urlmp4"]);
	// Get all of the uri's we support
	var indexOfExtension = videoName.lastIndexOf(".");
	//window.alert("found index of extension " + indexOfExtension);
	var extension = videoName.substr(indexOfExtension, videoName.length - indexOfExtension);
	//window.alert("extension is " + extension);
	var ogguri = decodeURIComponent(videoName.replace(extension, ".ogv"));
	var webmuri = decodeURIComponent(videoName.replace(extension, ".webm"));
	var mp4uri = decodeURIComponent(videoName.replace(extension, ".mp4"));
	//window.alert(" URI is " + webmuri);
	// Get the video element
	var v = document.getElementById("home_video_html5_api");
	if (v.canPlayType("video/ogg")) {
	v.setAttribute("src", ogguri);
	//window.alert("can play ogg "+ogguri);
	}
	else if (v.canPlayType("video/mp4")) {
	v.setAttribute("src", mp4uri);
	// window.alert("can play mp4");
	}
	else if (v.canPlayType("video/webm")) {
	v.setAttribute("src", webmuri);
	//window.alert("can play webm");
	}
	else {
	window.alert("Can't play anything");
	}
	v.load();
	v.play();
	}   
	}
  </script>
</head>
<body onload="setupVideo();" >
  <div class="contentpalette">
    <div class="Container16" id="loginbar">
      <img src="../img/rtvlogos/beta/bred.800.png" alt="Roscoe.TV logo">
    </div><!-- End loginbar-->
    <nav class="horizontal-nav">
      <ul class="navbar">
        <li class="navlink" id="hedslink"><a href="local.html" target="_self">watch</a></li>
        <li class="navlink" id="reportlink"><a href="report.html" target="_self">report</a></li>
        <li class="navlink" id="aboutus"><a href="about.html" target="_self">about</a></li>
        <!-- <li class="navlink" id="search"><a href="#footersearch" target="_self">search</a></li> End searchnav -->
      </ul>
    </nav> <!-- End horizontal-nav --> 
    <nav class="secondarynavs">
      <ul class="subnavbar">
        <li class="subnavlink" id=""><a href="local.html" target="_self">#local</a></li>
        <li class="subnavlink" id=""><a href="US.html" target="_self">#u.s.</a></li>
        <li class="subnavlink" id=""><a href="money.html" target="_self">#money</a></li>
        <li class="subnavlink" id=""><a href="world.html" target="_self">#world</a></li>
        <li class="subnavlink" id=""><a href="sports.html" target="_self">#sports</a></li>
        <li class="subnavlink" id=""><a href="style.html" target="_self">#style</a></li>
      </ul>
    </nav> <!-- End secondarynavs --> 



    <div class="contentcontainer2">


    <div class="spontextad">
      <h3>SPONSORED MESSAGE FROM STARK INDUSTRIES:</h3>
      <p>At Stark, we believe in better living through technology. Learn more at <a href="http://starkindustries-tonystark.tumblr.com/" target="self" onClick="_gaq.push(['_trackEvent', 'Sponsorships', 'Sponsor Link Clickthrough', 'Sponsor1']);">stark.com.</a></p>
    </div><!-- End spontextad -->


    <div id="mainWrapper">
      <section id="wrapper">
        <header id="banner"><a href="index.html"><span class="logo"> </span></a>
	  <script>
						// The format it likes, and Date has awful format support...
						Date.prototype.getControlFmt = function() {
						var dd = "" + d.getDate();
						var mm = "" + (d.getMonth() + 1);
						var yy = d.getFullYear();
						if (dd.length==1) { dd = "0" + dd; }
						if (mm.length==1) { mm = "0" + mm; }
						return yy + "-" + mm + "-" + dd;   
						};	     
						var d = new Date();
						document.getElementById("selectedDate").innerHTML = d.getControlFmt();
					</script>
				</div>
			</header>
	   </section>
		<div id="main">
			<section class="bt">
				<article id="left">
				</article>
				<article id="right">
				<!--report pannel start here-->
				<div class="reportPannel" id="one">
				<div class="Cwidth100" id="two">
				<figure>
				<figcaption></figcaption>
				</figure>
				<!--<iframe id="videoiFrame" class="youtube-player" type="text/html" width="640" height="385"  frameborder="0"></iframe>-->
				<video id="home_video_html5_api" class="vjs-tech" controls preload="auto" width="475" height="auto"  poster ="images/logoPortrait.png">
				</video>
				<iframe id="youtubeplayer"  class="youtube-player" type="text/html" width="475" height="385" src="" frameborder="0">
				</iframe>
				<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><a class="facebook"  style= "text-indent : -9999px" rel="nofollow"  onclick="fbs_click()" target="_blank"><img src="../img/fbicon.jpg" alt="Share on Facebook"></a>
				</script><a href="https://twitter.com/share" class="twitter" data-related="jasoncosta" data-lang="en" wrap_links=true data-size="large" data-count="1" target="_blank"><img src="../img/twitter.jpg"></a>
<a href="mailto:?subject=Sharing a story from Roscoe.TV&body=[sub]" onclick="this.href = this.href.replace('[sub]',encodeURIComponent(window.location))"><img src="../img/email.jpg" alt="mov" style="margin-right:5px;"></a>
<a href="mailto:info@roscoelabs.com?subject=Hey, admin! This video is abusive!" target="_new" id="abuselink"> report abuse </a></div></div></header></hgroup></li><span class="span_detail"><h5></h5></span></li><span class="span_detail"><h5></h5></span>
				</div>
				<div id="response"></div>
				<!--report pannel end here--> 
				</article>
				<article id="right" class="right">
				</article>
			</section>
		</div>
	</div>



    </div><!-- End contentcontainer2 -->


<!--

    <div class="footer">
      <div id="footersearch">
          <script>
            (function() {
            var cx = '018161908375867075555:h4qdiqecrq8';
            var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:search></gcse:search>
      </div> <!-- End footersearch
    </div> <!-- End footer-->


  </div><!-- This tag closes out the div contentpalette"-->    
</body>
</html>
