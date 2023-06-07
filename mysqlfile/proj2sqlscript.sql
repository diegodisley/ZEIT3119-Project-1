-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- --------------------------------------------------------
-- Create database project2
DROP DATABASE IF EXISTS `project2`;
CREATE DATABASE IF NOT EXISTS `project2`;
USE `project2`;

-- Drop table if exists
DROP TABLE IF EXISTS transactions;
DROP TABLE IF EXISTS users;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  DoB DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  google_id VARCHAR(255)
);

-- Create transactions table
CREATE TABLE IF NOT EXISTS transactions (
  invoice_number VARCHAR(50) PRIMARY KEY,
  user_id BIGINT UNSIGNED,
  date DATE,
  amount DOUBLE,
  category VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Populate users table
/*
username: john.doe@example.com 				password:john
username: jane.doe@example.com 				password:jane
username: jim.doe@example.com 				password:jim
username: sarah.doe@example.com 			password:sarah
username: mike.doe@example.com 				password:mike
*/
INSERT INTO users (id, email, password, first_name, last_name, DoB) VALUES 
(1,'john.doe@example.com', '$2y$10$6x/FtOU8ooOObucIoVBXQuGLlcO3UrW7ig7ioPSemgv2TblevRX4e', 'John', 'Doe', '1990-05-20'),
(2, 'jane.doe@example.com', '$2y$10$Fev5NRo4jUQwJycHMHnce.GQlpN0khv0vbN3WPGuQzu5xm0bfGMIm', 'Jane', 'Doe', '1985-12-03'),
(3, 'jim.smith@example.com', '$2y$10$2aaY1C22wBb54nNUyOO3YeFkzTzdk3.AEf/DprtPWKKYHj6daTcvq', 'Jim', 'Smith', '1995-02-15'),
(4, 'sarah.jones@example.com', '$2y$10$OZhW1x4T6pOLJxXj4jW6aeomzpQSl.Dv/cI2rI1309utrkyr4QXJC', 'Sarah', 'Jones', '1988-08-07'),
(5, 'mike.jackson@example.com', '$2y$10$tW9tPa2V8iz7tEUbgpEBFuWNxsGnQUER0AxLEuovHCRGX.xuGnPue', 'Mike', 'Jackson', '1992-11-29');

-- Populate transactions table
INSERT INTO transactions (invoice_number, user_id, date, amount, category) VALUES 
(1, 1, '2017-01-01', 120.00, 'Personal'),
(2, 1, '2012-02-15', 53.00, 'Business'),
(3, 1, '2019-03-30', 75.00, 'Business'),
(4, 2, '2020-01-05', 210.00, 'ETC'),
(5, 2, '2021-02-20', 140.00, 'Personal'),
(6, 2, '2023-03-10', 1560.00, 'Business'),
(7, 3, '2011-01-12', 53.00, 'Personal'),
(8, 3, '2009-02-28', 754.00, 'Education'),
(9, 3, '2012-03-15', 102.00, 'Personal'),
(10, 4, '2013-01-20', 150.00, 'Education'),
(11, 4, '2010-02-05', 130.00, 'Education'),
(12, 4, '2016-03-25', 54.00, 'Personal'),
(13, 5, '2015-01-10', 71.00, 'Education'),
(14, 5, '2020-02-22', 300.00, 'Business'),
(15, 5, '2021-03-08', 125.00, 'Business');
