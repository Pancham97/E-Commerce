<!DOCTYPE html>
<html>
    <head>
        <title>E-Commerce Website</title>
        <script language="JavaScript" type="text/javascript" src="js/checkform.js"></script>
    </head>
    
    <body>
        <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr><td colspan="2" align="center">Enter your information</td></tr>
                <tr>
                    <td>Email address: </td>
                    <td><input size="20" type="text" name="emailaddress"><span id="emailmsg"></span></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input size="20" type="password" name="password"><span id="passwdmsg"></span></td>
                </tr>
                <tr>
                    <td>Retype password: </td>
                    <td><input size="20" type="password" name="repassword"><span id="repasswdmsg"></span></td>
                </tr>
                <tr>
                    <td>Complete name:</td>
                    <td><input size="50" type="text" name="complete_name"><span id="usermsg"></span></td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><input size="80" type="text" name="address1"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input size="80" type="text" name="address2"></td>
                </tr>
                <tr>
                    <td>City: </td>
                    <td><input size="30" type="text" name="city"></td>
                </tr>
                <tr>
                    <td>State: </td>
                    <td><input size="30" type="text" name="state"></td>
                </tr>
                <tr>
                    <td>Country: </td>
                    <td><input size="30" type="text" name="country"></td>
                </tr>
                <tr>
                    <td>Zip code: </td>
                    <td><input size="20" type="text" name="zipcode"></td>
                </tr>
                <tr>
                    <td>Phone number: </td>
                    <td><input size="30" type="text" name="phone_no"></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit" value="Submit"></td>
                    <td><input type="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>