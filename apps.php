<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Popular Social Media Apps - SMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Popular Social Media Apps</h2>
        <form method="get" action="search.php">
            <input type="text" name="query" placeholder="Search safety techniques..." required>
            <button type="submit" class="btn">Search</button>
        </form>

        <div style="margin-top: 40px; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div style="background:#fff; border-radius:10px; padding:20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>Instagram</h3>
                <p>Enable private accounts and turn off location tagging.</p>
            </div>
            <div style="background:#fff; border-radius:10px; padding:20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>Snapchat</h3>
                <p>Use 'Ghost Mode' for location and only add trusted friends.</p>
            </div>
            <div style="background:#fff; border-radius:10px; padding:20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h3>WhatsApp</h3>
                <p>Enable two-step verification and be cautious of unknown links.</p>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
