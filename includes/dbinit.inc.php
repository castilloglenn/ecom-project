<?php

$createdb = "CREATE DATABASE IF NOT EXISTS ecommerce";
if ($conn -> query($createdb)) $conn -> query("USE ecommerce");

$create_customer = "CREATE TABLE IF NOT EXISTS customer(
    customer_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NULL,
    password VARCHAR(255) NULL,
    id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact_no VARCHAR(255) NOT NULL)";
$create_product = "CREATE TABLE IF NOT EXISTS product(
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price DOUBLE(10, 2) NOT NULL)";
$create_transaction = "CREATE TABLE IF NOT EXISTS transaction(
    transaction_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT NOT NULL,
    payment_option VARCHAR(255) NOT NULL,
    total_payment DOUBLE(8, 2) NOT NULL,
    record_date DATETIME DEFAULT NOW() NOT NULL,
    status VARCHAR(255) DEFAULT 'PLACED',
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id))";
$create_cart = "CREATE TABLE IF NOT EXISTS cart(
    customer_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    FOREIGN KEY (product_id) REFERENCES product(product_id))";
$create_contain = "CREATE TABLE IF NOT EXISTS contain(
    transaction_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
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

$data = array(
    array("Lipunan Tee (Black)", "./img/products/b-ernest-t.png", "Tayo ay nakatira sa isang LIPUNAN. Ernest's favorite line ever. Comes in a black shirt.", 300.00),
    array("I Love Programming Tee", "./img/products/glenn-t.png", "Our very own programmer Glenn tshirt along with his favorite quotation.", 300.00),
    array("RAM Provider Iron Golem Tee", "./img/products/seb-t.png", "You will probably love an iron golem providing you with some extra ram boost.", 300.00),
    array("Lipunan Tee (Purple)", "./img/products/p-ernest-t.png", "Tayo ay nakatira sa isang LIPUNAN. Ernest's favorite line ever. Comes in a purple shirt.", 300.00),
    array("Pulse Bytes Mug (Black)", "./img/products/b-mug.png", "Black mug y'all", 150.00),
    array("Pulse Bytes Mug (White)", "./img/products/w-mug.png", "White mug y'all", 150.00),
    array("Eat Sleep Program Repeat Gray", "./img/products/hoodies/eatsleepprogramrepeat.jpg", "", 1999.00),
    array("Eat Sleep Program Repeat Black", "./img/products/hoodies/eatsleepprogramrepeatblack.jpg", "", 1999.00),
    array("Eat Sleep Program Repeat White", "./img/products/hoodies/eatsleepprogramrepeatgray.jpg", "", 1999.00),
    array("Eat Sleep Program Repeat Light Blue", "./img/products/hoodies/eatsleepprogramrepeatlb.jpg", "", 1999.00),
    array("Eat Sleep Program Repeat Red", "./img/products/hoodies/eatsleepprogramrepeatred.jpg", "", 1999.00),
    array("Eat Sleep Program Repeat Yellow Green", "./img/products/hoodies/eatsleepprogramrepeatyg.jpg", "", 1999.00),
    array("SteelSeries Apex Pro Tenkeyless", "./img/products/Keyboard/apex pro tkl.png", "", 9995.00),
    array("SteelSeries Apex Pro", "./img/products/Keyboard/apex pro.png", "", 9995.00),
    array("SteelSeries Apex 3", "./img/products/Keyboard/apex3.png", "", 3699.00),
    array("SteelSeries Apex 5", "./img/products/Keyboard/apex5.png", "", 6295.00),
    array("Razer Blackwidow Ultimate 2016", "./img/products/Keyboard/blackwidow ultimate.jpg", "", 5307.00),
    array("Razer Blackwidow V3 Pro", "./img/products/Keyboard/blackwidow v3.jpg", "", 19734.00),
    array("Razer Huntsman Elite", "./img/products/Keyboard/huntsman elite.jpg", "", 9650.00),
    array("Razer Huntsman Pro Mercury", "./img/products/Keyboard/huntsman.jpg", "", 13944.00),
    array("Razer Mamba", "./img/products/Mouse/razermamba.jpg", "", 4781.00),
    array("Razer Mamba Wireless", "./img/products/Mouse/razermambawireless.jpg", "", 4781.00),
    array("Razer Basilisk V2", "./img/products/Mouse/basiliskv2.jpg", "", 3863.00),
    array("Razer Abyssus Essentials", "./img/products/Mouse/ab.png", "", 2414.00),
    array("Razer Abyssus", "./img/products/Mouse/abyssus.png", "", 1994.00),
    array("Razer Deathadder", "./img/products/Mouse/deathadder.png", "", 3500.00),
    array("Razer Viper", "./img/products/Mouse/razerviper.png", "", 8800.00),
    array("Razer Atheris Quarts", "./img/products/Mouse/atherisquarts.png", "", 1999.00),
    array("Acer Predator Cestus 500", "./img/products/Mouse/predator cestus.png", "", 4499.00),
    array("Acer Predator Cestus 310", "./img/products/Mouse/predator cestus310.png", "", 1699.00),
    array("Acer Predator Cestus", "./img/products/Mouse/predatorcestus500.png", "", 1435.00),
    array("Logitect G502 Lightspeed", "./img/products/Mouse/Logitechg502Lightspeed.png", "", 6595.00),
    array("Initialization Mug - Gray", "./img/products/Mug/g1.jpg", "", 250.00),
    array("Initialization Mug - Yellow Green", "./img/products/Mug/g2.jpg", "", 250.00),
    array("Initialization Mug - White", "./img/products/Mug/g3.jpg", "", 250.00),
    array("Initialization Mug - Blue Green", "./img/products/Mug/g4.jpg", "", 250.00),
    array("Initialization Mug - Black", "./img/products/Mug/g5.jpg", "", 250.00),
    array("Syntax Mug - Blue Green", "./img/products/Mug/p1.jpg", "", 250.00),
    array("Syntax Mug - Black", "./img/products/Mug/p2.jpg", "", 250.00),
    array("Syntax Mug - Gray", "./img/products/Mug/p3.jpg", "", 250.00),
    array("Syntax Mug - White", "./img/products/Mug/p4.jpg", "", 250.00),
    array("Every Programmer is an Author - Black", "./img/products/Tshirt/1black.jpg", "", 200.00),
    array("Every Programmer is an Author - Light Blue", "./img/products/Tshirt/1lb.jpg", "", 200.00),
    array("Every Programmer is an Author - Red", "./img/products/Tshirt/1red.jpg", "", 200.00),
    array("Every Programmer is an Author - White", "./img/products/Tshirt/1white.jpg", "", 200.00),
    array("Every Programmer is an Author - Yellow Green", "./img/products/Tshirt/1yg.jpg", "", 200.00),
    array("God is Real Unless Declared - Light Blue", "./img/products/Tshirt/2lb.jpg", "", 200.00),
    array("God is Real Unless Declared - Red", "./img/products/Tshirt/2red.jpg", "", 200.00),
    array("God is Real Unless Declared - Yellow Green", "./img/products/Tshirt/2yg.jpg", "", 200.00),
    array("God is Real Unless Declared - Black", "./img/products/Tshirt/2black.jpg", "", 200.00),
    array("God is Real Unless Declared - White", "./img/products/Tshirt/2white.jpg", "", 200.00),
    array("Coffee Lover Programmer - White", "./img/products/Tshirt/3white.jpg", "", 200.00),
    array("Coffee Lover Programmer - Black", "./img/products/Tshirt/3black.jpg", "", 200.00),
    array("Coffee Lover Programmer - Red", "./img/products/Tshirt/3red.jpg", "", 200.00),
    array("Coffee Lover Programmer - Light Blue", "./img/products/Tshirt/3lb.jpg", "", 200.00),
    array("Coffee Lover Programmer - Yellow Green", "./img/products/Tshirt/3yg.jpg", "", 200.00)
);

$insert = "INSERT INTO product (name, image, description, price) VALUES (?, ?, ?, ?)";
foreach ($data as $d) {
    $name = $d[0];
    $image = $d[1];
    $description = $d[2];
    $price = $d[3];

    $stmt = $conn->prepare($insert);
    $stmt -> bind_param("sssd", $name, $image, $description, $price);
    $stmt -> execute();
}

// Administrator's account
$admin = $conn->query(
    "INSERT INTO customer 
    VALUES (100, 'admin', '".password_hash("admin", PASSWORD_DEFAULT).
        "', 'admin', 'admin', 'admin', 'admin')");