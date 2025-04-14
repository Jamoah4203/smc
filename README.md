# SMC - Social Media Campaign Website

This is a PHP-based web project designed for **Social Media Campaigns (SMC)** to promote awareness and safety for teenagers and parents on social media platforms.

## 📁 Project Structure

- `index.php` – Home page introducing SMC
- `signup.php`, `login.php`, `logout.php` – Authentication system
- `apps.php` – Shows tips for popular apps like Instagram, Snapchat, etc.
- `parents.php` – Guidance for parents
- `contact.php` – Contact form (messages stored in DB)
- `search.php` – Search safety tips by keyword
- `information.php` – SMC mission and goals
- `policy.php`, `legislation.php` – Privacy policy and legal info
- `style.css` – Central stylesheet for layout and design
- `navbar.php`, `footer.php` – Common layout components
- `config.php` – Database connection

## 🧰 Tech Stack

- **Frontend**: HTML5, CSS3 (custom)
- **Backend**: PHP 8+, MySQL (via MySQLi)
- **Dev Tools**: Visual Studio Code, XAMPP
- **Database Admin**: phpMyAdmin

## 🌐 Hosting & Deployment

This project can be hosted on:
- [InfinityFree](https://infinityfree.net/) – for free PHP + MySQL hosting
- [GitHub Pages](https://pages.github.com/) – frontend only (non-PHP)

### Hosting on InfinityFree
1. Sign up and create a hosting account
2. Use File Manager or FTP to upload the project to `/htdocs/`
3. Set up your database and import the provided `smc_db_full_setup.sql`
4. Update `config.php` with InfinityFree database credentials

## 🛡️ Features

- ✅ Secure login/register system with hashed passwords
- ✅ Searchable safety tips for social media use
- ✅ Contact form storing messages in MySQL
- ✅ Responsive layout tested on desktop and mobile
- ✅ RSS feed and weather widget (optional web services)

## 📦 Installation (Local Development)

1. Clone this repository:
```
git clone https://github.com/yourusername/smc-website.git
```
2. Set up local server using XAMPP
3. Create a database named `smc_db`
4. Import the SQL file: `smc_db_full_setup.sql`
5. Visit `http://localhost/smc/index.php`

## 🔒 Security Notes

- Passwords are hashed with `password_hash()`
- Use `mysqli_real_escape_string()` or prepared statements to avoid SQL injection
- For production, secure `config.php` and disable error reporting

## 👨‍🎓 Author
Justice Amoah – Level 5 Student, NCC Education - IPMC

---

Project submitted as part of the Dynamic Website module (2024 – 2025)
