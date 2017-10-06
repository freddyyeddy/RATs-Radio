<?php
if (!isset($_SESSION)) { session_start();}

// var_dump($_SESSION);
if(!isset($_SESSION[steven])){
	exit();
}
require('var.php');
$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");

if(isset($_POST[delete])){
$connection->query("Delete from `forms` where id = $_POST[id]");	
	unset($_POST);

}else{
	if(isset($_POST[submit])){
		$des = str_replace("'", "''", $_POST[description]);
		$nm = str_replace("'", "''", $_POST[name]);
		$connection->query("Update `forms` set `description`='$des', `name`= '$nm', `pid` ='$_POST[pid]', `phone`='$_POST[phone]', `manual`='$_POST[man]', `bg`='$_POST[bg]', where id='$_POST[id]'") or die(mysqli_error($connection));
		unset($_POST);

	}
}

				$result = $connection->query("SELECT * FROM `forms` WHERE `id`>$_SESSION[steven] ORDER BY `timestamp` ASC");
if (mysqli_num_rows($result) >= 1 ){
				$idarr = array();
			while ( $row = $result->fetch_object() ) {
				$linkid = uniqid('edit_');
				$id = $row->id;
				$timestamp = date('D g:i', strtotime($row->timestamp));
				$timestamp2= $row->timestamp;
				$done = $row->done;
				$name = $row->name;
				$photo_id = $row->pid;
				$photo_bg = $row->bg;
				$phone = $row->phone;
				$email = $row->email;
				$desc = $row->description;	
				array_push($idarr,$row->id);
mysqli_close($connection);
				echo <<<EOT
					<tr>
					<td><a href="#$linkid" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop">Edit</a></td>
					<td id="name">$name</td>
					<td>$phone</td>
					<td>$desc</td>
					<td>$photo_bg</td>
					<td>$email</td>
					<td>$timestamp
											<div data-role="popup" id="$linkid" data-theme="b" class="ui-corner-all">
<form data-ajax="false"  action="" method="post" id='form'>
	<button type="submit" id="del" name="delete" value="delete" onclick="return confirm('Are you sure you want to delete this we cant get it back if you do');" style="!important background-color: ##ff4f4f;" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Delete</button>
	<input type="hidden" name="id" value="$id">
</form>
<form data-ajax="false"  action="" d method="post" id='form'>
	<div style="padding:10px 20px;">
		<h3>Please Add Photo Number and or Additional Notes/Descriptions</h3>
			<label for="nm">Name</label>
       <input required oninvalid="this.setCustomValidity('A Name Is Needed Nothing More Acward Than The Moring After But You Didnt Get Their Name')" oninput="setCustomValidity('')" type="text" name="name" id="nm" value="$name" data-theme="a" >
		
			<label for="ph">Phone Number</label>
				<input type="tel" required name="phone" id="ph" value="$phone"  oninvalid="this.setCustomValidity('We Need a Phone Number')" oninput="setCustomValidity('')" data-theme="a" >
				
			<label for="pid">Picture Number</label>
				<input type="number" name="pid"  id="pid" value="$photo_id" oninvalid="this.setCustomValidity('You Forgot the PID BROOOOTHERR')" oninput="setCustomValidity('')" placeholder="Input the Photo ID Only One Input In description if multiple Photos are to be used" data-theme="a">
			
			<label for="des">Description</label>
				<textarea name="description" required id="des" data-theme="a"  oninvalid="this.setCustomValidity('It Would Be nice to Know What they looked like BRO')" oninput="setCustomValidity('')" >$desc</textarea>
			
			<label for="man">Will This Require Manual Edit</label>
				<select name="man" id="man" data-role="slider" data-mini="true">
    				<option value="0" selected="">No</option>
   					<option value="1" >Yes</option>
				</select>
			
			<label for="bg">Background Choice</label>
				<input type="text" required oninvalid="this.setCustomValidity('I Know You Didnt Forget to Give Me a BG Number')" oninput="setCustomValidity('')" name="bg" id="bg" value="$photo_bg" data-theme="a">
				<input type="hidden" name="id" value="$id">
				<input type="hidden" name="timestamp" value="$timestamp2">

		<button type="submit" value="submit" name="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Submit</button>
	</div>
	</form>
</div>	
					</td>
						</tr>


EOT;
			}
	$_SESSION[steven] = max($idarr);
}

session_write_close();
		?>
