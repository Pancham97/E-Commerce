<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
<?php
    include('topmenu.php');
    $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check sql connection!");
    $code = $_REQUEST['itemcode'];
    $query = "select * from products " . "where item_code like '$code'";
    $results = mysqli_query($connection, $query) or die(mysql_error());
    $row = mysqli_fetch_assoc($results);
    extract($row); 
    echo '<div class="row">';
    echo '<div class="container">';
    echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"5px\">";
    echo "<tr><td style=\"padding: 3px;\" rowspan=\"6\">";
    echo '<img src=' . $imagename . ' style="max-width: 500px; width: auto; height: auto;"></td>';
    echo "<td colspan=\"2\" style=\"font-family:verdana;\">";
    echo "<h2><b>" . $item_name . "</b></h2><br>";
    echo "<h4>Company: " . $brand_name . "</h4>";
    echo "<h4>Weight: " . $weight . "</h4>";
    echo "<h4>Dimension: " . $dimension . "</h4><br>";
    echo "<h3>Features</h3>";
    echo "</td></tr><tr><td colspan=\"2\"><table><tr><td>";
    $itemname = urlencode($item_name);
    $itemprice = $price;
    $itemdescription = $description;
    $pfquery = "select feature1, feature2, feature3, feature4, feature5, feature6 from productfeatures " . "where item_code like '$code'";
    $pfresults = mysqli_query($connection, $pfquery) or die(mysql_error());
    $pfrow = mysqli_fetch_assoc($pfresults);
    extract($pfrow);
    echo '1. ' . $feature1;
    echo "</td></tr><tr><td>";
    echo '2. ' . $feature2;
    echo "</td></tr><tr><td>";
    echo '3. ' . $feature3;
    echo "</td></tr><tr><td>";
    echo '4. ' . $feature4;
    echo "</td></tr><tr><td>";
    echo '5. ' . $feature5;
    echo "</td></tr><tr><td>";
    echo '6. ' . $feature6;
    echo "</td></tr><tr>";
    echo "<form method=\"post\" action=\"cart.php?action=add&icode=$item_code&iname=$itemname&iprice=$itemprice\">";
    echo "<td colspan=\"2\" style=\"font-family:verdana; font-size: 150%;\">";
    echo "<br><br>";
    echo 'Price: ' . $itemprice . '<br><br>';
    echo " Quantity: ";
    echo '<select name="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>';
    echo "<br><br>";
    echo "</td></tr><tr><td colspan=\"2\">";
//    echo "<button class=\"btn btn-default\" type=\"submit\"  value=\"Add to Cart\" ></button></td>";
    echo "<button type=\"submit\" class=\"btn btn-success\" name=\"addtocart\" style=\"font-size: 150%;\">Add to Cart</button></td>";
    echo " </form>";
    echo "</tr>";
    echo "</table></table>";
    echo "<br><br>";
    
    echo "<p style=\"font-size:140%;\">Description</p>";
    echo $itemdescription;
    echo '</div></div>';
    include 'footer.php';
?>

</body>
</html>