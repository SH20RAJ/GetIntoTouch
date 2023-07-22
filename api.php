<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data
    $formData = $_POST;
    if (isset($_GET['id'])) {
        $userid = $_GET['id'];
    } else {
        $userid = '1479193538';
    }

    // Replace 'YOUR_TELEGRAM_BOT_TOKEN' with your actual Telegram bot token
    $telegramBotToken = '6683877755:AAEZrpG-0ucnpqZyKp-4utwj8COcVpGusa4';
    $telegramChatId = $userid; // Replace with the admin's chat ID

    // Compose the message to be sent to Telegram
    $telegramMessage = "New Contact Form Submission:\n\n";

    // Loop through the form data and create the key-value pairs in the message
    foreach ($formData as $key => $value) {
        $telegramMessage .= "$key: $value\n";
    }

    // Handle file upload (if any)
    if (isset($_FILES['photo'])) {
        $file = $_FILES['photo'];
        $photoPath = $file['tmp_name'];
        $photoName = $file['name'];
        $photoSize = $file['size'];

        // You can handle the file content or attach it to the Telegram message as needed.
        // In this example, we will use the Telegram sendPhoto method to send the photo as an attachment.

        // Prepare the photo for sending to Telegram using cURL
        $telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendPhoto";
        $data = array(
            'chat_id' => $telegramChatId,
            'photo' => new CURLFile($photoPath, mime_content_type($photoPath), $photoName),
            'caption' => "Photo from the contact form submission: $photoName",
        );

        // Use cURL to send the photo to Telegram
        $ch = curl_init($telegramApiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        // Handle any response from the Telegram API (optional)
        // In this example, we won't handle the response, but you can add error checking if needed.
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
