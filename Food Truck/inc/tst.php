<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- <script src="js/contact.js"></script> -->
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
url: "contact.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
	$("#form")[0].reset();
}
});
}
return false;
			
		}
	</script>
<a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-transition="pop">Contact Form</a>
<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
<form id='form' action="" method="POST">
	        <div style="padding:10px 20px;">
            <h3>Contact Us</h3>
	<label>Name<input id="name" type="text" name="name"></label><br>
	<label>email<input id="email" type="email" name="last"></label><br>
	<label>message<input id="data" type="text" name="data"></label><br>
	<button id="submit" class="g-recaptcha" data-sitekey="6Le5xyUUAAAAAFdnBS-1QU1tEHO5jrsvsLHAVTmu" data-callback="captchaSubmit" data-badge="inline">Submit</button>
						 </div>
</form>
	</div>

