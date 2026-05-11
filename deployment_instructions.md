# Soméra Bakes: Laravel Migration & Render Deployment Guide

## 1. Project Overview
The Soméra Bakes website has been successfully migrated from a static HTML/CSS structure into a fully dynamic **Laravel 11.x Application**. 

- **Frontend:** Perfectly preserved. Layout, animations, colors, and the transparent botanical overlays function exactly as before. The bilingual EN/ID system remains intact.
- **Backend:** A hidden admin CMS is now available at `/admin`.
- **Database:** Fully dynamic architecture mapped via Eloquent ORM.

## 2. Admin Dashboard & CMS
The Admin Dashboard allows complete control over the content without ever touching the code.
- **Login URL:** `https://your-domain.com/admin/login`
- **Default Email:** `admin@somerabakes.com`
- **Default Password:** `SomeraSecure2026!`

*(Note: The login button is intentionally hidden from the public-facing pages to maintain the brand's luxury aesthetic, as requested).*

### CMS Features
- **Dynamic Translations:** Update English and Indonesian text simultaneously for the Hero Section, Footer, and WhatsApp Messages.
- **Menu Management:** Add, edit, or delete baked goods. Upload images natively, toggle "Best Seller" tags, and manage prices.
- **Testimonials:** Manage the gourmet enthusiast reviews.
- **WhatsApp Integration:** The phone number and automatic message template are fully adjustable. Every product automatically passes its dynamic name to WhatsApp.

## 3. Render Deployment Setup
The project is perfectly pre-configured to deploy seamlessly on Render with a PostgreSQL database.

### Method A: One-Click Deployment (Recommended)
Because we created a `render.yaml` Blueprint file, deployment is instant:
1. Push this `laravel` folder to a GitHub repository.
2. Go to your Render Dashboard -> **New** -> **Blueprint**.
3. Connect your GitHub repository.
4. Render will automatically detect the `render.yaml` file and provision:
   - A free **PostgreSQL Database** (`somera-db`).
   - A free **PHP Web Service** (`somera-bakes`).
5. Render will automatically execute the `build.sh` script (installs dependencies, links storage, and runs migrations/seeders).

### Method B: Manual Render Deployment
If you prefer not to use the Blueprint:
1. Create a **New Web Service** connected to your repository.
2. **Environment:** `PHP`
3. **Build Command:** `./build.sh`
4. **Start Command:** `heroku-php-apache2 public/`
5. Create a **PostgreSQL** database on Render and link the credentials to the Web Service using Environment Variables (`DB_CONNECTION=pgsql`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
6. Add `APP_KEY` (generate one randomly, e.g., `base64:YourRandomString32CharsHere=`).

## 4. Local Development
If you wish to run this Laravel app on your local machine in the future:
1. Install PHP and Composer.
2. Run `composer install`.
3. Copy `.env.example` to `.env` and run `php artisan key:generate`.
4. Configure your local database (SQLite/MySQL/PgSQL) in `.env`.
5. Run `php artisan migrate --seed` to scaffold the database and insert the default Admin user.
6. Run `php artisan storage:link` to enable image uploads.
7. Run `php artisan serve`.
