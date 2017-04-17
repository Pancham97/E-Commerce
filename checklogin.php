<?php
    include('topmenu.php');
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "shopping") or die("Check sql connection!");
    $cartamount = 0;
    $cartamount = $_POST['cartamount'];
    $_SESSION['cartamount'] = $cartamount;
    if(isset($_SESSION['emailaddress'])) {
        $email_address = $_SESSION['emailaddress'];
        echo "Welcome " . $_SESSION['complete_name'] . "! <br>";
    }
    if(isset($_SESSION['password'])) {
        $password = $_SESSION['password'];
    }
    if((isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
        $sess = session_id();
        $query = "select * from cart where cart_sess = '$sess'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        if(mysqli_num_rows($result) >= 1) {
            echo "If you've finished shopping, ";
            echo "<a href=\"shipping_info.php\">Click here</a> to supply shipping information";
            echo "Or you can keep shopping!";
        } else {
            echo "You can purchase by selecting items from the menu!";
        }
    } else {
        ?>
        <html>
            <head></head>
            <body>
                <h3>Not logged in yet?</h3>
                <p>You are currently not logged in. You can purchase only if you are logged in!<br>If you have already registered, <a href="signin.php">click here </a>to log in, or if you want to register, <a href="signup.php">click here</a> to register.</p>
            </body>
        </html>
        <?php
    }
?>