<?php
include("mysql.php");
include("functions.php");
session_start();
include("autologout.php");


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
// ---------------Nickname des Kunden geholt und in Variable customer gespeichert

?> 


<form action="zertifikat_erstellen.php" method="post">
  <p>Bitte w&aumlhlen Sie die CSR:</p>
  <p>
    <select name="csrPath">
	
		<?php
		foreach(glob("C:/Users/Administrator/Documents/Projekt/Customers/" . $customer . "/CSRs/*.csr") as $pathToCsr) {
			echo "<option value=\"" . $pathToCsr . "\">";
			$pathToCsr = basename($pathToCsr);
			$pathToCsr = substr($pathToCsr , 11);
			echo $pathToCsr . "</option>";
			}
			//--------------------------Alle CSR Dateien des Kunden in Dropdown in aufbereiteter Form angezeigt. Der Pfad der ausgewählten CSR wir mit POST weitergegeben
		?>
	
    </select>
  </p>
  <p> <input type="submit"> </p>
</form>