<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce Website</title>
    </head>
    
    <body>
        <form action="additem1.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr><td colspan="2" align="center">Enter your information</td></tr>
<!--
                <tr>
                    <td>Item code: </td>
                    <td><input size="20" type="text" name="item_code"></td>
                </tr>
-->
                <tr>
                    <td>item name: </td>
                    <td><input size="20" type="text" name="item_name"></td>
                </tr>
                <tr>
                    <td>Brand name: </td>
                    <td><input size="20" type="text" name="brand_name"></td>
                </tr>
                <tr>
                    <td>Model number:</td>
                    <td><input size="50" type="text" name="model_number"></td>
                </tr>
                <tr>
                    <td>Weight: </td>
                    <td><input size="80" type="text" name="weight"></td>
                </tr>
                <tr>
                    <td>Dimension</td>
                    <td><input size="80" type="text" name="dimension"></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td><input size="30" type="text" name="description"></td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td><input size="30" type="text" name="category"></td>
                </tr>
                <tr>
                    <td>Quantity: </td>
                    <td><input size="30" type="text" name="quantity"></td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td><input size="30" type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Image name: </td>
                    <td><input size="20" type="text" name="imagename"></td>
                </tr>
                
                <tr>
                    <td><input name="submit" type="submit" value="Submit"></td>
                    <td><input type="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>