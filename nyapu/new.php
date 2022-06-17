<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<form  method="post" action="<?php echo htmlspecialchars(["PHP_SELF"]);?>">
    Name:<input type="text" name="name">
    <span id="man" class="error">*</span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span id="girl" class="error">*</span>
    <br><br>
    <input type="text" name="website">
    <span id="boy" class="error"></span>
    <br><br>
    comment:
    <textarea name="textarea" id="" cols="40" rows="5"></textarea>
gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="gender">Others
<input type="submit" name="submit" value="submit">
    
    </form> 
</body>
</html>