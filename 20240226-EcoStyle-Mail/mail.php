<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';

$images = ["imgs/eco-01.jpg", "imgs/eco-02.jpg", "imgs/eco-03.jpg", "imgs/eco-04.jpg", "imgs/eco-05.jpg", "imgs/eco-06.jpg", "imgs/eco-07.jpg", "imgs/eco-08.jpg", "imgs/eco-09.jpg", "imgs/eco-10.jpg",];
$artikel = ["Bio-Baumwolle Wattepad", "Baumwolle Einkauftasche", "Bambus Besteckset ", "Zero waste Geschirrschwamm", "Bio-Baumwolle Schal ", "Geschenkpapier ", "Zero waste Binden", "Bio-Baumwolle Servierte ", "Bio-Baumwolle Mütze ", "Obst Netzbeutel "];
$preis = [7.90, 19.90, 14.90, 6.90, 24.90, 3.90, 9.90, 14.90, 19.90, 2.90];

// check ob submit geklickt wurde
if (isset($_POST['submit'])) {
    // Array der ausgewählten Artikel & Mengen
    $selectedItems = $_POST['artikelanzahl'];

    // Initialisieren einer leeren Variablen für die HTML-Zusammenfassung der ausgewählten Artikel
    $selectedItemsHtml = '';

    // Durchlaufen des Arrays der ausgewählten Artikel und ihrer Mengen
    foreach ($_POST['artikelanzahl'] as $index => $anzahl) {
        if ($anzahl > 0) {
            $artikelName = $artikel[$index];
            $artikelimages = $images[$index];
            $artikelpreis = $preis[$index];
            $selectedItemsHtml .= "<img src='" . $artikelimages . "' alt='" . $artikelName . "'><br>"
                . $artikelName . " - Menge: " . $anzahl . " - Preis Einzeln: " . number_format($artikelpreis, 2, ',', '.') . " €<br><br>";
        }
    }

    // Zusätzliche Informationen aus dem Formular abrufen
    $vorname = htmlspecialchars($_POST['vorname']);
    $nachname = htmlspecialchars($_POST['nachname']);
    $email = htmlspecialchars($_POST['email']);
    $tele = htmlspecialchars($_POST['tele']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postal = htmlspecialchars($_POST['postal-code']);
    $nachricht = htmlspecialchars($_POST['nachricht']);
    $gesamtsumme = $_POST['gesamtsumme'];
    $versandoption = htmlspecialchars($_POST['shipping']);
    $versandtext = $versandoption === 'liefern' ? 'Lieferung' : 'Im Geschäft abholen';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mail.css">
    <title>DANKE</title>
</head>


<body>
    <?php
    // E-Mail-Versand
    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('de');
        $mail->isSMTP();
        $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "wiastud-newsletter";
        $mail->Password = "45YerkaidaAsaef5Kiap";
        $mail->From = "stud-newsletter@wda-innsbruck.at";
        $mail->FromName = "Eco Style";

        $mail->addAddress($email, $vorname . " " . $nachname);
        $mail->addCC('ngocfrankl@gmail.com', "Ngoc Frankl");

        $mail->isHTML(true);

        $mail->Subject = "Vielen Dank für Ihre Bestellung ";

        $mail->Body    = 
         
            "<h1 style='color:#ffffff; background-color:#557821; padding: 5px 10px;'>Vielen Dank für Ihre Bestellung bei Eco Style</h1>" 
            . ""
            . "<p style='font-size: 18px;'>Guten Tag" . " " . $vorname . " " .  $nachname .",</p>" 
            . "<p>wir danken Ihnen für Ihre Bestellung bei Eco Style. Im Folgenden haben wir alle wichtigen Informationen für Sie zusammengefasst. Falls Ihnen ein Fehler auffällt oder etwas unklar ist, kontaktieren Sie uns bitte. Sie erhalten eine Versandbestätigung per E-Mail, sobald Ihre Lieferungen versendet wurden.</p>" . "<br>"
            . "<h2>Bitte überprüfen Sie nochmal die folgenden Daten:</h2>" . "<br>"
            ."<div>Name:" . " ". $vorname . " " . $nachname . "</div>"
            . "<div>Email: " . $email . "</div>" 
            . "<div>Telefonnummer: " . $tele . "</div>"
            . "<div>Adresse: " . $address . "</div>"
            . "<div>Stadt: " . $city . "</div>"
            . "<div>PLZ: " . $postal . "</div>"
            . "<br>"
            . "<h2>Ihre Produkte:</h2>" . $selectedItemsHtml // ausgewählte Aktikel werden hier ausgelistet
            . "<h2>Versandoption:</h2> " . $versandoption . "<br><br>"
            . "<h2>Gesamtsumme:</h2> " . $gesamtsumme ;

        try {
            $mail->send();
            echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen ' . $vorname . ' ' . $nachname . '</h2>';
        } catch (Exception $ex) {
            echo 'Es ist ein Fehler passiert!' . $mail->ErrorInfo;
        }

        header("Location: danke.php");
    }
    ?>
</body>

</html>