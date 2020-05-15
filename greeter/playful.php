<?php

$options = ['Tailwind', 'Bulma','uikit','foundation', 'MaterialDesign'];

$name = "Lumadi Musalia";

$name_length = strlen($name);

$final_int_pos = 0;
while($name_length <= 0){
  $final_int_pos = array_rand($options,1);
  $name_length = $name_length - 1;
}
$str_one = "a string";
$str_two = "a string";

 $str_one;

$dirty_string = "Lumadi%20Musalia";

$dirty_string = str_replace("20%, "<br>",$dirty_string)

$dirty_string;

$unique_name = 'She is \"Beautiful"\;
$unique_name_2 = 'She is "Beautiful"';


$age = 21;
$name = "Lumadi";

$sentence = "My name is  ".$name." and i am .$age. years old ";
$sentence_1 = "My name is ${name} and i am ${age} years old";

$sentence_1;

$name = "Kihamba Musalia";
$other_name = "Wambui Musalia"

$salutation = "Dear Kihamba";

#echo $name [0];#once run it displays the first letter of the name(Kihamba(K))
#echo $name [0] + echo $name[1] + echo $name [2];#once run it displayes the first three letters of the name(Kihamba(Kih))

#echo substr ($name, 0, 14); # once run it displays all the string letters from 0 t0 14
$space_position = strpos($name,' ');
$first_name =  substr($name,0,$space_position);

$salutation = "Dear ${first_name}";

echo $salutation;
