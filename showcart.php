<?php
    if(! isset($totalamount)) {
        $totalamount = 0;
    }
    $totalquantity = 0;
    if(! session_id()) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check your sql connection!");
    $sessid = session_id();
    $query = "select * from cart where cart_sess = '$sessid'";
    $results = mysqli_query($connection, $query) or die(mysql_error());
    if(mysqli_num_rows($results) == 0) {
        echo "<div style=\"margin:auto;\"><center><h2>Your cart is empty!</h2><br><br><h1><a href=\"index.php\">Shop Now!</a></h1></center></div>";
    } else {
        ?>
        <table border="1" align="center" style="padding: 20px;">
            <tr style="padding: 20px;">
                <td style="padding: 20px;">Item code</td>
                <td style="padding: 20px;">Quantity</td>
                <td style="padding: 20px;">Item name</td>
                <td style="padding: 20px;">Price</td>
                <td style="padding: 20px;">Total Price</td>
                <?php 
                    while($row = mysqli_fetch_assoc($results)) {
                        extract($row);
                        echo "<tr><td style=\"padding: 20px;\">";
                        echo $cart_itemcode;
                        echo "</td>";
                        echo "<td style=\"padding: 20px;\"><form method=\"post\" action=\"cart.php?action=change&icode=$cart_itemcode\"><input type=\"text\" name=\"modified_quantity\" size=\"2\" value=\"$cart_quantity\">";
                        echo "</td><td style=\"padding: 20px;\">";
                        echo $cart_itemname;
                        echo "</td><td style=\"padding: 20px;\">";
                        echo $cart_price;
                        echo "</td><td style=\"padding: 20px; text-align: center;\">";
                        $totalquantity = $totalquantity + $cart_quantity;
                        $totalprice = number_format($cart_price * $cart_quantity, 2);
                        $totalamount = $totalamount + ($cart_price * $cart_quantity);
                        echo $totalprice;
//                        echo "</td><td style=\"padding: 20px;\">";
//                        echo "<input type=\"submit\" name=\"Submit\" value=\"Change quantity\"></form></td>";
                        echo "<td style=\"padding: 20px;\">";
                        echo "<form method=\"post\" action=\"cart.php?action=delete&icode=$cart_itemcode\">";
                        echo "<input type=\"submit\" name=\"Submit\" value=\"Delete item\"></form></td></tr></tr>";
                    }
                    echo "<tr><td style=\"padding: 20px;\"><b>Total</b></td><td style=\"padding: 20px;\">$totalquantity</td><td style=\"padding: 20px;\"></td><td></td><td style=\"padding: 20px;\">";
                    $totalamount = number_format($totalamount, 2);
                    echo "<b>" . $totalamount . "</b>";
                    echo "</td></tr>";
                    echo "</table><br>";
                    echo "<div style=\"margin:auto;\"><center>You currently have " . $totalquantity . " product(s) selected in your cart</center></div>";
                ?>
                <table border="0" style="margin: auto;">
                    <tr>
                        <td style="padding: 10px;">
                            <form method="post" action="cart.php?action=empty">
                                <input type="submit" name="Submit" value="Empty Cart" style="font-family:verdana; font-size: 150%;">
                            </form>
                        </td>
                        <td>
                            <form method="post" action="checklogin.php">
                                <input id="cartamount" name="cartamount" type="hidden" value="<?php echo $totalamount; ?>">
                                <input type="submit" name="Submit" value="Checkout" style="font-family:verdana; font-size: 150%;">
                            </form>
                        </td>
                    </tr>
                </table>
                
                <?php
    }
?>