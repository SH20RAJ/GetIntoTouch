<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data
    $formData = $_POST;
    if(isset($_GET['id'])){
          $userid = $_GET['id'];
    } else {
        $userid = '1479193538';
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

    // Send the message to Telegram using the bot API
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
        echo "Error sending message to Telegram.";
    } else {
        echo "Form submitted successfully! We will get in touch with you soon.";
    }
}
?>
