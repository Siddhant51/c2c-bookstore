-- -- Create the 'bookstore' database
-- CREATE DATABASE bookstore;

-- -- Use the 'bookstore' database
-- USE bookstore;

-- Create the 'users' table
DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    user_email VARCHAR(100) NOT NULL
);

-- Create the 'books' table
DROP TABLE IF EXISTS `books`;
CREATE TABLE books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(100) NOT NULL,
    book_image VARCHAR(255) NOT NULL,
    book_title VARCHAR(100) NOT NULL,
    book_desc TEXT NOT NULL,
    book_price DECIMAL(10, 2) NOT NULL
);


-- Create the 'admin' table
DROP TABLE IF EXISTS `admin`;
CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(50) NOT NULL,
    admin_pass VARCHAR(50) NOT NULL
);
INSERT INTO admin (admin_name, admin_pass) VALUES ('admin', 'admin');

