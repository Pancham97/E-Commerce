<!DOCTYPE html>
<html>
    <head>
        <script  type="text/javascript">
            function updateUser(username) {
                var ajaxUser = document.getElementById("userinfo");
                ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log out</a>";
            }
        </script>
    </head>
    <body>
        <?php
            include('topmenu.php');
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection");
            $query = "select email_address, password, complete_name from customers where email_address like '" .$_POST['emailaddress'] . "' and password like (PASSWORD('" . $_POST['password'] . "'))";
            $result = mysqli_query($connection, $query) or die(mysql_error());
            
            if(mysqli_num_rows($result) == 1) {
                while($row = mysqli_fetch_assoc($result)) {
                    extract($row);
                    echo "Welcome, " . $complete_name . " to our online services!<br>";
                    echo "<script language=\"JavaScript\">updateUser('$complete_name');</script>";
                    $_SESSION['complete_name'] = $row['complete_name'];
                    $_SESSION['emailaddress'] = $_POST['emailaddress'];
                    $_SESSION['password'] = $_POST['password'];
                    
                }
            } else {
                ?>
                Invalid email or password<br>
                Not registered?
                <a href="signup.php">Click here</a> to register.<br><br>
                Want to try again? <br>
                <a href="signin.php">Click here </a>to try login again!<br>
                <?php 
            }
        ?>
    </body>
</html>