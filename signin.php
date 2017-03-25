<?php
    include('topmenu.php');
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="validateuser.php" method="post">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td>Email address: </td>
                    <td><input type="text" name="emailaddress"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>