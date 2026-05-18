# Expedia Travels

A full-stack web application for travel services, agent management, and customer bookings. The project consists of three main components:

1. **CodeIgniter 3 (Main App)** - Frontend website + Admin panel (PHP)
2. **Livewire Admin Panel** - Laravel 10 + Livewire 3 based admin dashboard
3. **Laravel Backend** - Laravel 12 API backend with Vite frontend assets

---

## Table of Contents

- [Project Structure](#project-structure)
- [Requirements](#requirements)
- [Getting Started](#getting-started)
  - [1. Clone the Repository](#1-clone-the-repository)
  - [2. CodeIgniter Setup (Main App)](#2-codeigniter-setup-main-app)
  - [3. Livewire Admin Panel Setup](#3-livewire-admin-panel-setup)
  - [4. Laravel Backend Setup](#4-laravel-backend-setup)
- [Configuration](#configuration)
- [Database](#database)
- [Project Architecture](#project-architecture)
- [Routes (CodeIgniter)](#routes-codeigniter)
- [Admin Panel Features (Livewire)](#admin-panel-features-livewire)
- [Assets & Branding](#assets--branding)
- [Troubleshooting](#troubleshooting)

---

## Project Structure

```
PK_titan/
├── application/              # CodeIgniter 3 - MVC application
│   ├── config/               # CI config (database, routes, autoload)
│   ├── controllers/          # PHP controllers (Home, Auth, Dashboard, etc.)
│   ├── models/               # Database models
│   ├── views/                # PHP views/templates
│   │   ├── front/            # Frontend pages (home, login, signup, wallet, etc.)
│   │   └── widgets/          # Reusable UI widgets (sidebar, etc.)
│   ├── helpers/              # Custom helper functions
│   ├── libraries/            # Custom libraries
│   └── hooks/                # CI hooks
├── system/                   # CodeIgniter 3 core framework (DO NOT EDIT)
├── assets/                   # Static assets (CSS, JS, images, fonts)
│   └── uploads/img/          # Uploaded images (logos, etc.)
├── livewire/                 # Laravel 10 + Livewire 3 Admin Panel
│   ├── app/
│   │   └── Livewire/         # Livewire components (Backend/, Counter, etc.)
│   ├── resources/views/      # Blade templates
│   │   ├── components/layouts/  # Layout files (sidebar, header)
│   │   └── livewire/backend/   # Admin pages (login, members, agents, etc.)
│   ├── database/migrations/  # Database migrations
│   ├── routes/               # Web & API routes
│   └── composer.json         # PHP dependencies (Laravel 10, Livewire 3)
├── laravel/                  # Laravel 12 Backend
│   ├── app/                  # Application code
│   ├── database/             # Migrations, seeders
│   ├── resources/            # Views, JS, CSS
│   ├── composer.json         # PHP dependencies (Laravel 12)
│   └── package.json          # Node dependencies (Vite, Tailwind CSS 4)
├── index.html                # Static landing page
├── index.php                 # CodeIgniter entry point
├── home.html                 # Static homepage variant
├── composer.json             # Root composer (CodeIgniter dependencies)
├── .env                      # Environment variables (DB config)
└── README.md                 # This file
```

---

## Requirements

| Tool        | Version       | Notes                          |
|-------------|---------------|--------------------------------|
| PHP         | >= 8.1        | 8.2+ recommended for Laravel 12 |
| Composer    | 2.x           | PHP dependency manager         |
| MySQL       | 5.7+ / 8.x   | Database server                |
| Node.js     | >= 18.x       | For Vite/frontend assets       |
| npm         | >= 9.x        | Node package manager           |
| Apache/Nginx| Any           | Web server with PHP support    |

---

## Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/mrshahbazdev/PK_titan.git
cd PK_titan
```

### 2. CodeIgniter Setup (Main App)

The root of the project is a **CodeIgniter 3** application. This is the main frontend website.

#### a) Install PHP dependencies

```bash
composer install
```

#### b) Configure Environment

Copy or edit the `.env` file in the project root:

```bash
# .env
DB_HOST=localhost
DB_USERNAME=root
DB_PASSWORD=your_password
DB_DATABASE=pkproject
SITE_URL=http://localhost/PK_titan/
```

#### c) Create the Database

```sql
CREATE DATABASE pkproject CHARACTER SET utf8 COLLATE utf8_general_ci;
```

Import any SQL dump if provided, or the application will create tables as needed.

#### d) Configure Web Server

**Apache (with mod_rewrite):**

Point your document root to the `PK_titan/` directory. Make sure `mod_rewrite` is enabled.

```apache
<VirtualHost *:80>
    ServerName expedia-travels.local
    DocumentRoot /var/www/html/PK_titan
    <Directory /var/www/html/PK_titan>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

**PHP Built-in Server (for development):**

```bash
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

#### e) Verify

Open the site in browser. You should see the Expedia Travels homepage.

---

### 3. Livewire Admin Panel Setup

The `livewire/` directory contains a **Laravel 10 + Livewire 3** admin dashboard.

#### a) Navigate to the livewire directory

```bash
cd livewire
```

#### b) Install PHP dependencies

```bash
composer install
```

#### c) Configure Environment

```bash
cp .env.example .env
```

Edit `.env` with your database credentials:

```env
APP_NAME="Expedia Travels Admin"
APP_URL=http://localhost:8001

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pkproject
DB_USERNAME=root
DB_PASSWORD=your_password
```

#### d) Generate Application Key

```bash
php artisan key:generate
```

#### e) Run Migrations

```bash
php artisan migrate
```

#### f) Start the Development Server

```bash
php artisan serve --port=8001
```

The admin panel will be accessible at `http://localhost:8001`.

---

### 4. Laravel Backend Setup

The `laravel/` directory contains a **Laravel 12** backend with Vite-powered frontend assets.

#### a) Navigate to the laravel directory

```bash
cd laravel
```

#### b) Install PHP dependencies

```bash
composer install
```

#### c) Install Node dependencies

```bash
npm install
```

#### d) Configure Environment

```bash
cp .env.example .env
```

Edit `.env`:

```env
APP_NAME="Expedia Travels"
APP_URL=http://localhost:8002

DB_CONNECTION=sqlite
# Or use MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=pkproject
# DB_USERNAME=root
# DB_PASSWORD=your_password
```

#### e) Generate Application Key

```bash
php artisan key:generate
```

#### f) Run Migrations

```bash
php artisan migrate
```

#### g) Build Frontend Assets

```bash
# Development (with hot reload)
npm run dev

# Production build
npm run build
```

#### h) Start the Development Server

You can start all services at once using:

```bash
composer dev
```

This runs the PHP server, queue worker, log viewer, and Vite dev server concurrently.

Or start individually:

```bash
php artisan serve --port=8002
```

The Laravel backend will be accessible at `http://localhost:8002`.

---

## Configuration

### Environment Variables

| Variable      | Description                    | Default        |
|---------------|--------------------------------|----------------|
| `DB_HOST`     | Database hostname              | `localhost`     |
| `DB_USERNAME` | Database username              | `root`          |
| `DB_PASSWORD` | Database password              | (empty)         |
| `DB_DATABASE` | Database name                  | `pkproject`     |
| `SITE_URL`    | CodeIgniter base URL           | `http://localhost/application/` |

### CodeIgniter Config

- **Database**: `application/config/database.php` (reads from `.env`)
- **Routes**: `application/config/routes.php`
- **Autoload**: `application/config/autoload.php`
- **General**: `application/config/config.php`

---

## Database

The project uses **MySQL** as the primary database (`pkproject`).

- **CodeIgniter (main app)**: Connects via `application/config/database.php` using `.env` variables
- **Livewire admin**: Uses Laravel migrations in `livewire/database/migrations/`
- **Laravel backend**: Default SQLite, configurable to MySQL via `.env`

### Key Livewire Migrations

| Migration | Table | Purpose |
|-----------|-------|---------|
| `create_users_table` | `users` | Admin/system users |
| `create_systemusers_table` | `systemusers` | System user management |
| `members` | `members` | Member records |
| `memberlevels` | `memberlevels` | Member tier/level system |
| `systemsettings` | `systemsettings` | App configuration |
| `create_products_table` | `products` | Product catalog |
| `rechargelists` | `rechargelists` | Recharge/top-up records |
| `withdrawlists` | `withdrawlists` | Withdrawal requests |
| `create_userbankinfos_table` | `userbankinfos` | User bank details |
| `create_addroles_table` | `addroles` | Role management |
| `create_textmanagements_table` | `textmanagements` | CMS text content |
| `create_continuousorders_table` | `continuousorders` | Continuous order tracking |

---

## Project Architecture

### CodeIgniter (Main App)

The main application follows the MVC pattern:

**Controllers** (`application/controllers/`):

| Controller | Purpose |
|-----------|---------|
| `Home` | Homepage (default controller) |
| `Auth` | Login / authentication |
| `Dashboard` | User dashboard |
| `Member` | Member management |
| `Mall` | Product mall/store |
| `Wallet` | Wallet operations |
| `Deposit` | Deposit management |
| `Withdrawal` | Withdrawal processing |
| `Bank` | Bank account management |
| `Trade` | Trade operations |
| `Journey` | Journey/trip management |
| `Jsubmission` | Journey submissions |
| `Jhistory` | Journey history |
| `Referral` | Referral system |
| `Invitation` | Invitation management |
| `Systems` | System administration |
| `Security` | Security settings |
| `Verification` | User verification |
| `TwilioController` | SMS/Twilio integration |
| `Custormerservicelist` | Customer service records |

**Views** (`application/views/front/`):

| View | Page |
|------|------|
| `homeMain.php` | Main homepage template |
| `home.php` | Home page |
| `login.php` | Login page |
| `signup.php` | Registration page |
| `otp.php` | OTP verification |
| `wallet.php` | Wallet page |
| `deposit.php` | Deposit page |
| `withdraw.php` | Withdrawal page |
| `banks.php` | Bank accounts |
| `journey.php` | Journey listing |
| `referral.php` | Referral page |
| `sidebar.php` | Sidebar navigation |

### Livewire Admin Panel

**Admin Pages** (`livewire/resources/views/livewire/backend/`):

| Page | Purpose |
|------|---------|
| `login.blade.php` | Admin login |
| `adminuser.blade.php` | Admin user management |
| `agent.blade.php` | Agent management |
| `announcement.blade.php` | Announcements/notices |
| `bank.blade.php` | Bank settings |
| `levels.blade.php` | Member level configuration |
| `mall.blade.php` | Product management |
| `memberlist.blade.php` | Member listing |
| `rechargerecord.blade.php` | Recharge records |
| `rechargerequest.blade.php` | Recharge requests |
| `role.blade.php` | Role management |
| `singleorder.blade.php` | Order details |
| `text.blade.php` | Text/content management |
| `trailperiod.blade.php` | Trial period management |
| `withdrawrecorde.blade.php` | Withdrawal records |

---

## Routes (CodeIgniter)

| Route | Controller | Description |
|-------|-----------|-------------|
| `/` | `Home` | Homepage |
| `/customerservicelist/get_user_data/(:num)` | `Custormerservicelist` | Get customer data |
| `/member/orderReset/(:num)` | `Member` | Reset member order |
| `/member/reset/(:num)` | `Member` | Reset member |
| `/member/bankdetail/(:num)` | `Member` | Bank details |
| `/member/depositMoney/(:num)` | `Member` | Deposit money |
| `/member/changeStatusUser/(:num)` | `Member` | Change user status |
| `/member/get_member_list/(:num)` | `Member` | Get member list |
| `/member/get_grade_data/(:num)` | `Member` | Get grade data |
| `/mall/malldelete/(:num)` | `Mall` | Delete mall item |
| `/mall/get_mall_data/(:num)` | `Mall` | Get mall data |
| `/mall/get_bulletin_data/(:num)` | `Mall` | Get bulletin data |
| `/mall/get_category_data/(:num)` | `Mall` | Get category data |
| `/mall/get_product_data/(:num)` | `Mall` | Get product data |
| `/systems/get_role_data/(:num)` | `Systems` | Get role data |
| `/systems/get_users_data/(:num)` | `Systems` | Get users data |
| `/systems/changeStatusUser/(:num)` | `Systems` | Change user status |
| `/systems/get_support_data/(:num)` | `Systems` | Get support data |

---

## Assets & Branding

- **Logo**: `assets/uploads/img/new_logo.png`
- **Site Name**: Expedia Travels
- Logo is also replicated at:
  - `laravel/public/assets/uploads/img/new_logo.png`
  - `livewire/backend/productImage/new_logo.png`
  - `livewire/userQR/logo.jpg`
  - `livewire/public/userQR/logo.jpg`

To update the logo, replace the image at `assets/uploads/img/new_logo.png` and copy it to the paths above. For best results, use a **PNG with transparent background**.

---

## Troubleshooting

### Common Issues

**1. "No input file specified"**
- Check your web server document root points to the project directory
- Ensure `index.php` is accessible

**2. Database connection error**
- Verify `.env` has correct DB credentials
- Make sure MySQL is running: `sudo service mysql start`
- Check that the `pkproject` database exists

**3. Composer install fails**
- Make sure you have PHP >= 8.1 installed
- Run `composer update` if lock file is stale

**4. Livewire admin panel 500 error**
- Check `livewire/storage/logs/laravel.log` for details
- Run `php artisan key:generate` if APP_KEY is missing
- Make sure storage directory is writable:
  ```bash
  chmod -R 775 livewire/storage livewire/bootstrap/cache
  ```

**5. Laravel Vite assets not loading**
- Run `npm install && npm run build` inside `laravel/`
- For development, keep `npm run dev` running

**6. Permission denied on storage/logs**
```bash
chmod -R 775 livewire/storage livewire/bootstrap/cache
chmod -R 775 laravel/storage laravel/bootstrap/cache
```

---

## License

MIT License - See [license.txt](license.txt) for details.
