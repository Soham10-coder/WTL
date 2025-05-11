<?php
    $file = fopen("data.txt", "w"); 
    fwrite($file, "This message is added to the file.");

    $file = fopen("data.txt", "r");
    $content = fread($file, filesize("data.txt"));
    echo "</br>".$content."</br>";

    $file = fopen("data.txt", "a"); 
    fwrite($file, "\nNew message added to this file.");

    foreach (file("data.txt") as $line) {
        echo $line . "<br>";
    }
    fclose($file);
?>
