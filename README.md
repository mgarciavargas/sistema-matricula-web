# Sistema de Matrícula Web 📋

Web application for student enrollment and course scheduling management, built with PHP MVC architecture.

## Features

- Student pre-enrollment and enrollment management
- Course schedule management and conflict validation
- Receipt validation
- PDF report generation (FPDF)
- Excel export for enrolled students and schedules
- User and guardian authentication

## Tech Stack

- **Backend:** PHP (MVC pattern)
- **Database:** MySQL (PDO)
- **PDF generation:** FPDF library
- **Frontend:** HTML, CSS, JavaScript

## Project Structure

```
├── controllers/     # Request handlers
├── models/          # Database models (PDO)
├── views/           # PHP view templates
├── librerias/       # FPDF library
├── index.html       # Login page
└── primer2.php      # Entry point
```

## Setup

1. Clone the repository
2. Copy `config.example.php` to `config.php`
3. Edit `config.php` with your database credentials
4. Import the database schema
5. Deploy on a PHP server (Apache/Nginx)

## Configuration

```php
// config.php (do not commit this file)
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database');
define('DB_USER', 'your_user');
define('DB_PASS', 'your_password');
```

## Author

[Marco Garcia](https://github.com/mgarciavargas)
