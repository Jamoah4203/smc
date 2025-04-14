<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - SMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Contact Us</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Your Full Name" required>
            <input type="email" name="email" placeholder="Your Email Address" required>
            <textarea name="message" placeholder="Your Message..." required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
        <p style="margin-top: 10px; font-size: 14px;">By submitting this form, you agree to our <a href="policy.php" style="color: #007bff;">Privacy Policy</a>.</p>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
