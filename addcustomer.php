<?php 

include 'topmenu.php';

$connection = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check the server connection!");

$email_address = $_POST['emailaddress'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$completename = $_POST['complete_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['addres2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$phone_no = $_POST['phone_no'];

$insert_query = "insert into customers (email_address, password, complete_name, address_line1, address_line2, city, state, zipcode, country, cellphone_no) Values ('$email_address', (PASSWORD('$password')), '$completename', '$address1', '$address2', '$city', '$state', '$zipcode','$country', '$phone_no')";

$result = mysqli_query($connection, $insert_query) or die(mysql_error());

if($result) {
    ?>
    <div class="row">
        <div class="container">
            <h4>Dear, <?php echo $completename; ?>, your account is successfully created!</h4>
            <h4>Click <a href="index.php">here</a> to start shopping!</h4>
        </div>
    </div>
    
<?php 
    header ("Location: index.php");
} else {
    echo "Some error occurred while creating your account! Please try again!";
}

include 'footer.php';

?>