<?php
if (!isset($_SESSION)) { session_start();}
$_SESSION[steven] = 0;
require('inc/var.php');

$connection = connect();
$connection->query("SET SESSION time_zone = '-9:00'");

if(isset($_POST[delete])){
$connection->query("Delete from `forms` where id = $_POST[id]");	
	unset($_POST);
}else{
	if(isset($_POST[submit])){
		$connection->query("Update `forms` set `description`='$_POST[description]', `name`= '$_POST[name]', `pid` ='$_POST[pid]', `phone`='$_POST[phone]', `manual`='$_POST[man]', `bg`='$_POST[bg]' where id='$_POST[id]'") or die(mysqli_error($connection));
		unset($_POST);
	}
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi?autoload= 
{'modules':[{'name':'visualization','version':'1.1','packages':
['corechart']}]}"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
	<script type="text/javascript">
$.post('inc/manage.php', $('#form').serialize());
		
		
		$("#form").submit(function(e) {

    var url = "path/to/your/script.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#form").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert('Entry Changed!');
						location.reload(true); //show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
		
		
		
             function drawpie(reg, pt, dn) {

				var pidata = google.visualization.arrayToDataTable([
          ['Steps', 'Number in step'],
          ['Regisered', reg ],
          ['Photo Taken', pt ],
          ['Done', dn ]
        ]);

        var pioptions = {
					legend:'none',
					pieSliceText: 'none',
					colors: ['#673AB7', '#3F51B5', '#2196F3', '#f3b49f', '#f6c7b6'],
					backgroundColor: { fill:'transparent' },
					animation: {
						duration: 1000,
        easing: 'out',
					}//This is the new option
// 					is3D: true
        };
				var pichart = new google.visualization.PieChart(document.getElementById('piechart'));
				

				pichart.draw(pidata, pioptions);
      }
		
		var regold =1;
		var ptold = 1;
		var dngold = 1;
		
		$(document).ready (function(){
			$.get('inc/snippet.php',function(data){});
$.get('inc/manage.php',function(data){
$(data).prependTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
				$.getJSON("inc/Hour.php", function(data) {
	var data = data +" Photos Per Hour";
document.getElementById('add_results_7').innerHTML= data + ''; 
	});
			

//        alert("Photos Done " + data.Done + "   Photos Taken But Not Done " + data.Photo_Taken + " Total Number of Photos " + data.registered);

     google.charts.setOnLoadCallback(drawpie(1,1,1));


    });
		setInterval(function(){
			
						$.get('inc/manage.php',function(data){
$(data).prependTo("#table").hide().fadeIn().trigger('create');
// 	$('#table').html( myHtmlStr ).enhanceWithin();
});
			
		}, 500);

setInterval(function () {
	$.getJSON("inc/Hour.php", function(data) {
	var data = data +" Photos Per Hour";
		
document.getElementById('add_results_7').innerHTML=data; 
	});
 $.getJSON("inc/easyaspie.php", function(data) {
	 var regnew = data.registered;
	 var ptnew = data.Photo_Taken;
	 var dngnew = data.Done;
//        alert("Photos Done " + data.Done + "   Photos Taken But Not Done " + data.Photo_Taken + " Total Number of Photos " + data.registered);
if(regnew != regold || ptnew != ptold || dngnew != dngold){

	regold = regnew;
	ptold = ptnew;
	dnold = dngnew;
drawpie(Number(data.registered), Number(data.Photo_Taken), Number(data.Done));


} });
}, 1000 );

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
<div style="text-align: center; " data-role='header'>
	<div id='add_results_7'>
		
	</div>
					<div style="position: absolute; z-index: 1000; width: 10%; left: 1%; top: 2px;" id="piechart"></div>
	</div>

	<div data-role="content">	
		 <div id="one" class="ui-body-d ui-content">
<input id="filterTable-input" data-type="search">
<table style="margin: 0 auto;" id="edit" data-filter="true" data-input="#filterTable-input" data-mode="reflow" class="ui-responsive table-stroke table-stripe">
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
	<tbody id="table">

<!-- example of pattern="A12|A23|B23" -->
	</tbody>
</table>




		</div><!-- /content -->
</div>
</div><!-- /page -->