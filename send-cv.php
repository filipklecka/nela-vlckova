<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Zadej zde Gmail přihlašovací údaje:
$gmail_username = 'kleckafilippp@gmail.com';
$gmail_app_password = 'tfgs ykyp ohws swpj';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gdpr_consent'])) {
    if (!empty($_POST['website'])) exit; // spam bot

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);

    // Kontrola nahraného souboru
    $file_attached = false;
    $file_name = '';
    $file_tmp_path = '';
    
    if (isset($_FILES['cv_file']) && $_FILES['cv_file']['error'] === UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES['cv_file']['tmp_name'];
        $file_name = $_FILES['cv_file']['name'];
        $file_size = $_FILES['cv_file']['size'];
        
        // Kontrola velikosti souboru (max 10MB)
        if ($file_size > 10 * 1024 * 1024) {
            die("Soubor je příliš velký. Maximální velikost je 10MB.");
        }
        
        // Kontrola typu souboru
        $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $file_type = $_FILES['cv_file']['type'];
        
        if (!in_array($file_type, $allowed_types)) {
            die("Nepodporovaný typ souboru. Povolené jsou pouze PDF, DOC a DOCX.");
        }
        
        $file_attached = true;
    } else {
        die("Soubor se nepodařilo nahrát. Chyba: " . $_FILES['cv_file']['error']);
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP nastavení
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $gmail_username;
        $mail->Password = $gmail_app_password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->CharSet = 'UTF-8';

        // Adresy
        $mail->setFrom($gmail_username, 'Formulář CV');
        $mail->addAddress($gmail_username); // hlavní příjemce
        $mail->addCC('finance@nelavlckova.cz'); // kopie

        // Příloha
        if ($file_attached) {
            $mail->addAttachment($file_tmp_path, $file_name);
        }

        // Obsah
        $mail->isHTML(true);
        $mail->Subject = 'Nový životopis z formuláře';
        $mail->Body = "
            <h2>Nový životopis z formuláře</h2>
            <strong>Jméno:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Telefon:</strong> $telephone<br>
            <strong>Přiložený životopis:</strong> $file_name
        ";

        $mail->send();
        
        // Redirect na thank-you stránku
        header('Location: thank-you.php');
        exit;
        
    } catch (Exception $e) {
        echo "Chyba při odesílání e-mailu: {$mail->ErrorInfo}";
    }
} else {
    echo "Formulář nebyl správně odeslán nebo nebyl udělen souhlas se zpracováním osobních údajů.";
}
?>
