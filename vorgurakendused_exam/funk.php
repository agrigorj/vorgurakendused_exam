<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){	
$myfile = fopen("komments.txt", "a+") or die("Unable to open file!");
$name = $_POST["name"].": ";

fwrite($myfile, $name);
$comment= $_POST["comment"]."\n\n";
fwrite($myfile, $comment);
fclose($myfile);
$myfile = fopen("komments.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("komments.txt"));
fclose($myfile);
}
?> 