<?php

echo '<h1> String Functions </h1>';
  
echo '<h4> strrev- Reverses the string </h4>';  
echo strrev("Hello Class!");
echo '<hr>';


echo '<h4> Stripslashes - Un-quotes a quoted string </h4>';
$str = "It's his birthday";
echo stripslashes($str);
echo '<hr>';

echo '<h4> strlen - Gets the length of the string </h4>';
$strlength = 'Rockstar';
echo strlen($strlength);
echo '<hr>';

echo '<h4> explode - Splits a string by string </h4>';
$chocolate  = "KitKat Diarymilk Nuggets Toblerone";
$type = explode(" ", $chocolate);
echo $type[0];
echo $type[1];
echo '<hr>';

echo '<h4> implode - Joins array elements with a string </h4>';
$array = array('City', 'State', 'Country');
$join = implode(",", $array);
echo $join; 
echo '<hr>';

echo '<h4> strtoupper - Converts a string to uppercase </h4>';
$lowercase = "this is my first semester at njit";
$uppercase = strtoupper($lowercase);
echo $uppercase;
echo '<hr>';


echo '<h4> str_repeat - Repeat a String </h4>';
  echo str_repeat("Hi", 7);
echo '<hr>';


echo '<h4> stristr - Finds the first occurrence of a string</h4>';
$location  = 'Newark, United States';
$first = strstr($location, 'U');
echo $first;
echo '<hr>';

echo '<h4> strpbrk — Searches a string and returns a string from the character found</h4>';
$line = 'I am in school';
echo strpbrk($line, 'in');
echo '<hr>';


echo '<h4> strtolower — Makes a string lowercase </h4>';
$low = "I have two classes on Tuesdays at NJIT";
$upp = strtolower($low);
echo $upp;
echo '<hr>';


echo '<h1> Array Functions </h1>';

echo '<h4> array_reverse — Returns an array with elements in reverse order </h4>';
$rev  = array("Numbers", 5.0, 6, "Space");
$arrayreverse = array_reverse($rev);
print_r($arrayreverse);
echo '<hr>';

echo '<h4> array_replace — Replaces elements from passed arrays into the first array </h4>';
$Chocolatelist = array("Kitkat", "Diarymilk", "Nuggets", "Toblerone");
$Chocolatereplace1 = array(0 => "Reeses", 4 => "Almonds");
$Chocolatereplace2 = array(0 => "Ferrero");

$FinalContent = array_replace($Chocolatelist, $Chocolatereplace1, $Chocolatereplace2);
print_r($FinalContent);

echo '<hr>';


echo '<h4> array_push — Pushes one or more elements onto the end of array </h4>';
$item = array("pens", "pencils", "books");
array_push($item, "erasers", "scales");
print_r($item);
echo '<hr>';


echo '<h4> array_pop — Pops the element off the end of array </h4>';
$items = array("pens", "pencils", "books", "erasers");
$popItem = array_pop($items);
print_r($popItem);
echo '<hr>';


echo '<h4>array_sum — Calculates the sum of values in an array </h4>';
$total = array(8, 9, 11, 13);
echo "sum(total) = " . array_sum($total) . "\n";
echo '<hr>';


echo '<h4> array_search — Searches the array for a given value </h4>';
$color = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$search = array_search('red', $color);  
print_r($search);
echo '<hr>';


echo '<h4> count — Counts all elements in an array </h4>';
$arrayNum[0] = 4;
$arrayNum[1] = 8;
$arrayNum[2] = 5;
$resultNum = count($arrayNum);
echo $resultNum;
echo '<hr>';


echo '<h4> array_merge — Merges one or more arrays </h4>';
$merge1 = array(6, 9, "yellow", "blue");
$merge2 = array("a", "green", "red", 4);
$result = array_merge($merge1, $merge2);
print_r($result);
echo '<hr>';


echo '<h4> next — Advances the internal pointer of an array </h4>';
$candy = array('Kitkat', 'Diarymilk', 'Nuggets', 'Toblerone');
$nextSnack = current($candy);
$nextSnack = next($candy);   
echo $nextSnack;
echo '<hr>';

echo '<h4> array_product — Calculates the product of values in an array </h4>';
$multiply = array(2, 4, 6, 8);
echo "product(multiply) = " . array_product($multiply) . "\n";
echo '<hr>';

?>