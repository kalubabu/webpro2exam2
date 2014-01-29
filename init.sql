drop database if exists webpro2exam;
create database `webpro2exam` DEFAULT CHARACTER SET utf8;

USE `webpro2exam`;

DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `sales`;

CREATE TABLE `products`
(id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
price INT NOT NULL) DEFAULT CHARSET=utf8;

INSERT INTO products (id, name, price) VALUES
    (1, 'T-shrit', 4000),
    (2, 'jeans', 5600),
    (3, 'Sneaker', 12000),
    (4, 'Jumper', 7000),
    (5, 'Boots', 30500),
    (6, 'Hat', 6000),
    (7, 'Sandle', 9500),
    (8, 'Glass', 6090);

CREATE TABLE `sales`
(id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
product_id INT NOT NULL,
sales_at DATETIME NOT NULL,
quantity INT NOT NULL) DEFAULT CHARSET=utf8;