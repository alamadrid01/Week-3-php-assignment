<?php

    if(isset($_POST['submit'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $date = $_POST['Dob'];
        $gender = $_POST['Gender'];
        $country = $_POST['Country'];

        $file = './userdata.csv';
        $data = fopen($file, 'a');
        fwrite($data, $name . '</br>');
        fwrite($data, $email . '</br>');
        fwrite($data, $date . '</br>');
        fwrite($data, $gender . '</br>' );
        fwrite($data, $country . '</br>');
        fclose($data);

        $done = fopen($file, 'r');
        $result = fread($done, filesize($file));
        print_r($result);
        fclose($done);
}

?>