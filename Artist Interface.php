<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION[artsteven] = 0;
require('inc/var.php');
			$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");
if(isset($_POST[update])){
				$connection->query("Update `forms` set `artist`='$_POST[update]', `done`='1' where id = '$_POST[id]'");	
unset($_POST);
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
<script type="text/javascript">
		$(document).ready (function(){
			$.get('inc/refart.php',function(data){});
$.get('inc/Artist.php',function(data){
$(data).prependTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
		})
		
			setInterval(function(){
			
						$.get('inc/Artist.php',function(data){
$(data).appendTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
			
		}, 500);
		$(document).on('click', 'th', function() {
  var table = $(this).parents('table').eq(0);
  var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
  this.asc = !this.asc;
  if (!this.asc) {
    rows = rows.reverse();
  }
  table.children('tbody').empty().html(rows);
});

function comparer(index) {
  return function(a, b) {
    var valA = getCellValue(a, index),
      valB = getCellValue(b, index);
    return $.isNumeric(valA) && $.isNumeric(valB) ?
      valA - valB : valA.localeCompare(valB);
  };
}

function getCellValue(row, index) {
  return $(row).children('td').eq(index).text();
}
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
<?php
		$result = $connection->query('SELECT * FROM `forms` WHERE `done` = "0" and `pictaken`="1" ORDER BY `manual` DESC, `timestamp` ASC' );
		$num_rows = $result->num_rows;
echo '	<div data-role="header"> ';
	if($num_rows<=0){
echo "You Are Either Done Or Have Yet To Begin Best Luck";
echo' </div><div data-role="content">	';
exit;
}
		echo "$num_rows In Backlog\n";
?>
		
		
<input id="filterTable-input" data-type="search">
	<table style="margin: 0 auto;" id="edit" data-filter="true" data-input="#filterTable-input" data-mode="reflow" class="ui-responsive table-stroke table-stripe">
			<thead>
				<tr class="titlerow">
					<th>Manual?</th>
					<th>Who Finished?</th>
					<th>Name</th>
					<th>PID #</th>
					<th>BG #</th>
					<th>Description</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Time Registered</th>
				</tr>
			</thead>
			<tbody id="table" style="height:100%; overflow: hidden">

	</tbody>
</table>
			</div><!-- /content -->

</div><!-- /page -->