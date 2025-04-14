<?php
require_once "config.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($_POST["password"])) {
        $error = "All fields are required.";
    } else {
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $error = "An account with this email already exists.";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
            if ($stmt->execute()) {
                $success = "Registration successful! Redirecting to login...";
                header("refresh:3;url=login.php");
            } else {
                $error = "Something went wrong. Please try again.";
            }
        }
        $check->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - SMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Register</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <p>Already registered? <a href="login.php">Login here</a></p>
    </section>
</body>
</html>
