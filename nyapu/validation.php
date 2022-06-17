<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #er{
      color:red;
    }
    #c{
      color:red;
    }
  </style>
   
    <title>Document</title>
</head>
<body>
  <h2>PHP form Validation Example</h2>
  <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <p id="er"><span class="error">* required field</span></p>
Name:  <input type="text" name="name">
<span  id="c" class="error">* <?php echo $nameErr;?></span>
<br><br>

E-mail:<input type="text" name="email">
<br><br>
Website:<input type="text" name="website">
<br><br>
<textarea name="textarea" id="" cols="40" rows="5"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="others" value="others">Others
<input type="submit" name="submit" value="submit">

</form>

<?php
/*
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

test_input($data);
*/

// define variables and set to empy values
$name=$email=$gender=$comment=$website="";
if($_SERVER["REQUEST_METHOD"] =="POST"){
  $name=test_input($_POST["name"]);
  $email=test_input($_POST["email"]);
  $website=test_input($_POST["website"]);
  $comment=test_input($_POST["comment"]);
  $gender=test_input($_POST["gender"]);
}

function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

Echo"<h2>your input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";

?>

</body>
</html>