function validate_field(){
	var y=document.forms['login']['username'].value
	if(y==null||y==""){
		alert("username cannot be left blank!!");
		return false;
	}
	var x=document.forms['login']['pswd'].value
	if(x==null||x==""){
		alert("password cannot be left blank!!");
		return false;
	}
	else {
		return true;
	}
}

function validate_userform(){

    var a=document.forms['newuserf']['name'].value
	if(a==null||a==""){
		alert("name field cannot be left blank!!");
		return false;
	}
	var b=document.forms['newuserf']['username'].value
	if(b==null||b==""){
		alert("username field cannot be left blank!!");
		return false;
    }
    var c=document.forms['newuserf']['pswd'].value
	if(c==null||c==""){
		alert("password fiels cannot be left blank!!");
		return false;
	}
    var d=document.forms['newuserf']['mail'].value
	if(d==null||d==""){
		alert("email field cannot be left blank!!");
		return false;
    }
    var e=document.forms['newuserf']['phone'].value
	if(e==null||e==""){
		alert("phone no field cannot be left blank!!");
		return false;
    }
    var f=document.forms['newuserf']['cardno'].value
	if(f==null||f==""){
		alert("card no field cannot be left blank!!");
		return false;
    }
	else {
		return true;
	}

}

function loadMap(Lat, Long){
 var myLatlng = new google.maps.LatLng(Lat, Long);
 var myOptions = {
zoom: 13,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
 }
  map = new google.maps.Map(document.getElementById("map"), myOptions);
}
  function initialize() {
      var map = null;
      if (GBrowserIsCompatible()) {
                  // create a center for our map
                  point = new GLatLng(37.780764,-122.395592)
                  //// create a new map.
 map = new GMap2(document.getElementById("map"));
 // set the center
  map.setCenter(point, 15, G_NORMAL_MAP);
  // add a zoom control
map.addControl(new GSmallZoomControl());
 }
}

