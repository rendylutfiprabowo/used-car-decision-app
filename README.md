# 🚗 Used Car Decision Support Application

A **web-based decision support system** that helps users choose the best used car according to their preferences using the **Multi-Attribute Utility Theory (MAUT)** approach.

This app provides:

* 🌐 **Landing Page** for public users to input car preferences.
* 🛠️ **Admin Dashboard** to manage and process car data.
* 📊 **Decision Results** displayed based on user preferences and available data.

---

## ✨ Features

### 👤 Public Users

* Input car preferences (brand, year, price, mileage, etc.)
* View car recommendations based on MAUT calculation

### 🔑 Admin

* Manage car database (CRUD operations)
* Manage decision criteria and weights
* View dashboard with visualized data (charts & tables)

---

## 🛠️ Tech Stack

* ⚡ **Laravel 11** (Backend)
* 🎨 **Blade & Tailwind CSS** (Frontend)
* 🗄️ **MySQL** (Database)
* 📦 **Composer & Node.js** for dependencies

---

## 📥 Installation

1. 📂 Clone the repository:

   ```bash
   git clone https://github.com/rendylutfiprabowo/used-car-decision-app.git
   cd used-car-decision-app
   ```

2. 📦 Setup dependencies:

   ```bash
   unzip node_modules.zip
   mv node_modules used-car-decision-app/
   composer install
   ```

3. ⚙️ Configure environment:

   * Copy `.env.example` → `.env`
   * Set up your database connection

4. 🔑 Generate app key:

   ```bash
   php artisan key:generate
   ```

5. 🗄️ Run migrations & seed data:

   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. 🚀 Start the development server:

   ```bash
   php artisan serve
   ```

7. Open in browser 👉 [http://localhost:8000](http://localhost:8000)

---

## 📸 Screenshots (Optional)

*Add some preview images of the dashboard & landing page here.*

---

## 👨‍💻 Author

Developed by [**Rendy Lutfi Prabowo**](https://github.com/rendylutfiprabowo)

---

Mau saya bikinkan juga **tabel "criteria & attributes contoh (Price, Mileage, Year, Condition, Brand)"** di README biar langsung jelas gambaran yang dipakai dalam MAUT?
