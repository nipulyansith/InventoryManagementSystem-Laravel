# InventoryMgt
This is a straightforward, user-friendly web application developed using Laravel 11 to efficiently manage and organize inventory items. This app enhances inventory tracking, allowing easy management of item details such as quantities, prices, and updates.

## Features

- **Inventory Management**: Add, view, modify, and delete inventory items, with fields like name, description, quantity, price, and updates.
- **Sorting and Searching**: Sort and search through inventory items based on name, quantity, or price.
- **Pagination**: View inventory items with pagination for an improved user experience.

## Prerequisites

Before you begin, make sure the following software is installed:

- PHP >= 8.0
- Composer
- MySQL or another compatible database
- Node.js & npm (for front-end assets and tooling)
- Laravel 11

## Setup Instructions

1. **Clone the repository:**

   ```bash
    git clone https://github.com/nipulyansith/InventoryManagementSystem-Laravel.git
     cd InventoryMgt
   
2. **Install dependencies**

    composer install
    npm install

3. **Create environment configuration**
    cp .env.example .env

4. **Generate the application key**
    php artisan key:generate

5. **Set up the database**

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=inventorymgt

    DB_USERNAME=root

    DB_PASSWORD=yourpassword

6. **php artisan migrate**
    php artisan migrate

7. **seed the database or add data manually**    

7. **Compile front-end assets**
    npm run dev

8. **Start the development server**
    php artisan serve

## Technologies Used

Technologies Used
Laravel 11 - Backend framework
MySQL - Database
Blade - Templating engine
Eloquent ORM - To manage relationships between inventory items, categories, and suppliers
Tailwind CSS - Front-end styling