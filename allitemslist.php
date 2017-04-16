<!DOCTYPE html>
<html>
    <head></head>
    
    <body>
        <?php 
            $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check your sql connection!");
            $query = "select item_code, item_name, description, imagename, price from products";
            $results = mysqli_query($connection, $query) or die(mysql_error());         
            echo "<table align=\"center\" border = \"0\">";
            $x = 1;
            echo "<tr>";
            while($row = mysqli_fetch_assoc($results)) {
                if($x < 5) {
                    $x = $x + 1;
                    extract($row);
                    echo "<td style = \"padding-right:15px;\">";
                    echo "<a href = itemdetails.php?itemcode=$item_code>";
                    echo '<img src=' . $imagename . ' style="max-width:220px; max-height:240px; width: auto; height: auto;" /><br />';
                    echo $item_name . '<br />';
                    echo "</a>";
                    echo '$' .$price . '<br />';
                    echo "</td>";
                } else {
                    $x = 1;
                    echo "</tr><tr>";
                }
            }
            echo "</table>";      
        ?>
    </body>
</html>