<?php
echo $_POST['csrPath'];
$pfad = $_POST['csrPath'];
//system('openssl ca -in '.$pfad.' -batch -config C:/Users/Administrator/Documents/intermediate/intermediate.cnf -out C:/Users/Administrator/Documents/Projekt/Customers/Maxtest/CSRs/zert.crt');

// CSR-Datei

$csrdata = "file://C:/Users/Administrator/Documents/Projekt/Customers/Heiko2/CSRs/asdf.csr" ;

// Wir werden die Anfrage mit unserem eigenen ""certificate authority"
// Zertifikat signieren. Sie können jedes beliebige Zertifikat verwenden, um
// ein anderes zu signieren. Aber das Ganze ist ziemlich nutzlos, solange die
// Software/Benutzer, die dieses neu signierte Zertifikat nutzen werden, dem
// signierenden Zertifikat 

// Wir brauchen unser CA Zertifikat und dessen privaten Schlüssel
$cacert = "file://C:/Users/Administrator/Documents/intermediate/intermediate.crt";
$privkey = "file://C:/Users/Administrator/Documents/intermediate/private/intermediate.key";


$userscert = openssl_csr_sign($csrdata, $cacert, $privkey, 365);
openssl_x509_export($userscert, $test);
echo $test;

// Jetzt zeigem wir das generierte Zertifikat an, damit die Benutzer es
// kopieren und in ihre lokale Konfiguration einfügen können (wie z.B. eine
// Datei, die das Zertifikat für ihren SSL Server enthalten soll.

openssl_x509_export_to_file($userscert, "C:/Users/Administrator/Documents/Projekt/Customers/Maxtest/CSRs/zert1.crt");



?> 