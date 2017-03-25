
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Online Store</title>
    <link rel="stylesheet" href="css/style.css">
    <script language="JavaScript" type="text/javascript">
        function makeRequestObject() {
            var xmlhttp = false;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    var ajaxCart = document.getElementById("cartcountinfo");
                    ajaxCart.innerHTML = xmlhttp.responseText;
                }
            }
            return xmlhttp;
        }
        
        function updateCart() {
            var xmlhttp = makeRequestObject();            
            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var ajaxCart = document.getElementById("cartcountinfo");
                    ajaxCart.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "countcart.php", true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
    <table width="100%" cellspacing="0" cellpadding="2">
        <col style="width: 30%">
        <col style="width: 40%">
        <col style="width: 20%">
        <tr>
            <td style="background-color: cyan; color: blue;"></td>
            <td style="background-color: cyan; color: blue;"></td>
            <td style="background-color: cyan; color: blue;">
            <?php
                if(session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if(isset($_SESSION['emailaddress'])) {
                    echo "Welcome " . $_SESSION['emailaddress'] . "&nbsp;&nbsp;&nbsp;";
                    echo "<a href=\"logout.php\">Logout</a></td></tr>";
                } else {
                    echo "<a href=\"signin.php\">Login</a>&nbsp;&nbsp;&nbsp;";
                    echo "<a href=\"signup.php\">Sign up</a></td></tr>";
                }
                
            ?>
                <tr>
                    <td style="font-size: 35px; color: blue; background-color: cyan;">
                        <b>Online Store</b>
                    </td>
                    
                    <td bgcolor="cyan">
                        <form method="post" action="searchitems.php">
                            <input size="50" type="text" name="tosearch">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </td>
                    
                    <td bgcolor="cyan">
                        <a href="cart.php"><img style="max-width: 40px; max-height: 40px; width: auto; height: auto;" src="images/corner-logo.png"><span id="cartcountinfo"></span></a>
                    </td>
                </tr>
    </table>
    
    <div class="container">
        <nav>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Electronics</a>
                    <ul>
                        <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
                        <li><a href="itemlist.php?category=Laptops">Laptops</a></li>
                        <li><a href="itemlist.php?category=Camera">Cameras</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Home &amp; Furniture</a>
                    <ul class="large">
                        <li><a href="index.php">Kitchen Essentials</a></li>
                        <li><a href="index.php">Bath Essentials</a></li>
                        <li><a href="index.php">Furniture</a></li>
                        <li><a href="index.php">Dining &amp; Serving</a></li>
                        <li><a href="index.php">Cookware</a></li>
                    </ul>
                </li>
                <li><a href="index.php">Books</a></li>
            </ul>
        </nav>
    </div>
<p></p>
