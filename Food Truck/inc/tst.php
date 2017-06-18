<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/contact.js"></script> -->
	<script>
		function captchaSubmit(data) {
			var name = $("#name").val();
var email = $("#email").val();
			var data = $("#data").val();
var response = grecaptcha.getResponse();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&response='+ response;
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
}
});
}
return false;
		}
	</script>
<form id='demo-form' action="" method="POST">
	<label>Name<input id="name" type="text" name="name"></label><br>
	<label>email<input id="email" type="email" name="last"></label><br>
	<label>message<input id="data" type="text" name="data"></label><br>
	<button id="submit" class="g-recaptcha" data-sitekey="6Le5xyUUAAAAAFdnBS-1QU1tEHO5jrsvsLHAVTmu" data-callback="captchaSubmit" data-badge="inline">Submit</button>
	<p>Please note this form is protected by reCaptcha.</p>
	<!-- 		<style>
		.g-recaptcha {display: none;}
	</style> -->
	<br/>
</form>