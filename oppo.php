<html>
<head>
<title>Mobile World</title>
<link href="CSS/Index.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
var isCtrl = false;
document.onkeyup=function(e)
{
if(e.which == 17)
isCtrl=false;
}

document.onkeydown=function(e)
{
if(e.which == 17)
isCtrl=true;
if((e.which == 85) || (e.which == 67) && isCtrl == true)
{
return false;
}
}
</script>
</head>
<body oncontextmenu="return false">
<div id='main_container'>
<?php

include('menu_soc.php'); //head 1
include('menu_main.php'); //head 2 for main menu
include('left_content.php'); //for navigation bar left
include('slider.php'); //for slider
include('right_content.php'); //for right navigation
include('manufacturer\center\oppo.php'); //for center content
include('footer.php'); //for footer
?>
</div>
</body>
</html>