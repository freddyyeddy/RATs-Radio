<?php
require('inc/var.php');
$connection = connect();
if(isset($_POST['submit'])){
$connection->query("INSERT INTO `forms` set `description`='$_POST[description]', `name`= '$_POST[name]', `phone`='$_POST[phone]', `bg`='$_POST[bg]',`email`='$_POST[email]'");
unset($_POST);
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0">
	<script type="text/javascript">
		$(document).ready (function(){
					$('#wantprints:not(:empty)').addClass('prints');	
					$('#search').keyup(function() {
  var regex = new RegExp($('#search').val(), "i");
  var rows = $('table tr:gt(0)');
  rows.each(function (index) {
    title = $(this).children("#name").html()
    if (title.search(regex) != -1) {
      $(this).show();
    } else {
      $(this).hide();
    }
  });
});
	$("#pid").keyup(function(){
          var inputVal = $(this).val();
          $("#img").attr("src", "/inc/thumb/"+inputVal+".jpg");
     });
		})  
	</script>
  <style>
  
  tr:nth-child(even) {background: #CCC};
  </style>
<link rel="stylesheet" type="text/css" href="inc/main.css">
</head>
<div data-role="page">
<div data-role='header'>
	</div>
	<div data-role="content">	
<form data-ajax="false" action="" method="post" id='EditEntry'>
	<div style="padding:10px 20px;">
		<h3>Register Here</h3>
		
		<label for="nm">Name</label>
		<input required oninvalid="this.setCustomValidity('A Name Is Needed Nothing More Acward Than The Moring After But You Didnt Get Their Name')" oninput="setCustomValidity('')" type="text" name="name" id="nm" placeholder="John Doe" data-theme="a" >
		
			<label for="ph">Phone Number</label>
				<input type="tel" required name="phone" id="ph" placeholder="9078765309"  oninvalid="this.setCustomValidity('We Need a Phone Number')" oninput="setCustomValidity('')" data-theme="a" >
				
			<label for="email">Email</label>
				<input type="email" name="email" required id="email" oninvalid="this.setCustomValidity('We need a VALID email It is Not Kept. It so Where Ever You are We Will Find You...')" oninput="setCustomValidity('')" placeholder="BLahBlah@blarg.com" data-theme="a">
			
			<label for="des">Description</label>
				<textarea name="description" required id="des" data-theme="a" placeholder="Enter a Good Description of Yourself and Others to Be in The Picture EG: Tall Man W/ Black Hair and Samurai Sword I am Afro Samurai"  oninvalid="this.setCustomValidity('It Would Be nice to Know What You Look Like Bro')" oninput="setCustomValidity('')" ></textarea>
			<label for="bg">Background Choice</label>
		<img width="20%" class="preview" id="img" src="">
				<input type="text"  id="pid" required oninvalid="this.setCustomValidity('I Know You Didnt Forget to Give Me a BG Number')" oninput="setCustomValidity('')" name="bg" id="bg" placeholder="Type In BG number EG: A12" pattern="<?php $images = glob("inc/thumb/*.{jpg,JPG,jpeg,JPEG}", GLOB_BRACE); $keyword = preg_quote("inc/thumb/",'/')."|.jpg"; echo implode("|", preg_replace("/($keyword)/i",'',$images));
 ?>" data-theme="a">

		<button type="submit" value="submit" name="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Submit</button>
	</div>
	</form>

</table>
			</div><!-- /content -->

</div><!-- /page -->