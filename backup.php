<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/Gcare/configurations/dbconnect.php');
?>
<html>

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="http://localhost/Gcare/public/css/surfworld.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="instantico.ico" />
<link href="http://www.google.com/uds/css/gsearch.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/Gcare/public/css/main.css" type="text/css" rel="stylesheet"></link>
<link href="http://localhost/Gcare/public/css/scroll.css" type="text/css" rel="stylesheet"></link>
<link href="http://localhost/Gcare/public/js/jquery-1.9.1.js" type="text/css"></link>
<link href="http://localhost/Gcare/public/js/jquery.mousewheel.js" type="text/javascript" ></link>
<link href="http://localhost/Gcare/public/js/jquery.mwheelIntent.js" type="text/javascript"></link>
<link href="http://localhost/Gcare/public/c=js/jquery.jscrollpane.min.js" type="text/javascript"></link>
</head>
    <body>
<form name="form1" method="post" action="default.aspx" id="form1">
     <div>
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTkyOTExMjI5MmRkJvy4Z3P89ClPLIVQpRVkso1mdO0=" />
                </div>

                <div>

                <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBALe87TJAQL3gp/8DwLk3bfVDQLk3c9sOcvrorjsloPOJXbTKXbhHDL45GQ=" />
                </div>
          </form>
    <div id="header">

    </div>
    <div id="content2">
    <div id="menubar">
<div >
                    <div id="divLoading">
                    <img src="/Images/progress.gif" alt="Loading Icon" />
                    </div>
                    <div style="display:none">
                    <div id="emptymessage" style="display:none"></div>
                    <span style="margin-left:50px"><span id="Label1"></span></span>
                    </div>
                </div>
                <div id="RadioDiv">
                <span id="suggestion2" class="suggestion2" style="float:left;display:none">
                    </span>
                    Where are you?
                    <input name="Joel" type="text" id="Joel" class="mytextbox" AutoComplete="On"  />
                    <a title="Clear the textbox to type something new." 
					onclick="clearTbox()" href="#" style="padding-left:5px;font-size:11px;font-style:italic;padding-right:5px;">
					Clear</a> |
                    <span id="Rdio" style="padding:10px" >
                        <span>
                            <span style="font-weight:bold">Search nearest:</span>
                            <input type="radio" name="asdf" value="hotels" style="margin-left:5px" checked="checked"/> 
							<span id="hotels">Hotels</span>
                            <input type="radio" name="asdf" value="restaurants" style="margin-left:5px"/> 
							<span id="foods">Foods</span>
                            <input type="radio" name="asdf" value="bars" style="margin-left:5px"/> <span id="bars">Bars</span>
                        </span> 
                    </span>
					 <?php
                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hi ".$_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
                     ?>
                </div>

                     </div>
                    <div id="user">
                    <?php

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <a href="http://localhost/Gcare/scripts/comment.php">Leave a Comment</a>&nbsp;&nbsp;
						|<a href="http://localhost/Gcare/scripts/logout.php" id="log" 
						onclick="alert('You have succesfully logged out of Gcare.Bye Bye')">
                        Log out</a>
                        &nbsp;|&nbsp;<a href="http://localhost/Gcare/pages/account.php" id="acc" >Account</a>
                    </div>
                    <span id="suggestion" style="color:blue;width:100%"></span>
                    <div class="divleft" style="height:0px;width:260px;font-size:15px">
                                    <div id="head">
                                        <span class="headertitle">Search Results</span>
                                        <img src="/Images/drag1.png" class="mylove" alt="drag icon" title="Drag me around." />
										<br />
                                    <span id="love" style="font-size:.80em;font-style:italic;color:black;display:none">
									 double-click a location on the map to update search results.</span>
                                    </div>
                                    <div id="empty"></div>
<script>
$(function()
{
	$('#results').jScrollPane();
});</script>
                                    <div id="results" >
                                        <div align="left" style="padding-left:4px;padding-top:2px">
                                            <p><span style="color:Red;font-size:14px" id="notify1"></span><span id="notify2" style="color:red;font-size:14px;font-weight:bold"></span></p>
                                        </div>
                                        <div id="searchwell"></div>
                                    </div>
                                </div>

                      <div id="map" style="width: 850px; height: 700px; margin-left:20px; background-color:#ebe9d4;text-align:center; margin-top:50px; ">
                    <span id="IEAdjust" ></span>
                                <div id="Map"></div>
                                <input name="aga" type="text" id="aga" style="display:none" /><input name="aga2" type="text" id="aga2" style="display:none"
                                 value="Eldoret Africa" />
                                <br />

                                <div align="center" >
                                <div style="margin-left:120px">

                                </div>


                                </div>

                                <div id="selected"></div>
                    <script src="http://yui.yahooapis.com/2.8.2r1/build/yahoo/yahoo-min.js" type="text/javascript"></script>
                            <script src="http://yui.yahooapis.com/2.8.2r1/build/json/json-min.js" type="text/javascript"></script>
                            <script src="http://localhost/Gcare/public/js/min2.js" type="text/javascript"></script>
                            <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                            <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAEPWiV_nWB2HqA6XsEx06kxSZsdhQ5D_9vlmqi9R_NR-i9aELjBTaSPcIPBrp8Btao0WARcdOVpp9RA"></script>
                            <script src="http://localhost/Gcare/public/js/min1.js" type="text/javascript"></script>
                            <script src="http://localhost/Gcare/public/js/instantsearch.js?y=1" type="text/javascript"></script>

                             <script type="text/javascript">
                    //<![CDATA[
                    loading();//]]>
                      </script>
  </div>
                      </div>

<div id="fb-root"></div>
<div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
            FB.init({ appId: '134650156555841', status: true, cookie: true,
            xfbml: true
            });
            };
            (function() {
            var e = document.createElement('script');
            e.type = 'text/javascript';
            e.src = document.location.protocol +
            '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
            } ());

            var uservoiceOptions = {
            /* required */
            key: 'surfdworld',
            host: 'surfdworld.uservoice.com',
            forum: '81631',
            showTab: true,
            /* optional */
            alignment: 'left',
            background_color: '#f00',
            text_color: 'white',
            hover_color: '#06C',
            lang: 'en'
            };

            function _loadUserVoice() {
            var s = document.createElement('script');
            s.setAttribute('type', 'text/javascript');
            s.setAttribute('src', ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.uservoice.com/javascripts/widgets/tab.js");
            document.getElementsByTagName('head')[0].appendChild(s);
            }
            _loadSuper = window.onload;
            window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };


            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17403473-3']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

            
            </div>
         

                       

                        
 



 <div id="footer">
     Gcare &nbsp; | &nbsp; 2013
    <p style="font-size:.95em">Developed by&nbsp;&nbsp; | &nbsp;&nbsp;
            Terer C. Mercy **** powered by Google.</p>

   </div>
   


        <script type="text/javascript">
            window.fbAsyncInit = function() {
            FB.init({ appId: '134650156555841', status: true, cookie: true,
            xfbml: true
            });
            };
            (function() {
            var e = document.createElement('script');
            e.type = 'text/javascript';
            e.src = document.location.protocol +
            '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
            } ());

            var uservoiceOptions = {
            /* required */
            key: 'surfdworld',
            host: 'surfdworld.uservoice.com',
            forum: '81631',
            showTab: true,
            /* optional */
            alignment: 'left',
            background_color: '#f00',
            text_color: 'white',
            hover_color: '#06C',
            lang: 'en'
            };

            function _loadUserVoice() {
            var s = document.createElement('script');
            s.setAttribute('type', 'text/javascript');
            s.setAttribute('src', ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.uservoice.com/javascripts/widgets/tab.js");
            document.getElementsByTagName('head')[0].appendChild(s);
            }
            _loadSuper = window.onload;
            window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };


            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17403473-3']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
<?php
function chart(){
	require_once "../libchart/classes/libchart.php";

$dataset = new XYDataSet();

$dataset->addPoint(new Point('Nairobi', 340)); 
$dataset->addPoint(new Point('Kisumu', 440)); 
$dataset->addPoint(new Point('Eldoret', 400)); 
$dataset->addPoint(new Point('Mombasa', 380)); 
$dataset->addPoint(new Point('Nakuru', 370)); 

$chart = new PieChart();
$chart->setDataSet($dataset);

$chart->setTitle("Member Distribution");
$chart->render("test.png");

}
?>