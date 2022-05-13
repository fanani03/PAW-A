<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

        $name = $email = $gender = $comment = $website = "";
        if (isset($_POST["submit"])) {
            $name = ($_POST["name"]);
            $email = ($_POST["email"]);
            $website = ($_POST["website"]);
            $comment = ($_POST["comment"]);
            if (isset($_POST["gender"])) {
                $gender = ($_POST["gender"]);
            }
            
        }

?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <?= '<h3 style="color: red;">*required field<br></h3>';?>
  Name: <input type="text" name="name" required> <?= '<label for="name" style="color: red;">*</label>'; ?>
  <br><br>
  E-mail: <input type="email" name="email" required> <?= '<label for="email" style="color: red;">*</label>'; ?>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female" required>Female
  <input type="radio" name="gender" value="male" required>Male
  <input type="radio" name="gender" value="other" required>Other <?= '<label for="gender" style="color: red;">*</label>'; ?>
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