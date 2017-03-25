<?php
    $totalquantity = 0;
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check your connection!");
    $sess = session_id();
    $query = "select * from cart where cart_sess = '$sess'";
    $results = mysqli_query($connection, $query) or die(mysql_error());
    while($row = mysqli_fetch_assoc($results)) {
        extract($row);
        $totalquantity = $totalquantity + $cart_quantity;
    }
    echo $totalquantity;
?>