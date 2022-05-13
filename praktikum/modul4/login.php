<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['check'])) {
        $_SESSION['login'] = True;
        header('Location: data.php');
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container {
            width: 20%;
            margin: auto;
            margin-top: 200px;
        }
        .inputText {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 2px solid #ededeb;
            border-radius: 4px;   
        }
        .button {
            width: 100%;
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 90px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
            <b>Username<br>
            <input type="text" class="inputText" name="username" placeholder="Enter Username "></input><br>
            Password<br></b>
            <input type="text" class="inputText" name="password" placeholder="Enter Password"></input><br>
            <input type="submit" class="button" name="login" value="Login"></input>
            <input type="checkbox" name="check">Remember me</input>
        </form>
    </div>
</body>
</html>