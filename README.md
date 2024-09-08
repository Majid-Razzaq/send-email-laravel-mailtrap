<p align="center">
    <a href="https://laravel.com" target="_blank" style="display: inline-block;">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
    <a href="https://mailtrap.io" target="_blank" style="display: inline-block;">
    </a>
</p>

## Laravel Mailtrap Email Integration

## Requirements
-  Laravel = 11.20.0
-  PHP = 8.2.12
-  Composer Version = 2.7.7

## How to Use

1)  Configure the Email in the .env File
-  MAIL_MAILER=smtp
-  MAIL_HOST=smtp.mailtrap.io
-  MAIL_PORT=465  # TLS: 587 | SSL: 465
-  MAIL_USERNAME=your-mailtrap-username
-  MAIL_PASSWORD=your-mailtrap-password
-  MAIL_ENCRYPTION=ssl  # encryption method: (tls | SSL)

2)  Configure the Email in App/Http/Controllers/FormController.php
   Mail::to('your-email@example.com')->send(new SendMail($mailData));

## Getting Started
-  Clone the repository.
-  Run composer install to install dependencies.
-  Set up your database configuration in the .env file.
-  Run php artisan migrate to create the necessary database tables.
-  Customize the application as needed.

```javascript
composer install
```

```javascript
php artisan migrate
```

```javascript
php artisan serve
```

## Front-End Template

![screencapture-localhost-8000-2024-09-08-20_07_23](https://github.com/user-attachments/assets/8dec9791-eadf-4c3f-8f33-31e78869ff4e)


