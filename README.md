
# 🚀 Laravel API Backend for BlogApp
---

## 🛠️ Tech Stack

- **Laravel** - PHP backend framework
- **MySQL**  - Relational database
- **Sanctum** - Lightweight API token authentication

---

## 📁 Project Structure

app/             - Core application logic (Models, Controllers, etc.)
routes/api.php   - All API routes for integration
config/          - Configuration files
database/        - Migrations and seeders
.env.example     - Example environment config

---

## ⚙️ Getting Started

Follow these steps to set up the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/KhaledAbdurahman/Blog-With-Laravel-API.git
cd Blog-With-Laravel-API
git checkout backend
```


### 2. Install Dependencies
composer install


### 3. Create and Configure Environment File
cp .env.example .env


Update `.env` with your database and other configuration:

APP_NAME=FlutterVizAPI
APP_URL=http://localhost:8000

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```


### 4. Generate Application Key
php artisan key:generate


### 5. Run Migrations
php artisan migrate


### 6. (Optional) Seed the Database
php artisan db:seed


### 7. Start the Development Server
php artisan serve


Your backend API will now be running at:
📡 `http://localhost:8000/api`

---

## 🔐 Authentication

This project uses **Laravel Sanctum** for API authentication.

After running `php artisan migrate`, Sanctum is ready to use.
API routes that require auth are protected using middleware like:

Route::middleware('auth:sanctum')->group(function () {
    // Protected routes here
});


---

## 📱 React Frontend

The React frontend that consumes this backend is available here:

🔗 https://github.com/KhaledAbdurahman/React-Blog-App-Front-.git

---

## 🧪 API Testing

Use Postman or any API client to test the endpoints.



