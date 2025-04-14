<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results - SMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Search Results</h2>
        <?php
        $query = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';
        if ($query):
        ?>
            <p>Showing results for "<strong><?php echo $query; ?></strong>":</p>
            <div style="margin-top: 30px;">
                <div style="background:#ffffff; padding:15px; margin-bottom:15px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                    <h4>Protecting Your Identity Online</h4>
                    <p>Use secure passwords and don’t share private details publicly.</p>
                </div>
                <div style="background:#ffffff; padding:15px; margin-bottom:15px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                    <h4>Enabling Safe Mode on Instagram</h4>
                    <p>Switch your profile to private and filter offensive comments.</p>
                </div>
            </div>
        <?php else: ?>
            <p>No search query provided.</p>
        <?php endif; ?>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
