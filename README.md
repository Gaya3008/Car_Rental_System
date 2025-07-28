# 🚗 Car Rental System

A web-based Car Rental System built with **PHP** and **MySQL**, designed to simplify the process of renting vehicles, managing bookings, and maintaining a fleet database.

## 🔧 Tech Stack

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP)

---

## 📦 Features

- 🚘 View available cars
- 📝 Rent a car with a booking form
- 🔐 User login & registration
- 📆 View bookings and manage rentals
- 🧑 Admin panel for car, user, and booking management

---

## 🛠️ Setup Instructions

### 1. Install XAMPP

- [Download XAMPP](https://www.apachefriends.org/index.html) and install it on your machine.

### 2. Start Apache and MySQL

- Open XAMPP Control Panel and start both **Apache** and **MySQL**.

### 3. Import the Database

- Open [phpMyAdmin](http://localhost/phpmyadmin)
- Create a new database named:
```

car\_rental

```
- Click "Import" and choose the `database.sql` file from the `/database` folder.

### 4. Configure Database Connection

- Open the file:
```

/config/db.php

````
- Update it with your MySQL credentials:
```php
<?php
$conn = mysqli_connect("localhost", "root", "", "car_rental");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
````

### 5. Run the Application

* Open a terminal or use the XAMPP shell and navigate to your project folder:

  ```bash
  cd path/to/your/project
  ```
* Start the PHP server:

  ```bash
  php -S localhost:8000
  ```
* Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## 📁 Folder Structure

```
car-rental-system/
│
├── config/              # Database connection
├── css/                 # Stylesheets
├── images/              # Car and UI images
├── js/                  # JavaScript files
├── pages/               # User-facing pages
├── admin/               # Admin dashboard
├── database/            # SQL file for setup
├── index.php            # Homepage
├── login.php            # Login functionality
├── register.php         # Registration page
└── README.md            # Project documentation
```

---

## 👤 Roles

* **User**:

  * Browse cars
  * Book rentals
  * View own bookings

* **Admin**:

  * Add/update/delete cars
  * Manage users
  * View all bookings

---

## ✅ Requirements

* PHP 7.x or later
* MySQL
* Apache Server (via XAMPP recommended)
* Web browser

---

## 📮 Feedback

Have suggestions or feedback? Feel free to open an [issue](https://github.com/Gaya3008/Car-Rental-System/issues) or contribute with a pull request at:

👉 [https://github.com/Gaya3008/Car-Rental-System](https://github.com/Gaya3008/Car-Rental-System)

---

## 📃 License

This project is open-source and available under the [MIT License](LICENSE).

