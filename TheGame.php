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
    // Global variable
    $dir = "TheGamers.txt";
    $players = fopen("TheGamers.txt", "a+") or die ("Unable to open file");
    ?>
     <p>Gamers:</p>
    <?php       
    echo ($_POST['screen'] . "<br>\n");
    fclose($players);
    ?>
    <form action="TheGame.php" method="post">
       <p>Username*: <input type="text" name="user" placeholder="JohnSmith123" required ></p>
       <p>Password*: <input type="password" name="pass" required></p>
       <p>Full Name*: <input type="text" name="name" placeholder="John Smith" required></p>
       <p>Email*: <input type="email" name="mail" placeholder="John@example.com" required></p>
       <p>Age*: <input type="number" name="age" required></p>
       <p>Screen Name*: <input name="screen" type="text" placeholder="JohnSmith" required></p>
       <p>Comments</p><textarea placeholder="Enter Text..."></textarea><br>
       <input type="submit">
       <p style="padding: 5px">* required</p>
   </form>
</body>

</html>