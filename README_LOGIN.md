# Login page stub

This repository now includes a basic login stub for development and UI testing.

Files added:
- `login.php` - simple login form that echoes received username (no real auth)
- `assets/css/login.css` - minimal styles for the form

How to use:
1. Place the project under a PHP-capable web server (e.g., XAMPP, WAMP, or built-in PHP server).
2. From the project root run: `php -S localhost:8000` (or use your server setup).
3. Open `http://localhost:8000/login.php` in your browser.

Security note: This is a UI stub only. It does not perform secure authentication, session handling, input validation beyond basics, or CSRF protection. Do not use in production.
