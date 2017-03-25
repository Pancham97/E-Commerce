<?php
    include('topmenu.php');
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check your sql connection!");
    $message = "";
    $quantity = "";
    $action = "";
    $query = "";
    if(isset($_POST['quantity'])) {
        $quantity = trim($_POST['quantity']);
    }
    if($quantity == '') {
        $quantity = 1;
    }
    if($quantity <= 0) {
        echo "Quantity is zero or less";
        echo "Go back and enter a valid value";
    } else {
        if(isset($_REQUEST['icode'])) {
            $itemcode = $_REQUEST['icode'];
        }
        if(isset($_REQUEST['iname'])) {
            $item_name = $_REQUEST['iname'];
        }
        if(isset($_REQUEST['iprice'])) {
            $price = $_REQUEST['iprice'];
        }
        if(isset($_POST['modified quantity'])) {
            $modified_quantity = $_POST['modified_quantity'];
        }
        $sess_id = session_id();
        if(isset($_REQUEST['action'])) {
            $action = $_REQUEST['action'];
        }
        switch($action) {
            case "add":
                $query="select * from cart where cart_sess = '$sess_id' and cart_itemcode like '$itemcode'";
                $result = mysqli_query($connection, $query) or die(mysql_error());
                if(mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $qt = $row['cart_quantity'];
                    $qt = $qt + $quantity;
                    $query = "update cart set cart_quantity=$qt where cart_sess = '$sess_id' and cart_itemcode like '$itemcode'";
                    $result = mysqli_query($connection, $query) or die(mysql_error());
                } else {
                    $query = "insert into cart (cart_sess, cart_quantity, cart_itemcode, cart_itemname, cart_price) Values ('$sess_id', '$quantity', '$itemcode', '$item_name', '$price')";
                    $message = "<div align=\"center\"><strong>Item added!</strong></div>";
                }
                break;
                
            case "change":
                if($modified_quantity == 0) {
                    $query = "delete from cart where cart_sess = '$sess_id' and cart_itemcode like '$itemcode'";
                    $message = "<div style \"width:200px; margin:auto;\">Item deleted!</div>";
                } else {
                    if(modified_quantity < 0) {
                        echo "Invalid quantity entered!";
                    } else {
                        $query = "update cart set cart_quantity = '$modified_quantity' where cart_sess = '$sess_id' and cart_itemcode like '$itemcode'";
                        $message = "<div style=\"width:200px; margin:auto;\">Quantity changed!</div>";
                    }
                }
                break;
                
            case "delete":
                $query = "delete from cart where cart_sess = '$sess_id' and cart_itemcode like '$itemcode'";
                $message = "<div style=\"width:200px; margin:auto;\">Item deleted!</div>";
                break;
                
            case "empty":
                $query = "delete from cart where cart_sess = '$sess_id'";
                break;
        }
        if($query != "") {
            $results = mysqli_query($connection, $query) or die(mysql_error());
            echo $message;
        }
        include("showcart.php");
        echo "<script language=\"JavaScript\">updateCart();</script>";
    }
?>