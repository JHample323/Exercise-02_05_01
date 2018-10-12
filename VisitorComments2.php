<!doctype html>

<html>

<head>
    <!--
    Exercise 02_05_01
    Author: Jaggar Hample
    Date: 10/05/18  
    Filename: VisitorComments2.php
    -->
    <title>Visitor Comments 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    $dir = "./comments";
    if (is_dir($dir)) {
        if (isset($_POST['save'])) {
            if (empty($_POST['name'])) {
                echo "Unknown visitor\n";
            }
            else {
                $saveString = stripslashes($_POST['name']) . "\n";
                $saveString .= stripslashes($_POST['email']) . "\n";
                $saveString .= date('r') . "\n";
                $saveString .= stripslashes($_POST['comment']) . "\n";
                    echo "\$saveString: $saveString<br>";
                $currentTime = microtime();
                    echo "\$currentTime: $currentTime<br>";
                $timeArray = explode(" ", $currentTime);
                    echo var_dump($timeArray) . "<br>";
                $timeStamp = (float)$timeArray[1] + (float)$timeArray[0];
                    echo "\$timeStamp: $timeStamp<br>";
                $saveFileName = "$dir/Comment.$timeStamp.txt";
                    echo "\$saveFileName: $saveFileName<br>";
                $fileHandle = fopen($saveFileName, "wb");
                if ($fileHandle === false) {
                    echo "There was an error creating \"" . 
                        htmlentities($saveFileName) . "\".<br>\n";
                }
                else {
                    if (fwrite($fileHandle, $saveString) > 0) {
                        echo "Successfully wrote to \"" . 
                        htmlentities($saveFileName) . "\".<br>\n";
                    }
                    else {
                       echo "There was an error writing to  \"" . 
                        htmlentities($saveFileName) . "\".<br>\n"; 
                    }
                    fclose($fileHandle);
                }
                
            }
        }
    }
    else {
        mkdir($dir);
        chmod($dir, 0757);
    }
    ?>
        <h2>Visitor Comments 2</h2>
        <form action="VisitorComments2.php" method="post"></form>
        Your Name:
        <input type="text" name="name">
        <br> Your E-Mail:
        <input type="email" name "email">
        <br>
        <textarea name="comment" rows="6" cols="100"></textarea>
        <br>
        <input type="submit" name="save" value="Submit Your Comment">
        <br>
</body>

</html>