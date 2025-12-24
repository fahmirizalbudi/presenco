<div align="center">
<a href="https://github.com/fahmirizalbudi/presenco" target="blank">
<img src="https://github.com/JjagoKoding/icon/blob/main/presenco.png?raw=true" width="300" alt="Logo" />
</a>

<br />
<br />

![](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![](https://img.shields.io/badge/Android-3DDC84?style=for-the-badge&logo=android&logoColor=white)
![](https://img.shields.io/badge/Java-ED8B00?style=for-the-badge&logo=openjdk&logoColor=white)
![](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

</div>

<br/>

## 🏁 Presenco

Presenco is an application (or system) for attendance management using QR scans. It utilizes Laravel as the powerful backend and a native Android application built with Java for the mobile client. This project uses MySQL as the database. Key features include:

## ✨ Features

- **📊 Admin Panel:** Web-based dashboard managed via Laravel to oversee employee data.
- **📱 Native Mobile App:** Smooth and responsive attendance tracking app built with Java for Android.
- **📍 QR Attendance:** Secure attendance features using QR Code.

## 👩‍💻 Tech Stack

- **Laravel**: A PHP framework used for the Backend API and Web Administration.
- **Java (Android)**: Native Android development language for the mobile application.
- **MySQL**: Relational database management system.

## 📦 Getting Started

To get a local copy of this project up and running, follow these steps.

### 🚀 Prerequisites

- **PHP** (v8.2 or higher) & **Composer**.
- **Android Studio** & **JDK 11/17**.
- **MySQL** (or another supported SQL database).

## 🛠️ Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/fahmirizalbudi/presenco.git
   cd presenco
   ```

2. **Install dependencies:**

   ```bash
   #mobile
   > Open Android Studio.
   > Select Open an Existing Project and navigate to the mobile/ folder inside the repository.
   > Let Gradle sync the dependencies.

   #web
   cd web
   composer install
   cp .env .env.example
   php artisan key:generate
   ```

3. **Start the development server:**

   ```bash
   #mobile
   > Run the app on an Emulator or Physical Device.

   #web
   php artisan serve
   ```

## 📖 Usage

### ✔ Running the Website

- **Backend API:** `php artisan serve`.
- **Android app:** `Launch via Android Studio or build the APK`.

> Use [http://localhost:8000](http://localhost:8000) to test the api in your Postman.

## 📜 License

All rights reserved. This project is for educational purposes only and cannot be used or distributed without permission.
