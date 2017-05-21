<!DOCTYPE html>

<?php
require_once('inc/TwitterAPIExchange.php');
// go to http://www.openstreetmap.org/relation/2605259 and find the city you want fint relation id (bottom of info pannel) then put that into the $ctyid variable
$social = new stdClass;
// Put Social Media Usernames Here
$social->facebook = "";
$social->twitter = "fnstruck";
$social->instagram = "fnstruck";
$ctyid = 161838;
$city = "Nashville";
$state = "Tennessee";
$settings = array(
    'oauth_access_token' => "2489215470-aTzaamYxbXt8iHImNGMoFZ1BGAIHYQGx0Ettt8n",
    'oauth_access_token_secret' => "VU7tvSShA2SIAwxI07lIgfTGI7QmAtOxVTcuff3fmweGT",
    'consumer_key' => "MOnNAHfUPO11qUaatAnDJNL3i",
    'consumer_secret' => "TfKx1xyomuaK6BYwosWA8wWHRv1WYIVFq11ZBhlDjK4muoUMzI"
);	

$url ='https://api.twitter.com/1.1/statuses/user_timeline.json';
// $getfield = "?username=$social->twitter&count=1";
$getfield = '?username=freddyyeddy1&count=1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
// $.getJSON('http://unlock.edina.ac.uk/ws/footprintLookup?format=json&identifier=14126142', function(data) {

// });



$json = file_get_contents("http://polygons.openstreetmap.fr/get_geojson.py?id=$ctyid&params=0");

$jsonservicecenter = file_get_contents("http://nominatim.openstreetmap.org/search/?city=$city&state=$state&limit=1&format=json");
$citycenter= json_decode($jsonservicecenter);
$footprint = json_decode($json);
// var_dump($footprint->geometries[0]->coordinates[0][0]);
// // $city =  Polyline::encode($footprint[0]->polygonpoints);
// $city =  Polyline::encode($footprint->footprints[0]->geometry->coordinates[0][0]);
// var_dump($city);
// // foreach($footprint->footprints[0]->geometry->coordinates[0][0] as $i => $cord){
// // 	 if($i>0){
// // 		$city .= round($cord[0]*1e5);
// // 	 }else{
// // 		 $city .= "|$cord[0],$cord[1]";
// // 	 }
// // }
$tst = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest()); 
// var_export($tst[0]->geo);
$tweet = $tst[0]->text;
switch(true){
		case stripos($tweet,'closed') !== false:
        echo "Closed";
        break;
    case stripos($tweet,'sale') !== false:
        echo "Sale";
        break;
    case stripos($tweet,'soon') !== false:
        echo "Opening Soon";
        break;
}
		
		

if(!empty($tst[0]->geo->coordinates)){
// 	print_r($tst[0]->geo->coordinates);
	$lat = $tst[0]->geo->coordinates[0];
	$long = $tst[0]->geo->coordinates[1];
}else{
	if(!empty($tst[0]->geo->full_name)){
	$citynstate = $tst[0]->geo->full_name;
	}else{
	$lat=0;
		$long=0;
		}
}

?>	
<html lang="en">

<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fire-N-Smoke</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Theme CSS -->
		<link href="css/freelancer.min.css" rel="stylesheet">
		<link href='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
 <!-- Custom Fonts -->
    
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">  
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /> -->

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
	<script async src='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.js'></script>


	<script>	
		function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
					var location = location;
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180);
}
		
    $(document).on( "mobileinit", function() {
    $.mobile.loader.prototype.options.disabled = true;
});

 function geoFindMe() {

  var output = document.getElementById("map");

  if (!navigator.geolocation){
//     output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
     location.latitude  = position.coords.latitude;
     location.longitude = position.coords.longitude;
		alert(location.latitude);
		console.log("latitude is " + location.latitude + "and Longitude is " + location.longitude);
//  if (getDistanceFromLatLonInKm(insert php to echo values,latitude,longitude)<10){
// //     output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

//     var img = new Image();
//     img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&size=300x300&sensor=false&markers=<?php echo $lat; ?>,<?php echo $long; ?>&key=AIzaSyAivrvfXCE9N4xms0Z6xGSTjcuZDkcvdOk";

//     output.appendChild(img);
//   }else{
// 		var img = new Image();
// 		img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&size=300x300&sensor=false&markers=<?php echo $lat; ?>,<?php echo $long; ?>&path=color:0xff0000ff|fillcolor:0xFFFF0033|weight:5|enc:{<?php echo $city; ?>}&key=AIzaSyAivrvfXCE9N4xms0Z6xGSTjcuZDkcvdOk";
// 	 output.appendChild(img);
// 	}
// 	}

//   function error() {
// //     output.innerHTML = "Unable to retrieve your location";
    
//   }

// //   output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error,{maximumAge:60000, timeout:5000, enableHighAccuracy:true});
}
 }
	$(document).ready(function(){
geoFindMe();
		$(":button.navbar-toggle").click(function(){
  var target = $(this).data("target");
  	$(target).toggleClass("in");
});

// 		$(function(){

// $box = $('.menuitem');
// $boxWith = $box.width();

// $('.menuheader').css('font-size',$boxWith);

// });
		
	});
// 		$(document).on('click','.page-scroll', function() { $('.navbar-toggle').toggle(); }); 
</script>
</head>

<body id="page-top" class="index">
<!-- <div id="skipnav"><a href="#maincontent">Skip to main content</a></div> -->

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
					<span class="menu-grid" style="z-index:100;"> <span style="grid-column: 2; grid-row:1;">
						<span style="display: grid;">
							           <div class="navbar-header page-scroll" style="float:right; grid-column:1; grid-row:1; margin-bottom: 1.5em;margin-left: 2.6em;">
<!-- onClick="$(this).toggle();" -->
													
                <button style="bottom: -1.5em;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarbuttons">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

            </div>
							<span style="position:realative;">
													               <div class="collapse navbar-collapse" id="navbarbuttons" >
                <ul class="nav navbar-nav navbar-right" >
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Menu</a>
                    </li>
                    <li class="page-scroll">
                        <a  href="#about">Locations</a>
                    </li>
                    <li class="page-scroll">
                        <a  href="#contact">Contact</a>
<!-- 											;document.getElementsByClassName('.navbar-toggle').toggle() -->
                    </li>
                </ul>
            </div>     
							</span>
						</span>
            <!-- Brand and toggle get grouped for better mobile display -->
 </span>
					

	  <ul id="social" class="list-inline" style="grid-column: 1; grid-row:1">
			                      <li class="social-instagram">
                                <a target="_blank" href='https://instagram.com/<?php echo $social->instagram; ?>' class="btn-social btn-outline"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li class="social-facebook">
                                <a target="_blank" href='https://facebook.com/<?php echo $social->facebook; ?>' class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li class="social-twitter">
                                <a target="_blank" href='https://twitter.com/<?php echo $social->twitter; ?>' class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
	</span>
	<a style="position:realative; display: block;" href="#page-top" style="grid-column:1;grid-row:1">
		<span id="skylinecont">
			<object id="skyline" type="image/svg+xml" data="inc/svg/Nashville Skyline.svg"></object>
		</span>
		<div class="full-logo"><!--
		--><div class="fire burn" style="">fire</div><!--
					--><span id="logobox"><!--
						--><object id="logo" type="image/svg+xml" data="inc/svg/logo.svg"></object><!--
					--></span><!--
		--><div class="smoke"style="">smoke</div>
		</div>
					</a>
					
					</span>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>

    <!-- Header -->
    <header>
        <div class="container bgimgtop" id="maincontent" tabindex="-1">
            <div class="row">	
							<div class="col-lg-13">
							<div class="intro-text">
								<div style="margin-bottom: 2em;text-shadow: 0px 0px 5px rgba(0, 0, 0, 1),0px 0px 5px rgba(0, 0, 0, 1),0px 0px 5px rgba(0, 0, 0, 1);">
                        <h1 class="maintitle">Fire<object id="biglogo" type="image/svg+xml" data="inc/svg/logo.svg"></object>Smoke</h1>
                        <hr class="star-light nologo">
                        <span class="skills">Eat From Our Box.... Van</span>
                    </div>
								</div>
					</div>
                <div class="col-lg-14">
<span style="position:realative;">
<!--                     <img class="img-responsive" src="img/profile.png" alt=""> -->
									<span id="mapcont"style="position:realative;">
										<div id="maplbleg">
										We Service The Whole of middle Tennessee
									</div>
									<div id="maplbles"><a target="_blank" href="http://maps.google.com/?q=<?php echo "$lat, $long";   ?>">
										We Are right by you click here to get directions</a>
									</div>
													<div id='map' class="img-responsive">									
	</div>
    <script>
  // initialize the map
 if (getDistanceFromLatLonInKm(<?php echo $lat; ?>,<?php echo $long; ?>,location.latitude,location.longitude)<10){
	 
var map = L.map('map',{attributionControl: false}).setView([<?php echo $lat; ?>,<?php echo $long; ?>], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	      attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',

      minZoom: 9
}).addTo(map);
$( "#maplbleg" ).toggle(); 
// L.marker([51.5, -0.09]).addTo(map)
// .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
// 	.openPopup();
 }else{
	 $( "#maplbles" ).toggle();
	 var map = L.map('map',{attributionControl: false}).setView([<?php echo $citycenter[0]->lat; ?>,<?php echo $citycenter[0]->lon; ?>], 3);
	 			L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	      attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',

      minZoom: 6
}).addTo(map);
		function onEachFeature(feature, layer) {
		var popupContent = "<p>I started out as a GeoJSON " +
				feature.geometry.type + ", but now I'm a Leaflet vector!</p>";

		if (feature.properties && feature.properties.popupContent) {
			popupContent += feature.properties.popupContent;
		}

		layer.bindPopup(popupContent);
	}

			

			var myLines = [{
    "type": "Feature",
        "properties": {
        "popupContent": "This is the Auraria West Campus",
        "style": {
            weight: 2,
            color: "#999",
            opacity: 1,
            fillColor: "#B0DE5C",
            fillOpacity: 0.8
        }
    },
    "geometry": {
        "type": "Polygon",
        "coordinates": [[
			<?php
			foreach($footprint->geometries[0]->coordinates[0][0] as $i => $cord){
	 if($i>0){
		echo ",[$cord[0],$cord[1]]";
	 }else{
		 echo "[$cord[0],$cord[1]]";
	 }
}
			?>
		]]
}
			}];

var myStyle = {
            "weight": 2,
            "color": "#999",
            "opacity": 1,
            "fillColor": "#B0DE5C",
            "fillOpacity": 0.125
};

L.geoJSON(myLines, {
	style: myStyle
}).addTo(map);

 
 
 
 
 
 
 
 }
map.removeControl(map.zoomControl);
  </script>

										
										</span>
</span>
                </div>
            </div>
        </div>
    </header>

	
	<!-- Portfolio Grid Section -->
	
	
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Menu</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                   <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
    <div class="menutext">
			<div class="menuheader">
				Nashville Hot Chicken
			</div>
			3 chicken strips and pickle with your choice of heat level
			<ul>
				<li>Sandwich-$7</li>
				<li>Plate-$11</li>
				<li>Combo-$10</li>
			</ul>
		
		
		
		
		</div>
  </div>
</div>
                </div>
                <div class="col-sm-4 portfolio-item">
                                      <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
		<div class="menutext">Brisket</br>
		Sandwich-$8</br>
		Plate-$12</br>
		Combo-$11</br>
    Espresso rub served with pickled onion and roasted red peppers
    </div>
</div>
                </div>
</div>
                <div class="col-sm-4 portfolio-item">
                                    <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
		<div class="menutext">Pulled Pork</br>
		Sandwich-$6</br>
		Plate-$10</br>
		Combo-$9</br>
    Carolina style served with slaw
		</div>
  </div>
</div>
                </div>
                <div class="col-sm-4 portfolio-item">
                                      <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
		<div class="menutext">Smoked Turkey</br>
		Sandwich-$8</br>
		Plate-$12</br>
		Combo-$11</br>
    Smoked white meat and Alabama White Sauce served with slaw
	  </div>
  </div>
</div>
                </div>
                <div class="col-sm-4 portfolio-item">
                                     <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
    <div class="menutext">Nashville Hot Chicken Sandwich-$7</br>
		Plate-$11</br>
										 Combo-$10</br>
									3 chicken strips and pickle with your choice of heat level</div>
  </div>
</div>
                </div>
                <div class="col-sm-4 portfolio-item">
                                       <div class="menuitem">
  <img src="inc/img/menu/nshckn.jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
		<div class="menutext">Burnt Ends</br>
		Sandwich-$10</br>
		Plate-$14</br>
		Combo-$13</br>
    Kansas City style served with pickled onion and roasted red peppers
	  </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container bgimgbottom">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Fire n Smoke is a traditional BBQ and Nashville Hot Chicken

food truck with an infusion of contemporary flavors. We strive

to elevate BBQ and hot chicken away from the typical southern

experience. We pay attention to every detail in creating

cuisine that will crush your palate, leaving you needing more.

Chef Joe brings an unabashed LA sensibility to fuse with Chef

Aaron’s classic Carolina lowcountry fare. Combine them with

fifteen years of Nashville experience, and you have Fire n

Smoke.
</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Where We Are Now</h3>
                        <p>123 ABC Street
                            <br>Cloud Nine USA</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Other Footer Info</h3>
                        <p> <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Freddyyeddy <script>document.write(new Date().getFullYear())</script>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
<!--   <script src="vendor/jquery/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script async src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
<!--     <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>