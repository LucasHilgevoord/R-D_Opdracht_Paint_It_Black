<?php
    $debug = true;
    $control = ""; // mandatory for PHP 5.4
    $filePath = "drawing.json"; //path filename json control
    if(!empty($_GET['put'])){
      $control = $_GET['put'];
    }
    if($debug) {echo "php response 1 = > " . $control . "<hr>";}
    if($debug) {echo "php response 2 = > " . json_encode($control) . "<hr>";}
    $file = fopen($filePath, "w") or die ("can't open file");
    fwrite($file, $control);
    fclose($file);
?>
