# To-Do List Application

## Description
A simple to-do list application built with Laravel, MySQL, and PHP. This project allows users to create, read, update, and delete tasks.

## Technologies Used
- **Backend**: Laravel, PHP
- **Database**: MySQL (via phpMyAdmin)
- **Server**: XAMPP
- **Editor**: VS Code

## Requirements
- XAMPP (Apache, MySQL)
- PHP 8.0 or higher
- Composer
- Node.js (for optional frontend dependencies)

## Installation
1. Clone the repository:
   ```bash
   git clone [repository-url]
   ```
2. Navigate to the project directory:
   ```bash
   cd todo-list
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   ```
4. Copy the `.env.example` file to `.env` and configure your database settings:
   ```bash
   cp .env.example .env
   ```
5. Generate an application key:
   ```bash
   php artisan key:generate
   ```
6. Run migrations:
   ```bash
   php artisan migrate
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage
- Access the application at `http://localhost:8000`
- Create, view, edit, and delete tasks as needed

## By Namratha Pavuluri
