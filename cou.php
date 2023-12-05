<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- for count function -->
<?php
 $car1 = array("volvo","alto","fortuner");
 echo count($car1);  
?> <br>
<!-- for is_array function -->
<?php
$a = "sourabh";
    echo "a is " . is_array($a);
    $b = array("sdf","ghj");
    echo "b is " . is_array($b);
    ?><br>
    <!--  substr function -->
    <?php
    echo substr("sourabh",3);
    ?> <br>
    <!--  in_array function -->
    <?php
  $people = array("sourabh","narendra","manish","rahul");
  if(in_array("sourabh",$people,TRUE)){
    echo "MATCH FOUND <br>";
  }
  else{
    "MATCH NOT FOUND";
  }
    ?><br>
    <!-- explode functions  -->
    <?php
    $str = "sourabh verma";
    print_r (explode(" ", $str));
    ?><br>
    <!-- implode function -->
    <?php 
    $arr = array('hello','world','beautiful','D');
     echo implode(" ", $arr);
    ?><br>
    <!--str replace function  -->
    <?php
    echo str_replace("verma", "peter","sourabh verma");
    ?><br>
    <!-- strlen function -->
    <?php
    echo strlen("sourabh");
    ?><br>
    <!-- array-merge -->
    <?php
    $arr1 = array("1","2");
    $arr2 = array("3","4");
    print_r(array_merge($arr1,$arr2));
    ?><br>
    <!-- strpos function -->
    <?php
    echo strpos("I love php", "o");
    ?><br>
    <!-- preg-match function -->
    <?php
    $str = "sourabh";
    $pattern = "/verma/i";
    echo preg_match($pattern,$str);
    ?><br>
    <!-- sprintf function -->
    <?php 
    $number = 22;
    $str = "India";
    $txt = sprintf("there are %u million bicycles in %s ",$number,$str);
    echo $txt;
    ?><br>
    <!-- trim function -->
    <?php
    $str = "sourabh batki";
    echo $str; "<br>";
    echo trim($str, "s");
?><br>
<!-- strtolower function -->
<?php
echo strtolower("Hello WORLD.");
?><br>
<?php
echo file_exists("cou.php"); 
?><br>
<!-- is string function -->
<?php
$str = "sourabh";
echo "a is " . is_string($str) . "<br>";
?><br>
<!-- preg-replace function -->
<?php 
$str = 'visit our bundi rajasthan';
$pattern = '/rajasthan/i';
echo preg_replace($pattern, 'kota', $str);
 ?><br>
  <!--
  echo file_get_contents("cou.php");
  ?> --> 
  <!-- array key exists function -->
  <?php 
 $arr = array("volvo"=>"xc120","BMW"=>"x5");
 if(array_key_exists("volvo",$arr)){
  echo "key hai";
 }
 else{
  echo "key nahi hai bhai";
 }
  ?><br>
  <!-- array key function -->
  <?php
  $arr = array("sourabh"=>"xc45", "deorwine"=>"x5", "intern"=>"highlander");
  print_r(array_keys($arr));
?><br>
<!-- dirname,function exists, array map,get class,class exists -->

    
</body>
</html>