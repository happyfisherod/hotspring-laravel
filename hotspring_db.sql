/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.4.11-MariaDB : Database - hotspring
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotspring` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hotspring`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotspring_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delidate` date DEFAULT NULL,
  `delitime` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `paykind` int(11) DEFAULT NULL,
  `notice` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cart` */

insert  into `cart`(`id`,`user_id`,`hotspring_id`,`item_id`,`item_name`,`item_price`,`quantity`,`delidate`,`delitime`,`kind`,`paykind`,`notice`) values (36,1,2000,26,'New dish',10,1,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `menu_image` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`hotspring_id`,`category_name`,`status`,`menu_image`) values (3,5,'Menu Cat',1,NULL),(4,2000,'hotspring1',1,NULL),(5,2003,'apple',1,NULL),(6,2004,'Colombiana',1,NULL),(7,2005,'Desayunos',1,NULL),(11,2005,'Bebidas ',1,NULL),(13,2005,'Almuerzo ',1,NULL),(14,2005,'Adicionales',1,NULL),(15,2006,'Cerveza',1,NULL),(16,2006,'Whisky',1,NULL),(17,2006,'Vinos',1,NULL),(18,2007,'Concentrado ',1,NULL),(19,2008,'Concentrado ',1,NULL),(20,2009,'Concentrado',1,NULL),(22,2011,'Concentrado ',1,NULL),(23,2000,'hotspring2',1,NULL),(24,2000,'hotspring3',1,NULL),(26,2000,'hotspring4',1,NULL),(27,2000,'hotspring5',1,NULL),(28,2000,'hotspring6',1,NULL),(29,2000,'hotspring7',1,NULL),(30,2000,'hotspring8',1,NULL);

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `message_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `to_user_id` int(255) NOT NULL,
  `message_time` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

insert  into `chat`(`message_id`,`user_id`,`to_user_id`,`message_time`,`status`,`message`) values (11,3,2000,'2019-10-08 11:12:35','Sent','sd'),(12,2000,3,'2019-10-08 11:15:46','Sent','test'),(13,3,2000,'2019-10-09 11:36:06','Sent','test'),(14,3,2000,'2019-10-09 11:36:14','Sent','rest'),(15,3,2000,'2019-10-09 11:36:24','Sent','okay take rest'),(16,7,2004,'2019-10-17 15:13:53','Sent','hi'),(17,8,2000,'2019-10-17 16:38:07','Sent','hola'),(18,8,2004,'2019-10-17 16:46:28','Sent','hola'),(19,8,2004,'2019-10-21 14:54:33','Sent','hola'),(20,8,2004,'2019-10-22 13:37:07','Sent','hola'),(21,8,2005,'2019-10-24 17:01:40','Sent','hola'),(22,8,2005,'2019-10-29 13:26:15','Sent','hello'),(23,8,2005,'2019-10-29 13:26:15','Sent','hello'),(24,8,2009,'2019-11-06 01:43:00','Sent','hola'),(25,12,2005,'2019-11-14 13:00:19','Sent','hola');

/*Table structure for table `delihours` */

DROP TABLE IF EXISTS `delihours`;

CREATE TABLE `delihours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dayindex` int(11) DEFAULT NULL,
  `fromtime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `delihours` */

insert  into `delihours`(`id`,`dayindex`,`fromtime`,`endtime`) values (1,2,'09:00:00','22:00:00');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NOT NULL,
  `menu_cat` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `menu_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommended` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`hotspring_id`,`menu_cat`,`menu_name`,`description`,`price`,`menu_image`,`recommended`) values (16,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629',''),(17,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629',''),(18,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629',''),(19,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629',''),(20,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629',''),(21,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629','true'),(22,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629','true'),(23,5,3,'Colombian DIsh','This is the test dish for app dummy data',5,'ColombianDIsh_1570199629','true'),(24,2000,4,'天然温泉','天然温泉',10,'menus_1592428290','true'),(25,2000,23,'秋田温泉さとみ','',40,'menus_1592441033','true'),(26,2000,24,'天然温泉','',10,'menus_1592441174','true'),(27,2004,6,'Deayunos','Huevos al gusto acompañados de Papa Fritas y Carne',4000,'Deayunos_1571453481','false'),(28,2004,6,'Almuerzo Menu 1','Sopa del dia, Arroz, Principio, Ensalada, Chuleta de Cerdo o Pollo',5000,'AlmuerzoMenu1_1571888023','false'),(29,2004,6,'Almuerzo Menu 2','Sopa del dia, Arroz, Principio, Ensalada, Carne ',5000,'AlmuerzoMenu2_1571887994','false'),(30,2000,27,'貝の沢温泉','This is the test dish for app dummy data',10,'menus_1592442618','false'),(31,2005,7,'Desayuno Oferta 1','Huevos al gusto acompañados de Papa Fritas y Cafe',5000,'Desayunos_1571936078','false'),(32,2005,7,'Desayuno Oferta 2','Arroz, Papa Frita, Carne y Cafe',5500,'DesayunoOferta2_1571948583','true'),(36,2005,11,'Bebidas','Gaseosa 350 ml',2000,'Bebidas_1572053924','false'),(37,2005,13,'Almuerzo Casero # 1','Sopa del dia, Arroz, Principio, Ensalada, Carne ',5000,'AlmuerzoCasero#1_1572043837','false'),(38,2005,14,'Adicionales','Porción Papas a la Francesa ',2000,'Adicionales_1572052979','false'),(39,2005,14,'Adicionales','Porción de Carne ',2000,'Carne_1572053551','false'),(40,2005,11,'Bebidas','Jugó  en agua  ( Mora, Mango)',2500,'Bebidas_1572054254','true'),(41,2005,14,'Adicionales ','Porción de Arroz',2000,'Adicionales_1572054454','false'),(42,2006,15,'Cerveza Nacional','Cerveza Nacional',5000,'menus_1572403637','false'),(43,2006,15,'Cerveza Importada','Cerveza importada',8000,'menus_1572403810','true'),(44,2006,16,'Whisky','Old Parr',180000,'menus_1572404051','false'),(45,2006,16,'Whisky','Chivas 18 Años',170000,'menus_1572404259','false'),(46,2006,17,'Vino Tinto','Vino Tinto',25000,'menus_1572404662','true'),(47,2007,18,'Dog Chow','Concentrado para Perro',25000,'menus_1572406262','false'),(48,2007,18,'Birbo','Concentrado para Perro',23000,'menus_1572406431','false'),(49,2006,16,'Tequila ','Tequila 1800',200000,'menus_1572444445','false'),(50,2008,19,'Dog Chow','Concentrado',25000,'menus_1572476073','false'),(51,2009,20,'Concentrado','Comida ',25000,'menus_1572481400','false'),(53,2011,22,'DogChaw','Comida para Perros ',30000,'menus_1572545164','false'),(54,2000,28,'貝の沢温泉','',200,'menus_1592441212','true'),(55,2000,26,'秋田温泉さとみ','',200,'menus_1592442574','false'),(56,2000,30,'秋田温泉さとみ','',500,'menus_1592442674','false'),(57,2000,29,'秋田温泉さとみ','',50,'menus_1592443223','false'),(58,2000,30,'秋田温泉さとみ','',50,'menus_1592443235','false');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */
hotspring_order
insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_01_045158_create_cart_table',1),('2016_03_01_050539_create_categories_table',1),('2016_03_01_050801_create_menu_table',1),('2016_03_01_051123_create_restaurants_table',1),('2016_03_01_051949_create_restaurant_order_table',1),('2016_03_01_052459_create_hotspring_review_table',1),('2016_03_01_052824_create_hotspring_types_table',1),('2016_03_01_053018_create_settings_table',1),('2016_03_01_053529_create_widgets_table',1);

/*Table structure for table `openhour` */

DROP TABLE IF EXISTS `openhour`;

CREATE TABLE `openhour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dayindex` int(11) DEFAULT NULL,
  `fromtime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `openhour` */

insert  into `openhour`(`id`,`dayindex`,`fromtime`,`endtime`) values (2,2,'11:00:00','22:00:00'),(3,3,'10:00:00','22:00:00'),(4,6,'10:00:00','20:30:00'),(5,5,'10:10:00','21:30:00'),(6,1,'12:00:00','18:00:00'),(7,0,'09:00:00','23:00:00');

/*Table structure for table `order_payment` */

DROP TABLE IF EXISTS `order_payment`;

CREATE TABLE `order_payment` (
  `payment_id` int(255) NOT NULL AUTO_INCREMENT,
  `price` varchar(255) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `payment_state` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `order_payment` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('admin@admin.com','bf13897bca5e2e60560a43a0655a8393e77dd1471099cf8eebd9f97c07722c75','2019-11-05 18:38:33');
hotspring_order
/*Table structure for table `restaurant_order` */
hotspring_order
DROP TABLE IF EXISTS `restaurant_order`;
hotspring_order
CREATE TABLE `restaurant_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotspring_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_id` int(50) DEFAULT NULL,
  `delidate` date DEFAULT NULL,
  `delitime` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` int(11) DEFAULT NULL,
  `paykind` int(11) DEFAULT NULL,
  `notice` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
hotspring_order
/*Data for the table `restaurant_order` */
hotspring_order
insert  into `restaurant_order`(`id`,`user_id`,`hotspring_id`,`item_id`,`item_name`,`item_price`,`quantity`,`created_date`,`status`,`payment_status`,`payment_method`,`order_notes`,`payment_id`,`delidate`,`delitime`,`kind`,`paykind`,`notice`) values (18,1,2000,25,'New dishdsdss',10,1,1584565200,'Cancel',NULL,NULL,NULL,NULL,'2020-03-19','19:30 ~ 20:00',2,1,''),(19,1,2000,26,'New dish',10,1,1584565200,'Cancel',NULL,NULL,NULL,NULL,'2020-03-19','19:30 ~ 20:00',2,1,''),(20,1,2000,25,'New dishdsdss',10,1,1584565200,'Cancel',NULL,NULL,NULL,NULL,'2020-03-19','19:30 ~ 20:00',2,1,''),(21,1,2000,25,'New dishdsdss',10,1,1584565200,'Cancel',NULL,NULL,NULL,NULL,'2020-03-19','20:00 ~ 20:30',2,1,''),(22,1,2000,26,'New dish',20,2,1584565200,'Pending',NULL,NULL,NULL,NULL,'2020-03-19','20:00 ~ 20:30',2,1,''),(23,1,2000,26,'New dish',10,1,1584997200,'Pending',NULL,NULL,NULL,NULL,'2020-03-24','19:30 ~ 20:00',2,1,''),(24,1,2000,25,'New dishdsdss',10,1,1584997200,'Pending',NULL,NULL,NULL,NULL,'2020-03-24','19:30 ~ 20:00',2,1,''),(25,1,2000,26,'New dish',10,1,1584997200,'Pending',NULL,NULL,NULL,NULL,'2020-03-24','19:30 ~ 20:00',2,1,''),(26,1,2000,25,'New dishdsdss',10,1,1584997200,'Pending',NULL,NULL,NULL,NULL,'2020-03-24','19:30 ~ 20:00',2,1,'');

/*Table structure for table `hotspring_review` */

DROP TABLE IF EXISTS `hotspring_review`;

CREATE TABLE `hotspring_review` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotspring_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `food_quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `punctuality` int(11) NOT NULL,
  `courtesy` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `hotspring_review` */

insert  into `hotspring_review`(`id`,`hotspring_id`,`user_id`,`review_text`,`food_quality`,`price`,`punctuality`,`courtesy`,`date`) values (1,2000,1,'ok',5,2,5,5,1571184000),(2,2004,5,'Good',4,5,5,5,1571270400);

/*Table structure for table `hotspring_types` */

DROP TABLE IF EXISTS `hotspring_types`;

CREATE TABLE `hotspring_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `hotspring_types` */

insert  into `hotspring_types`(`id`,`type`,`type_image`) values (2,'China','Chinese_1458535609'),(3,'Colombiana','Colombian_1458535662'),(4,'Mexicana','Mexican_1458535796'),(5,'Pizza','Sushi_1458535621'),(6,'Sushi','Thai_1458535292'),(7,'Market','Market_1571660672'),(8,'Drinks','Drinks_1571660683'),(11,'Mascotas','Mascotas_1572474805'),(12,'Americana','Americana_1572476606');

/*Table structure for table `restaurants` */

DROP TABLE IF EXISTS `restaurants`;

CREATE TABLE `restaurants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `restaurant_type` int(11) NOT NULL,
  `restaurant_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_address` text COLLATE utf8_unicode_ci NOT NULL,
  `delivery_charge` text COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `restaurant_bg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_monday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_tuesday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_wednesday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_thursday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_friday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_saturday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `open_sunday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review_avg` int(11) NOT NULL,
  `restaurants_latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurants_longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mwst` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sitename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2012 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `restaurants` */

insert  into `restaurants`(`id`,`user_id`,`restaurant_type`,`restaurant_name`,`restaurant_slug`,`restaurant_description`,`restaurant_address`,`delivery_charge`,`restaurant_logo`,`restaurant_bg`,`open_monday`,`open_tuesday`,`open_wednesday`,`open_thursday`,`open_friday`,`open_saturday`,`open_sunday`,`review_avg`,`restaurants_latitude`,`restaurants_longitude`,`mwst`,`sitename`,`abc`) values (2000,1,3,'Japan Star Hot Spring','Japan Star Hot Spring','<h1><br></h1>','Bernstrasse 12\r\n3072 Ostermundigen','40','colombian-star-restaurant_1582364236','','11:00 AM','9:00 PM','','','','','',4,NULL,NULL,'CHE_21456','dcelik@bluewin.ch',NULL);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delifee` int(11) DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_header_code` text COLLATE utf8_unicode_ci NOT NULL,
  `site_footer_code` text COLLATE utf8_unicode_ci NOT NULL,
  `site_copyright` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addthis_share_code` text COLLATE utf8_unicode_ci NOT NULL,
  `disqus_comment_code` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_comment_code` text COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slide_image3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_bg_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_restaurant` int(11) NOT NULL,
  `total_people_served` int(11) NOT NULL,
  `total_registered_users` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`site_name`,`currency_symbol`,`phone`,`site_email`,`delifee`,`site_logo`,`site_favicon`,`site_description`,`site_header_code`,`site_footer_code`,`site_copyright`,`addthis_share_code`,`disqus_comment_code`,`facebook_comment_code`,`home_slide_image1`,`home_slide_image2`,`home_slide_image3`,`page_bg_image`,`total_restaurant`,`total_people_served`,`total_registered_users`) values (1,'HotSpring','$','+81459623','hotspring@gmail.com',3,'logo.png','favicon.png','','','','HotSpring@2020','','','','home_slide_image1.png','home_slide_image2.png','home_slide_image3.png','page_bg_image.png',45,270,30),(2,'Viavi Food Delivery','$',NULL,'admin@admin.com',NULL,'logo.png','favicon.png','Viavi - Food Delivery Script Viavi - Food Delivery is an laravel script for Delivery Restaurants','','','Copyright © 2016 Viavi - Food Delivery Script. All Rights Reserved.','','','','home_slide_image1.png','home_slide_image2.png','home_slide_image3.png','page_bg_image.png',2550,5355,12454);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usertype` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`usertype`,`first_name`,`last_name`,`email`,`password`,`image_icon`,`mobile`,`address`,`city`,`postal_code`,`remember_token`,`created_at`,`updated_at`,`facebook_id`) values (1,'Admin','John','Cabrera','admin@admin.com','$2y$10$ybFx8mo6E4ef9zXBIpNfW.C65FH5b7sIJDuHkGVTKwMP5u64CF.KW','admin-965bf2e0f3108983112bb705d2db4304','09785558507','478, b-25','kkk','222','hMGzkuw9aZmfsFb9w3cMghp5PsxP49vQQ45c4r7n5M53krw6Ha384zHl9yf1','2019-09-20 08:17:34','2020-06-18 04:40:11',NULL),(5,'User','Jumakov','Capek','jumakovcapek@gmail.com','$2y$10$fgKoYL1S8JpXGDsSv44MReWeFUlldHb3IxHstCsggYwu2a68/Ftoe',NULL,'0731759003','Jumakov building 1','Moscow','105554','pfVY7CLLznmCftElICAiN8luSig8tUQCKm76ddMo8IlSvY7NANgXuboC8yFx','2019-10-16 19:00:56','2019-10-22 16:30:53',NULL),(16,'User','Mascotas','FDO','mascotasfdo@gmail.com','$2y$10$P3MDC0kkh7JYsW4zXF8lQOiehepKG8N0.GZoXZOyWZB4VZCwAoAFi',NULL,'','','','','807ttK9NPF1NsHDx7yA16qVAgPE2gf5roHL7Cp1sO0r4kbmowkLH769Hco56','2019-10-31 21:03:31','2020-02-22 09:44:16',NULL),(20,'Owner','Alexei','Ivanov','alexei.adrik.ivanov@yandex.ru','$2y$10$4YyCfm5OCbCG3UBpJ2wnUOnHK3AXZR2eFkgveXkshltsXNT6GckfK',NULL,'222222222','127- 5555 street','kkk','222','hEXXHnriJEzg7w9RGB0fxomQrOein7GR5lTbn61CvWVaskkNklB1nG6G976J','2020-03-10 17:07:13','2020-03-11 15:21:56',NULL),(21,'User','Ayane1019','Elesha','myth1019@boximail.com','$2y$10$ybFx8mo6E4ef9zXBIpNfW.C65FH5b7sIJDuHkGVTKwMP5u64CF.KW',NULL,'07958462','Russia Moscow','moscow','1001','7unjfn2YNUUhQMNy6PwZHWV1hMqksEMyySZ07uLkODfORt13oCDVSL5VdwXO','2020-06-17 19:56:20','2020-06-17 21:59:14',NULL);

/*Table structure for table `widgets` */

DROP TABLE IF EXISTS `widgets`;

CREATE TABLE `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `footer_widget1_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget1_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget2_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget2_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_address` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_widget3_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `social_facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_pinterest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_vimeo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `need_help_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `need_help_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `need_help_time` text COLLATE utf8_unicode_ci NOT NULL,
  `sidebar_advertise` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `widgets` */

insert  into `widgets`(`id`,`footer_widget1_title`,`footer_widget1_desc`,`footer_widget2_title`,`footer_widget2_desc`,`footer_widget3_title`,`footer_widget3_address`,`footer_widget3_phone`,`footer_widget3_email`,`about_title`,`about_desc`,`social_facebook`,`social_twitter`,`social_google`,`social_instagram`,`social_pinterest`,`social_vimeo`,`social_youtube`,`need_help_title`,`need_help_phone`,`need_help_time`,`sidebar_advertise`) values (1,'私に電話してください','+0 123456789','メールを送ってください','abcdef@abc.com','','','3153562195','hotspring@gmail.com','HotSpring','<br>','','','','','','','','HotSpring','81459623','8:00am hasta 10:00pm ',''),(2,'About Restaurant','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','Recent Tweets','','Contact Info','Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing','+01 123 456 78','demo@example.com','About Us','Aenean ultricies mi vitae est. Mauris placerat eleifend leosit amet est.','','','','','','','','Need Help?','+61 3 8376 6284','Monday to Friday 9.00am - 7.30pm','');

/*Table structure for table `zone` */

DROP TABLE IF EXISTS `zone`;

CREATE TABLE `zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postcode` int(11) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `zone` */

insert  into `zone`(`id`,`postcode`,`city`,`amount`) values (1,666,'ggg',15),(2,222,'kkk',30),(6,777,'kkk',30),(7,123,'ttt',30),(8,456,'qqq',10),(9,789,'nnn',50);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
