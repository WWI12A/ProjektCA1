<?php
    error_reporting(E_ALL);
    include("mysql.php");
echo "<h1>Setup</h1>";

$sql = "DROP TABLE IF EXISTS USER";
@mysql_query($sql);
$sql = 'CREATE TABLE `User` ('
        . ' `ID` INT AUTO_INCREMENT NOT NULL, '
        . ' `Autologin` VARCHAR(32) NULL, '
        . ' `IP` VARCHAR(15) NULL, '
        . ' `SessionID` VARCHAR(32) NULL, '
        . ' `Nickname` VARCHAR(30) NOT NULL, '
        . ' `Passwort` VARCHAR(32) NOT NULL, '
        . ' `Email` VARCHAR(70) NOT NULL, '
        . ' `Show_Email` BOOL NULL, '
        . ' `Homepage` VARCHAR(70) NOT NULL, '
        . ' `Registrierungsdatum` DATE NULL, '
        . ' `Wohnort` VARCHAR(70) NOT NULL, '
        . ' `ICQ` VARCHAR(20) NOT NULL, '
        . ' `AIM` VARCHAR(70) NOT NULL, '
        . ' `YIM` VARCHAR(70) NOT NULL, '
        . ' `MSN` VARCHAR(70) NOT NULL, '
        . ' `Avatar` VARCHAR(100) NOT NULL, '
        . ' `Letzter_Login` INT NOT NULL DEFAULT \'0\', '
        . ' `Letzte_Aktion` INT NOT NULL DEFAULT \'0\','
        . ' PRIMARY KEY (`ID`),'
        . ' UNIQUE (`Nickname`, `Email`)'
        . ' )';
if(mysql_query($sql))
         echo "<p>Tabelle 'User' erfolgreich erstellt</p>";
else {
         echo "<p>Tabelle 'User' konnte nicht erstellt werden.</p>";
         echo "<h2>Query</h2>\n";
         echo "<pre>".$sql."</pre>\n";
         echo "<h2>Fehlermeldung</h2>";
         echo "<p>".mysql_error()."</p>";
         die();
}

$sql = "DROP TABLE IF EXISTS User_Rechte";
@mysql_query($sql);
$sql = 'CREATE TABLE `User_Rechte` ('
        . ' `ID` INT AUTO_INCREMENT NOT NULL, '
        . ' `UserID` INT NOT NULL, '
        . ' `Recht` VARCHAR(100) NOT NULL, '
        . ' PRIMARY KEY (`ID`)'
        . ' )';

if(mysql_query($sql))
         echo "<p>Tabelle 'User_Rechte' erfolgreich erstellt</p>";
else {
         echo "<p>Tabelle 'User_Rechte' konnte nicht erstellt werden.</p>";
         echo "<h2>Query</h2>\n";
         echo "<pre>".$sql."</pre>\n";
         echo "<h2>Fehlermeldung</h2>";
         echo "<p>".mysql_error()."</p>";
         die();
}

    $sql = "INSERT INTO
                        User
                        (Nickname,
                         Email,
                         Show_Email,
                         Passwort,
                         Registrierungsdatum
                        )
            VALUES
                        ('admin',
                         'webmaster@website.de',
                         '1',
                         '".md5('admin')."',
                         CURDATE()
                        )
           ";
if(mysql_query($sql))
         echo "<p>User 'admin' mit Passwort 'admin' erfolgreich erstellt</p>";
else {
         echo "<p>User 'admin' konnte nicht erstellt werden.</p>";
         echo "<h2>Query</h2>\n";
         echo "<pre>".$sql."</pre>\n";
         echo "<h2>Fehlermeldung</h2>";
         echo "<p>".mysql_error()."</p>";
         die();
}

    $sql = "SELECT
                        LAST_INSERT_ID()
           ";
    $result = mysql_query($sql);
    $ID = mysql_result($result,0);

    $sql = "INSERT INTO
                        User_Rechte
                        (UserID,
                         Recht
                        )
            VALUES
                        ('".$ID."',
                         'Adminbereich'
                        )
           ";
if(mysql_query($sql))
         echo "<p>Recht 'Adminbereich' erfolgreich zu User 'admin' hinzugefügt</p>";
else {
         echo "<p>Recht 'Adminbereich' konnte nicht zu User 'admin' zugeordnet werden</p>";
         echo "<h2>Query</h2>\n";
         echo "<pre>".$sql."</pre>\n";
         echo "<h2>Fehlermeldung</h2>";
         echo "<p>".mysql_error()."</p>";
         die();
}

    $sql = "INSERT INTO
                        User_Rechte
                        (UserID,
                         Recht
                        )
            VALUES
                        ('".$ID."',
                         'User administrieren'
                        )
           ";
if(mysql_query($sql))
         echo "<p>Recht 'User administrieren' erfolgreich zu User 'admin' hinzugefügt</p>";
else {
         echo "<p>Recht 'User administrieren' konnte nicht zu User 'admin' zugeordnet werden</p>";
         echo "<h2>Query</h2>\n";
         echo "<pre>".$sql."</pre>\n";
         echo "<h2>Fehlermeldung</h2>";
         echo "<p>".mysql_error()."</p>";
         die();
}

if(!file_exists("avatare")){
         if(mkdir("avatare"))
                 echo "<p>Ordner 'avatare' erfolgreich erstellt</p>";
         else {
                 echo "<p>Ordner 'avatare' konnte nicht erstellt werden</p>";
                 die();
         }
}

echo "<h2>Setup erfolgreich beendet!</h2>";

echo "<p>Zurück zur <a href=\"index.php\">Startseite</a></p>";

?>