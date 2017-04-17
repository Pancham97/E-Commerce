-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 10:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_sess` char(50) NOT NULL,
  `cart_itemcode` varchar(20) NOT NULL,
  `cart_quantity` smallint(6) NOT NULL,
  `cart_itemname` varchar(100) NOT NULL,
  `cart_price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_sess`, `cart_itemcode`, `cart_quantity`, `cart_itemname`, `cart_price`) VALUES
('un45fvgj5dlp7m8mr4nlv2ujn0', '010', 1, 'Demo', '0.00'),
('a9al7bl8le9a1mqak13tcv91n2', '007', 2, 'Canon 7D', '1700.00'),
('qusdkrua6b0j0ssdqdoe19tcj5', '003', 1, 'MacBook Pro', '1400.00'),
('gh5ok4p6f9me71grnujltao2g5', '002', 1, 'MacBook Air', '999.00'),
('gh5ok4p6f9me71grnujltao2g5', '008', 1, 'Nikon 349', '1700.00'),
('p7pb5g35h7l1jjvc2et55gplj6', '003', 2, 'MacBook Pro', '1400.00'),
('p7pb5g35h7l1jjvc2et55gplj6', '007', 1, 'Canon 7D', '1700.00'),
('p7pb5g35h7l1jjvc2et55gplj6', '004', 1, 'MacBook', '20139.00'),
('ghsr1o82dvj9ltpoj7b1h8bja4', '004', 1, 'MacBook', '20139.00'),
('ghsr1o82dvj9ltpoj7b1h8bja4', '007', 2, 'Canon 7D', '1700.00'),
('ghsr1o82dvj9ltpoj7b1h8bja4', '003', 1, 'MacBook Pro', '1400.00'),
('ro5vrtsqij0rvlhunjh9rk0mh7', '004', 1, 'MacBook', '20139.00'),
('ro5vrtsqij0rvlhunjh9rk0mh7', '005', 1, 'XPS 13', '1200.00'),
('ro5vrtsqij0rvlhunjh9rk0mh7', '008', 1, 'Nikon 349', '1700.00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `complete_name` varchar(50) NOT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `cellphone_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`email_address`, `password`, `complete_name`, `address_line1`, `address_line2`, `city`, `state`, `zipcode`, `country`, `cellphone_no`) VALUES
('panchamkhaitan@outlook.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Admin', '111, jsdkjahsdkjahskdjhasdkjahskd', '', 'Surat', 'Gujarat', '395007', 'India', '7405440221'),
('abcd@gmail.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Pancham Khaitan', '101, Bhavrishi Hostel, Nana Bazaar', '', 'Anand', 'Gujarat', '388120', 'India', '7405440221');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(6) NOT NULL,
  `order_date` date NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `shipping_address_line1` varchar(255) NOT NULL,
  `shipping_address_line2` varchar(255) NOT NULL,
  `shipping_city` varchar(50) NOT NULL,
  `shipping_state` varchar(50) NOT NULL,
  `shipping_country` varchar(50) NOT NULL,
  `shipping_zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_no` int(6) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `price` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `order_no` int(6) NOT NULL,
  `order_date` date NOT NULL,
  `amount_paid` decimal(7,2) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `name_on_card` varchar(30) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `expiration_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productfeatures`
--

CREATE TABLE `productfeatures` (
  `item_code` varchar(20) NOT NULL,
  `feature1` varchar(255) NOT NULL,
  `feature2` varchar(255) NOT NULL,
  `feature3` varchar(255) NOT NULL,
  `feature4` varchar(255) NOT NULL,
  `feature5` varchar(255) NOT NULL,
  `feature6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productfeatures`
--

INSERT INTO `productfeatures` (`item_code`, `feature1`, `feature2`, `feature3`, `feature4`, `feature5`, `feature6`) VALUES
('004', 'This is a MacBook!', 'It is designed by Apple in California', 'This device is not that good.', 'It has just one port!', 'Can you believe it?', 'Me neither!'),
('001', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!'),
('002', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!'),
('003', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!'),
('005', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!'),
('006', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!'),
('007', 'This is a good product!', 'This product was designed with love!', 'Please buy this thing!', 'If you don''t, we won''t let you go bro!', 'Tujhe Khuda ki kasam, khareed le!', 'Achha chal fake discount bhi le le!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_code` int(20) NOT NULL,
  `item_name` varchar(150) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `model_number` varchar(30) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `imagename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_code`, `item_name`, `brand_name`, `model_number`, `weight`, `dimension`, `description`, `category`, `quantity`, `price`, `imagename`) VALUES
(1, 'DELL laptop', 'DELL', '231672', '200gm', '15.6"', 'This product is amazing!', 'electronics', 200, '3000.00', 'images/sq_1.jpg'),
(2, 'MacBook Air', 'Apple', '029jklwjr', '1.0kg', '13.3"', 'This is a MacBook Air!', 'Laptops', 200, '999.00', 'images/sq_2.jpg'),
(3, 'MacBook Pro', 'Apple', 'ajsdjasl', '2.0kg', '13.3"', 'This is a MacBook Pro!', 'Laptops', 200, '1400.00', 'images/sq_3.jpg'),
(4, 'MacBook', 'Apple', 'ProBro', '0.5kg', '12.0"', 'This is a MacBook bro!', 'Laptops', 200, '20139.00', 'images/sq_4.jpg'),
(5, 'XPS 13', 'DELL', 'XPS13', '1.0kg', '13.3"', 'This is a Dell XPS 13!', 'Laptops', 200, '1200.00', 'images/sq_5.jpg'),
(6, 'XPS 15', 'DELL', 'XPS15', '1.4kg', '15.6"', 'This is a Dell XPS 15!', 'Laptops', 200, '1700.00', 'images/sq_6.jpg'),
(8, 'Nikon 349', 'Nikon', 'JJWI', '0.5kg', '90X23', 'This is a Nikon 349!', 'Camera', 200, '1700.00', 'images/sq_8.jpg'),
(9, 'Whirlpool X360', 'Whirlpool', 'JOAS', '12kg', '90X23', 'This is a Whirlpool!', 'Electronics', 200, '2912.00', 'images/s1.jpg'),
(10, 'Demo', 'Pancham', '0923', '920Kg', '20X20', 'This is a demo', 'SmartPhones', 999, '0.00', 'images/s3.jpg'),
(11, 'Canon 70D', 'Canon', 'EOS 70D', '600gm', '', 'Canon EOS 70D is the most innovative product developed by us at Canon to provide you with the best photo capture and an immersive experience.', 'Camera', 10, '99999.99', 'images/canon-70d.jpg'),
(12, 'Canon 5D', 'Canon', '5D', '800gm', '', 'Canon 5D is the best ever product developed by us Canon to provide you with the best photo experience and make you feel like a pro even. when you are not one. Go die.', 'Camera', 8, '99999.99', 'images/canon-EOS_5D.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
