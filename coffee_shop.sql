/*
Navicat MySQL Data Transfer

Source Server         : System
Source Server Version : 80033
Source Host           : localhost:3306
Source Database       : coffee_shop

Target Server Type    : MYSQL
Target Server Version : 80033
File Encoding         : 65001

Date: 2023-08-02 13:08:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for coffee_products
-- ----------------------------
DROP TABLE IF EXISTS `coffee_products`;
CREATE TABLE `coffee_products` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reference_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Price_product` double(25,0) NOT NULL,
  `weight_product` double(25,0) NOT NULL,
  `category_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `stock_product` int NOT NULL,
  `date_create_product` datetime(6) NOT NULL,
  `date_update_product` datetime(6) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Table structure for coffe_sales
-- ----------------------------
DROP TABLE IF EXISTS `coffe_sales`;
CREATE TABLE `coffe_sales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `amount_product` int NOT NULL,
  `preice_product` double(11,0) NOT NULL,
  `subtotal_sale` double(11,0) NOT NULL,
  `total_sale` double(11,0) NOT NULL,
  `vat_product` double(11,0) NOT NULL,
  `date_product_sale` datetime(6) NOT NULL,
  `date_update_sale` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
