<?php

$createdb = "CREATE DATABASE IF NOT EXISTS ecommerce";
if ($conn -> query($createdb)) $conn -> query("USE ecommerce");

$create_customer = "CREATE TABLE IF NOT EXISTS customer(
    customer_id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact_no VARCHAR(255) NOT NULL)";
$create_product = "CREATE TABLE IF NOT EXISTS product(
    product_id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    priority INT NOT NULL,
    price DOUBLE(10, 2) NOT NULL)";
$create_transaction = "CREATE TABLE IF NOT EXISTS transaction(
    transaction_id INT PRIMARY KEY,
    customer_id INT NOT NULL,
    payment_option VARCHAR(255) NOT NULL,
    total_payment DOUBLE(8, 2) NOT NULL,
    record_date DATETIME DEFAULT NOW() NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id))";
$create_cart = "CREATE TABLE IF NOT EXISTS cart(
    customer_id INT NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id))";
$create_contain = "CREATE TABLE IF NOT EXISTS contain(
    transaction_id INT NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (transaction_id) REFERENCES transaction(transaction_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id))";

$conn -> query($create_customer);
$conn -> query($create_product);
$conn -> query($create_transaction);
$conn -> query($create_cart);
$conn -> query($create_contain);

/**
 * The following contains all the pre-built products created
 * as the initial products/stocks of the company website merchandises
 */

 