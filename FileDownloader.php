<?php
    $dir = "../Excercise-02_01_01";
    if (isset($_GET['filename'])) {
        $fileToGet = $dir . "/" . stripslashes($_GET['fileName']);
        if (is_readable($fileToGet)) {
            $errorMsg = "";
            $showErrorPage = false;
            header("Content-Description: File Transfer");
            header("Content-Type: application/force-download");
            header("Content-Disposition: attachment; filename= \"" . $_GET['fileName'] . "\"");
            header("Content-Transfer-Encoding: base64");
            header("Content-Length: " . filesize($fileToGet));
            readfile($fileToGet);
        }
        else {
            $errorMsg = "Cannot read \"$fileToGet\"";
            $showErrorPage = true;
        }
    }else {
        $errorMsg = "No filename specified";
        $showErrorPage = false;
    }
    if ($showErrorPage) {
?>
<!doctype html>

<html>

<head>
    <!--
    Exercise 02_05_01
    Author: Jaggar Hample
    Date: 10/04/18  
    Filename: FileDownloader.php
    -->
    <title>File Download Error</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <p>There was an error downloading "<?php echo htmlentities($_GET['fileName']); ?>"</p>
   <p><?php echo htmlentities($errorMsg); ?></p>
</body>

</html>
<?php   
    }
?>