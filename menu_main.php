<html>
<head>
<link href="CSS/index.css" rel="stylesheet" type="text/css" />
<link href="popup/style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="popup/jquery.min.js"> </script>
<script type="text/javascript" src="popup/js/script.js"></script>

</head>
<body>
    <div id="menu_main">
	<nav class="menu_main_text">
	<a class="a" href="Index.php">Home</a>&nbsp;&nbsp;|&nbsp;
	<a class="a" href="product.php">Products</a>&nbsp;&nbsp;|&nbsp;
	<a class="a" href="#">Specials</a>&nbsp;&nbsp;|&nbsp;
	<a href="#" class="topopup a">My Account</a>&nbsp;&nbsp;|&nbsp;
<div id="toPopup"> 
 <div class="close"></div>
<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
<div id="popup_content">
<font size="+1">Login</font>
<form name="login" action="login.php" method="post" autocomplete="on">
<table width="95%" align="center" cellspacing="5" cellpadding="1">
  <tr>
    <td width="32%">User ID :</td>
    <td width="68%"><input type="email" name="email1" autofocus required></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
  </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Login">&nbsp;<input type="button" value="Cancel"></td>
  </tr>

</table></form>

</div>
</div>





	<a class="a" href="signup.php">Sign Up</a>&nbsp;&nbsp;|&nbsp;
	<a class="a" href="#">Shipping</a>
    </nav>

<div id="menu-search"><input type="text" value="Search Product" class="search_input"/><input type="button" value="Search" class="search_button"/></div>

</div>
</body>
</html>