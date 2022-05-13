<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

        $name = $email = $gender = $comment = $website = $namaError = $emailError = $genderError = "";
        if (isset($_POST["submit"])) {

            if(empty($_POST["name"])) {
                $namaError = "Name is required";
            } else {
                $name = ($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailError = "Email is required";
            } else {
                $email = ($_POST["email"]);
            }

            if (empty($_POST["gender"])) {
                $genderError = "Gender is required";
            } else {
                $gender = ($_POST["gender"]);
            }
            $website = ($_POST["website"]);
            $comment = ($_POST["comment"]);  
        }


?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <?= '<h3 style="color: red;">*required field<br></h3>';?>
  Name: <input type="text" name="name" > <?= "<label for='name' style='color: red;''>* $namaError</label>"; ?>
  <br><br>
  E-mail: <input type="text" name="email"> <?= "<label for='email' style='color: red;''>* $emailError</label>"; ?>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other <?= "<label for='gender' style='color: red;''>* $genderError</label>"; ?>
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
?>

</body>
</html>