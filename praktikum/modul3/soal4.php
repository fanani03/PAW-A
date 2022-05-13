<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

        $name = $email = $gender = $comment = $website = $namaError = $emailError = $comment = $genderError = $websiteError = "";
        if (isset($_POST["submit"])) {

            $name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $namaError = "Only letters and white space allowed";
            }

            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            }

            $website = $_POST["website"];
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteError = "Invalid URL";
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
  Name: <input type="text" name="name" value="<?= $name?>" > <?= "<label for='name' style='color: red;''>* $namaError</label>"; ?>
  <br><br>
  E-mail: <input type="text" name="email" value="<?= $email?>"> <?= "<label for='email' style='color: red;''>* $emailError</label>"; ?>
  <br><br>
  Website: <input type="text" name="website" value="<?= $website?>"> <?= "<label for='website' style='color: red;''>$websiteError</label>"; ?>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" value="<?= $comment?>"><?= $comment?></textarea>
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
if (!$namaError == "Only letters and white space allowed") {
    echo $name;
}
echo "<br>";
if (!$emailError == "Invalid email format") {
    echo $email;
}
echo "<br>";
if (!$websiteError == "Invalid URL") {
    echo $website;
}
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>