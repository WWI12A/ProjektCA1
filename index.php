<?php
    error_reporting(E_ALL);
    include("mysql.php");
    include("functions.php");

    // Session starten
    session_start();
    include("autologout.php");

    if(isset($_POST['submit']) AND $_POST['submit']=='Einloggen'){
        // Falls der Nickname und das Passwort �bereinstimmen..
        $sql = "SELECT
                        ID
                FROM
                        User
                WHERE
                        Nickname = '".mysql_real_escape_string(trim($_POST['Nickname']))."' AND
                        Passwort = '".md5(trim($_POST['Passwort']))."'
               ";
        $result = mysql_query($sql) OR die("<pre>\n".$sql."</pre>\n".mysql_error());
        // wird die ID des Users geholt und der User damit eingeloggt
        $row = mysql_fetch_assoc($result);
        // Pr�ft, ob wirklich genau ein Datensatz gefunden wurde
        if (mysql_num_rows($result)==1){
             doLogin($row['ID'], isset($_POST['Autologin']));
             echo "<h4>Willkommen ".$_SESSION['Nickname']."</h4>\n";
             echo "Sie wurden erfolgreich eingeloggt.<br>\n".
                  "Zur <a href=\"myprofil.php\">�bersichtsseite</a>\n";
        }
        else{
             echo "Sie konnten nicht eingeloggt werden.<br>\n".
                  "Nickname oder Passwort fehlerhaft.<br>\n".
                  "Zur�ck zum <a href=\"".$_SERVER['PHP_SELF']."\">Login-Formular</a>\n";
        }
    }
    else{
        echo "<form ".
             " name=\"Login\" ".
             " action=\"".$_SERVER['PHP_SELF']."\" ".
             " method=\"post\" ".
             " accept-charset=\"ISO-8859-1\">\n";
        echo "Nickname :\n";
        echo "<input type=\"text\" name=\"Nickname\" maxlength=\"32\">\n";
        echo "<br>\n";
        echo "Passwort :\n";
        echo "<input type=\"password\" name=\"Passwort\">\n";
        echo "<br>\n";
        echo "eingeloggt bleiben :\n";
        echo "<input type=\"checkbox\" name=\"Autologin\" value=\"1\">\n";
        echo "<br>\n";
        echo "<input type=\"submit\" name=\"submit\" value=\"Einloggen\">\n";
        echo "<br>\n";
        echo "<a href=\"passwort.php\">Passwort vergessen</a> oder noch nicht <a href=\"registrierung.php\">registriert</a>?\n";
        echo "</form>\n";
    }
?>