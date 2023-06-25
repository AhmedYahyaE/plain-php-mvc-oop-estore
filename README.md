# A plain PHP and MySQL robust MVC Pattern OOP web-based Electronic Store Application

A plain PHP and MySQL Electronic Store/Inventory Application which follows a robust MVC Pattern (Model-View-Controller Architecture i.e. Separation of Concerns), and is completely Object-oriented (OOP). This project script is written entirely in plain PHP and aims to demonstrate the implementation of an e-store/inventory system without relying on any external libraries or frameworks.

The e-store is Multilingual (English and Arabic).

## Features:
1- MVC design pattern / Front Controller Pattern.

2- Routing System, Service Container, Middlewares, Entry Point/Script file (index.php).

3- Multilingual Support (English and Arabic).

4- User Registration, Validation Class, Authentication Class and Authorization.

5- Login System (Session Management) (Session Class).

6- User Roles (User Groups) and Permissions/Privileges.

7- File Upload, Session, Registry, Language, Messenger, Autoloading ... Classes.

## Installation & Configuration:
1- Clone the project or download it.

2- Create a MySQL database named **\`storedb\`** and import the database SQL Dump File from [storedb database SQL Dump File.sql](<Database - storedb/storedb database - SQL Dump File - PhpMyAdmin Export.sql>) SQL Dump file. Navigate to '**`Database - storedb`**/**`storedb database - SQL Dump File - PhpMyAdmin Export.sql`**' SQL Dump file.

3- Navigate to the app/database connection configuration file in '**`app/config/config.php`**' file and configure/edit/update the file with your MySQL database credentials and other configuration settings.

4- Navigate to the project "public" folder/directory (where the Entry Point index.php file is placed) by using the **`cd`** terminal command, and then start your PHP built-in Development Web Server by running the command: **`php -S localhost:8000`**.

\*\***Note: Whatever your Web Server used is, you must change its Web Root Directory to the project "public" folder which contains the [index.php](public/index.php) file.**

5- In your browser, go to http://localhost:8000/

6- A ready-to-use registered user account credentials are:

> **Username**: **Ahmed Yahya**, **Email**: **ahmed.yahya@example.com**, **Password**: **123456**

## Contribution:
Contributions to my plain PHP/MySQL MVC OOP application are most welcome! If you find any issues or have suggestions for improvements or want to add new features, please open an issue or submit a pull request.
