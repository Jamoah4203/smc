<?php
session_start();
require_once "config.php";

$error = "";
$locked = false;

// Check for login lockout
if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3) {
    $last_attempt = $_SESSION['last_attempt_time'] ?? time();
    $elapsed = time() - $last_attempt;

    if ($elapsed < 600) {
        $locked = true;
        $error = "Too many failed attempts. Please try again after 10 minutes.";
    } else {
        $_SESSION['login_attempts'] = 0;
        $locked = false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$locked) {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($email) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        // Continue with login validation
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user["password_hash"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["login_attempts"] = 0;
                header("Location: index.php");
                exit();
            }
        }

        // Handle failure
        $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;
        $_SESSION['last_attempt_time'] = time();
        $error = "Invalid email or password.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - SMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Login</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Register here</a></p>
    </section>
</body>
</html>
