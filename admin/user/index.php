<?php
    error_reporting(E_ALL);
    // Pr�fen, ob der User den Userbereich betreten darf
    if(!in_array('User administrieren', $_SESSION['Rechte']))
        die("Sie haben keine Berechtigung, diese Seite zu betreten!\n");

    switch(isset($_GET['action'])?$_GET['action']:''){

        case 'edit':
            include 'user/edit.php';
                    echo "Zur�ck zum <a href=\"index.php?page=user\">User-Menu</a>\n";
                         break;

         case 'delete':
            include 'user/delete.php';
                    echo "Zur�ck zum <a href=\"index.php?page=user\">User-Menu</a>\n";
                         break;

         default:
                         $actions = array('edit' => 'bearbeiten',
                                   'delete' => 'l�schen');

                         foreach($actions as $action => $name)
                    echo "<a href=\"index.php?page=user&action=".$action."\">".$name."</a><br>\n";
                 break;
    }

    echo "<p>Zur�ck zum <a href=\"index.php\">Adminbereich</a></p>";
?>