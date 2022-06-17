<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<!--     
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <!-- Name:<input type="text" name="fname"><br> -->
    <!-- Password:<input type="password" name="password">
<input type="submit"> 

</form>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a> --> 

<!-- 
<form action="" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Password: <input type="password" name="password">
<input type="submit">
</form> -->

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   name:   <input type="text" name="name"><br><br>
   email:  <input type="text" name="email"><br><br>
   website:<input type="text" name="website"><br><br>
    comment:<textarea name="textarea" id="" cols="30" rows="10"></textarea><br><br><br>

    <input type="submit"><br><br>
    gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="male">male 
    <input type="radio" name="gender" value="others">others
</form>
    <?php 
    /*
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // collect value of input field
    // $name=$_REQUEST['fname'];
    $name=$_REQUEST['password'];
    if(empty($name)){
        echo "Name is empty";
    }
    else{
        ecHo $name;
    }
}
*/
/*
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name=$_POST['password'];
    if(empty($name)){
        ecHO "name is khali";
    }
    else{
        EcHo $name;
    }
}
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
*/
/*
 echo "welcome:" .$_POST["name"]."<br>"; 
 echo "your email is:".$_POST["email"]."<br>"; 
 ECho "password is :".$_POST["password"];
*/
/*
echo "welcome:".$_GET['name']."<br>";
echo "email:".$_GET['email']."<br>";
echo "password:".$_GET['password'];
*/
    ?>
</body>
</html>