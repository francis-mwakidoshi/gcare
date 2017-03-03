google.load("search", "1");

var themarkericon;
var themarkerclass;
var ref;
var isclick = true;
var suggestion;
var suggestion2;
var sugdat;
var sugdat2;
var directions;
var directionsService = new google.maps.DirectionsService();
var markersArray = [];
var DIR1now;
var DIR1b4;
var DIR2now; 
var DIR2b4;
var ne;
var sw;
var tabkey;
var regex1;
var timer;
var directionDisplay;
var oXHR = null;
var blnRequestsEnabled = true;
var blnRequestsEnabled1 = true;
var publisher_id = "pub-5489856325066669";
var geocoder;
var map;
var gLocalSearch;
var gSelectedResults = [];
var gCurrentResults = [];
var gInfoWindow;
var infowindow;
var marker;
var ref1;
var locale;
var infowindow1;
var weathermarker;

function loading()
{
    var b = document.getElementById("aga2").value;
    putmap(b);
    onpostback();
    CreateHiddenRadio()
}

function TransformSearchwell()
{
    var b = document.getElementById("results");
    var c = document.getElementById("empty");
    b.style.height = "610px";
    b.className = "searchwelltransform";
    c.innerHTML = ""
}


var manIcon = new google.maps.MarkerImage("../Images/man.png", new google.maps.Size(45, 55), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var WeatherIcon = new google.maps.MarkerImage("../Images/icons/cloudsun.png", new google.maps.Size(58, 58), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var gYellowIcon = new google.maps.MarkerImage("../Images/icons/cluster3.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var ClinicIcon = new google.maps.MarkerImage("../Images/icons/doctor.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var HotelIcon = new google.maps.MarkerImage("../Images/icons/hotel.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var FoodIcon = new google.maps.MarkerImage("../Images/icons/restaurant.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var BarsIcon = new google.maps.MarkerImage("../Images/icons/bar.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var BookIcon = new google.maps.MarkerImage("../Images/icons/bookstore.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var WifiIcon = new google.maps.MarkerImage("../Images/icons/wifi.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var WifiIcon = new google.maps.MarkerImage("../Images/icons/wifi.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var CarIcon = new google.maps.MarkerImage("../Images/icons/car.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var MallIcon = new google.maps.MarkerImage("../Images/icons/shoppingmall.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var ParkIcon = new google.maps.MarkerImage("../Images/icons/park.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var ApartmentIcon = new google.maps.MarkerImage("../Images/icons/apartment.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var RealtyIcon = new google.maps.MarkerImage("../Images/icons/realestate.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var ParkingIcon = new google.maps.MarkerImage("../Images/icons/parking.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var MovieIcon = new google.maps.MarkerImage("../Images/icons/cinema.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var HospitalIcon = new google.maps.MarkerImage("../Images/icons/hospital.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var CoffeeIcon = new google.maps.MarkerImage("../Images/icons/coffee.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var BankIcon = new google.maps.MarkerImage("../Images/icons/bank.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var AtmIcon = new google.maps.MarkerImage("../Images/icons/atm.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var AirportIcon = new google.maps.MarkerImage("../Images/icons/airport.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var SchoolIcon = new google.maps.MarkerImage("../Images/icons/school.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var UniversityIcon = new google.maps.MarkerImage("../Images/icons/university.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
var GymIcon = new google.maps.MarkerImage("../Images/icons/gym.png", new google.maps.Size(38, 38), new google.maps.Point(0, 0), new google.maps.Point(6, 20));

function ExecuteRadioSearch(b)
{
    $("#Rdio input").click(function()
    {
        if (infowindow) {
          infowindow.close()
        }
        
        if (b == map.getCenter())
        {
            TransformSearchwell();
            var h = $("#cj").val();
            var m = document.getElementById("loc");
            var k = $("#RadioDiv input:radio:checked").val();
            
            if (k != "" && k != undefined)
            {
                var d = $("#" + k).text();
                ChooseNearPoint(d);
                var g = k;
                var j = g.indexOf("-");
                while (j != -1)
                {
                    g = g.replace("-", " ");
                    j = g.indexOf("-");
                }
                GetNearbyPlaces(b, g);
                loadJSON(b.lat(), b.lng());
                var l = document.getElementById("notify1");
                l.innerHTML = CountResult(d);
                m.style.display = "";
                TransformSearchwell()
            }
            else
            {
                if (k == undefined && h.length == 0)
                {
                return
                }
                else
                {
                    if (h.length != 0)
                    {
                    ChooseNearPoint(k);
                    GetNearbyPlaces(b, h);
                    loadJSON(b.lat(),
                    b.lng());
                    var l = document.getElementById("notify1");
                    l.innerHTML = CustomResult(b);
                    m.style.display = "";
                    TransformSearchwell()
                    }
                    else
                    {
                    var f = document.getElementById("results");
                    var i = document.getElementById("empty");
                    f.className = "searchwellinvisible";
                    m.style.display = "none";
                    i.innerHTML = "<br />Ooops,I can't recognize what you're searching.";
                    return
                    }
                }
            }
        }
        else
        {
            return
        }
    }
    )
}

function ChooseNearPoint(b)
{
    switch (b)
    {
        
       case "Clinics": themarkerclass = "clinicresult"; themarkericon = ClinicIcon; break;
        case "Hotels": themarkerclass = "hotelresult"; themarkericon = HotelIcon; break;
        case "Foods": themarkerclass = "foodresult"; themarkericon = FoodIcon; break;
        case "Bars": themarkerclass = "barresult"; themarkericon = BarsIcon; break;
        case "Books": themarkerclass = "bookresult"; themarkericon = BookIcon; break;
        case "Wifis": themarkerclass = "wifiresult"; themarkericon = WifiIcon; break;
        case "Cars": themarkerclass = "carresult"; themarkericon = CarIcon; break;
        case "Malls": themarkerclass = "mallresult"; themarkericon = MallIcon; break;
        case "Parks": themarkerclass = "parkresult"; themarkericon = ParkIcon; break;
        case "Apartments": themarkerclass = "apartmentresult"; themarkericon = ApartmentIcon; break;
        case "Realty": themarkerclass = "realtyresult"; themarkericon = RealtyIcon; break;
        case "Parking": themarkerclass = "parkingresult"; themarkericon = ParkingIcon; break;
        case "Movies": themarkerclass = "movieresult"; themarkericon = MovieIcon; break;
        case "Hospitals": themarkerclass = "hospitalresult"; themarkericon = HospitalIcon; break;
        case "Coffee": themarkerclass = "coffeeresult"; themarkericon = CoffeeIcon; break;
        case "Banks": themarkerclass = "bankresult"; themarkericon = BankIcon; break;
        case "ATMS": themarkerclass = "atmresult"; themarkericon = AtmIcon; break;
        case "Airports": themarkerclass = "airportresult"; themarkericon = AirportIcon; break;
        case "Schools": themarkerclass = "schoolresult"; themarkericon = SchoolIcon; break;
        case "Universities": themarkerclass = "universityresult"; themarkericon = UniversityIcon; break;
        case "Gym": themarkerclass = "gymresult"; themarkericon = GymIcon; break;
        case "": themarkerclass = "customresult"; themarkericon = gYellowIcon; break
        
    }
}

function ExecuteRadioSearcher(b)
{
    $("#Rdio input").click(function()
    {
        if (infowindow) {
          infowindow.close()
        }
        
        if (ref == 0)
        {
        
            ref = 1;
            TransformSearchwell();
            
            var h = $("#cj").val();
            var m = document.getElementById("loc");
            var k = $("#RadioDiv input:radio:checked").val();
            
            if (k != "" && k != undefined)
            {
                var d = $("#" + k).text();
                ChooseNearPoint(d);
                var g = k;
                var j = g.indexOf("-");
                while (j != -1)
                {
                g = g.replace("-", " ");
                j = g.indexOf("-")
                }
                GetNearbyPlaces(b, g);
                loadJSON(b.lat(), b.lng());
                var l = document.getElementById("notify1");
                l.innerHTML = CountResult(d);
                m.style.display = "";
                TransformSearchwell()
            }
            else
            {
                if (k == undefined && h.length == 0)
                {
                 return
                }
                else
                {
                    if (h.length != 0)
                    {
                        ChooseNearPoint(k);
                        GetNearbyPlaces(b, h);
                        loadJSON(b.lat(), b.lng());
                        var l = document.getElementById("notify1");
                        l.innerHTML = CustomResult(b);
                        m.style.display = "";
                        TransformSearchwell()
                    }
                    else
                    {
                        var f = document.getElementById("results");
                        var i = document.getElementById("empty");
                        f.className = "searchwellinvisible";
                        m.style.display = "none";
                        i.innerHTML = "<br />Ooops, I can't recognize what you're searching.";
                        return
                    }
                }
            }
        }
        else
        {
            return;
        }
    }
    )
}



function CustomResult()
{
 return '<b>"Result"</b> near ';
}


function SearchWhileMoving(l)
{
    var h = $("#cj").val();
    var n = document.getElementById("loc");
    
    var k = $("#RadioDiv input:radio:checked").val();
    
    if (k != undefined && k != "")
    {
        var d = $("#" + k).text();
        ChooseNearPoint(d);
        var g = k;
        var j = g.indexOf("-");
        while (j != -1)
        {
        g = g.replace("-", " ");
        j = g.indexOf("-")
        }
        if (isclick == true)
        {
        GetNearbyPlaces(l, g)
        }
        loadJSON(l.lat(), l.lng());
        
        var m = document.getElementById("notify1");
        m.innerHTML = CountResult(d);
        n.style.display = "";
        
        TransformSearchwell()
    }
    else
    {
        if (k == "" && h.length != 0)
        {
            ChooseNearPoint(k);
            if (isclick == true)
            {
            GetNearbyPlaces(l, h)
            }
            loadJSON(l.lat(), l.lng());
            var m = document.getElementById("notify1");
            m.innerHTML = CustomResult();
            n.style.display = "";
            TransformSearchwell()
        }
        else
        {
            n.style.display = "none";
            var f = document.getElementById("results");
            var i = document.getElementById("empty");
            f.className = "searchwellinvisible";
            i.innerHTML = "";
            return
        }
    }
}


function GetNearbyPlaces(c, d)
{
    gLocalSearch.setCenterPoint(c);
    gLocalSearch.setResultSetSize(google.search.Search.LARGE_RESULTSET);
    gLocalSearch.execute(d)
}

function hideloading()
{
    var b = document.getElementById("divLoading");
    b.style.display = "none"
}


function showloading()
{
    var b = document.getElementById("divLoading");
    b.style.display = "block"
}


function CreateCenterMarkerOnSearch(c){
    var searchTerm = $("#RadioDiv input:radio:checked").val();
    if (infowindow){
        infowindow.close()
    }
    if (marker){
        marker.setMap(null)
    }
    if (weathermarker) {
        weathermarker.setMap(null)
    }
    marker = new google.maps.Marker({ icon: manIcon, position: c, map: map });
    if (suggestion) {
       var d = "<p>Showing nearest <b>"+searchTerm+"</b> in <span style='color:#660000'>"+suggestion+"</span>.<br />Double-click or drag the map to change your location.</p>";
       if(searchTerm.length == 0){
          d = "<p>You're in <span style='color:#66000'> " + suggestion + ".</span><br />Double-click or drag the map to change your location.</p>";
       }
       infowindow = new google.maps.InfoWindow({ content: d });
       infowindow.open(map, marker);
    }
}

function CreateCenterMarker(c) {
    if (infowindow) {
        infowindow.close()
    }
    if (marker) {
        marker.setMap(null)
    }
    marker = new google.maps.Marker({
               icon: manIcon, position: c, map: map
             });
    google.maps.event.addListener(marker, "mouseover",
    function() { if (infowindow) {
        infowindow.close()
    }
    if (locale == null || !locale) {
         loadJSONer(c.lat(), c.lng())
    }
    else {
        infowindow = new google.maps.InfoWindow({ content: locale });
        infowindow.open(map, marker)
     }})
}

function loadsearch() {
    gLocalSearch = new GlocalSearch();
    gLocalSearch.setSearchCompleteCallback(null, OnLocalSearch);
}

function loadJSONer(c, i) {
    if (blnRequestsEnabled1) {
        try { if (!oXHR) { oXHR = zXmlHttp.createRequest() } else {
              if (oXHR.readyState != 0) {
                  oXHR.abort()
                } }
        var h = { lat: c, lon: i };
        oXHR.open("post", "/samplenewsticker/GetLocation.aspx", true);
        oXHR.onreadystatechange = function() {
        if (oXHR.readyState == 4) {
            var j = oXHR.responseText;
            var k = YAHOO.lang.JSON.parse(j);
        if (k.length != 0) {
            var m = "<p>You're located @<span style='color:red'> " + k + ".</span><br />Double-click or drag the map to change your location.</p>";
            infowindow = new google.maps.InfoWindow({ content: m });
            locale = m;
            infowindow.open(map, marker)
        }
        else {
            var l = "Point(" + c + "," + i + ")<br />Double-click or drag the map to change your location.";
            var m = "<p>" + l + "</p>";
            infowindow = new google.maps.InfoWindow({ content: m });
            locale = m; infowindow.open(map, marker)
        } } };
            var b = YAHOO.lang.JSON.stringify(h);
            oXHR.send(b) }
            catch (d) {
             blnRequestsEnabled1 = false }
        }
        else {
            var f = "Point(" + c + "," + i + ")<br />Double-click or drag the map to change your location.";
            var g = "<p>" + f + "</p>";
            infowindow = new google.maps.InfoWindow({ content: g });
            locale = g;
            infowindow.open(map, marker) }
    }

function loadJSON(c, f) {
         if (blnRequestsEnabled) {
            try { if (!oXHR) {
                       oXHR = zXmlHttp.createRequest() }
                   else {
                          if (oXHR.readyState != 0) {
                            oXHR.abort()
                        }
                    }
                     var e = { lat: c, lon: f };
                     oXHR.open("post", "/samplenewsticker/GetLocation.aspx", true);
                     oXHR.onreadystatechange = function() {
                     if (oXHR.readyState == 4) {
                         var h = oXHR.responseText;
                         var i = YAHOO.lang.JSON.parse(h);
                         var g = document.getElementById("notify2");
                     if (i.length != 0) {
                        g.innerHTML = i
                    }
                     else {
                         g.innerHTML = "Point(" + c + "," + f + ")<br />"
                    }
                    } };
                    var b = YAHOO.lang.JSON.stringify(e); oXHR.send(b) } catch (d) {
                    blnRequestsEnabled = false } }
                     else {
                        a.innerHTML = "Point(" + c + "," + f + ")<br />"
                        }
                    }

function putmap(b)
{
    showloading();
    geocoder = new google.maps.Geocoder();
    addToMap(b)
}

function addToMap(c)
{
    var b = c;
    ref1 = 0;
    geocoder.geocode({ address: b }, function(g, f) {
        if (f == google.maps.GeocoderStatus.OK) {
            var d = g[0].geometry.location;
            directionDisplay = new google.maps.DirectionsRenderer();
            var e = { zoom: 11, center: d, mapTypeId: google.maps.MapTypeId.ROADMAP };
            map = new google.maps.Map(document.getElementById("Map"), e);
            directionDisplay.setMap(map);
            $("#merc").focus();
            $("#merc").keyup(primaryFunction);
            $("#merc").submit(primaryFunction);
            ExecuteRadioSearch(map.getCenter());
            CreateCenterMarker(map.getCenter());
            google.maps.event.addListener(map, "idle", function() {
            locale = null;
            var h = map.getCenter();
            ExecuteRadioSearch(h);
            SearchWhileMoving(h) });
            
            google.maps.event.addListener(map, "center_changed",
            function() { locale = null;
            var h = map.getCenter();
            CreateCenterMarker(h);
            ref1 = 1 });
            
            google.maps.event.addListener(map, "dblclick",
            function() { isclick = true;
            locale = null;
            var h = map.getCenter();
            SearchWhileMoving(h) });
            
            google.maps.event.addListener(map, "dragend",
            function() {
            isclick = true;
            locale = null;
            var h = map.getCenter();
            SearchWhileMoving(h) });
            
            openInfoWindow();
            var searchTerm = $("#RadioDiv input:radio:checked").val();
            var content = "<p>Showing nearest <b>"+searchTerm+"</b> in <span style='color:#660000'>"+b+"</span>.<br />Drag the map to change your location.</p>"
            infowindow = new google.maps.InfoWindow({ content: content });
            infowindow.open(map, marker);
            loadsearch();
            hideloading();
        }
        else
        {
          addToMap("Eldoret,Africa");
        }
    })
}


function openInfoWindow() {
    gInfoWindow = new google.maps.InfoWindow;
    google.maps.event.addListener(gInfoWindow, "closeclick",
    function() { unselectMarkers() })
}

function ClearSearch()
{
    var b = document.getElementById("searchwell");
    b.innerHTML = ""
}

function CountResult(c)
{
  return '<b>"' + c + '"</b>  near '
}

function OnLocalSearch()
{
    isclick = true;
    if (!gLocalSearch.results) { return }
    var f = document.getElementById("searchwell");
    f.innerHTML = "";
    for (var d = 0; d < gCurrentResults.length; d++)
    {
    gCurrentResults[d].marker().setMap(null)
    }
    gCurrentResults = [];
    
    for (var d = 0; d < gLocalSearch.results.length; d++)
    {
    gCurrentResults.push(new LocalResult(gLocalSearch.results[d]))
    }
    var e = gLocalSearch.getAttribution();
    if (e) { document.getElementById("searchwell").appendChild(e)
    }
}

function unselectMarkers()
{
    for (var b = 0; b < gCurrentResults.length; b++)
    {
        gCurrentResults[b].unselect();
    }
}

function LocalResult(b)
{
    var d = this;
    d.result_ = b;
    d.resultNode_ = d.node();
    google.maps.event.addDomListener(d.resultNode_, "click",
    function() { isclick = false; d.select() });
    document.getElementById("searchwell").appendChild(d.resultNode_);
    d.marker_ = d.marker();
    if (themarkerclass)
    {
        d.resultNode_.className = themarkerclass
    }
    else
    {
        var e = $("#RadioDiv input:radio:checked").val();
        ChooseNearPoint(e);
        d.resultNode_.className = themarkerclass
    }
}

LocalResult.prototype.node = function() {
    if (this.resultNode_)
    {
     return this.resultNode_
    }
    return this.html()
};

LocalResult.prototype.marker = function() {
    var d = this;
    var b;
    if (d.marker_)
    {
        return d.marker_
    }
    if (themarkericon)
    {
        var e = themarkericon;
        b = d.marker_ = new google.maps.Marker({
        position: new google.maps.LatLng(parseFloat(d.result_.lat),
        parseFloat(d.result_.lng)),
        icon: e, map: map
        });
        
        google.maps.event.addListener(b, "click",
        function() {
        isclick = false;
        d.select()
        })
    }
    else
    {
        var f = $("#RadioDiv input:radio:checked").val();
        ChooseNearPoint(f);
        var e = themarkericon;
        b = d.marker_ = new google.maps.Marker({
        position: new google.maps.LatLng(parseFloat(d.result_.lat),
        parseFloat(d.result_.lng)),
        icon: e, map: map });
        
        google.maps.event.addListener(b, "click", function() {
        isclick = false;
        d.select() })
    }
    return b
};

LocalResult.prototype.select = function()
{
    unselectMarkers();
    this.selected_ = true;
    gInfoWindow.setContent(this.html(true));
    gInfoWindow.open(map, this.marker())
};

LocalResult.prototype.isSelected = function()
{
  return this.selected_
};

LocalResult.prototype.unselect = function() {
   this.selected_ = false
};

LocalResult.prototype.html = function() {
    var c = this;
    var b = document.createElement("div");
    b.className = "unselected";
    b.appendChild(c.result_.html.cloneNode(true));
    return b
};

LocalResult.prototype.highlight = function(b) {
    this.marker().setOptions({ icon: b ? gRedIcon : gYellowIcon });
    this.node().className = "unselected" + (b ? " red" : "")
};

function showLayerbox() {
    document.getElementById("box").style.display = "block";
    $('#more_innerer').html('More choices <<<')
}

function onpostback()
{
  CheckHiddenRadio();
}

function CheckHiddenRadio() {
    $("#Rdio input:radio").click(function() {
    var c = document.getElementById("more_innerer");
    var b = $("#box input:radio:checked").val();
    if (b != undefined) {
     c.className = "highlight"
    }
    else { c.className = "" } })
}

function setClose() {
    var b = document.getElementById("box");
    b.style.display = "none";
    $('#more_innerer').html('More choices >>>');
    return false;
}

function CreateHiddenRadio() {
    var c = document.getElementById("outer_more");
    var d = document.getElementById("CloseLink");
    c.onclick = showLayerbox;
    d.onclick = setClose;
}

function checkChecked() {
    var c = document.getElementsByName("mark");
    for (var b = 0; b < c.length; b++) {
        if (c[b].checked) {
            return true;
        }
    }
    return false;
}



$("#merc").live("keydown",function(c) {
    isclick = true;
    var b = c.keyCode || c.which;
    if (b == 13) {
        if ($("#merc").val().length != 0) {
            if (suggestion) {
                $("#merc").val(suggestion);
            }
            else {
                return;
            }
        }
        else {
            return;
        }
    }
});

function calcRoute() {
    var d = suggestion;
    var b = suggestion2;
    var c = { origin: d, destination: b,
               travelMode: google.maps.DirectionsTravelMode.DRIVING
    };

    directionsService.route(c, function(f, e) {
        if (e == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(f)
        }
    })
}

function primaryFunction()
{
    if ($("#merc").val() == "")
    {
        updateHTML("suggestion", "");
        if (infowindow) {
           infowindow.close()
        }
        if (suggestion) {
            var b = "<p>You're in <b style='color:blue'>" + suggestion + "</b>.</p>";
            if (b == "<p>You're in <b style='color:blue'>[object HTMLElement]</b>.</p>") {
               return false
            }
            
            infowindow = new google.maps.InfoWindow({ content: b });
            infowindow.open(map, marker)
        }
        return false;
    }
    
    var c = $("#merc").val();
    directions = null;
    directions = c.match(/ to /ig);
    
    if (directions) {
        directions = c.split(/ to /ig);
        directions0 = directions[0];
        directions1 = directions[1];
        
        $.ajax({ type: "GET",
        url: "http://maps-api-ssl.google.com/maps/suggest?hl=en&gl=us&v=2&json=b&src=1,2&num=5&numps=5&callback=handleResponse&q="
        + directions0 + "&cp=" + directions0.length, dataType: "script", queue: "DIR1", cancelExisting: true });
        
        $.ajax({ type: "GET", url: "http://maps-api-ssl.google.com/maps/suggest?hl=en&gl=us&v=2&json=b&src=1,2&num=5&numps=5&callback=handleResponse2&q=" +
        directions1 + "&cp=" + directions1.length, dataType: "script", queue: "DIR2", cancelExisting: true })
    }
    else
    {
        $.ajax({ type: "GET", url: "http://maps-api-ssl.google.com/maps/suggest?hl=en&gl=us&v=2&json=b&src=1,2&num=5&numps=5&callback=handleResponse&q=" +
        $("#merc").val() + "&cp=" + $("#merc").val().length, dataType: "script", queue: "SUG1", cancelExisting: true })
    }
}

handleResponse = {};
handleResponse2 = {};

handleResponse = function(b) {
    DIR1b4 = suggestion;
    suggestion = parse(b);
    DIR1now = suggestion;
    if (DIR1b4 != DIR1now) {
        updateHTML("suggestion", suggestion);
        codeAddress(suggestion)
    }
};

handleResponse2 = function(b) {
    DIR2b4 = suggestion2;
    suggestion2 = parse(b);
    DIR2now = suggestion2;
    if (DIR2b4 != DIR2now) {
        updateHTML("suggestion2", suggestion2);
        codeAddress(suggestion2)
    }
    calcRoute()
};

function ReturnRandom() {
    var b = new Array();
    b[0] = '  The map updates your search  as soon as you start typing.';
    b[1] = "  You should see the map updates as soon as you start typing.";
    b[2] = " Scroll the map to update search results.";
    b[3] = " Double-click the map to update nearest points.";
    b[4] = ' You can drag the "<b>Search Results</b>" box to your preferred position.';
    b[5] = " Hover your mouse on the man icon <img src='../Images/man.png' style='height:25px;'/>  for your location info.";
    b[6] = " The man icon <img src='../Images/man.png' style='height:25px;'/> represents your location.";
    b[7] = ' Enter your own search category by clicking the "More choices >>>".';
    b[8] = " Search results update as soon as you start typing on the search box.";
    b[9] = "  The map suggests to you a location as soon as you start typing.";
    b[10] = " Press enter or submit to auto-finish what you're typing.";
    b[11] = " Press enter or submit to see the current weather on a location.";
    b[12] = ' Click the icon on the "<b>Search Results</b>" box to show on the map.';
    b[13] = ' The man icon <img src="../Images/man.png" style="height:25px;" /> represents your current location.';
    b[14] = " The map updates as soon as you start typing.";
    
    var c = Math.floor(Math.random() * b.length);
    return b[c]
}

function updateHTML(b, c) {
    if (c != undefined) {
        document.getElementById(b).innerHTML = c + '<span style="color:#660000;float:right">'+ ReturnRandom() + "</span>"
    }
    else
    {
      document.getElementById(b).innerHTML = "<p>Ooops, can't find this location.</p>"
    }
}

function parse(b) {
    try { if (b.suggestion[0]["query"]) {
              return b.suggestion[0]["query"]
            } else { return null } }
        catch (c)
        { }
    }

function codeAddress(c) {
    var b = c;
    geocoder.geocode({ address: b },
    function(h, e) {
    if (e == google.maps.GeocoderStatus.OK) {
        var i = h[0].geometry.viewport.getNorthEast();
        var d = h[0].geometry.viewport.getSouthWest();
        map.fitBounds(h[0].geometry.viewport);
        var g = [i, new google.maps.LatLng(i.lat(),
        d.lng()), d, new google.maps.LatLng(d.lat(), i.lng()), i];
        var f = new google.maps.Polyline({ path: g,
        strokeColor: "#FF0000",
        strokeOpacity: 0,
        strokeWeight: 0 });
        f.setMap(map);
        CreateCenterMarkerOnSearch(h[0].geometry.location);
        if (infowindow1) {
            infowindow1.close()
        }
    }
   });
}


function clearTbox() {
    if ($('#merc').val().length > 0)
    {
      $('#merc').val('');
    }
    $('#merc').focus();
    return false;
}

function getIEVersionNumber() {
    var ua = navigator.userAgent;
    var MSIEOffset = ua.indexOf("MSIE ");
    
    if (MSIEOffset == -1) {
     return 10;
    } else {
     return parseFloat(ua.substring(MSIEOffset + 5, ua.indexOf(";", MSIEOffset)));
    }
}

$(function() {
    
    var isIE7Min = getIEVersionNumber() <= 7;
    if (isIE7Min) {
      var a = document.getElementById("IEAdjust");
      a.innerHTML = "<br />";
    }
    
    $(".divleft").draggable({ handle: '.dragme' });
    
    $('a.poplight[href^=#]').click(function() {
        var popID = $(this).attr('rel');
        var popURL = $(this).attr('href');
        
       
        var query = popURL.split('?');
        var dim = query[1].split('&');
        var popWidth = dim[0].split('=')[1];
        
        $('#' + popID).fadeIn().css({ 'width': Number(popWidth) }).prepend('<a href="#" class="close"><img src="/Images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
        
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;
        
        $('#' + popID).css({
        'margin-top': -popMargTop,
        'margin-left': -popMargLeft
        });
        
        $('body').append('<div id="fade"></div>');
        $('#fade').css({ 'filter': 'alpha(opacity=80)' }).fadeIn(); 
        
        return false;
    });
    
    
    $('a.close, #fade').live('click', function() {
        $('#fade , .popup_block').fadeOut(function() {
           $('#fade, a.close').remove();
        });
        return false;
    });
});





