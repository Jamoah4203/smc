<style>
.navbar {
    background: #007bff;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    color: white;
    text-decoration: none;
}
.navbar ul {
    list-style: none;
    display: flex;
    gap: 20px;
    padding: 0;
}
.navbar li {
    position: relative;
}
.navbar a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}
.navbar li:hover > ul {
    display: block;
}
.navbar ul ul {
    display: none;
    position: absolute;
    top: 30px;
    left: 0;
    background: #0056b3;
    padding: 10px;
    border-radius: 5px;
    flex-direction: column;
    min-width: 150px;
}
.navbar ul ul li {
    margin-bottom: 10px;
}
.navbar ul ul li:last-child {
    margin-bottom: 0;
}
@media (max-width: 768px) {
    .navbar ul {
        flex-direction: column;
        width: 100%;
    }
}
</style>

<nav class="navbar">
    <a href="index.php" class="logo">SMC</a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li>
            <a href="apps.php">Apps</a>
            <ul>
                <li><a href="apps.php">Popular Apps</a></li>
                <li><a href="search.php">Search Safety</a></li>
            </ul>
        </li>
        <li><a href="information.php">Info</a></li>
        <li><a href="parents.php">Parent Guide</a></li>
        <li><a href="livestreaming.php">Livestream</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="legislation.php">Policies</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>
