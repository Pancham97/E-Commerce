<?php 

$connection = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check the server connection!");

$email_address = $_POST['item_code'];
$password = $_POST['item_name'];
$repassword = $_POST['brand_name'];
$completename = $_POST['model_number'];
$address1 = $_POST['weight'];
$address2 = $_POST['dimension'];
$city = $_POST['description'];
$state = $_POST['category'];
$country = $_POST['quantity'];
$zipcode = $_POST['price'];
$phone_no = $_POST['imagename'];

$insert_query = "INSERT INTO `products`(`item_code`, `item_name`, `brand_name`, `model_number`, `weight`, `dimension`, `description`, `category`, `quantity`, `price`, `imagename`) VALUES ('$email_address','$password','$repassword','$completename','$address1','$address2','$city','$state','$country','$zipcode','$phone_no')";

$result = mysqli_query($connection, $insert_query) or die(mysql_error());

?>