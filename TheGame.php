<!doctype html>

<html>

<head>
    <!--
    Project 02_05_01
    Author: Jaggar Hample
    Date: 10/12/18  
    Filename: TheGame.php
    -->
    <title>The Game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <style>
        form {background-color: lightskyblue; border-radius: 15px; padding: 15px; 
        margin-left: auto; margin-right: auto; width: 20em}
        body {background-color: mintcream;}
        h2 {text-align: center;}
        textarea{width: 315px; height: 100px;}
    </style>
   <h2>Player Login</h2>
    <?php
    $dir = "./gamers";
    if(is_dir($dir)){
        if (isset($_POST['submit'])){
            if (empty($_POST['name'])){
                echo "Invalid player";
            }
        else {
            echo "The was an error in the form";
            }
        }
    }
    ?>
    <form>
       <p>Username*: <input type="text" name="user" placeholder="JohnSmith123" required ></p>
       <p>Password*: <input type="password" name="pass" required></p>
       <p>Full Name*: <input type="text" name="name" placeholder="John Smith" required></p>
       <p>Email*: <input type="email" name="mail" placeholder="John@example.com" required></p>
       <p>Age*: <input type="number" name="age" required></p>
       <p>Screen Name*: <input name="name" type="text" placeholder="JohnSmith" required></p>
       <p>Comments</p><textarea placeholder="Enter Text..."></textarea><br>
       <input type="submit">
       <p style="padding: 5px">* required</p>
   </form>
</body>

</html>