<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require('inc/var.php');
$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");
	if(isset($_POST[submit])){
		$connection->query("Update `forms` set `description`='$_POST[description]', `name`= '$_POST[name]', `pid` ='$_POST[pid]', `phone`='$_POST[phone]', `manual`='$_POST[man]', `bg`='$_POST[bg]', `pictaken`='1' where id='$_POST[id]'") or die(mysqli_error($connection));
		unset($_POST);
	}
?>
<!DOCTYPE html>
<head>
<title>Photographer Interface</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
	<script type="text/javascript">
		$(document).ready (function(){
			$.get('inc/photofart.php',function(data){});
$.get('inc/photographer.php',function(data){
$(data).prependTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
		})
		
			setInterval(function(){
			
						$.get('inc/photographer.php',function(data){
$(data).appendTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
											$.getJSON("inc/photoback.php", function(data) {
	var data = data +" In Backlog";
document.getElementById('add_results_7').innerHTML= data + ''; 
	});

		}, 500);

	</script>
  <style>
		td{
				    padding-top: 0px;
    padding-right: 4px;
    padding-bottom: 0px;
    padding-left: 4px;
		}
tr{
	border-radius: 2px;
text-align:center; 
    vertical-align:middle;
	    padding-top: 0px;
    padding-right: 5px;
    padding-bottom: 0px;
    padding-left: 5px;
	-webkit-box-shadow: 1px 1px 2px 2px #C2C2C2;
box-shadow: 1px 1px 2px 2px #C2C2C2;
		}
  </style>
</head>
<div data-role="page">
<div data-role='header'>
<div id='add_results_7'>
		
	</div>
	</div>
	<div data-role="content">	
	
<input id="filterTable-input" data-type="search"><table style="margin: 0 auto;" id="edit" data-filter="true" data-input="#filterTable-input" data-mode="reflow" class="ui-responsive table-stroke table-stripe">
	<thead>
  <tr class="titlerow">
		<th></th>
		<th>Client Name</th>
		<th>Phone Number</th>
		<th>Description</th>
		<th>Background #</th>
		<th>Email</th>
		<th>Time Registered</th>
</tr>
</thead>
	<tbody id="table" >

<!-- example of pattern="A12|A23|B23" -->
	</tbody>
</table>
			</div><!-- /content -->

</div><!-- /page -->