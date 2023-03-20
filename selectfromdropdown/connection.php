<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'dropdown';

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if(!$connection){
        echo "Does not connect to database";
    }
?>