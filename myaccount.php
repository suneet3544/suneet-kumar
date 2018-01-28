<html>
<head>
<title>My Account</title>
<link href="popup/style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="popup/jquery.min.js"> </script>
<script type="text/javascript" src="popup/js/script.js"></script>
</head>

<body>
<p><a href="#" class="topopup">Click Here Trigger</a>
<div id="toPopup"> 
 <div class="close"></div>
<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
<div id="popup_content">
<font size="+1">Login</font>
<form name="frm" action="login_check.php" method="post" autocomplete="off">
<table width="95%" align="center" cellspacing="5" cellpadding="1">
  <tr>
    <td width="32%">User ID :</td>
    <td width="68%"><input type="text" name="user1" autofocus required></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="pass2" required></td>
  </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Login">&nbsp;<input type="button" value="Cancel"></td>
  </tr>

</table>

</div>
</div>
</body>
</html>