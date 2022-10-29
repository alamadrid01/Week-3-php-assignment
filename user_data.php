<?php

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $date = $_POST['Dob'];
    $gender = $_POST['Gender'];
    $country = $_POST['Country'];

    $file = './userdata.csv';
    $data = fopen($file, 'a');
    fwrite($data, $name );
    fwrite($data, $email);
    fwrite($data, $date);
    fwrite($data, $gender );
    fwrite($data, $country);
    fclose($data);

    $done = fopen($file, 'r');
    $result = fread($done, filesize($file));
    print_r($result);
    fclose($done);

?>