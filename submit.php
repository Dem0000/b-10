<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'N/A';
    $email = $_POST['email'] ?? 'N/A';
    $message = $_POST['message'] ?? 'N/A';

    echo '
        <section id="message-details">
            <div class="message-container">
                <h1>Thank You for Reaching Out!</h1>
                <p>We have received your message. Here are the details you provided:</p>
                <div class="message-content">
                    <p><strong>Name:</strong> ' . $name . '</p>
                    <p><strong>Email:</strong> ' . $email . '</p>
                    <p><strong>Message:</strong></p>
                    <div class="message-box">' . nl2br($message) . '</div>
                </div>
                <a href="index.php" class="return-btn">Return to Home</a>
            </div>
        </section>
   ';
} else {
    header("Location: index.php");
    exit();
}
?>
