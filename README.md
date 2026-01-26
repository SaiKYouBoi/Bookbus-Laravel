# BookBus Laravel

## Description
BookBus is a simplified version of marKoub.ma, a Moroccan bus ticket booking platform.  
It allows passengers to search trips, select specific seats, make payments, and view their bookings.  
Administrators can manage cities, routes, bus companies, and trips.

---

## Installation Instructions

### Prerequisites
- PHP 8.2+
- Composer
- Laravel 10+
- MySQL or PostgreSQL
- Node.js & npm (for frontend assets)

---

### Steps

1. **Clone the repository**
```bash
git clone https://github.com/<your-username>/bookbus-laravel.git
cd bookbus-laravel


# Installation Guide

## Install PHP dependencies
```bash
composer install
```

## Copy and configure environment file
```bash
cp .env.example .env
# Edit .env to add your database credentials
```

## Generate application key
```bash
php artisan key:generate
```

## Run database migrations
```bash
php artisan migrate
```

## Install frontend dependencies
```bash
npm install
npm run dev
```

## Serve the application
```bash
php artisan serve
```

## Access the app

Open [http://localhost:8000](http://localhost:8000) in your browser.
