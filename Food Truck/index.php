<!DOCTYPE html>

<?php
require_once('inc/TwitterAPIExchange.php');
// go to http://www.openstreetmap.org/relation/2605259 and find the city you want fint relation id (bottom of info pannel) then put that into the $ctyid variable
$social = new stdClass;
// Put Social Media Usernames Here
$social->facebook = "Fire-N-Smoke-112542055994094";
$social->twitter = "fnstruck";
$social->instagram = "fnstruck";
$iconpng = "http://rats-radio-freddyyeddy756323.codeanyapp.com/Food%20Truck/inc/logo.png";
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


$tst = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest()); 
// var_export($tst);
$tweet = $tst[0]->text;
// echo $tweet;
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
// 	if(!empty($tst[0]->place->full_name)){
// 	$citynstate = $tst[0]->geo->full_name;
// 	}else{
	$lat=36.162664;
		$long=-86.781602;
		}
// }

function ImportCSV2Array($filename)
{
    $row = 0;
    $col = 0;
 
    $handle = @fopen($filename, "r");
    if ($handle) 
    {
        while (($row = fgetcsv($handle, 4096)) !== false) 
        {
            if (empty($fields)) 
            {
                $fields = $row;
                continue;
            }
 
            foreach ($row as $k=>$value) 
            {
                $results[$col][$fields[$k]] = $value;
            }
            $col++;
            unset($row);
        }
        if (!feof($handle)) 
        {
            echo "Error: unexpected fgets() failn";
        }
        fclose($handle);
    }
 
    return $results;
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


		<link href="inc/css/main.php" rel="stylesheet">  

<!-- 	<link href="css/freelancer.min.css" rel="stylesheet">  -->

   
<!-- Loading Jquery Needs First -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- <script src="inc/js/jquery.m.c.min.js"></script> -->
<!-- 	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<!--   Capcha for form intagration -->
	<script async src='https://www.google.com/recaptcha/api.js'></script>
	<script src='inc/js/main.js'></script>

<script>
	
																$( window ).load(function() {
$('#loader-wrapper').addClass('loaded');
	fontsize();
	setTimeout(function(){
		if(dist < 20){
	$( "#maplbles" ).toggleClass('maplblei maplblev');
	document.getElementById("far").src="https://maps.googleapis.com/maps/api/staticmap?size=500x500&maptype=roadmap&markers=size:mid|icon:<?php echo $iconpng ?>|<?php echo "$lat,$long|" ?>&markers=size:mid|color:red|" + latitude + "," + longitude + "&key=AIzaSyAivrvfXCE9N4xms0Z6xGSTjcuZDkcvdOk";
																}else{
// 																	   $('.far').toggle();
	$( "#maplbleg" ).toggleClass('maplblei maplblev');	
																}
												
// 		$('#loader-wrapper').addClass('loaded');
	}, 300);
	geoFindMe(<?php echo $lat;?>,<?php echo $long;?>);
																

});
	
	</script>

</head>

<body id="page-top" class="index">
<div id="loader-wrapper"> 
	<div id="loader"></div>
	<div class="loadingtxt">Were Cooking up a good bit of webpage for ya</div>
<?php echo file_get_contents("inc/svg/loadgo.svg"); ?>
</div>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
			<span id="skylinecont">
			<?php echo file_get_contents("inc/svg/Nashville Skyline.svg"); ?>
		</span>
        <div class="container">
					<span class="menu-grid" style="z-index:100;"> <span style="float:left; grid-column: 2; grid-row:1; -ms-grid-column: 2; -ms-grid-row:1;">
						<span style="display: grid;">
							           <div class="navbar-header page-scroll" style="float:right; grid-column:1; grid-row:1; -ms-grid-column:1; -ms-grid-row:1; margin-bottom: 1.5em;margin-left: 2.6em;">

													
                <button style="bottom: -1.5em;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarbuttons">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

            </div>
							<span style="position:realative;">
													               <div class="collapse navbar-collapse" id="navbarbuttons" >
                <ul class="nav navbar-nav navbar-right" >
                    <li class="hidden">
                        <a href="#page-top" ></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio" onclick="togglemenue($(this))">Menu</a>
                    </li>
                    <li class="page-scroll">
                        <a  href="#about" onclick="togglemenue($(this))">About</a>
                    </li>
                    <li class="page-scroll">
                        <a  href="#contact" onclick="togglemenue($(this))">Contact</a>

                    </li>
                </ul>
            </div>     
							</span>
						</span>
            <!-- Brand and toggle get grouped for better mobile display -->
 </span>
					

	  <ul id="social" class="list-inline" style="grid-column: 1; grid-row:1; -ms-grid-column: 1; -ms-grid-row:1; float:left;">
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
	<a style="position:realative; display: block;" onclick="scrollToTop(1000);" style="grid-column:1;grid-row:1; -ms-grid-column:1; -ms-grid-row:1;">
		<div class="full-logo"><!--
		--><div class="fire burn" style="">fire</div><!--
					--><div id="logobox"><!--
						--><?php echo file_get_contents("inc/svg/logo.svg"); ?>
<!-- 			<object id="logo" type="image/svg+xml" data="inc/svg/logo.svg"></object> -->
			<!--
					--></div><!--
		--><div class="smoke"style="">smoke</div>
		</div>
					</a>
					
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>

    <!-- Header -->
    <header id="abtf" class="bgimgtop">
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">	
							<div class="col-lg-13">
							<div class="intro-text">
								<div style="margin-bottom: 2em;text-shadow: 0px 0px 5px rgba(0, 0, 0, 1),0px 0px 5px rgba(0, 0, 0, 1),0px 0px 5px rgba(0, 0, 0, 1);">
                        <h1 class="maintitle">Fire<?php echo file_get_contents("inc/svg/bglogo.svg"); ?>Smoke</h1>
                        <hr class="star-light nologo">
                        <span class="skills">Only The Best Foods Are Forged From Fire and Smoke</span>
                    </div>
								</div>
					</div>
                <div class="col-lg-14">
<span style="position:realative;">
									<span id="mapcont"style="position:realative;">
										<div id="maplbleg" class="maplblei">
										We Service The Whole of middle Tennessee
									</div>
									<div id="maplbles" class="maplblei" ><a target="_blank" href="https://www.google.com/maps/dir/Current+Location/<?php echo "$lat, $long";   ?>">
										We Are right by you click here to get directions</a>
									</div><span>
													<div id='map' class="img-responsive">
														<img id="far"  src='https://maps.googleapis.com/maps/api/staticmap?size=500x500&maptype=roadmap\&center=<?php echo "$lat,$long" ?>&zoom=7&key=AIzaSyAivrvfXCE9N4xms0Z6xGSTjcuZDkcvdOk'>
								
	</div></span>	
 
										
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
							<?php
							
							$menu = ImportCSV2Array("inc/menu.csv");
							$items = count($menu);
							$i = 0;
							foreach($menu as $arr){
								$i++;
								if($i === $items){
									echo <<<EOT
				                <div class="col-sm-4 portfolio-item">
                   <div class="menuitem">
  <img src="inc/img/menu/$arr[img].jpg" alt="Menu Picture" class="menuimage">
  <div class="menutextcont">
    <div class="menutext">
			<div class="menuheader">
				$arr[name]
			</div>
			<ul>\n
EOT;
								unset($arr[name]);
								unset($arr[img]);
									foreach(array_filter($arr) as $drnknm => $drink){
										echo '<li>' . $drnknm . "-$$drink</li>\n" ;
									}
echo <<<EOT
			</ul>
		</div>
  </div>
</div>
</div>

EOT;
									
}else{
									
echo <<<EOT
				                <div class="col-sm-4 portfolio-item">
                   <div class="menuitem">
  <img src="inc/img/menu/$arr[img].jpg" alt="Avatar" class="menuimage">
  <div class="menutextcont">
    <div class="menutext">
			<div class="menuheader">
				$arr[name]
			</div>
			$arr[description]
			<ul>
				<li>Sandwich-$$arr[sandwich]</li>
				<li>Plate-$$arr[plate]</li>
				<li>Combo-$$arr[combo]</li>
			</ul>
		
		
		
		
		</div>
  </div>
</div>
</div>				
								
EOT;
}
							}
							
?>
					</div>
			</div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
<!-- 			<div class="container bgimgtop" id="maincontent" tabindex="-1"> -->
        <div  class="container bgimgbottom">
            <div class="row">
                <div class="col-lg-12 text-center" style=" padding-top: 9vh;">
                    <h2>About Us</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="    -webkit-text-stroke: 1px rgba(0, 0, 0, 0.3);     text-align: center;">
                    <p>Fire n Smoke is a traditional BBQ and Nashville Hot Chicken food truck with an infusion of contemporary flavors. We strive to elevate BBQ and hot chicken away from the typical southern experience. We pay attention to every detail in creating cuisine that will crush your palate, leaving you needing more. Chef Joe brings an unabashed LA sensibility to fuse with Chef Aaron’s classic Carolina lowcountry fare. Combine them with fifteen years of Nashville experience, and you have Fire n Smoke.
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
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
							
                <div class="col-lg-8 col-lg-offset-2">


							<div style="text-align:center;">
									You can contact us at <a href="mailto:fns@firensmoketruck.com?Subject=Catering" target="_blank">fns@firensmoketruck.com</a>
									or use the form
							</div>
             	<script>
		function captchaSubmit(data) {
			var name = $("#name").val();
var email = $("#email").val();
			var data = $("#data").val();
var response = grecaptcha.getResponse();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '$data=' + data + '&response='+ response ;
if(name==''||email==''||data=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "inc/contact.php",
data: dataString,
cache: false,
success: function(result){
	document.location.href="#";
		$("#form")[0].reset();
		alert(result);

}
});
}
return false;
			
		}
	</script>
									
<div class="box">
	<a class="button" target="_self" href="#contact-form">Contact Form</a>
</div>

<div id="contact-form" class="overlay">
	<div class="popup">
		<h2 >Contact Us</h2>
		<hr class="star-light">
		<a class="close" href="#">&times;</a>
		<div class="content">
			 <form id='form' action="" method="POST">
	        <div style="display: grid; display: -ms-grid; grid-column-gap: 1em; -ms-grid-columns:( 50% )[2]">
							 <a class="close" target="" href="#">&times;</a>
	<label style="  grid-column: 1; grid-row: 1; -ms-grid-column: 1; -ms-grid-row: 1;"><input placeholder="Name" id="name" type="text" name="name" class="contact"></label><br>
	<label  style="  grid-column: 2; grid-row: 1; -ms-grid-column: 2; -ms-grid-row: 1;" ><input placeholder="Email" class="contact" id="email" type="email" name="last"></label><br>
	<label  style="  grid-column: 1 / span 2; grid-row: 2; -ms-grid-row: 2; -ms-grid-column-span: 2;" ><textarea placeholder="Tell us about your event,  the location, date, and approximately how may guests we will be serving." class="contact" id="data" name="data" style="height: 30vh; width: 100%; resize: none"></textarea></label><br>
	<button  style="grid-column: 1 / span 2; grid-row: 3; -ms-grid-row: 3; -ms-grid-column-span: 2;" id="submit" class="g-recaptcha submitbtn" data-sitekey="6Le5xyUUAAAAAFdnBS-1QU1tEHO5jrsvsLHAVTmu" data-callback="captchaSubmit">Submit</button>
						 
	</div>
</form>
		</div>
	</div>
</div>


                </div>
            </div>
        </div>
			
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; FireNSMoke <script>document.write(new Date().getFullYear())</script>
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

<!-- <script async src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
	

	<!-- Bootstrap Core JavaScript -->
<!--     <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Plugin JavaScript -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->

    <!-- Contact Form JavaScript -->
<!--     <script src="js/jqBootstrapValidation.js"></script> -->

    <!-- Theme JavaScript -->
<!--     <script src="js/freelancer.js"></script> -->

</body>

</html>
