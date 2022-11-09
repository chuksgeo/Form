<?php

    $data['name'] = $_POST['firstname']." ".$_POST['lastname'];
    $data['gender'] = $_POST['gender'];
    $data['email'] = $_POST['email'];
    $data['dob'] = $_POST['dob'];


    $filename = './userdata.csv'; 
    $handle = fopen($filename, "a");    
    $content = fwrite($handle, implode(",", $date));
    fclose($handle);

    $filename = './userdata.csv'; 
    $handle = fopen($filename, "r"); 
    $content = fread($handle, filesize($filename));
    print_r($content);
    fclose($handle);