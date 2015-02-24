<?php
include("mysql.php");
include("functions.php");
session_start();
include("autologout.php");
echo $_POST['csrPath'];


$sql = "SELECT
                 Nickname
             FROM
                 User
             WHERE
                 ID = '".mysql_real_escape_string($_SESSION['UserID'])."'
		";
    $result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
	$row = mysql_fetch_assoc($result);
		$customer = htmlentities($row['Nickname'], ENT_QUOTES);
	//echo $customer


?> 