<?php
// Verifica se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal modulo
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validazione dei dati (puoi aggiungere ulteriori controlli se necessario)
    if (empty($name) || empty($email) || empty($message)) {
        $error = "Si prega di compilare tutti i campi";
    } else {
        // Destinatario dell'email
        $to = "tuo-indirizzo-email@example.com";
        
        // Oggetto dell'email
        $subject = "Nuovo messaggio dal modulo di contatto";
        
        // Corpo dell'email
        $body = "Nome: $name\n";
        $body .= "Email: $email\n";
        $body .= "Messaggio: $message\n";
        
        // Intestazioni dell'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        // Invia l'email
        if (mail($to, $subject, $body, $headers)) {
            $success = "Grazie per averci contattato. Verrai ricontattato presto!";
        } else {
            $error = "Si è verificato un errore durante l'invio del messaggio. Riprova più tardi.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modulo di contatto</title>
</head>
<body>
    <?php if(isset($success)): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php else: ?>
        <?php if(isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" id="name"><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br><br>
            
            <label for="message">Messaggio:</label><br>
            <textarea name="message" id="message"></textarea><br><br>
            
            <input type="submit" value="Invia">
        </form>
    <?php endif; ?>
</body>
</html>
