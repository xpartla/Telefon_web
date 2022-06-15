<?php
 $delimiter ="*";
 $path = 'data.txt';
 if (isset($_POST['meno']) && isset($_POST['text'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['meno'].' - '.$_POST['text'];
    fwrite($fh,$string);
	fwrite($fh,$delimiter);
    fclose($fh); 
 }
 header("Location: recenzie.php");
?>