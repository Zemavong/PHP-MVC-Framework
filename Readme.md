## Table of contents
**[Why this framework?](https://github.com/Zemavong/PHP-MVC-Framework#Why--this--framework?)**

**[How to run?](https://github.com/Zemavong/PHP-MVC-Framework#How--to--run?)**

------

# Why this framework?
Any developer will tell you that it's silly to waste time developing already existing technologies. However, for begginner programmers (which I consider myself to be) there is a benefit in doing so. For example, it will help to prepare for learning well-known frameworks such as laravel, Symfony, Yii2, as well as give an idea about the MVC architecture. Also, by using your own framework, you will be more comfortable to start developing large-scale projects.

![MVC](https://miro.medium.com/max/1400/1*v6O4SuMNwGUvl5L58dmv1Q.jpeg)

This framework provides basic functionality:
 - Custom routing
 - Controllers
 - Views/Packages
 - Models
 - Migrations
 - Form widget classes
 - Query Data Processing
 - Validations
 - Registration/Login
 - Middlewares

# How to run?

To start the application, follow the instructions:
1. Clone this repository
2. Create the database by importing the `schema.sql` file
3. Create an `.env` file to set environment variables: *DB_DSN*, *DB_USER*, *DB_PASSWORD*
4.  Start migrations from root folder
>php migrations.php
5. Go to the *public* folder
6. Start php server by running command 
>php -S 127.0.0.1:8080 (or other unused port)
7. Open in browser `http://127.0.0.1:8080`

