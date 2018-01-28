<html>
<head>
<link href="CSS/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="right_content">
<div id="cart">
<div class="cart_title">Shopping Cart</div>
<div class="cart_details"> 3 items <br />
<span class="border_cart"></span> Total: <span class="price">Rs.40,000</span> </div>
<div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
</div>
<div id="loginbox">
<table width="95%" align="center">
<tr><td align="center"><font face="Comic Sans MS" color="#004080">Thanks For Loigin</font></td></tr>
<tr><td align="center"><font face="Comic Sans MS" color="#847676">
<?php
include "conn.php";
if(isset($_SESSION['fname']))
{
	echo"Welcome &nbsp;".$_SESSION['fname'];
}
?>
</font></td></tr>
<tr><td align="center"><a href="../index.php"><input type="submit" class="login_button" value="Log Out"></a></td></tr>
<tr></tr>
</table>
</div>

<div id="right_menu">
<div class="title_box">Price Range</div>
<ul class="right_menu">
	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Below Rs.5,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.5,000 - Rs.10,000</a></li>
	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.10,000 - Rs.15,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.15,000 - Rs.20,000</a></li>
	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.20,000 - Rs.25,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.25,000 - Rs.30,000</a></li>
	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.30,000 - Rs.35,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.35,000 - Rs.40,000</a></li>
	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.40,000 - Rs.45,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.45,000 - Rs.50,000</a></li>
   	<li class="odd"><a><input type="radio" class="right_radio" name="rs" value="rs">Rs.50,000 - Rs.55,000</a></li>
	<li class="even"><a><input type="radio" class="right_radio" name="rs" value="rs">Above Rs.55,000</a></li>
	</ul>
</div>
<div id="new">
<div class="title_box">What"s New</div>
<div class="box">
<div class="product_title"><a href="Z3.html">Sony Xperia Z-3</a></div>
<div class="product_img"><a href="Z3.html"><img src="images/Xperia-Z3.png" alt="" border="0" width="100px" height="100px"/></a></div>
<div class="prod_price"><span class="reduce">Rs.46,000</span> <span class="price">Rs.39,000</span></div>
</div>
</div>
</div>
</body>
</html>