# 💼 Capstone Project BSE4101-24: Employee Management System

## 📋 Overview

**Capstone-Project-BSE4101-24** is a comprehensive employee management system built to simplify and automate HR processes. This web application allows organizations to manage employees, track performance, handle leave requests, and generate reports efficiently. It is designed using **HTML**, **CSS**, **Blade**, **PHP**, **JavaScript**, and **Vue.js**.

## 🚀 Features

- **Employee Management**: Register, update, and manage employee profiles.
- **Leave Tracking**: Submit and approve leave requests with an intuitive interface.
- **Role-based Authentication**: Secure login for admins and employees with custom permissions.
- **Real-time Notifications**: Get updates on leave approvals, new employee registrations, and more.
- **Responsive Design**: Fully optimized for desktop and mobile use.

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript, Vue.js
- **Backend**: PHP, Blade templating
- **Database**: MySQL
- **Version Control**: Git & GitHub
- **Continuous Integration**: GitHub Actions
- **Deployment**: Staging and Production environments

## 📂 Installation Guide

### Prerequisites
- **PHP** 7.4 or higher
- **MySQL**
- **Composer**
- **Node.js**
- **Git**

### Steps to Run Locally

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Masembe0757/Capstone-Project-BSE4101-24-Employee-management-system.git
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install JavaScript Dependencies**:
   ```bash
   npm install
   ```

4. **Create `.env` File** and Set Up Environment Variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Set Up Database**:
   ```bash
   php artisan migrate
   ```

6. **Run the Application**:
   ```bash
   php artisan serve
   ```
7. **Run the Application  in new terminal for ccs page styles**:
   ```bash
   npm run dev
   ```
8. **Access the App**: Open `http://localhost:8000` in your browser.

## 🧪 Testing

To run the unit and integration tests:
```bash
php artisan test
```

## 🚀 Deployment

The application is configured for **CI/CD** using **GitHub Actions**, deploying automatically to staging and production environments upon merging changes to the `main` branch.

## 👥 Contributing

1. Fork the repository.
2. Create a new branch for your feature.
3. Submit a Pull Request for review.

## 📄 License

This project is open-source under the **MIT License**. Feel free to use and modify it.
