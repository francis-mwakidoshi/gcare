
$('#map').live('pageshow',function(event){
    navigator.geolocation.getCurrentPosition(function (location) {
          // Use location.coords.latitude and location.coords.longitude
          loadMap(location.coords.latitude, location.coords.longitude);
    });

});
function loadMap(Lat, Long){
 var myLatlng = new google.maps.LatLng(Lat, Long);
 var myOptions = {
zoom: 13,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
 }
 map = new google.maps.Map(document.getElementById("map"), myOptions);
}

 


