
<?php
# echo "hello world";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first page in php</h1>

    <?php
    /*echo "Hello world";
    ECHO "Hello world";
    EcHo "Hello world";
    */
    /*
    //$color, $COLOR, and $coLOR are treated as three different variables:
    $color="red";
    echo "my car color is ".$color;
    echo "my house is ".$COLOR;
    echo "my boat is ".$color;
    */
    
    //  --> this is single line comment 
    # --> this is also a single line comment 
    /* this is multiline line comment */
    // we can also use comments to leave out parts of a code line
    #$x=5+/*5*/5;
    #echo $x;
    

    # variables
    /*
$txt="Hello world";
$x=4;
$y=4.7;
//Case-sensitive example
$age=23;
$AGE=12;
$AgE=13;
echo $age;
echo $AGE;
echo $AgE;
echo $txt;
echo $x;
echo $y;
*/
/*
$txt ="the best teacher is your's last mistake";
echo "always remember that $txt!";
echo "always remember that ".$txt."!";
*/
/*
$x=4;
$y=5;
echo $x+$y;
*/
/*
//unvalid way --> global 
$s=7;
function myself(){
echo "variable s is $s";
*/
/*
$s=7;
function myself(){

}
echo "variable is $s";
}
*/
$name="nyapu";
$income =5;
echo "Name is $name and his income is $income <br>";

echo "this ","string ","is ","made ","with ","multiple ","parameters<br>";

$txt1="learn php";
$txt2="W3school";
$x=7;
$y=5;
echo "<h2> $txt1 </h2>";
echo "student of $txt2";
echo "sum of x and y is $x+$y";
print "<h2>start $txt1</h2>";
print "at $txt2";
//Data types
var_dump($y);
$float=343.3;
var_dump($float);
// $boolean=true;
//$Boolean=false;
//echo "$Boolean";
// echo "$boolean";
/*
//array
$cars=array("volvo","BMW","Toyota",4);
var_dump($cars);
echo $cars[0];
echo $cars[1];
echo $cars[3];
*/
/*
echo "<br>";
#strlen() function the length of string;
echo strlen("length");
echo "<br>";
echo strlen("hello world");
echo "<br>";
#The PHP str_word_count() function counts the number of words in a string.
echo str_word_count("the full form of php is php:hypertext preprocessor");
echo "<br>";
#the PHP strrev() function reverses a string.
echo strrev("hello world");
echo "<br>";
var_dump(is_int($float));
echo "<br>";
var_dump(is_int($x));
echo "<br>";
var_dump(is_float($float));
*/
/*                                                                                                  m
echo(pi());
echo "<br>";
echo (min(3,3,34,4,4,3,3,3,4,5,3,-3,1));
echo (max(1,2,3,4,5,6,11,0));
echo "<br>";
// echo(rand(0.5,1));
*/
echo "<br>";
echo(sqrt(36)."<br>");
define("gbob","An amazing rapper",true);
echo gbob;
echo "<br>";
define("cars",["Alfa Romeo","BMW","Toyota"]);
echo cars[1];
$w=30;
$w+=100;
echo $w;


$n=200;
    $j='200';
    var_dump($n==$j);
/*
$age=19;
$gender="male";
if(age==19 or $gender==male){
    echo "you can drive";
}
*/
$age=34;
$rolln=34;
if($age==$rolln){
    echo "yes";
}
else{
    echo "NO";
}
echo "<br>";
echo "<br>";
$favcolor ="green";
switch($favcolor){
    case 'red':
        echo "your favorite color is red";
        break;
    case 'blue':
        echo "your favorite color is blue";
        break;
    case 'orange':
        echo "your favorite color is orange";
        break;
    default:
        echo "your favorite color is neither red,blue or orange";
}

echo "<br>";
echo "<br>";
echo "<br>";
/*
#while loop;
$k=1;
while($k<=10){
echo "the number is :$k"."<br>";
$k++;
}
*/
/*
$str="bhaktapur multiple campus";
echo "colloge:$str"."<br>";
echo "college:$str";
*/
/*
# using while loop print the name of college 100 times;
$clgnm=1;
while($clgnm<=100){
    echo "name:Bhaktapur Multiple Campus"."<br>";
    $clgnm++;
}
*/
/*
echo "<br>";
echo "<br>";
echo "<br>";
for($i=0;$i<=20;$i++){
    echo"name:Bhaktapur Multiple Campus"."<br>";
}
echo "<br>";
echo "<br>";
$col=array("blue","red","green","orange");
    foreach($col as $happy){
        echo "$happy"."<br>";
    }

    echo "<br>";
    for($i=0;$i<=10;$i++){
        if($i==5){
            break;
        }
        echo "file  inclusion vulnerability <br>";
    }
    function familyname($name,$year){
        echo "$name tiruwa born in $year"."<br>";
    }
    familyname("haja", "1233");
    familyname("sangita", "234");
    familyname("sameer");
    familynam("sudip");
    echo "<br>";
    function addNumbers(int $a, int $b){
        return $a+$b;
    }
    echo addNumbers("5","7 days");
    */
    /*
    $bike=array(
        array("honda",22,19),
        array("pulsar",23,20),
        array("vr",17,16)
    );
    echo $bike[0][0].":In stock:".$bike[0][1].":sold:".$bike[0][2]."<br>";
    echo $bike[1][0].":In stock:".$bike[1][1].":sold:".$bike[1][2]."<br>";
    echo $bike[2][0].":In stock:".$bike[2][1].":sold:".$bike[2][2]."<br>";

    $car=array(
array("bmw",22,18),
array("volvo",15,13),
array("saab",5,2),
array("land rover",17,15)

    );
    for ($i=0; $i < 4; $i++) { 
        
        echo "<b>row number $i</b>";
        echo "<ul>";
        for ($j=0; $j < 3; $j++) { 
Echo "<li>".$car[$i][$j]."</li>";
            
        }
        Echo "</ul>";

    }
*/
$car=array("volvo","bmw","toyota","apple car");
// sort($car);
rsort($car);
$length=count($car);
for ($i=0; $i < $length; $i++) { 
   ecHo $car[$i];
   echo "<br>";
}
$weight=array("prasika"=>"25","janam"=>"70","sameer"=>"60");
asort($weight);
foreach ($weight as $key => $value) {

  
    echo "name=".$key."  ,value=".$value;
    echo "<br>";
}


// $c=(98-32)*5/9;
// echo "the value is ".$c;
echo $_SERVER['HTTP_REFERER'];
    ?>
    
    
</body>
</html>