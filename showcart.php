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
        echo "<div style=\"width:200px; margin:auto;\">Your cart is empty!</div>";
    } else {
        ?>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <td>Item code</td>
                <td>Quantity</td>
                <td>Item name</td>
                <td>Price</td>
                <td>Total Price</td>
                <?php 
                    while($row = mysqli_fetch_assoc($results)) {
                        extract($row);
                        echo "<tr><td>";
                        echo $cart_itemcode;
                        echo "</td>";
                        echo "<td><form method=\"post\" action=\"cart.php?action=change&icode=$cart_itemcode\"><input type=\"text\" name=\"modified_quantity\" size=\"2\" value=\"$cart_quantity\">";
                        echo "</td><td>";
                        echo $cart_itemname;
                        echo "</td><td>";
                        echo $cart_price;
                        echo "</td><td>";
                        $totalquantity = $totalquantity + $cart_quantity;
                        $totalprice = number_format($cart_price * $cart_quantity, 2);
                        $totalamount = $totalamount + ($cart_price * $cart_quantity);
                        echo $totalprice;
                        echo "</td><td>";
                        echo "<input type=\"submit\" name=\"Submit\" value=\"Change quantity\"></form></td>";
                        echo "<td>";
                        echo "<form method=\"post\" action=\"cart.php?action=delete&icode=$cart_itemcode\">";
                        echo "<input type=\"submit\" name=\"Submit\" value=\"Delete item\"></form></td></tr></tr>";
                    }
                    echo "<tr><td>Total</td><td>$totalquantity</td><td></td><td></td><td>";
                    $totalamount = number_format($totalamount, 2);
                    echo $totalamount;
                    echo "</td></tr>";
                    echo "</table><br>";
                    echo "<div style=\"width:400px; margin:auto;\">You currently have " . $totalquantity . " products(s) selected in your cart</div>";
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
            </body></html>