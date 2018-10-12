<!doctype html>

<html>

<head>
    <!--
    Exercise 02_05_01
    Author: Jaggar Hample
    Date: 10/09/18  
    Filename: VisitorFeedback3.php
    -->
    <title>Visitor Feedback 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    $dir = "./comments";
    if (is_dir($dir)) {
        $commentFiles = scandir($dir);
        foreach ($commentFiles as $fileName) {
            if ($fileName !== "." && $fileName !== "..") {
                echo "From <strong>$fileName</strong><br>";
                $comment = file($dir . "/" . $fileName);
                echo "From: " . htmlentities($comment[0]) . "<br>\n";
                echo "Email Address: " . htmlentities($comment[1]) . "<br>\n";
                echo "Date: " . htmlentities($comment[2]) . "<br>\n";
                $commentLines = count($comment);
                for ($i = 3; $i < $commentLines; $i++) {
                    echo htmlentities($comment[$i]) . "<br>\n";
                }
                echo "<hr>\n";
            }
            
        }
    }
    ?>
        <h2>Visitor Feedback 3</h2>
</body>

</html>
