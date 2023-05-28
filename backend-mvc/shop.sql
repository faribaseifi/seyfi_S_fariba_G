/*
 Navicat Premium Data Transfer

 Source Server         : locahost
 Source Server Type    : MySQL
 Source Server Version : 50736 (5.7.36)
 Source Host           : localhost:3306
 Source Schema         : shop

 Target Server Type    : MySQL
 Target Server Version : 50736 (5.7.36)
 File Encoding         : 65001

 Date: 28/05/2023 13:14:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for basket
-- ----------------------------
DROP TABLE IF EXISTS `basket`;
CREATE TABLE `basket`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `quantity` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `created_at` int(20) NULL DEFAULT NULL,
  `updated_at` int(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of basket
-- ----------------------------
INSERT INTO `basket` VALUES (1, 2, 1, 1, 1685267041, NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `price` bigint(20) NULL DEFAULT NULL,
  `descriptin` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (2, 'product -1', 5733, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=1', '1685168810');
INSERT INTO `products` VALUES (3, 'product -2', 3069, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=2', '1685168810');
INSERT INTO `products` VALUES (4, 'product -3', 7416, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=3', '1685168810');
INSERT INTO `products` VALUES (5, 'product -4', 2404, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=4', '1685168810');
INSERT INTO `products` VALUES (6, 'product -5', 7980, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=5', '1685168810');
INSERT INTO `products` VALUES (7, 'product -6', 5042, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=6', '1685168810');
INSERT INTO `products` VALUES (8, 'product -7', 7053, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=7', '1685168810');
INSERT INTO `products` VALUES (9, 'product -8', 3994, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=8', '1685168810');
INSERT INTO `products` VALUES (10, 'product -9', 2222, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=9', '1685168810');
INSERT INTO `products` VALUES (11, 'product -10', 4161, 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying', 'https://loremflickr.com/446/240/world?random=10', '1685168810');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `created_at` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'fariba', '123456', NULL);

SET FOREIGN_KEY_CHECKS = 1;
