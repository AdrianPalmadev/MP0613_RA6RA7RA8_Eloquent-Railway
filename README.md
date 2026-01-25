# Eloquent Railway (Laravel)

A simple railway e-ticketing demo built with Laravel and Eloquent ORM. It includes user/admin flows, train and ticket management, purchases, contact messages, and basic payment integration (SSLCommerz).
<img width="800" height="600" alt="image" src="https://github.com/user-attachments/assets/3607763e-a820-4d66-a487-65b98560f104" />



## Overview
- User authentication and profile management
- Admin management and train setup
- Search trains and available tickets by route and date
- Ticket purchase flow with payment copy and SSLCommerz examples
- Contact form with email reply

## Tech Stack
- Laravel (PHP)
- MySQL (via XAMPP)
- Composer
- Bootstrap (views)

## Prerequisites
- PHP 7.3+ (XAMPP recommended)
- MySQL running (XAMPP)
- Composer installed

## Setup
1. Clone the repository:

```bash
   git clone https://github.com/Stucom-Pelai/MP0613_RA6RA7RA8_Eloquent-Railway.git
```

2. Install Composer dependencies:

```bash
composer install
```

3. Copy the example enviroment file:

```bash
cp .env.example .env
```

4. Generate an application key

```bash
php artisan key:generate
```

5. Create a symbolic link from 'public/storage' to 'storage/app/public'

```bash
php artisan storage:link
```

6. Clear compiled view files

```bash
php artisan view:clear
```

9. Create mp0613_railway database


10. Run migrations and seed the database

```bash
php artisan migrate:fresh --seed
```

11. Start the Laravel development server 

```bash
php artisan serve
```

12. You are all set


