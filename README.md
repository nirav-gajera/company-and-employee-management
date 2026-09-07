# 🏢 Company & Employee Management System

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-v7.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-v7.4+-purple?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-v5.7+-blue?logo=mysql)
![License](https://img.shields.io/badge/License-Open%20Source-green)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)

**A professional admin panel application for managing companies and employees using Laravel framework**

[Features](#-features) • [Tech Stack](#-tech-stack) • [Installation](#-installation) • [Project Structure](#-project-structure) • [Usage Guide](#-usage-guide) • [Database](#-database) • [Contributing](#-contributing)

</div>

---

## 📋 Table of Contents
- [Overview](#overview)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Project Structure](#-project-structure)
- [Database Schema](#-database-schema)
- [Configuration](#-configuration)
- [Usage Guide](#-usage-guide)
- [API Routes](#-api-routes)
- [File Upload Guide](#-file-upload-guide)
- [Troubleshooting](#-troubleshooting)
- [Contributing](#-contributing)
- [Contact](#-contact)

---

## Overview

**Company & Employee Management System** is a modern admin panel built with Laravel that provides comprehensive functionality for managing companies and their associated employees. The application features a secure authentication system, responsive design, and complete CRUD operations for both companies and employees.

### ✨ Key Highlights
- **Secure Admin Authentication**: Login system with email and password
- **Company Management**: Full CRUD operations with logo upload support
- **Employee Management**: Manage employees with company associations
- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Database Migrations**: Automatic database setup with Laravel migrations
- **Eloquent ORM**: Efficient database operations with Eloquent
- **Blade Templating**: Clean and maintainable templates
- **Form Validation**: Server-side validation using Request classes
- **Pagination**: Built-in pagination with 5 entries per page
- **File Storage**: Secure file storage in storage/app/public directory

---

## 🎯 Features

### 👤 Authentication
- ✅ Secure admin login with email and password
- ✅ Session management
- ✅ Default admin account (email: admin@admin.com, password: password)
- ✅ Logout functionality
- ✅ Registration disabled for security

### 🏢 Company Management
**CRUD Operations:**
- ✅ **Create**: Add new companies with all required information
- ✅ **Read**: View all companies with pagination (5 per page)
- ✅ **Update**: Edit existing company details
- ✅ **Delete**: Remove companies from database

**Company Fields:**
- Company Name (required)
- Email Address
- Company Logo (minimum 100x100 pixels)
- Website URL

**Features:**
- Logo upload and storage
- Logo preview on list and detail pages
- Validation for all fields
- Pagination for easy navigation

### 👨‍💼 Employee Management
**CRUD Operations:**
- ✅ **Create**: Add new employees to companies
- ✅ **Read**: View all employees with pagination (5 per page)
- ✅ **Update**: Edit employee information
- ✅ **Delete**: Remove employees from database

**Employee Fields:**
- First Name (required)
- Last Name (required)
- Company Association (foreign key)
- Email Address
- Phone Number

**Features:**
- Filter employees by company
- Link employees to existing companies
- Pagination for easy navigation
- Validation for all required fields

### 🎨 User Interface
- Clean and professional admin panel
- Responsive design using Bootstrap
- Navigation menu for easy access
- Form validation messages
- Success/error flash messages
- Table listings with actions

---

## 🛠 Tech Stack

### Backend
- **Laravel 7.x** - PHP web application framework
- **PHP 7.4+** - Server-side scripting language
- **MySQL 5.7+** - Relational database management system
- **Composer** - PHP dependency manager

### Frontend
- **Blade** - Laravel's templating engine
- **Bootstrap 4** - Responsive CSS framework
- **HTML5** - Markup structure
- **CSS3** - Styling

### Key Laravel Features Used
- **Eloquent ORM** - Object-relational mapping
- **Laravel Migrations** - Database schema management
- **Request Validation** - Form validation using Request classes
- **Resource Controllers** - RESTful resource routing
- **Blade Templates** - Template inheritance and components
- **Database Seeders** - Populate default admin user
- **File Storage** - Handle file uploads securely

---

## ⚙️ Requirements

Before you begin, ensure you have the following installed:

- **PHP 7.4 or higher**
- **MySQL Server 5.7 or higher**
- **Composer 2.0+**
- **Node.js 14+** (for npm dependencies)
- **Git** (for version control)
- **Web Server**: Apache, Nginx, or Laravel's built-in server
- **Modern Web Browser**

### System Requirements
```
- RAM: Minimum 2GB (4GB recommended)
- Disk Space: Minimum 500MB free
- OS: Windows, macOS, or Linux
```

---

## 📦 Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/nirav-gajera/company-and-employee-management.git
cd company-and-employee-management
```

### Step 2: Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### Step 3: Environment Configuration
```bash
# Copy example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Step 4: Configure Database
Edit the `.env` file and update database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company_employee_management
DB_USERNAME=root
DB_PASSWORD=
```

### Step 5: Create Database
```bash
# Create the database manually in MySQL/phpMyAdmin
# Database name: company_employee_management
```

### Step 6: Run Migrations
```bash
# Create tables
php artisan migrate

# Seed default admin user
php artisan db:seed
```

### Step 7: Create Storage Link
```bash
# Create symbolic link for public file access
php artisan storage:link
```

### Step 8: Build Assets (Optional)
```bash
# Compile CSS and JavaScript
npm run dev

# For production
npm run production
```

### Step 9: Run the Application
```bash
# Using Laravel's built-in server
php artisan serve

# Application will be available at http://localhost:8000
```

### Step 10: Login
- **URL**: http://localhost:8000/login
- **Email**: admin@admin.com
- **Password**: password

---

## 📁 Project Structure

```
company-and-employee-management/
│
├── app/                              # Application code
│   ├── Companies.php                 # Company model
│   ├── Employees.php                 # Employee model
│   ├── User.php                      # User model
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── CompaniesController.php    # Company CRUD logic
│   │   │   └── EmployeesController.php    # Employee CRUD logic
│   │   └── Requests/
│   │       ├── CompanyRequest.php         # Company form validation
│   │       └── EmployeeRequest.php        # Employee form validation
│   ├── Console/                      # Artisan commands
│   ├── Exceptions/                   # Custom exceptions
│   └── Providers/                    # Service providers
│
├── resources/                        # Frontend resources
│   ├── views/
│   │   ├── auth/
│   │   │   ├── login.blade.php       # Login page
│   │   │   ├── register.blade.php    # Register page (disabled)
│   │   │   └── passwords/
│   │   ├── companies/
│   │   │   ├── index.blade.php       # Companies list
│   │   │   ├── create.blade.php      # Create company form
│   │   │   ├── edit.blade.php        # Edit company form
│   │   │   └── show.blade.php        # Company details
│   │   ├── employees/
│   │   │   ├── index.blade.php       # Employees list
│   │   │   ├── create.blade.php      # Create employee form
│   │   │   ├── edit.blade.php        # Edit employee form
│   │   │   └── show.blade.php        # Employee details
│   │   ├── layout.blade.php          # Main layout template
│   │   └── welcome.blade.php         # Welcome page
│   ├── css/
│   └── js/
│
├── database/                         # Database
│   ├── migrations/
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2019_12_14_000001_create_personal_access_tokens_table.php
│   │   ├── xxxx_xx_xx_xxxxxx_create_companies_table.php
│   │   └── xxxx_xx_xx_xxxxxx_create_employees_table.php
│   ├── seeds/
│   │   └── DatabaseSeeder.php        # Populate default data
│   └── factories/                    # Model factories
│
├── routes/
│   ├── web.php                       # Web routes
│   └── api.php                       # API routes
│
├── config/                           # Configuration files
│   ├── app.php                       # Application config
│   ├── database.php                  # Database config
│   ├── filesystem.php                # File storage config
│   ├── mail.php                      # Mail config
│   └── ...
│
├── public/
│   ├── index.php                     # Application entry point
│   ├── css/                          # Compiled CSS
│   ├── js/                           # Compiled JavaScript
│   └── storage/                      # Symlink to storage
│
├── storage/
│   ├── app/
│   │   ├── public/                   # Public file storage
│   │   │   └── logos/                # Company logos
│   │   └── ...
│   ├── logs/                         # Application logs
│   └── framework/
│
├── tests/                            # Unit and feature tests
│   ├── Unit/
│   └── Feature/
│
├── .env                              # Environment configuration
├── .env.example                      # Example environment file
├── .gitignore                        # Git ignore rules
├── composer.json                     # PHP dependencies
├── composer.lock                     # Dependency lock file
├── package.json                      # Node dependencies
├── webpack.mix.js                    # Asset compilation
├── artisan                           # Artisan CLI
├── server.php                        # Server file
└── README.md                         # This file
```

---

## 🗄️ Database Schema

### Companies Table
```sql
CREATE TABLE companies (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    logo VARCHAR(255),
    website VARCHAR(255),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Employees Table
```sql
CREATE TABLE employees (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    company_id BIGINT UNSIGNED NOT NULL,
    email VARCHAR(255),
    phone VARCHAR(20),
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    FOREIGN KEY (company_id) REFERENCES companies(id) ON DELETE CASCADE
);
```

### Users Table
```sql
CREATE TABLE users (
    id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Key Relationships
- **One Company has Many Employees** (1:N)
- **One Employee belongs to One Company** (N:1)

---

## ⚙️ Configuration

### Environment File (.env)

```env
APP_NAME=CompanyEmployeeManagement
APP_ENV=local
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=company_employee_management
DB_USERNAME=root
DB_PASSWORD=

# Mail Configuration (Optional)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### File Storage Configuration
```php
// config/filesystem.php
'disks' => [
    'public' => [
        'driver' => 'local',
        'path' => storage_path('app/public'),
        'url' => env('APP_URL').'/storage',
        'visibility' => 'public',
    ],
],
```

---

## 🚀 Usage Guide

### 1. Login to Admin Panel
1. Navigate to `http://localhost:8000/login`
2. Enter credentials:
   - **Email**: admin@admin.com
   - **Password**: password
3. Click "Login"

### 2. Managing Companies

#### View All Companies
1. Click "Companies" in the navigation menu
2. View paginated list (5 per page)
3. See company name, email, logo, and website

#### Create New Company
1. Click "Companies" → "Create" button
2. Fill in company details:
   - Company Name (required)
   - Email Address
   - Logo Image (minimum 100x100 pixels)
   - Website URL
3. Click "Submit"
4. Logo will be saved to `storage/app/public/logos/`

#### Edit Company
1. Go to Companies list
2. Click "Edit" button on company row
3. Update company information
4. Click "Update"

#### Delete Company
1. Go to Companies list
2. Click "Delete" button on company row
3. Confirm deletion
4. Company and associated employees will be deleted

### 3. Managing Employees

#### View All Employees
1. Click "Employees" in the navigation menu
2. View paginated list (5 per page)
3. See employee details and associated company

#### Create New Employee
1. Click "Employees" → "Create" button
2. Fill in employee details:
   - First Name (required)
   - Last Name (required)
   - Select Company (required)
   - Email Address
   - Phone Number
3. Click "Submit"

#### Edit Employee
1. Go to Employees list
2. Click "Edit" button on employee row
3. Update employee information
4. Click "Update"

#### Delete Employee
1. Go to Employees list
2. Click "Delete" button on employee row
3. Confirm deletion

### 4. Logout
1. Click your name/profile icon in top right
2. Click "Logout"
3. You will be redirected to login page

---

## 📡 API Routes

### Authentication Routes
```
POST   /login                     # User login
POST   /logout                    # User logout
POST   /register                  # User registration (disabled)
POST   /password/email            # Password reset request
POST   /password/reset            # Password reset
```

### Company Routes
```
GET    /companies                 # List all companies (index)
POST   /companies                 # Create new company (store)
GET    /companies/create          # Show create form
GET    /companies/{id}            # Show company details (show)
PUT    /companies/{id}            # Update company (update)
DELETE /companies/{id}            # Delete company (destroy)
GET    /companies/{id}/edit       # Show edit form
```

### Employee Routes
```
GET    /employees                 # List all employees (index)
POST   /employees                 # Create new employee (store)
GET    /employees/create          # Show create form
GET    /employees/{id}            # Show employee details (show)
PUT    /employees/{id}            # Update employee (update)
DELETE /employees/{id}            # Delete employee (destroy)
GET    /employees/{id}/edit       # Show edit form
```

---

## 📤 File Upload Guide

### Company Logo Upload

#### Specifications
- **Location**: `storage/app/public/logos/`
- **Minimum Size**: 100x100 pixels
- **Supported Formats**: JPG, PNG, GIF, BMP
- **Maximum File Size**: Typically 2MB (configurable)

#### Upload Process
1. Navigate to Create/Edit Company
2. Click "Choose File" for logo upload
3. Select image from your computer
4. Submit form
5. Image is validated and saved to storage
6. Logo path is stored in database

#### Accessing Uploaded Logos
```
URL: /storage/logos/filename.ext
Example: /storage/logos/company-logo-1.png
```

#### Storage Directory Structure
```
storage/
└── app/
    └── public/
        └── logos/
            ├── company-logo-1.png
            ├── company-logo-2.jpg
            └── ...
```

---

## 🔍 Validation Rules

### Company Validation
```php
'name' => 'required|string|max:255',
'email' => 'nullable|email|max:255',
'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,bmp|min:100|min:100',
'website' => 'nullable|url|max:255'
```

### Employee Validation
```php
'first_name' => 'required|string|max:255',
'last_name' => 'required|string|max:255',
'company_id' => 'required|exists:companies,id',
'email' => 'nullable|email|max:255|unique:employees',
'phone' => 'nullable|string|max:20'
```

---

## 🐛 Troubleshooting

### Common Issues

#### 1. Database Connection Error
```
Error: SQLSTATE[HY000]: General error: 1030 Got error...
```
**Solution:**
- Verify database name in `.env`
- Check MySQL server is running
- Confirm database credentials
- Run `php artisan migrate` again

#### 2. Storage Directory Not Writable
```
Error: The stream or file ".../storage/logs/laravel.log" could not be opened...
```
**Solution:**
```bash
# Set proper permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

#### 3. Logo Upload Fails
```
Error: The logo field must be an image...
```
**Solution:**
- Ensure file is a valid image (JPG, PNG, GIF, BMP)
- Check file size (max 2MB)
- Verify minimum dimensions (100x100 pixels)
- Check `storage/app/public/` directory exists

#### 4. 404 Error on Storage URL
```
Error: The requested URL could not be found...
```
**Solution:**
```bash
# Recreate storage link
php artisan storage:link
```

#### 5. Seeder Error
```
Error: Class 'Database\\Seeders\\DatabaseSeeder' not found
```
**Solution:**
```bash
# Run composer autoload
composer dump-autoload

# Re-run seeder
php artisan db:seed
```

#### 6. Memory Limit Error
```
Error: Allowed memory size of 134217728 bytes exhausted...
```
**Solution:**
```bash
# Increase PHP memory limit
php -d memory_limit=256M artisan migrate
```

---

## 📝 Pagination Details

### Implementation
- **Items Per Page**: 5 entries
- **Pagination Method**: Laravel's built-in `paginate(5)`
- **Available Methods**:
  - `->links()` - Display pagination links
  - `->currentPage()` - Get current page
  - `->total()` - Get total records
  - `->lastPage()` - Get last page number

### Example Usage
```blade
<!-- In Blade template -->
@forelse ($companies as $company)
    <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
    </tr>
@empty
    <tr><td colspan="3">No companies found</td></tr>
@endforelse

<!-- Display pagination links -->
{{ $companies->links() }}
```

---

## 🤝 Contributing

We welcome contributions to improve this project! Here's how you can help:

### Steps to Contribute
1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/YourFeature`)
3. **Commit** changes (`git commit -m 'Add YourFeature'`)
4. **Push** to branch (`git push origin feature/YourFeature`)
5. **Open** a Pull Request

### Contribution Guidelines
- Follow PSR-2 PHP coding standards
- Write clear, descriptive commit messages
- Test your changes thoroughly
- Update documentation as needed
- Add comments for complex logic
- Ensure code is properly formatted

### Areas to Contribute
- 🐛 Bug fixes and improvements
- ✨ New features
- 📚 Documentation improvements
- 🎨 UI/UX enhancements
- ⚡ Performance optimizations
- 🔒 Security improvements
- 🧪 Unit tests
- 💬 Translation/Localization

---

## 📄 License

This project is open source and available under the MIT License. You are free to use, modify, and distribute this project.

---

## 📞 Contact & Support

### Get in Touch
- **GitHub Profile**: [@nirav-gajera](https://github.com/nirav-gajera)
- **Instagram**: [@mr._nirav_09](https://www.instagram.com/mr._nirav_09/)
- **Project**: [company-and-employee-management](https://github.com/nirav-gajera/company-and-employee-management)

### Support
- Report issues on [GitHub Issues](https://github.com/nirav-gajera/company-and-employee-management/issues)
- Include detailed description and steps to reproduce
- Attach error messages and screenshots if applicable

---

## 🚀 Future Roadmap

- [ ] Advanced employee search and filtering
- [ ] Employee performance metrics
- [ ] Department management
- [ ] Role-based access control (RBAC)
- [ ] Attendance tracking
- [ ] Payroll integration
- [ ] Report generation (PDF/Excel)
- [ ] Email notifications
- [ ] SMS notifications
- [ ] API endpoints for mobile app
- [ ] Two-factor authentication
- [ ] Audit logging
- [ ] Dashboard analytics
- [ ] Multi-language support

---

## 📊 Project Statistics

- **Repository**: nirav-gajera/company-and-employee-management
- **Language**: PHP (Laravel)
- **Created**: May 23, 2023
- **Topics**: Laravel, PHP, CRUD, Admin Dashboard, Employee Management

---

<div align="center">

### Made with ❤️ by Nirav Gajera

**If you find this project useful, please consider giving it a ⭐ on GitHub!**

[↑ Back to Top](#-company--employee-management-system)

</div>
