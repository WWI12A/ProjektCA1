<?php
    error_reporting(E_ALL);
    session_start();
    echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n";
?>
<h1>MyWebsolution - PHP Loginsysten</h1>
<h2>Vorwort</h2>
<p>Dieses Loginsystem stellt lediglich eine Demo für das <a href="http://www.mywebsolution.de/workshops/2/show_PHP-Loginsystem.html">PHP Loginsystem Tutorial</a> von MyWebsolution dar.
Es gibt unter anderem eine Übersicht darüber, wie die unterschiedliche Skripte benannt werden und wie sie zusammenarbeiten.
Ein produktiver Einsatz ist <emph>nicht zu empfehlen</emph>, da das Loginsystem
</p>
<ol>
<li>Öffentlich zugänglich ist (Sicherheit)</li>
<li>lediglich ein Beispiel darstellt</li>
<li>die Funktionalitäten nicht 100% geprüft sind</li>
</ol>
<p>Wer sich entgegen dieser Warnungen dennoch für einen produktiven Einsatz entscheidet, tut dies auf eigene Gefahr und kann
MyWebsolution in keiner Weise dafür haftbar machen.</p>
<p>Benutzt das Beispiel also dazu, wozu es gemacht ist: Zum Lernen und Verstehen :)</p>
<h2>Installation</h2>
<p>Die Installation läuft in 2 Schritten ab:</p>
<ol>
<li>Konfigurieren der MySQL-Datenbankverbindungsdaten</li>
<li>Ausführen der Datei <a href="setup.php">setup.php</a></li>
</ol>
<h2>MySQL Datenbankkonfiguration</h2>
<p>Zum Konfigurieren der MySQL Datenbank öffnet bitte die Datei <code>mysql.php</code> mit einem Texteditor eurer Wahl und tragt dort die Zugangsdaten
zu eurer MySQL Datenbank ein. Falls ihr Probleme damit habt, schaut bitte meinen Tipp
zum <a href="http://www.mywebsolution.de/tipps/10/show_Verbindung-zur-MySQL-Datenbank-in-PHP-herstellen.html">Herstellen einer
MySQL Datenbankverbindung</a> an.</p>
<h2>Setup</h2>
<p>Nachdem ihr eure Daten für die MySQL Verbindung eingetragen habt, klickt bitte auf diesem Link:
<a href="setup.php">Setup des PHP Loginsystems</a></p>
<h2>Menu</h2>
<p>Zu guter Letzt folgt nun eine Auflistung der Skripte inklusive einer kurzen Beschreibung:</p>
<dl>
 <dt><a href="registrierung.php">Registrierung</a></dt>
 <dd>Registrierungsformular zum Registrieren neuer User (<code>"registrierung.php</code>)</dd>
 <dt><a href="login.php">Login</a></dt>
 <dd>Loginformular zum Einloggen (<code>login.php</code>)</dd>
 <dt><a href="logout.php">Logout</a></dt>
 <dd>"Logoutbutton" (<code>logout.php</code>)</dd>
 <dt><a href="userliste.php">Userliste</a></dt>
 <dd>Auflistung aller registrierten User (<code>userliste.php</code>)</dd>
 <dt><a href="myprofil.php">Mein Profil</a></dt>
 <dd>Das eigene Profil zum editieren (<code>"myprofil.php</code>)</dd>
 <dt><a href="admin/index.php">Adminbereich</a></dt>
 <dd>Registrierungsformular zum Registrieren neuer User (<code>admin/index.php</code>)</dd>
</dl>

