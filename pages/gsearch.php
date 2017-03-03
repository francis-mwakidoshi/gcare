<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head id="Head1"><meta name="description" content="Instant map search for the nearest hotels, restaurants, bars, gas, etc. from any location around the world." /><meta name="keywords" content="instant, search, search location, weather, local weather, local time, local news, Google map, temperature, points of interest, location, current weather, instant search, instant map search, hotels, bars, clinics, foods, parks, cars" /><meta name="google-site-verification" content="MsSwzODW7Jbt-OOCTl0BPyaKz-CwInc0r2qTp_Uhb0E" /><meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>
	The fastest way to search for the nearest bars, hotels, clinics, etc. from any location around the world.
</title><link href="/CSS/SurfTheWorld.v20.css" rel="stylesheet" type="text/css" /><link rel="shortcut icon" href="instantico.ico" /><link href="http://www.google.com/uds/css/gsearch.css" rel="stylesheet" type="text/css" /></head>
    <body>
        <form name="form1" method="post" action="default.aspx" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTkyOTExMjI5MmRkJvy4Z3P89ClPLIVQpRVkso1mdO0=" />
</div>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBALe87TJAQL3gp/8DwLk3bfVDQLk3c9sOcvrorjsloPOJXbTKXbhHDL45GQ=" />
</div>
        <div id="container">
            <div id="searchbox">

                <span style="float:right">
                <a class="addthis_button" href="http://addthis.com/bookmark.php?v=250&amp;username=xa-4b724e5d2420f433"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4b724e5d2420f433"></script><br />
                <a href="#?w=400" rel="popup_name" class="poplight">About</a>
                <br />
                <a href="#?w=400" rel="Div1" class="poplight">Features</a>
                </span>

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

                    <table id="loe">
                    <tr >
                    <td><img src="/Images/instalogo2.png" id="Logo" alt="Logo" /></td>
                    <td class="rarat">Instant map search for nearest hotels, bars, foods, etc. from any location.</td>
                    </tr>
                    </table>
                    <span id="suggestion2" class="suggestion2" style="float:left;display:none">
                    </span>
                    <span class="hint">Start typing a location or zip code, press enter to auto-finish.......</span><br />

                    <input name="Joel" type="text" id="Joel" class="mytextbox" AutoComplete="Off" style="font-size:18px;height:18px;width:320px;" />

                    <a title="Clear the textbox to type something new." onclick="clearTbox()" href="#" style="padding-left:5px;font-size:11px;font-style:italic;padding-right:5px;">Clear</a> |

                    <span id="Rdio" style="padding:10px" >
                        <span>
                            <span style="font-weight:bold">Show nearest:</span>
                            <input type="radio" name="asdf" value="hotels" style="margin-left:5px" checked="checked"/> <span id="hotels">Hotels</span>
                            <input type="radio" name="asdf" value="restaurants" style="margin-left:5px"/> <span id="restaurants">Foods</span>
                            <input type="radio" name="asdf" value="bars" style="margin-left:5px"/> <span id="bars">Bars</span>
                        </span>

                        <span id="outer_more" style="margin-left:10px">
                         <span id="morebuttoner" title="More categories for nearest points of interest" style="width:300px"><span id="more_innerer" >More choices >>></span></span>
                        </span>

                        <div id="box">
                            <div style="float:right;font-weight:bold;"><a href="#" id="CloseLink" style="color:blue" title="Close this box.">Close</a></div> <br />
                            Select a nearest point below or<br />
                            <b>enter your own:</b><br />
                            <input id="cj" type="text" onclick="return false"/> <input type="radio" name="asdf" value=""/>
                            <br /><span class="sample">Ex. Train Station, Best Buy.....</span><br /><br />
                            <input type="radio" name="asdf" value="bookstores"/> <span id="bookstores">Books</span>
                            <input type="radio" name="asdf" value="free-wifi"/> <span id="free-wifi">Wifis</span><br /><br />
                            <input type="radio" name="asdf" value="car-shops"/> <span id="car-shops">Cars</span>
                            <input type="radio" name="asdf" value="shopping-malls"/> <span id="shopping-malls">Malls</span><br /><br />
                            <input type="radio" name="asdf" value="recreational-parks"/> <span id="recreational-parks">Parks</span>
                            <input type="radio" name="asdf" value="doctor-clinics"/> <span id="doctor-clinics">Clinics</span><br /><br />
                            <input type="radio" name="asdf" value="apartments"/><span id="apartments">Apartments</span>
                            <input type="radio" name="asdf" value="real-estate"/> <span id="real-estate">Realty</span> <br /><br />
                            <input type="radio" name="asdf" value="parking-garage"/> <span id="parking-garage">Parking</span>
                            <input type="radio" name="asdf" value="movie-house"/> <span id="movie-house">Movies</span><br /><br />
                            <input type="radio" name="asdf" value="hospitals"/> <span id="hospitals">Hospitals</span>
                            <input type="radio" name="asdf" value="coffee-shops"/> <span id="coffee-shops">Coffee</span><br /><br />
                            <input type="radio" name="asdf" value="banks"/> <span id="banks">Banks</span>
                            <input type="radio" name="asdf" value="bank-atm"/> <span id="bank-atm">ATMS</span><br /><br />
                            <input type="radio" name="asdf" value="airports"/> <span id="airports">Airports</span>
                            <input type="radio" name="asdf" value="high-schools"/> <span id="high-schools">Schools</span><br /><br />
                            <input type="radio" name="asdf" value="university"/> <span id="university">Universities</span>
                            <input type="radio" name="asdf" value="fitness-gyms"/> <span id="fitness-gyms">Gym</span>
                            <br /><br />
                        </div>
                    </span>

            </div>

            <span id="suggestion" style="color:blue;width:100%">
            </span>
        </div>

            <div class="divleft" style="height:0px;width:260px;font-size:15px">
                <div id="header">
                    <span class="headertitle">Search Results</span><img src="/Images/drag1.png" class="mylove" alt="drag icon" title="Drag me around." /><br />
                <span id="love" style="font-size:.80em;font-style:italic;color:black;display:none">Hint: Scroll or double-click a location on the map to update search results.</span>
                </div>
                <div id="empty"></div>

                <div id="results" >
                    <div align="left" style="padding-left:4px;padding-top:2px">
                        <p><span style="color:Red;font-size:14px" id="notify1"></span><span id="notify2" style="color:red;font-size:14px;font-weight:bold"></span></p>
                    </div>
                    <div id="searchwell"></div>
                </div>
            </div>



            <span id="IEAdjust" ></span>
            <div id="Map"></div>
            <input name="aga" type="text" id="aga" style="display:none" /><input name="aga2" type="text" id="aga2" style="display:none" value="Los Angeles,Ca" />
            <br />

            <div align="center" >
            <div style="margin-left:120px">
            <fb:like-box profile_id="158175044205826" stream="false" connections="0" layout="standard">
            </fb:like-box>
            </div>
            <p style="font-size:.95em">Created by:
            <a href="http://jcapillo.me" target="_blank">Joel Capillo</a><br /><br /> Friends of: <a href="http://chatsoul.com/" target="_blank">Chatsoul</a> and <a href="http://jamafriend.com" target="_blank">Jamafriend</a>
            <br />Powered by: <a href="http://maps.google.com/">Google Map</a>,
            <a href="http://yuilibrary.com" target="_blank">YUI Library</a>,
            <a href="http://www.asp.net/" target="_blank" >ASP.NET</a>, and <a href="http://jquery.com/" target="_blank" >Jquery</a></p>
            </div>

        </div>

        <div id="selected"></div>

        <div id="popup_name" class="popup_block">
            <h2>What's this about?</h2>
            <p>Have you experienced looking for a nearest clinic from your apartment? Do you want to know the nearest available parking areas in a certain location?
            Are you looking for some nearest bars from your hotel?
            Are you searching for some "wifi signals" on your destination?
            These are just some questions "Instamapsearch" can answer.
            Actually, I created this because I need to know the surrounding Filipino fastfood named "Jollibee" in Sacramento. I went to "Google Map" and it took me a little bit of time to figure out how to search for the latter.
            So I thought what if I create an application that is dedicated and simple enough to search for some nearest interesting points on a certain location. </p>
        </div>

        <div id="Div1" class="popup_block">
            <h2>Some cool features:</h2>
                <ul style="padding:10px">
                <li> Auto-suggest search for location as soon as you type.</li>
                <li>Supports customizable search just by entering your own search term. To do this, click "More choices..." and enter the name of your own customized point. </li>
                <li>Supports "Zip Code" to search for location.</li>
                <li> Updates search results just by dragging or double-clicking the map. </li>
                <li>Block-by-block notification for current location on the map.</li>
            </ul>
        </div>

        <script src="http://yui.yahooapis.com/2.8.2r1/build/yahoo/yahoo-min.js" type="text/javascript"></script>
        <script src="http://yui.yahooapis.com/2.8.2r1/build/json/json-min.js" type="text/javascript"></script>
        <script src="/WorkJs/zxml.v1.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyBI6vqjpRmfVHOjI5bLtilYp4xGbpwf-8Q"></script>
        <script src="/WorkJs/CombinedScript.min.v2.js" type="text/javascript"></script>
        <script src="/WorkJs/instamapsearch.v31.js?y=1" type="text/javascript"></script>



<script type="text/javascript">
//<![CDATA[
loading();//]]>
</script>
</form>

        <div id="fb-root"></div>

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
