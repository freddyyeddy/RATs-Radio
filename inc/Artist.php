<?php
if (!isset($_SESSION)) { session_start();}

// var_dump($_SESSION);
if(!isset($_SESSION[artsteven])){
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
		$connection->query("Update `forms` set `description`='$_POST[description]', `name`= '$_POST[name]', `pid` ='$_POST[pid]', `phone`='$_POST[phone]', `manual`='$_POST[man]', `bg`='$_POST[bg]', where id='$_POST[id]'") or die(mysqli_error($connection));
		unset($_POST);

	}
}

				$result = $connection->query("SELECT * FROM `forms` WHERE `done` = '0' and `pictaken`='1' and `id` >'$_SESSION[artsteven]' ORDER BY `manual` DESC, `timestamp` ASC");
if (mysqli_num_rows($result) >= 1 ){
				$idarr = array();
			while ( $row = $result->fetch_object() ) {
				$linkid = uniqid('edit_');
				$id = $row->id;
				$timestamp =  date('D g:i', strtotime($row->timestamp));
				$done = $row->done;
				$name = $row->name;
				$photo_id = $row->pid;
				$photo_bg = $row->bg;
				$phone = $row->phone;
				$email = $row->email;
				$desc = $row->description;
        array_push($idarr,$row->id);
$man = $row->manual;
$manual ='';
				if($man!=0){ 
$manual = '<div style="width:100%; height:2em; border-radius: .6em; border: 1px solid rgba(0, 0, 0, .2); background: #13b4ff;;">

</div>';
 }
				echo <<<EOT
					<tr>
<td>$manual</td>
<td><form data-ajax="false" action="Artist Interface.php" method="post" id='Which Artist'><input type="hidden" value='$id' name='id'><button type="submit" value="Kira" name="update" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Kira</button><button type="submit" value="Kolton" name="update" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Kolton</button></form></td>

					<td id="name">$name</td>
<td>$photo_id</td>
<td>$photo_bg</td>
<td>$desc</td>
					<td>$phone</td>
					<td>$email</td>
					<td>$timestamp</td>
						</tr>

EOT;
			}
	$_SESSION[artsteven] = max($idarr);
}

session_write_close();
		?>
