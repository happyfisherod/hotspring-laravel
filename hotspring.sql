/*
 Navicat Premium Data Transfer

 Source Server         : my
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : hotspring

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 08/07/2020 02:05:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotspring_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delidate` date NULL DEFAULT NULL,
  `delitime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kind` int(11) NULL DEFAULT NULL,
  `paykind` int(11) NULL DEFAULT NULL,
  `notice` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (36, 1, 2000, 26, 'New dish', 10, 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `cart` VALUES (37, 21, 2000, 24, '天然温泉', 10, 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `cart` VALUES (38, 21, 2000, 24, '天然温泉', 10, 1, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `menu_image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (3, 2000, 'Menu Cat', 1, NULL);
INSERT INTO `categories` VALUES (4, 2000, 'hotspring1', 1, NULL);
INSERT INTO `categories` VALUES (5, 2000, 'apple', 1, NULL);
INSERT INTO `categories` VALUES (6, 2000, 'Colombiana', 1, NULL);
INSERT INTO `categories` VALUES (7, 2000, 'Desayunos', 1, NULL);
INSERT INTO `categories` VALUES (11, 2000, 'Bebidas ', 1, NULL);
INSERT INTO `categories` VALUES (13, 2000, 'Almuerzo ', 1, NULL);
INSERT INTO `categories` VALUES (14, 2000, 'Adicionales', 1, NULL);
INSERT INTO `categories` VALUES (15, 2000, 'Cerveza', 1, NULL);
INSERT INTO `categories` VALUES (16, 2000, 'Whisky', 1, NULL);
INSERT INTO `categories` VALUES (17, 2000, 'Vinos', 1, NULL);
INSERT INTO `categories` VALUES (18, 2000, 'Concentrado ', 1, NULL);
INSERT INTO `categories` VALUES (19, 2000, 'Concentrado ', 1, NULL);
INSERT INTO `categories` VALUES (20, 2000, 'Concentrado', 1, NULL);
INSERT INTO `categories` VALUES (22, 2000, 'Concentrado ', 1, NULL);
INSERT INTO `categories` VALUES (23, 2000, 'hotspring2', 1, NULL);
INSERT INTO `categories` VALUES (24, 2000, 'hotspring3', 1, NULL);
INSERT INTO `categories` VALUES (26, 2000, 'hotspring4', 1, NULL);
INSERT INTO `categories` VALUES (27, 2000, 'hotspring5', 1, NULL);
INSERT INTO `categories` VALUES (28, 2000, 'hotspring6', 1, NULL);
INSERT INTO `categories` VALUES (29, 2000, 'hotspring7', 1, NULL);
INSERT INTO `categories` VALUES (30, 2000, 'hotspring8', 1, NULL);

-- ----------------------------
-- Table structure for chat
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat`  (
  `message_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `to_user_id` int(255) NOT NULL,
  `message_time` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`message_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chat
-- ----------------------------
INSERT INTO `chat` VALUES (11, 3, 2000, '2019-10-08 11:12:35', 'Sent', 'sd');
INSERT INTO `chat` VALUES (12, 2000, 3, '2019-10-08 11:15:46', 'Sent', 'test');
INSERT INTO `chat` VALUES (13, 3, 2000, '2019-10-09 11:36:06', 'Sent', 'test');
INSERT INTO `chat` VALUES (14, 3, 2000, '2019-10-09 11:36:14', 'Sent', 'rest');
INSERT INTO `chat` VALUES (15, 3, 2000, '2019-10-09 11:36:24', 'Sent', 'okay take rest');
INSERT INTO `chat` VALUES (16, 7, 2004, '2019-10-17 15:13:53', 'Sent', 'hi');
INSERT INTO `chat` VALUES (17, 8, 2000, '2019-10-17 16:38:07', 'Sent', 'hola');
INSERT INTO `chat` VALUES (18, 8, 2004, '2019-10-17 16:46:28', 'Sent', 'hola');
INSERT INTO `chat` VALUES (19, 8, 2004, '2019-10-21 14:54:33', 'Sent', 'hola');
INSERT INTO `chat` VALUES (20, 8, 2004, '2019-10-22 13:37:07', 'Sent', 'hola');
INSERT INTO `chat` VALUES (21, 8, 2005, '2019-10-24 17:01:40', 'Sent', 'hola');
INSERT INTO `chat` VALUES (22, 8, 2005, '2019-10-29 13:26:15', 'Sent', 'hello');
INSERT INTO `chat` VALUES (23, 8, 2005, '2019-10-29 13:26:15', 'Sent', 'hello');
INSERT INTO `chat` VALUES (24, 8, 2009, '2019-11-06 01:43:00', 'Sent', 'hola');
INSERT INTO `chat` VALUES (25, 12, 2005, '2019-11-14 13:00:19', 'Sent', 'hola');

-- ----------------------------
-- Table structure for delihours
-- ----------------------------
DROP TABLE IF EXISTS `delihours`;
CREATE TABLE `delihours`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dayindex` int(11) NULL DEFAULT NULL,
  `fromtime` time(0) NULL DEFAULT NULL,
  `endtime` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of delihours
-- ----------------------------
INSERT INTO `delihours` VALUES (1, 2, '09:00:00', '22:00:00');

-- ----------------------------
-- Table structure for hotspring
-- ----------------------------
DROP TABLE IF EXISTS `hotspring`;
CREATE TABLE `hotspring`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotspring_type` int(11) NOT NULL,
  `hotspring_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotspring_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotspring_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotspring_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `delivery_charge` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotspring_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hotspring_bg` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_monday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_tuesday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_wednesday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_thursday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_friday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_saturday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `open_sunday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `review_avg` int(11) NOT NULL,
  `hotspring_latitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `hotspring_longitude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mwst` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sitename` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `abc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2001 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hotspring
-- ----------------------------
INSERT INTO `hotspring` VALUES (2000, 1, 3, 'Japan Star Hot Spring', 'Japan Star Hot Spring', '<h1><br></h1>', '', '40', 'colombian-star-restaurant_1582364236', '', '11:00 AM', '9:00 PM', '', '', '', '', '', 4, NULL, NULL, 'CHE_21456', 'dcelik@bluewin.ch', NULL);

-- ----------------------------
-- Table structure for hotspring_order
-- ----------------------------
DROP TABLE IF EXISTS `hotspring_order`;
CREATE TABLE `hotspring_order`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotspring_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `order_notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `payment_id` int(50) NULL DEFAULT NULL,
  `delidate` date NULL DEFAULT NULL,
  `delitime` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kind` int(11) NULL DEFAULT NULL,
  `paykind` int(11) NULL DEFAULT NULL,
  `notice` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hotspring_order
-- ----------------------------
INSERT INTO `hotspring_order` VALUES (18, 1, 2000, 25, 'New dishdsdss', 10, 1, 1584565200, 'Cancel', NULL, NULL, NULL, NULL, '2020-03-19', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (19, 1, 2000, 26, 'New dish', 10, 1, 1584565200, 'Cancel', NULL, NULL, NULL, NULL, '2020-03-19', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (20, 1, 2000, 25, 'New dishdsdss', 10, 1, 1584565200, 'Cancel', NULL, NULL, NULL, NULL, '2020-03-19', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (21, 1, 2000, 25, 'New dishdsdss', 10, 1, 1584565200, 'Cancel', NULL, NULL, NULL, NULL, '2020-03-19', '20:00 ~ 20:30', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (22, 1, 2000, 26, 'New dish', 20, 2, 1584565200, 'Pending', NULL, NULL, NULL, NULL, '2020-03-19', '20:00 ~ 20:30', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (23, 1, 2000, 26, 'New dish', 10, 1, 1584997200, 'Pending', NULL, NULL, NULL, NULL, '2020-03-24', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (24, 1, 2000, 25, 'New dishdsdss', 10, 1, 1584997200, 'Pending', NULL, NULL, NULL, NULL, '2020-03-24', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (25, 1, 2000, 26, 'New dish', 10, 1, 1584997200, 'Pending', NULL, NULL, NULL, NULL, '2020-03-24', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (26, 1, 2000, 25, 'New dishdsdss', 10, 1, 1584997200, 'Pending', NULL, NULL, NULL, NULL, '2020-03-24', '19:30 ~ 20:00', 2, 1, '');
INSERT INTO `hotspring_order` VALUES (27, 21, 2000, 24, '天然温泉', 10, 1, 1594069200, 'Pending', NULL, NULL, NULL, NULL, '2020-07-07', '17:30~18:00', 2, 1, '');

-- ----------------------------
-- Table structure for hotspring_review
-- ----------------------------
DROP TABLE IF EXISTS `hotspring_review`;
CREATE TABLE `hotspring_review`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_text` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `food_quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `punctuality` int(11) NOT NULL,
  `courtesy` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hotspring_review
-- ----------------------------
INSERT INTO `hotspring_review` VALUES (1, 2000, 1, 'ok', 5, 2, 5, 5, 1571184000);
INSERT INTO `hotspring_review` VALUES (2, 2004, 5, 'Good', 4, 5, 5, 5, 1571270400);

-- ----------------------------
-- Table structure for hotspring_types
-- ----------------------------
DROP TABLE IF EXISTS `hotspring_types`;
CREATE TABLE `hotspring_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hotspring_types
-- ----------------------------
INSERT INTO `hotspring_types` VALUES (2, 'China', 'Chinese_1458535609');
INSERT INTO `hotspring_types` VALUES (3, 'Colombiana', 'Colombian_1458535662');
INSERT INTO `hotspring_types` VALUES (4, 'Mexicana', 'Mexican_1458535796');
INSERT INTO `hotspring_types` VALUES (5, 'Pizza', 'Sushi_1458535621');
INSERT INTO `hotspring_types` VALUES (6, 'Sushi', 'Thai_1458535292');
INSERT INTO `hotspring_types` VALUES (7, 'Market', 'Market_1571660672');
INSERT INTO `hotspring_types` VALUES (8, 'Drinks', 'Drinks_1571660683');
INSERT INTO `hotspring_types` VALUES (11, 'Mascotas', 'Mascotas_1572474805');
INSERT INTO `hotspring_types` VALUES (12, 'Americana', 'Americana_1572476606');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NULL DEFAULT NULL,
  `menu_cat` int(11) NULL DEFAULT NULL,
  `menu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `price` int(11) NULL DEFAULT NULL,
  `menu_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `recommended` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `urlname` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `grownprice` int(11) NULL DEFAULT NULL,
  `youngprice` int(11) NULL DEFAULT NULL,
  `childprice` int(11) NULL DEFAULT NULL,
  `openhour` time(0) NULL DEFAULT NULL,
  `closehour` time(0) NULL DEFAULT NULL,
  `streetaddress` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `phonenumber` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prefecture` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `lodging` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `municipality` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fea_openair` tinyint(4) NULL DEFAULT 0,
  `fea_towelrental` tinyint(4) NULL DEFAULT 0,
  `fea_bedrock` tinyint(4) NULL DEFAULT 0,
  `fea_family` tinyint(4) NULL DEFAULT 0,
  `fea_massage` tinyint(4) NULL DEFAULT 0,
  `fea_rinse` tinyint(4) NULL DEFAULT 0 COMMENT 'ha\'r',
  `fea_amenity` tinyint(4) NULL DEFAULT 0,
  `fea_parkinglot` tinyint(4) NULL DEFAULT 0,
  `fea_sauna` tinyint(4) NULL DEFAULT 0,
  `fea_towelpurchas` tinyint(4) NULL DEFAULT 0,
  `fea_private` tinyint(4) NULL DEFAULT 0,
  `fea_restaurant` tinyint(4) NULL DEFAULT 0,
  `fea_shampoo` tinyint(4) NULL DEFAULT 0,
  `fea_bodysoap` tinyint(4) NULL DEFAULT 0,
  `fea_restarea` tinyint(4) NULL DEFAULT 0,
  `regdate` date NULL DEFAULT NULL,
  `restday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `season` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (24, 2000, 4, '123', ' https://www.nikaho-onsen-hamanasu.jp', 10, 'menus_1592441174', 'true', 'にかほ市温泉保養センター', ' https://www.nikaho-onsen-hamanasu.jp', 300, 200, 200, '06:00:00', '21:10:00', '秋田県にかほ市金浦中谷地20-1', '0184-38-2246', '1', 'fffffffff', '仙北市', 'menus_1592441174', 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, '2020-06-23', NULL, '秋天');
INSERT INTO `menu` VALUES (59, 2001, NULL, NULL, NULL, NULL, 'menus_1592441212', 'true', 'にかほ市老人憩の家 午ノ浜温泉', 'http://newdomain.com', 300, 0, 0, '10:00:00', '20:00:00', '秋田県にかほ市三森字午ノ浜144-1', '0184-36-2910', '1', '1224', '仙北市', 'menus_1592441212', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-06-23', '水曜日', '秋天');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_045158_create_cart_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_050539_create_categories_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_050801_create_menu_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_051123_create_restaurants_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_051949_create_restaurant_order_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_052459_create_restaurant_review_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_052824_create_restaurant_types_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_053018_create_settings_table', 1);
INSERT INTO `migrations` VALUES ('2016_03_01_053529_create_widgets_table', 1);

-- ----------------------------
-- Table structure for openhour
-- ----------------------------
DROP TABLE IF EXISTS `openhour`;
CREATE TABLE `openhour`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dayindex` int(11) NULL DEFAULT NULL,
  `fromtime` time(0) NULL DEFAULT NULL,
  `endtime` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of openhour
-- ----------------------------
INSERT INTO `openhour` VALUES (2, 2, '11:00:00', '22:00:00');
INSERT INTO `openhour` VALUES (3, 3, '10:00:00', '22:00:00');
INSERT INTO `openhour` VALUES (4, 6, '10:00:00', '20:30:00');
INSERT INTO `openhour` VALUES (5, 5, '10:10:00', '21:30:00');
INSERT INTO `openhour` VALUES (6, 1, '12:00:00', '18:00:00');
INSERT INTO `openhour` VALUES (7, 0, '09:00:00', '23:00:00');

-- ----------------------------
-- Table structure for order_payment
-- ----------------------------
DROP TABLE IF EXISTS `order_payment`;
CREATE TABLE `order_payment`  (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `price` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `payment_date` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `payment_state` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`payment_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('admin@admin.com', 'bf13897bca5e2e60560a43a0655a8393e77dd1471099cf8eebd9f97c07722c75', '2019-11-05 18:38:33');

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `site_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `delifee` int(11) NULL DEFAULT NULL,
  `site_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_favicon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_header_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_footer_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `site_copyright` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `addthis_share_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `disqus_comment_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `facebook_comment_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_bg_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total_restaurant` int(11) NOT NULL,
  `total_people_served` int(11) NOT NULL,
  `total_registered_users` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'HotSpring', '$', '+81459623', 'hotspring@gmail.com', 3, 'logo.png', 'favicon.png', '', '', '', 'HotSpring@2020', '', '', '', 'home_slide_image1.png', 'home_slide_image2.png', 'home_slide_image3.png', 'page_bg_image.png', 45, 270, 30);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `facebook_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'John', 'Cabrera', 'admin@admin.com', '$2y$10$ybFx8mo6E4ef9zXBIpNfW.C65FH5b7sIJDuHkGVTKwMP5u64CF.KW', 'admin-965bf2e0f3108983112bb705d2db4304', '09785558507', '478, b-25', 'kkk', '222', 'fGrBBudbmaKydDOVGcx7zHVhzq90QeALGHf0a5xltUppavlmUvn3yxFzEi3L', '2019-09-20 08:17:34', '2020-07-08 12:02:23', NULL);
INSERT INTO `users` VALUES (5, 'User', 'Jumakov', 'Capek', 'jumakovcapek@gmail.com', '$2y$10$fgKoYL1S8JpXGDsSv44MReWeFUlldHb3IxHstCsggYwu2a68/Ftoe', NULL, '0731759003', 'Jumakov building 1', 'Moscow', '105554', 'pfVY7CLLznmCftElICAiN8luSig8tUQCKm76ddMo8IlSvY7NANgXuboC8yFx', '2019-10-16 19:00:56', '2019-10-22 16:30:53', NULL);
INSERT INTO `users` VALUES (16, 'User', 'Mascotas', 'FDO', 'mascotasfdo@gmail.com', '$2y$10$P3MDC0kkh7JYsW4zXF8lQOiehepKG8N0.GZoXZOyWZB4VZCwAoAFi', NULL, '', '', '', '', '807ttK9NPF1NsHDx7yA16qVAgPE2gf5roHL7Cp1sO0r4kbmowkLH769Hco56', '2019-10-31 21:03:31', '2020-02-22 09:44:16', NULL);
INSERT INTO `users` VALUES (20, 'Owner', 'Alexei', 'Ivanov', 'alexei.adrik.ivanov@yandex.ru', '$2y$10$4YyCfm5OCbCG3UBpJ2wnUOnHK3AXZR2eFkgveXkshltsXNT6GckfK', NULL, '222222222', '127- 5555 street', 'kkk', '222', 'hEXXHnriJEzg7w9RGB0fxomQrOein7GR5lTbn61CvWVaskkNklB1nG6G976J', '2020-03-10 17:07:13', '2020-03-11 15:21:56', NULL);
INSERT INTO `users` VALUES (21, 'User', 'Ayane1019', 'Elesha', 'myth1019@boximail.com', '$2y$10$ybFx8mo6E4ef9zXBIpNfW.C65FH5b7sIJDuHkGVTKwMP5u64CF.KW', NULL, '07958462', 'Russia Moscow', 'moscow', '1001', 'zWGlPHUkJPIT342IcPOoOxH4M7h9YeaowF8UG5A1XIYv9fHv3WQS3UkIu1lL', '2020-06-17 19:56:20', '2020-07-08 11:59:04', NULL);

-- ----------------------------
-- Table structure for widgets
-- ----------------------------
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE `widgets`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `footer_widget1_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget1_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget2_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget2_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `about_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `about_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_google` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_pinterest` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_vimeo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `social_youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `need_help_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `need_help_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `need_help_time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sidebar_advertise` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of widgets
-- ----------------------------
INSERT INTO `widgets` VALUES (1, '私に電話してください', '+0 123456789', 'メールを送ってください', 'abcdef@abc.com', '', '', '3153562195', 'hotspring@gmail.com', 'HotSpring', '<br>', '', '', '', '', '', '', '', 'HotSpring', '81459623', '8:00am hasta 10:00pm ', '');
INSERT INTO `widgets` VALUES (2, 'About Restaurant', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Recent Tweets', '', 'Contact Info', 'Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing', '+01 123 456 78', 'demo@example.com', 'About Us', 'Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.', '', '', '', '', '', '', '', 'Need Help?', '+61 3 8376 6284', 'Monday to Friday 9.00am - 7.30pm', '');

-- ----------------------------
-- Table structure for zone
-- ----------------------------
DROP TABLE IF EXISTS `zone`;
CREATE TABLE `zone`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postcode` int(11) NULL DEFAULT NULL,
  `city` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `amount` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zone
-- ----------------------------
INSERT INTO `zone` VALUES (1, 666, 'ggg', 15);
INSERT INTO `zone` VALUES (2, 222, 'kkk', 30);
INSERT INTO `zone` VALUES (6, 777, 'kkk', 30);
INSERT INTO `zone` VALUES (7, 123, 'ttt', 30);
INSERT INTO `zone` VALUES (8, 456, 'qqq', 10);
INSERT INTO `zone` VALUES (9, 789, 'nnn', 50);

SET FOREIGN_KEY_CHECKS = 1;
