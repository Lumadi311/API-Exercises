<?php

#die();
$all_name = $_GET['full-name'];
$age = $_GET['age'];
$gender = $_GET['gender'];


$space_position = strpos($all_name,' ');

if($space_position == false){
$first_name =  $all_name;
}else{
$first_name =  substr($all_name,0,$space_position);
}

#echo $age;
$greeting = $first_name;
if($age <= 12){
//redirecting you to another page in PHP
header("Location:index.php?msg=Child, ${greeting}&greet=yes");
}else if($age >= 13 and $age <= 19){
header("Location:index.php?msg=Teenie, ${greeting}&greet=yes");
}else if($age >= 20 and $age <= 30){
header("Location:index.php?msg=Youth, ${greeting}&greet=yes");
}else{
header("Location:index.php?msg=Mzito, ${greeting}&greet=yes");
}
?>