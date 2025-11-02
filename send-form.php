<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    function cleanInput($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }

    $name = cleanInput($_POST["name"] ?? '');
    $email = filter_var($_POST["email"] ?? '', FILTER_VALIDATE_EMAIL);
    $telephone = cleanInput($_POST["telephone"] ?? '');
    $message = cleanInput($_POST["message"] ?? '');

    // Sestavení pole "potřebuji řešit" z checkboxů
    $needs_map = [
        'financni-plan' => 'Finanční plán',
        'hypoteka' => 'Hypotéka',
        'spotrebitelsky-uver' => 'Spotřebitelský úvěr',
        'pojisteni' => 'Pojištění',
        'zhodnoceni-financi' => 'Zhodnocení financí',
        'jine' => 'Jiné',
    ];
    $needs_selected = [];
    foreach ($needs_map as $key => $label) {
        if (!empty($_POST[$key])) {
            $needs_selected[] = $label;
        }
    }
    $needs = !empty($needs_selected) ? implode(', ', $needs_selected) : 'Neupřesněno';

    // Způsob setkání (radio)
    $setkani = $_POST['setkani'] ?? '';
    if ($setkani === 'osobne') {
        $meeting_preference = 'Osobně';
    } elseif ($setkani === 'online') {
        $meeting_preference = 'Online';
    } else {
        $meeting_preference = 'Neupřesněno';
    }
// Ověření platnosti emailu
    if (!$email) {
        die("Neplatná e-mailová adresa.");
    }

    // 🛑 BLACKLIST
    $blacklist = [
        'ericjonesmyemail@gmail.com',
        // přidej další emaily dle potřeby
    ];

    if (in_array(strtolower($email), array_map('strtolower', $blacklist))) {
        // Nepovolí odeslání formuláře pro tento e-mail
        die("Tato e-mailová adresa je zablokována.");
    }

    // Honeypot kontrola
    if (!empty($_POST["website"])) {
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP konfigurace
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->SMTPAuth = true;
        $mail->Username = 'kleckafilippp@gmail.com';
        $mail->Password = 'hzon eqoi naap yxxw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Nastavení e-mailu
        $mail->setFrom($email, $name);
        $mail->addCC('finance@nelavlckova.cz');
        $mail->addAddress('kleckafilippp@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Nová zpráva z webového formuláře';
        $mail->AltBody = "Jméno: $name
Email: $email
Telefon: $telephone
Potřebuji řešit: $needs
Způsob setkání: $meeting_preference
Zpráva:
$message";

        $mail->Body = '
            <div style="font-family: Arial, sans-serif; font-size: 15px; line-height: 1.5; color: #111;">
                <h2 style="margin:0 0 12px 0;">Nová zpráva z webového formuláře</h2>
                <table cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; max-width: 640px;">
                    <tr>
                        <td style="border:1px solid #eee; width: 220px;"><strong>Jméno</strong></td>
                        <td style="border:1px solid #eee;">' . $name . '</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #eee;"><strong>E-mail</strong></td>
                        <td style="border:1px solid #eee;">' . $email . '</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #eee;"><strong>Telefon</strong></td>
                        <td style="border:1px solid #eee;">' . $telephone . '</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #eee;"><strong>Potřebuji řešit</strong></td>
                        <td style="border:1px solid #eee;">' . $needs . '</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #eee;"><strong>Způsob setkání</strong></td>
                        <td style="border:1px solid #eee;">' . $meeting_preference . '</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #eee; vertical-align: top;"><strong>Zpráva</strong></td>
                        <td style="border:1px solid #eee;">' . nl2br($message) . '</td>
                    </tr>
                </table>
            </div>
        ';$mail->send();
        header("Location: thank-you.php");
        exit;
    } catch (Exception $e) {
        die("Chyba při odesílání e-mailu: {$mail->ErrorInfo}");
    }
}
?>
