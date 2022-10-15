<?php

$name = "Name: ".$_POST['firstname']." ".$_POST['lastname'];
$gender = "Gender: ".$_POST['gender'];
$email = "Email: ".$_POST['email'];
$dob = "Date of birth: ".$_POST['dob'];

$filename = './userdata.csv'; 
$handle = fopen($filename, "a");    
$content = fwrite($handle, $name.",");
$content = fwrite($handle, $gender.",");
$content = fwrite($handle, $email.",");
$content = fwrite($handle, $dob.",");
fclose($handle);

$filename = './userdata.csv'; 
$handle = fopen($filename, "r"); 
$content = fread($handle, filesize($filename));
print_r($content);
fclose($handle);