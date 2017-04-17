<?php
    include('topmenu.php');
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
<!--
        <center>
            <h2>Login to Online Store!</h2><br>
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
        </center>
-->
        <div class="row">
            <div class="container">
                
                <div class="col-md-4"></div>
                
                    <div class="col-md-4 form">
                        <h2>Login to Online RS!</h2><br>
                        <form action="validateuser.php" method="post">
                            <label for="emailaddress" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="emailaddress" required autofocus>
            
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        
<!--
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
-->
        
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
                            <a href="https://www.forgotpassword.com" style="float: right">Forgot password?</a><br><br>
                        </form>
                    </div>
                
            </div>
        </div>
        
<!--Form end-->
        <? include 'footer.php'; ?>
    </body>
</html>