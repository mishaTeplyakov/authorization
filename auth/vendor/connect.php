<?php

    $connect = mysqli_connect('mysql', 'root', 'rootpassword', 'auth');

    if (!$connect) {
        die('Error connect to DataBase');
    }