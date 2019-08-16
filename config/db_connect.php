<?php
    //    connect to database
    // $conn = mysqli_connect('localhost', 'mehedi', 'm3h3d1', 'shopping_cart_db');
    $conn = mysqli_connect('localhost', 'root', 'm3h3d1', 'shopping_cart_db');
    //    check the connection

    if(!$conn) {
        echo 'Connection Error ' . mysqli_connect_error();
    }
