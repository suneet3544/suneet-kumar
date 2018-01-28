<html>
<head>
<link href='CSS/index.css' rel='stylesheet' type='text/css' />
<body>
<div id='center'>
<div class="center_title_bar">Sign Up</div>

<div class="field">
<form name="signup" action="sign_process.php" method="post" autocomplete="on">
<font size="+1" color="red">Basic Information</font><br/>

  <table width="95%" height="34%" align="center" cellpadding="8" cellspacing="1">
    <tr>
      <td width="15%">First Name :</td>
      <td width="30%"><input type="text" name="fname" autofocus required></td>
      <td width="25%">Last Name :</td>
      <td width="30%"><input type="text" name="lname"></td>
    </tr>
    <tr>
      <td> E-Mail :</td>
      <td><input type="email" name="email1" required></td>
      <td>Confirm-E-Mail :</td>
      <td><input type="email" name="email2" required></td>
    </tr>
    <tr>
      <td> User ID :</td>
      <td><input type="text" name="userid" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>         Password :</td>
      <td><input type="password" name="password1" required></td>
      <td>Confirm-Password :</td>
      <td><input type="password" name="password2" required></td>
    </tr>
    <tr>
	  <td>Mobile No:</td>
      <td><input type="number" name="mobile" value="Mobile Number" required></td>
      <td>		Gender :</td>
      <td><input type="radio" name="gender" value="male">
        Male
        <input type="radio" name="gender" value="female">
        Female</td>
      
    </tr>
  </table>

  <p><font size="+1" color="red">Address information:</font></p>
  <table width="95%" height="70%" align="center" cellspacing="8" cellpadding="1">
    <tr>
      <td width="30%">Address Line 1 :</td>
      <td width="65%"><input type="text" name="line1" size="60" required></td>
    </tr>
    <tr>
      <td>Address Line 2 :</td>
      <td><input type="text" name="line2" size="60"></td>
    </tr>
    <tr>
      <td>Select Counrty :</td>
      <td><select name="country">
        <option>-Select Country-</option>
        <option>America</option>
        <option>Australia</option>
        <option>Canada</option>
        <option>India</option>
        <option>Pakistan</option>
        <option>South Korea</option>
        <option>England</option>
      </select></td>
    </tr>
    <tr>
      <td>State :</td>
      <td><input type="text" name="state" required></td>
    </tr>
    <tr>
      <td>Town/City :</td>
      <td><input type="text" name="city" required></td>
    </tr>
    <tr>
      <td>Postal Code :</td>
      <td><input type="text" name="postal" required></td>
    </tr>
    <tr>
      <td> Secuirity Question :</td>
      <td><select name="question">
        <option>Q1.: What is your homename?</option>
        <option>Q2.: What is your home-town?</option>
        <option>Q3.: Which color you like most?</option>
		<option>Q4.: What is your vehicle registration no?</option>
		<option>Q5.: What is your favourite game?</option>
        <option>Q6.: What is your first girlfriend name?</option>
      </select></td>
    </tr>
    <tr>
      <td>Answer:</td>
      <td><input type="text" name="answer" size="30" required></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="checkbox" name="check" />
        <font size="+1">I accept and agree with all the terms and conditions</font></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="SUBMIT">
        &nbsp;&nbsp;&nbsp;
        <input type="reset" value="RESET">
        &nbsp;&nbsp;&nbsp;
        <input type="button" value="CANCEL"></td>
      </tr>
    </table></form>
</div>
</div>
</body>
</html>