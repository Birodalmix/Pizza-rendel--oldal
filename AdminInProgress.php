<?php 
session_start();
$pagename="Folyamatban lévő rendelések";
require_once("DatabaseParts/User_Login_verification.php");
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
?>
<div id="orderBox">
<?php 
require("DatabaseParts/Order_display.php");
?>
</div>
<?php
require_once("parts/htmlBottom.php");
?>