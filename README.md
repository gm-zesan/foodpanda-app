# Foodpanda App

This is the Laravel-based Foodpanda Application for Steadfast Courier Ltd's Developer Test. It supports multi-system login with seamless integration using Laravel Sanctum.

---

## Live Demo Link

- 🌐 URL: https://food-app.deshicreative.com/


---


## 🔐 Admin Panel Access (Demo)

- 📧 Email: gmzesan7767@gmail.com
- 🔑 Password: 12345678aA


---



## 🚀 Features

- Laravel 12 (PHP 8.2+)
- Sanctum-based token authentication
- Shared login with `ecommerce-app`
- Basic Bootstrap UI (Login, Dashboard, Logout)
- RESTful API support
- Session & Token-based logout

---

## ⚙️ Tech Stack

- **Laravel:** v12.x
- **PHP:** 8.2+
- **Database:** MySQL
- **Frontend:** Laravel Breeze
- **Authentication:** Sanctum

---

## 🛠 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/gm-zesan/foodpanda-app.git
cd foodpanda-app
```


### 2. Install Dependencies
```bash
composer install
npm install
npm run dev
```

### 3. Setup .env
```bash
APP_NAME=FoodpandaApp
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=food_app
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate App Key & Migrate
```bash
php artisan key:generate
php artisan migrate
```

### 5. Start the Server
```bash
php artisan serve --port=8001
```

### 6. register manually and use the generated Sanctum token.

### 7. Sanctum Token Usage (Multi-App Login)