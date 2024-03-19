<?php
// Printing property 
/* 
echo
print
print_r -is only used for printing the array
var_dump() eita diye datatype shoho charecter count kore print hoy.
eita debugging er jonno use kora hoy.
 */


$firstName="Prema";
$lastName="Khatun";
// echo "{$firstName} {$lastName}";
 echo "My name is $firstName \n";
echo"My nick name is" ."". $firstName. "\n";
echo"My full name is $firstName + $lastName \n";

// data type

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

// global variable scope
$g = 5; 
 function globalV() {
} 
globalV();
echo "Variable x outside function is: $g \n";

// local variable scope
function localV(){
  $l=10;
  echo "Variable x outside function is: $l \n";
}
localV();


// Static variable scope
function staticV() {
  static $x = 0;
  echo $x."\n";

  $x++;
}

staticV();
staticV();
staticV();

// More on addition subtraction

$number1= 20;
$number2= $number1++;

echo $number1."\n".$number2. "\n";

// $number1= $number1+1
// $number2=$number1

$n1=20;
$n2= ++$n1;
echo $n1."\n".$n2;

// $n1= $n1+1
// $n2= $n1+1
echo "\n";

// variable swapping
$fname= "Prema";
$lname= "Khatun";

printf("My name is %s %s", $fname, $lname);

echo "\n";

printf('My name is %2$s %1$s', $fname, $lname);

echo "\n";

printf("The equivalent of %d is %b", 14,14); /*or */
echo "\n";
printf('The equivalent of %1$d is %1$b',12); 

echo "\n";

 $f=4.3456;
 printf("%.3f", $f); 

 echo "\n";
 $df= 123.2345;
 $d= 456;
 printf("%04d",$d);
 echo "\n";
 printf("%07.2f",$df);

 echo "\n";

  $r = "Return";
  $rt = "Value";
 $rtv= sprintf("this function work for %s %s", $r, $rt);
 echo $rtv;
 echo "\n";


//  if else condition and Ternary Operator  
$e=12;
if($e %2==0){
  echo "This is an even number";
}else{
  echo "This is an odd number";
}
echo "\n";

//  Ternary Operators 
$trnry= ($e %2==0)? "This is an even number": "This is an odd number";
echo $trnry;

echo "\n";
// if else nested conditions and Nested Ternary Operators
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } 
  if($a %2==0){
    echo " This is an even Number";
  }else {
    echo " but not above 20";
  }
}



echo "\n";

// if elseif nested conditions and Nested Ternary Operators
$ie=80;
if ($ie %2==0) {
  echo "This is an even number";
} elseif ($ie %4==0) {
  echo "This is an even number";
} else {
  echo "This is an Odd number";

}
echo "\n";
$f= 40;
$fresult= ($f<=60? "Less that sixteen": $f %2==0)? "even" :"Odd";
echo $fresult;
echo "\n";

// switch case
$sc= "blue";
switch($sc){
  case 'red': 
    echo "Red is my favourite color";
    break;
    case 'blue':
      echo "Blue is my favourite color";
      break;
    default:
    echo "This is ok\n";
}
// or 
$car= "Marcidies";
switch($car){
  case 'farary':
  case 'BMW';   
  case 'Marcidies';   
    echo ($car)." is my favourite car";
    break;
    default:
    echo "This is ok \n";
}

// Nested switch case
echo "\n";
$ns= -35;
$nsc= $ns %2;
switch($nsc){
  case 0:
    switch($ns){
      case $ns>0:
        echo "This is a positive even number";
        break;
        case $ns<0:
          echo "This is a negative even number";
        }
 break;  
default:
    switch($ns){
      case $ns>0:
        echo "This is a positive odd number";
        break;
        case $ns<0:
          echo "This is a negative odd number";
        }
}
echo "\n";
// Another way of Nested switch case
switch(true){
  case ($nsc==0 && $ns>0):
    echo "This is a positive even number";
    break;
    case ($nsc==0 && $ns<0):
      echo "This is a negative even number";
      break;
      case ($nsc==1 && $ns>0):
        echo "This is a positive odd number";
        break;
        case ($nsc==-1 && $ns<0):
          echo "This is a negative odd number"; 
}

// 19 Alternative Syntax of Control Structures
$alt=13;
 
// normal way start
if($alt %2==0){
  echo "This is even number";
}else{
  echo "This is odd number";
}
// normal way end
echo "\n";

// Alternative way
if($alt %2==0):
  echo "Even number";
else:
  echo "Odd number";
endif;

echo PHP_EOL;

$alts= 13;
switch($alts %2==0):
  case $alts:
    echo "Even number";
    break;
    default:
    echo "Odd number";
  endswitch;

  echo PHP_EOL;
  if($alts %2==0):
    ?>
      EVEN Number
    <?php
  else:
    ?>
    Odd Number
    <?php
  endif;
  ?> 
  
  <?php

  // nested for loop
  for($i=1;$i<=10;$i++){
    echo $i."\n";
    for($j=0; $j<$i; $j++){
      echo "*";
    }
  }
  echo PHP_EOL;
  // Multiple Stepping in For Loops
  for($i=10, $j=1; $i>0;$i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
  }
  

  // while loop
  $i=0;
  while($i<10){
    $i++;
    echo $i.PHP_EOL;
  }

  // do while loop

  $i=0;
  do{
    $i++;
    echo $i.PHP_EOL;
  }while($i<10);
  
  echo PHP_EOL;
// go to loop
echo "Go to".PHP_EOL;
$i=0;
g: $i++;
echo $i.PHP_EOL;
if($i<10) goto g;
