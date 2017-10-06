<?php 
$images = glob("inc/thumb/*.{jpg,JPG,jpeg,JPEG}", GLOB_BRACE); 
$keyword = preg_quote("inc/thumb/",'/')."|.jpg";
$lst = preg_replace("/($keyword)/i",'',$images);
$patern = array();
foreach($lst as $value) {
//   split on where numbers meet letters
  $chk = preg_split('/(?<=\d)(?=[a-z])|(?<=[a-z])(?=\d)/i' , $value);
   
  $value =  "[" . $chk[0] . strtolower($chk[0]) . "]{1}$chk[1]";
  array_push($patern, $value);
}
// var_dump($patern);

echo implode('|', $patern);

?>