<!doctype html>

<html>

<head>
    <!--
    Exercise 02_05_01
    Author: Jaggar Hample
    Date: 10/02/18  
    Filename: BackupComments.php
    -->
    <title>Backup Comments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
   <h2>Backup Comments</h2>
    <?php
        $source = "./comments";
        $destination = "./backups";
        if (! is_dir($destination)) {
            mkdir($destination);
            chmod($destination, 0757);
        }
        if (! is_dir($source)) {
            echo "The source directory did not exist, created it, no files to back up.<br>\n";
            mkdir($source);
            chmod($source, 0757);
        }
        else {
            $totalFiles = 0;
            $filesCopied = 0;
            $dirEntries = scandir($source);
            foreach ($dirEntries as $entry) {
                if ($entry != "." && $entry != "..") {
                    ++$totalFiles;
                    if (copy("$source/$entry", "$destination/$entry")) {
                        ++$filesCopied;
                    }
                    else{
                        echo "Could not copy file \"" . htmlentities($entry) . "\".<br>\n";
                    }
                } 
            }
            echo "<p>$filesCopied of $totalFiles successfully backed up.</p>\n";
        }
    ?>
</body>

</html>