# 🎓 School Management System

A web-based School Management System developed using **Laravel Framework** following the **MVC (Model - View - Controller)** architecture.

## 📋 Project Description

This project was developed as part of a Laravel academic assignment. The system provides a simple and user-friendly interface to manage students and teachers through CRUD operations.

## 🚀 Features

### 👨‍🎓 Student Management

* Add new students
* View students list
* Update student information
* Delete students

### 👨‍🏫 Teacher Management

* Add new teachers
* View teachers list
* Update teacher information
* Delete teachers

### 🎨 User Interface

* Responsive design using Bootstrap 5
* Modern dashboard layout
* Sidebar navigation menu
* Bootstrap Icons integration
* Professional banner and styling

## 🏗️ Technologies Used

* Laravel 13
* PHP 8.4
* SQLite Database
* Bootstrap 5
* HTML5
* CSS3
* Blade Template Engine

## 📂 Project Structure

The project follows the MVC architecture:

### Models

* Student
* Teacher

### Controllers

* StudentController
* TeacherController

### Views

* Home Dashboard
* Students Module
* Teachers Module

## 🗄️ Database

### Students Table

* id
* name
* email
* phone
* section
* created_at
* updated_at

### Teachers Table

* id
* name
* email
* phone
* speciality
* created_at
* updated_at

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/HamzaBaida/school-management.git
```

Move to the project directory:

```bash
cd school-management
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Start the server:

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## 📸 Screenshots

* Home Dashboard
* Students Management
* Teachers Management

## 👨‍💻 Developer

**Hamza Baida**

School Management System - 2026

## 📄 License

This project is developed for educational purposes.
