/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.39-cll-lve : Database - organic_staging
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`organic_staging` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `organic_staging`;

/*Table structure for table `appbanners_list` */

DROP TABLE IF EXISTS `appbanners_list`;

CREATE TABLE `appbanners_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `appbanners_list` */

/*Table structure for table `assign_orders` */

DROP TABLE IF EXISTS `assign_orders`;

CREATE TABLE `assign_orders` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryboy_id` int(11) NOT NULL,
  `order_id` int(250) NOT NULL,
  `pickup_time` datetime NOT NULL,
  `delivered_time` datetime NOT NULL,
  `delivery_drop` varchar(250) NOT NULL,
  `payment_mode` varchar(250) NOT NULL,
  `status` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `assign_orders` */

/*Table structure for table `billing_address` */

DROP TABLE IF EXISTS `billing_address`;

CREATE TABLE `billing_address` (
  `billing_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `emal_id` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `address1` varchar(250) DEFAULT NULL,
  `address2` varbinary(250) DEFAULT NULL,
  `landmark` varchar(250) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `create-at` datetime DEFAULT NULL,
  PRIMARY KEY (`billing_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `billing_address` */

insert  into `billing_address`(`billing_id`,`cust_id`,`order_id`,`name`,`emal_id`,`mobile`,`address1`,`address2`,`landmark`,`pincode`,`city`,`state`,`area`,`create-at`) values (1,191,1,'vasu','vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor','Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',0,'2018-08-11 17:38:36'),(2,190,2,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-13 12:54:02'),(3,190,3,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-16 17:31:55'),(4,190,4,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 12:55:43'),(5,190,5,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 12:55:45'),(6,190,6,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 13:16:23'),(7,190,7,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 13:24:56'),(8,190,8,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 13:24:58'),(9,190,9,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-17 13:26:45'),(10,190,10,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-18 18:06:25'),(11,191,11,'vasu','vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor','Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',0,'2018-08-20 11:44:45'),(12,191,12,'vasu','vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor','Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',0,'2018-08-20 12:01:57'),(13,190,13,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-20 15:44:53'),(14,190,14,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-20 15:48:05'),(15,190,15,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-20 16:00:40'),(16,190,16,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-20 16:19:41'),(17,190,17,'Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'2018-08-20 16:21:03'),(18,193,18,'kithada','ramu.kithada@gmail.com','9951040410','ramalayam street ','kukatpally','near bogbazar','500038','hyderabad','telangana',0,'2018-08-31 14:26:25');

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `bid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `brands` */

insert  into `brands`(`bid`,`category_id`,`brand`,`image`,`create_at`,`added_by`,`status`) values (1,37,'Grenera','1534747059.jpg','2018-08-20 12:07:38',12,0),(2,37,'sri sri','1534749118.jpg','2018-08-20 13:32:25',12,0),(3,37,'Indhulekha','1534757533.jpg','2018-08-20 15:02:13',12,1),(4,37,'Tetley','1536042684.jpg','2018-09-04 12:01:23',12,1),(5,37,'arya','1536043511.jpg','2018-09-04 12:15:11',12,1),(6,37,'Royal','1536043867.png','2018-09-04 12:21:06',12,1);

/*Table structure for table `brandwise_filters` */

DROP TABLE IF EXISTS `brandwise_filters`;

CREATE TABLE `brandwise_filters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(250) DEFAULT NULL,
  `category_id` varchar(250) DEFAULT NULL,
  `group` varchar(250) DEFAULT NULL,
  `min` varchar(250) DEFAULT NULL,
  `max` varchar(250) DEFAULT NULL,
  `minimum_price` varchar(250) DEFAULT NULL,
  `maximum_price` varchar(250) DEFAULT NULL,
  `offer` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `sim_type` varchar(250) DEFAULT NULL,
  `camera` varchar(250) DEFAULT NULL,
  `internal_memeory` varchar(250) DEFAULT NULL,
  `screen_size` varchar(250) DEFAULT NULL,
  `Processor` varchar(250) DEFAULT NULL,
  `printer_type` varchar(250) DEFAULT NULL,
  `type` varbinary(250) DEFAULT NULL,
  `max_copies` varchar(250) DEFAULT NULL,
  `paper_size` varchar(250) DEFAULT NULL,
  `headphone_jack` varchar(250) DEFAULT NULL,
  `noise_reduction` varchar(250) DEFAULT NULL,
  `usb_port` varchar(250) DEFAULT NULL,
  `compatible_for` varchar(250) DEFAULT NULL,
  `scanner_type` varchar(250) DEFAULT NULL,
  `resolution` varchar(250) DEFAULT NULL,
  `f_stop` varchar(250) DEFAULT NULL,
  `minimum_focusing_distance` varchar(250) DEFAULT NULL,
  `aperture_withmaxfocal_length` varchar(250) DEFAULT NULL,
  `picture_angle` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `occasion` varchar(250) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `collar_type` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `sleeve` varchar(250) DEFAULT NULL,
  `look` varchar(250) DEFAULT NULL,
  `style_code` varchar(250) DEFAULT NULL,
  `inner_material` varchar(250) DEFAULT NULL,
  `waterproof` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `brandwise_filters` */

insert  into `brandwise_filters`(`id`,`ip_address`,`category_id`,`group`,`min`,`max`,`minimum_price`,`maximum_price`,`offer`,`brand`,`discount`,`colour`,`size`,`ram`,`os`,`sim_type`,`camera`,`internal_memeory`,`screen_size`,`Processor`,`printer_type`,`type`,`max_copies`,`paper_size`,`headphone_jack`,`noise_reduction`,`usb_port`,`compatible_for`,`scanner_type`,`resolution`,`f_stop`,`minimum_focusing_distance`,`aperture_withmaxfocal_length`,`picture_angle`,`weight`,`occasion`,`material`,`collar_type`,`gender`,`sleeve`,`look`,`style_code`,`inner_material`,`waterproof`,`create_at`) values (16,'162.243.69.215',NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-30 14:36:13');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `item_qty` int(11) DEFAULT NULL,
  `unit` varchar(250) DEFAULT NULL,
  `item_price` varchar(250) DEFAULT NULL,
  `total_price` varchar(250) DEFAULT NULL,
  `delivery_amount` varchar(250) DEFAULT NULL,
  `delivery_type` int(11) DEFAULT '2',
  `commission_price` decimal(10,2) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `uksize` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=930 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`id`,`cust_id`,`item_id`,`qty`,`item_qty`,`unit`,`item_price`,`total_price`,`delivery_amount`,`delivery_type`,`commission_price`,`seller_id`,`category_id`,`color`,`size`,`uksize`,`create_at`) values (815,90,869,3,98,NULL,'11490','34470','0',2,'4136.40',140,20,'','','','2017-11-30 12:02:29'),(823,90,852,1,74,NULL,'9990','9990','0',2,'1198.80',140,20,'','','','2017-12-04 18:23:39'),(827,175,1025,5,0,'','96.8','484','75',2,'58.08',142,21,'','','','2017-12-05 17:39:53'),(842,100,864,1,87,NULL,'14480.34','14480.34','0',2,'1737.64',140,20,'','','','2017-12-07 19:29:19'),(844,159,866,1,91,NULL,'17378.34','17378.34','0',2,'2085.40',140,20,'','','','2017-12-08 15:12:47'),(846,181,854,1,95,NULL,'13514.34','13514.34',NULL,2,'1621.72',140,20,'','','','2017-12-14 15:51:39'),(849,90,888,1,97,NULL,'3199','3199','0',2,'639.80',140,20,'','','','2017-12-28 16:35:54'),(888,103,1332,3,19,NULL,'100','300','75',2,'60.00',140,19,'','','','2018-01-23 17:57:05'),(914,191,11,3,8,'','400','1200','0',2,'156.00',3,37,'','','','2018-08-20 12:38:21'),(915,191,4,1,48,'','90','90','75',2,'18.00',3,37,'','','','2018-08-20 12:44:38'),(927,190,14,1,5,'','110','110','75',2,'11.00',3,37,'Red','','','2018-08-21 17:29:12'),(928,190,20,1,100,NULL,'110','110',NULL,2,'11.00',3,37,'','','','2018-08-30 10:43:40');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_image` varchar(250) DEFAULT NULL,
  `documetfile` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `first_time` int(11) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`seller_id`,`category_name`,`category_image`,`documetfile`,`status`,`created_at`,`updated_at`,`first_time`) values (18,NULL,'Home & Kitchen','HOME-&-KITCHEN.png','',1,'2018-01-08 11:49:46','2018-01-08 11:49:46',0),(19,NULL,'Men\'s Fashion','MEN-FASHION.png','',1,'2018-01-08 11:51:05','2018-01-08 11:51:05',0),(20,NULL,'Mobiles & Tablets','basic.png','',1,'2018-01-04 12:34:12','2018-01-04 12:34:12',0),(21,NULL,'Grocery','Beverages.png','',1,'2018-01-04 12:24:24','2018-01-04 12:24:24',0),(22,NULL,'Computers, Laptops & Accessories.','COMPUTERS,-LAPTOPS-&-ACC.png',NULL,1,'2018-01-08 11:49:56','2018-01-08 11:49:56',0),(23,NULL,'TVs, ACs & Appliances','TVS,-ACS-&-APPLIANCES.png','',1,'2018-01-08 11:50:00','2018-01-08 11:50:00',0),(24,NULL,'Women\'s Fashion','Women-Ethnic-Wear.png','',1,'2018-01-04 12:34:33','2018-01-04 12:34:33',0),(28,NULL,'Car & Bike Accessories ','car-bike.png','',1,'2018-01-08 11:50:08','2018-01-08 11:50:08',0),(29,NULL,'Books & Stationary','STATIONERY.png','',1,'2018-08-18 16:45:24','2018-08-18 16:45:24',0),(30,NULL,'Kids Store','KIDS-STORE.png','',1,'2018-01-08 11:50:45','2018-01-08 11:50:45',0),(31,NULL,'Sports & Fitness','SPORTS-&-FITNESS.png','',1,'2018-01-08 11:50:52','2018-01-08 11:50:52',0),(32,NULL,'Furniture & Home-Living','FURNITURE-&-HOME-LIVING.png','',1,'2018-01-08 11:50:58','2018-01-08 11:50:58',0),(34,NULL,'Gifts Store','GIFT-STORE.png','',1,'2018-01-08 11:49:20','2018-01-08 11:49:20',0),(35,NULL,'Bags & Outdoor','BAGS-&-OUTDOOR.png','',1,'2018-01-08 11:49:36','2018-01-08 11:49:36',0),(36,NULL,'Mobile & Tablet','MOBILES-&-TABLETS.png','',0,'2018-01-08 11:49:07','2018-01-08 11:49:07',0),(37,3,'Organic Products','organic product.jpg',NULL,1,'2018-08-21 12:00:59','2018-08-21 12:00:59',0);

/*Table structure for table `category_banners` */

DROP TABLE IF EXISTS `category_banners`;

CREATE TABLE `category_banners` (
  `baneer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `subitem_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `link` varchar(11) DEFAULT NULL,
  `selected_id` varchar(250) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `expirydate` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `admin_status` int(11) DEFAULT '0',
  PRIMARY KEY (`baneer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `category_banners` */

insert  into `category_banners`(`baneer_id`,`category_id`,`subcategory_id`,`subitem_id`,`item_id`,`position`,`name`,`link`,`selected_id`,`seller_id`,`expirydate`,`created_at`,`updated`,`status`,`admin_status`) values (1,37,247,0,1,2,'1534748103.jpg','4','1',NULL,'2018-08-24 12:25:03','2018-08-20 12:25:03','2018-08-21 17:12:18',1,0),(3,37,247,0,1,1,'1534851620.png','4','1',3,'2018-08-25 17:10:19','2018-08-21 17:10:19','2018-09-04 17:31:01',1,0),(4,37,247,0,0,1,'1536062331.jpg','2','247',3,'2018-09-11 17:28:50','2018-09-04 17:28:50','2018-09-04 17:30:39',1,1),(5,37,249,0,0,1,'1536062702.jpg','2','249',3,'2018-09-11 17:35:02','2018-09-04 17:35:02','2018-09-04 17:46:46',1,1),(6,37,251,0,0,1,'1536062799.jpg','2','251',3,'2018-09-11 17:36:39','2018-09-04 17:36:39','2018-09-04 17:46:33',1,1),(7,37,249,0,0,2,'1536063019.jpeg','2','249',3,'2018-09-11 17:40:19','2018-09-04 17:40:19','2018-09-04 17:46:50',1,1),(9,37,247,0,0,2,'1536063580.jpg','2','247',3,'2018-09-11 17:49:40','2018-09-04 17:49:40','2018-09-04 17:49:58',1,1),(10,37,250,0,0,3,'1536064056.jpg','2','250',3,'2018-09-11 17:57:35','2018-09-04 17:57:35','2018-09-04 17:59:03',1,1),(11,37,247,0,1,4,'1536064103.jpg','4','1',3,'2018-09-11 17:58:22','2018-09-04 17:58:22','2018-09-04 17:58:54',1,1),(12,37,251,0,0,3,'1536064813.jpg','2','251',3,'2018-09-11 18:10:12','2018-09-04 18:10:12','2018-09-04 18:11:19',1,1),(13,37,250,0,8,4,'1536064862.jpg','4','8',3,'2018-09-11 18:11:01','2018-09-04 18:11:01','2018-09-04 18:12:13',1,1),(14,37,247,0,0,4,'1536065208.jpg','2','247',3,'2018-09-11 18:16:48','2018-09-04 18:16:48','2018-09-04 18:18:40',1,1),(15,37,249,0,0,3,'1536065524.png','2','249',3,'2018-09-11 18:22:04','2018-09-04 18:22:04','2018-09-04 18:22:39',1,1);

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('01318434e17332c3b5f0a19b612e5315955f8036','122.175.58.42',1536065570,'__ci_last_regenerate|i:1536065334;'),('029b45f3f3e7186c209286edd0ab425c455a8264','122.175.58.42',1536062418,'__ci_last_regenerate|i:1536062228;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"841feb826dcd5532485f7e4713c32bab0b85e671\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('03b02e305451e842855794166a7f7b5989a51f63','122.175.58.42',1536063682,'__ci_last_regenerate|i:1536063680;'),('06978f6c6b90a2b7c012c1f0720b8145bfcf1ec1','122.175.58.42',1536055289,'__ci_last_regenerate|i:1536055010;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('07ad4e72d7f35c276422f977622e32d17d7bd394','66.249.79.114',1536104873,'__ci_last_regenerate|i:1536104873;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"07ad4e72d7f35c276422f977622e32d17d7bd394\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}beforecart|a:0:{}'),('0e8d897fe915d64c45bb78281b8fae535928049b','122.175.58.42',1536062626,'__ci_last_regenerate|i:1536062353;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('0faacb3de3518f0b88fe88d85d1f44551446b8ee','122.175.58.42',1536061693,'__ci_last_regenerate|i:1536061692;id|N;'),('11183cb8aa9120a9ff4a064c8216db7ae336d078','122.175.58.42',1536065641,'__ci_last_regenerate|i:1536065641;'),('114462a8b4d84bc9511a47d71c21a854be0005fb','122.175.58.42',1536061772,'__ci_last_regenerate|i:1536061772;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"68a2d6b595c2921ee99326b804d2e8e7152f5ea2\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('12d9ab4862ecb30cb13a4a5b517d62038b691494','162.243.69.215',1536054082,'__ci_last_regenerate|i:1536054082;loginerror|s:24:\"Please login to continue\";__ci_vars|a:1:{s:10:\"loginerror\";s:3:\"new\";}'),('13514f28f0ef0100ef8747c4c29eea712f1099cb','66.249.79.114',1536110658,'__ci_last_regenerate|i:1536110648;id|N;'),('188d7e0c09232fe4c5619044db3549bb6bdfde26','122.175.58.42',1536064813,'__ci_last_regenerate|i:1536064783;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('1a7fbdec9eb35be1475d342de030910db37e4b2b','122.175.58.42',1536064750,'__ci_last_regenerate|i:1536064749;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('1b0d189020cfab9298dbe469cb08230ac934c6df','122.175.58.42',1536052894,'__ci_last_regenerate|i:1536052400;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('1b34446e0534daf8239d0c7f1947a4f2db2eb4f3','122.175.58.42',1536063715,'__ci_last_regenerate|i:1536063715;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('1e0cc60f18e6348a6ade134c24e9fa3d337f9692','122.175.58.42',1536056930,'__ci_last_regenerate|i:1536056926;id|N;'),('20fdbf17dfe8b31b115149dd6d4f7b2e13a4a0e8','122.175.58.42',1536064893,'__ci_last_regenerate|i:1536064593;'),('2213e9c0d20bc709b0beee1ef738e81da57f1776','159.203.81.93',1536055623,'__ci_last_regenerate|i:1536055623;'),('2255ee4d5cf12d34e9e701ddc14b5c57f898a8bb','122.175.58.42',1536052678,'__ci_last_regenerate|i:1536052432;id|N;'),('22a192c209373383659ec208ba8ebaf86aadf934','122.175.58.42',1536055855,'__ci_last_regenerate|i:1536055657;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('253fb16eabe105f992b57bf0b2c34ff264d53ef9','122.175.58.42',1536055537,'__ci_last_regenerate|i:1536055509;'),('25cba21e4fc05f50b7fcb02537a4ca3d4f1cc652','122.175.58.42',1536057097,'__ci_last_regenerate|i:1536056935;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('27e1789fa30b39314033ce270e0e9a027d5bcdd3','122.175.58.42',1536058473,'__ci_last_regenerate|i:1536058224;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('27e7956b3bc323139fa450637800cc1186830735','122.175.58.42',1536053491,'__ci_last_regenerate|i:1536053283;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('2829c49966ad78dcfca573f9ed7953e6fcea2148','122.175.58.42',1536064973,'__ci_last_regenerate|i:1536064972;'),('2a1da08ee419764d761798a1575bc334bff4b642','122.175.58.42',1536055064,'__ci_last_regenerate|i:1536054822;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('2b8cc98e7a6a721376cc992f10eab2126fb6c8a7','122.175.58.42',1536062603,'__ci_last_regenerate|i:1536062603;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('2beaddda38ade6c740831399b95be574a421d39e','122.175.58.42',1536052415,'__ci_last_regenerate|i:1536052413;id|N;'),('2e6b1a17c62d6e67abd5bf22364aaf0b490e9a36','122.175.58.42',1536065338,'__ci_last_regenerate|i:1536065335;'),('2ee676f268bedc9b5165188a26c113544a5d7316','122.175.58.42',1536064055,'__ci_last_regenerate|i:1536064033;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('2f95a49a9245670feccaa3460684d1a49b8707dd','122.175.58.42',1536062054,'__ci_last_regenerate|i:1536061884;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('31821ac4200578bbd08085c0c2911ed92096fd0d','122.175.58.42',1536051297,'__ci_last_regenerate|i:1536051206;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('3310584e7868db1fb08ed93151f6a19ed9abd8f7','122.175.58.42',1536062765,'__ci_last_regenerate|i:1536062765;id|N;'),('344f6093e94be5f78c0f835ed052ac216c3fede0','122.175.58.42',1536054699,'__ci_last_regenerate|i:1536054432;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('34c1102f782cba9a0743fd0a76f005d769682f13','122.175.58.42',1536064102,'__ci_last_regenerate|i:1536064055;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('34d76edd4801b363a03c1f75b1ecda267519f62f','122.175.58.42',1536054142,'__ci_last_regenerate|i:1536053929;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('350a437166ce003eb9e52300e380839a099ec99b','122.175.58.42',1536065641,'__ci_last_regenerate|i:1536065641;'),('36011c6a2ff7979ff592f2d553b820da681616d9','122.175.58.42',1536059303,'__ci_last_regenerate|i:1536059072;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"36011c6a2ff7979ff592f2d553b820da681616d9\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('365484744a597691474b48d6505095657fd0ee22','122.175.58.42',1536061753,'__ci_last_regenerate|i:1536061563;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;active|s:30:\" Your Banner Delete successful\";__ci_vars|a:1:{s:6:\"active\";s:3:\"old\";}'),('3c55d690e118f8cd1ec6dabd66afeb9625c805e6','122.175.58.42',1536054755,'__ci_last_regenerate|i:1536054497;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('3c6464c718c175756d9003752c12143e38c5312a','122.175.58.42',1536058889,'__ci_last_regenerate|i:1536058851;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:25:\"Offer successfully added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('3e22474a1f227f8b431f61336aa8cb2354b33faf','122.175.58.42',1536062177,'__ci_last_regenerate|i:1536062071;id|N;'),('3f9f035e689d10396929b8f2245054a01e283c91','122.175.58.42',1536059349,'__ci_last_regenerate|i:1536059333;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:51:\"Successfully home page banner  and  items are added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('421fc2b0471be43eaf1a8ba6b5ed0f030af316de','122.175.58.42',1536062799,'__ci_last_regenerate|i:1536062744;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('434805de394a5a811e3b7a60fc4dd0c0ed86447f','122.175.58.42',1536054547,'__ci_last_regenerate|i:1536054546;id|N;'),('457fc17c97ce635d8869c32583e9f379ac28ce9a','122.175.58.42',1536055238,'__ci_last_regenerate|i:1536055228;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"Image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('45fae6c60886d3630fede2ec9b072d32d166ebd0','122.175.58.42',1536055433,'__ci_last_regenerate|i:1536055420;id|N;'),('46f7d8f3f142e251c987470b9990b70c32c4c0d8','162.243.69.215',1536050925,'__ci_last_regenerate|i:1536050925;'),('475affc98fdd444242a6aad63ce3c3a86be928a0','122.175.58.42',1536059062,'__ci_last_regenerate|i:1536058762;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"475affc98fdd444242a6aad63ce3c3a86be928a0\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('47fc55e02f15836fc4ea4f8cfef8fdb22fd0df5c','122.175.58.42',1536056347,'__ci_last_regenerate|i:1536056058;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('4a4cc2d5570c8b6b2d6089e1fb2bff433fab75e6','162.243.69.215',1536054851,'__ci_last_regenerate|i:1536054851;loginerror|s:24:\"Please login to continue\";__ci_vars|a:1:{s:10:\"loginerror\";s:3:\"new\";}'),('4a913f76eb57674213c8fc2a415f233bc7080ab7','122.175.58.42',1536065559,'__ci_last_regenerate|i:1536065286;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('50f744944d35acdd89a819fb675c5470c870aeef','122.175.58.42',1536056090,'__ci_last_regenerate|i:1536056090;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('5583f557c52991b0c8bfc7302d8713a6f3f13b37','122.175.58.42',1536058456,'__ci_last_regenerate|i:1536058310;id|N;'),('5a18de1700775c916fb3c749804cf3a52d280827','122.175.58.42',1536055402,'__ci_last_regenerate|i:1536055402;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('5fb6316df3fa92c3c42d2275fb04316422487b8f','122.175.58.42',1536056426,'__ci_last_regenerate|i:1536056426;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('6055822ebb3c32f1e2722f4f65c5c8cb02e2ecf1','162.243.69.215',1536055213,'__ci_last_regenerate|i:1536055213;'),('610d6de6daa2b2a56c58367a0c3d6a5f08bc2b19','52.53.201.78',1536076415,'__ci_last_regenerate|i:1536076415;'),('611ece332714e7fdd470a9d77fb52da88e5ff400','122.175.58.42',1536050724,'__ci_last_regenerate|i:1536050724;id|N;'),('6398b8f5e397fce2696ac42c45e59b579b981825','159.203.196.79',1536052453,'__ci_last_regenerate|i:1536052453;'),('63b7173365f2258a1a1940d26194680fe5b751e6','107.170.96.6',1536052423,'__ci_last_regenerate|i:1536052423;'),('64d68fd4d726570e01c486445afa1f1a8c1c708b','122.175.58.42',1536063580,'__ci_last_regenerate|i:1536063384;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('6590e0ea265bbcf111643b4508eb848f4e22b204','122.175.58.42',1536059328,'__ci_last_regenerate|i:1536059030;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('67abf43307f8a6093a1a651b61859c189b1cee78','122.175.58.42',1536065113,'__ci_last_regenerate|i:1536064941;'),('68a2d6b595c2921ee99326b804d2e8e7152f5ea2','122.175.58.42',1536061680,'__ci_last_regenerate|i:1536061408;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"68a2d6b595c2921ee99326b804d2e8e7152f5ea2\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('6ff7d37ea7679d2327c62300a60c0a92d09c807f','122.175.58.42',1536053922,'__ci_last_regenerate|i:1536053470;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('7067e37e2b4c9384a869243d92b336ea14e0b3fd','122.175.58.42',1536063613,'__ci_last_regenerate|i:1536063439;'),('7193166831b5494403030cef2465826811c4e96c','122.175.58.42',1536051233,'__ci_last_regenerate|i:1536051203;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;welcome|s:45:\"Thank you for visit, Welcome to Seller Portal\";__ci_vars|a:1:{s:7:\"welcome\";s:3:\"old\";}'),('747e3d58a14423eac5c7f8ab25f4adb21ca35d7d','122.175.58.42',1536063297,'__ci_last_regenerate|i:1536062997;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('7b20f45bf8f440568830bb91b87a86c345c27f06','122.175.58.42',1536055710,'__ci_last_regenerate|i:1536055622;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('7b880ac9bd660bd64e9a7f664868697a11d7308a','122.175.58.42',1536054124,'__ci_last_regenerate|i:1536053995;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:23:\"Item Successfully Added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('7bb29bf350c654df29ca37a0618e6ecbdf2d9de9','122.175.58.42',1536059715,'__ci_last_regenerate|i:1536059635;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:25:\"Offer successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('7d3b30b73b24b44d813d812008b22098f3c67b9c','122.175.58.42',1536064204,'__ci_last_regenerate|i:1536064161;'),('841feb826dcd5532485f7e4713c32bab0b85e671','122.175.58.42',1536062147,'__ci_last_regenerate|i:1536061859;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"841feb826dcd5532485f7e4713c32bab0b85e671\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('849154bee194798ed09d860a2f94b537a199a960','122.175.58.42',1536055049,'__ci_last_regenerate|i:1536054834;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('854570120a8a34a4923e4ab56d9967f7a133af56','122.175.58.42',1536063541,'__ci_last_regenerate|i:1536063541;'),('86254a7c9729e102d8097fe352bd3705b629bf6b','138.197.202.197',1536058813,'__ci_last_regenerate|i:1536058813;'),('86d3d2147a2226cdda1f37b6e703129a46083e78','122.175.58.42',1536062941,'__ci_last_regenerate|i:1536062941;'),('89c66a776ce8fedf7000a945177c938e7487aae9','122.175.58.42',1536055213,'__ci_last_regenerate|i:1536055136;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;active|s:30:\" Your Banner Delete successful\";__ci_vars|a:1:{s:6:\"active\";s:3:\"old\";}'),('8a5d55c459c15e50c2a055ec4f042861762f3a51','122.175.58.42',1536053929,'__ci_last_regenerate|i:1536053929;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('8bb371c7980924b67fb1a7113227a56d4165d4df','122.175.58.42',1536065218,'__ci_last_regenerate|i:1536065218;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('8c6f887e73935b98dbb5811718465cb8f38aae89','122.175.58.42',1536053059,'__ci_last_regenerate|i:1536053018;id|N;'),('8e6a7917efb46b6150e7374130f92bb79dc65e55','122.175.58.42',1536063541,'__ci_last_regenerate|i:1536063541;'),('911c6d2b431a368ab239405fc428184a827650b5','122.175.58.42',1536056336,'__ci_last_regenerate|i:1536056162;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('933f05ea18256909657348105940c09ab04ffe6a','122.175.58.42',1536064146,'__ci_last_regenerate|i:1536064109;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('94e512d88cca3a9e790f8682f399b978f41762b1','122.175.58.42',1536062330,'__ci_last_regenerate|i:1536062192;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('950921bec3bc7a09a8cdc5d81f7fd2f9850e7912','122.175.58.42',1536058851,'__ci_last_regenerate|i:1536058537;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:25:\"Offer successfully added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"new\";}'),('95a2dae4195f6b0dec041413be5ca0f12811415c','66.249.79.116',1536104446,'__ci_last_regenerate|i:1536104445;'),('995e181cf37865ddce1ed391a14e98bbb6382dab','122.175.58.42',1536053005,'__ci_last_regenerate|i:1536052968;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:23:\"Item Successfully Added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('9c813844a4e1f81fa3631d3665eb33d571582afa','122.175.58.42',1536064933,'__ci_last_regenerate|i:1536064870;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('9dba42c22d4763ee6df36a6c2b09217e385f1a3e','122.175.58.42',1536062941,'__ci_last_regenerate|i:1536062941;'),('a091dd63ba21077fc91c67f9da8a496d1264d322','122.175.58.42',1536053267,'__ci_last_regenerate|i:1536052543;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('a192d445e185808c68f9b756f39d7fdeb7d28a7f','107.170.96.6',1536062461,'__ci_last_regenerate|i:1536062461;loginerror|s:24:\"Please login to continue\";__ci_vars|a:1:{s:10:\"loginerror\";s:3:\"new\";}'),('a3ce7dbc6f64d7e7b7fdb2e8bbb2c65f50b68a2d','122.175.58.42',1536064925,'__ci_last_regenerate|i:1536064800;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('a4312ebaea0d5a451e92adf2bb55af07c0ec05ba','122.175.58.42',1536062702,'__ci_last_regenerate|i:1536062657;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('a6336ab70073632e4be186b6a58c25885653f460','122.175.58.42',1536061741,'__ci_last_regenerate|i:1536061741;'),('a684d091104c7b7b7e508a0d68d778a1e4a53c86','162.243.69.215',1536061508,'__ci_last_regenerate|i:1536061508;'),('a6ae39e4e20b2a7fcfb937dfd53a3fdcc6b8a3fe','66.249.79.116',1536105038,'__ci_last_regenerate|i:1536105038;'),('a8841e921fcb0741ff3fbe2087170ab9c647c356','122.175.58.42',1536059480,'__ci_last_regenerate|i:1536059480;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('ac8c46aa15447e8d93afd1efa27b34a25274ad1f','122.175.58.42',1536059415,'__ci_last_regenerate|i:1536059179;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('af870a85a00d0e35fba6ccbb71f3e368dbf4efaf','::1',1536123472,'__ci_last_regenerate|i:1536123463;id|N;'),('afccc48560c5b3ee303c902f775c8d30f6604218','122.175.58.42',1536062103,'__ci_last_regenerate|i:1536061944;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"Image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('b34a8752b81eed848aa6285830e7bcdbb4366022','122.175.58.42',1536053486,'__ci_last_regenerate|i:1536053480;id|N;'),('b664dae3f07e3f5f2f60333d2aa2362fd729970f','122.175.58.42',1536056388,'__ci_last_regenerate|i:1536056388;id|N;'),('ba9c93c5c6b8290ca36847d9247d64860e11681f','122.175.58.42',1536065516,'__ci_last_regenerate|i:1536065189;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('bbded77f63937c8b143de96493c035369b2619e5','122.175.58.42',1536058572,'__ci_last_regenerate|i:1536058494;id|N;'),('bd2cac9d615fc4fa045060192a58684e64a7ac00','122.175.58.42',1536056914,'__ci_last_regenerate|i:1536056622;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('bdb141a5f2682c6e9f013a2daebcefaeb25f52e2','122.175.58.42',1536056377,'__ci_last_regenerate|i:1536056127;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"Image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('c0add430dc8906ca530abcda8f09781c28ce688a','122.175.58.42',1536063598,'__ci_last_regenerate|i:1536063348;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:30:\"image successfullyly activated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('c1a9781dd44d4c13386855633e2ca9e81409917c','122.175.58.42',1536057477,'__ci_last_regenerate|i:1536057333;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:23:\"Item Successfully Added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('c1a9a29d9b8d25b1487d788892569ad060305a9f','122.175.58.42',1536057509,'__ci_last_regenerate|i:1536057033;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('c54fae24b606dfebae65bcecbe5fbb817fd8602a','122.175.58.42',1536065573,'__ci_last_regenerate|i:1536065573;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('c5d791f5678c7a2d291af6918ce03f7b70074e62','122.175.58.42',1536065524,'__ci_last_regenerate|i:1536065524;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('c896cc5fcd4109e376fc9f37d9d535144ad6fb3d','122.175.58.42',1536123176,'__ci_last_regenerate|i:1536123176;'),('ccabc654ac7ce1b79f4af1b73d0fae8c0e3733b4','122.175.58.42',1536055247,'__ci_last_regenerate|i:1536055246;id|N;'),('d0ba55aac2a3aee844b4f7d8623cdba82cbf936c','122.175.58.42',1536055659,'__ci_last_regenerate|i:1536055659;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('d831b07d7728819fba766006dc7e86d577e8199a','122.175.58.42',1536057108,'__ci_last_regenerate|i:1536057108;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('dc4694aae9d8a52eb9ad6656733351753732cad9','122.175.58.42',1536061630,'__ci_last_regenerate|i:1536061455;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('de34c0c60bff016e3bcbe20754b6df0a3243c28c','122.175.58.42',1536061722,'__ci_last_regenerate|i:1536061489;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:33:\" Image successfullyly deactivated\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('e0e3b3965239a2b8cf092f2b3d7d16dae9c84ecf','122.175.58.42',1536057523,'__ci_last_regenerate|i:1536057523;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('e7ee79bf615ac4b56c88cbd3c548d13c76bf784f','122.175.58.42',1536057484,'__ci_last_regenerate|i:1536057482;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('e86a5d80374225c74adf120d2a001006dd2e7119','122.175.58.42',1536059002,'__ci_last_regenerate|i:1536058725;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}success|s:51:\"Successfully home page banner  and  items are added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('eb338730d958020d57cf8acde83e27faae911d1a','122.175.58.42',1536054487,'__ci_last_regenerate|i:1536054375;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;success|s:26:\"Banner successfully Added!\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('eb70e070018f742f1eeb111922ee2ed0471bee60','122.175.58.42',1536052955,'__ci_last_regenerate|i:1536052901;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('ec39144de32bcfc19bbb5db2c81705b6e975731b','122.175.58.42',1536122871,'__ci_last_regenerate|i:1536122860;id|N;'),('ef5a06f0cbe22f86ce44c3e36e8df4465154e6b1','122.175.58.42',1536051033,'__ci_last_regenerate|i:1536050895;seller_id|s:1:\"3\";seller_name|s:3:\"anu\";seller_address|N;seller_rand_id|s:9:\"SEL307150\";loggedin|b:1;'),('f202bfbe9c050d481543873f8a62ed5aa76df411','122.175.58.42',1536062907,'__ci_last_regenerate|i:1536062806;admin_id|s:2:\"12\";admin_email|s:19:\"inventory@gmail.com\";loggedin|b:1;userdetails|a:23:{s:11:\"customer_id\";s:2:\"12\";s:7:\"role_id\";s:1:\"5\";s:14:\"cust_firstname\";s:9:\"inventory\";s:13:\"cust_lastname\";s:10:\"management\";s:10:\"cust_email\";s:19:\"inventory@gmail.com\";s:13:\"cust_password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:11:\"cust_mobile\";s:10:\"3214656852\";s:11:\"cust_propic\";N;s:8:\"address1\";s:4:\"test\";s:7:\"pincode\";N;s:8:\"address2\";N;s:8:\"landmark\";N;s:4:\"city\";N;s:5:\"state\";N;s:4:\"area\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2017-07-12 08:30:14\";s:19:\"forgot_verification\";N;s:9:\"subscribe\";s:1:\"0\";s:28:\"deliveryboy_current_location\";N;s:4:\"bike\";N;s:13:\"active_status\";s:1:\"1\";s:13:\"current_login\";N;}'),('f42db64f3edc0d7351d570112757884160857581','122.175.58.42',1536054486,'__ci_last_regenerate|i:1536054443;id|N;'),('f8ea32a443227df56333fbf511d9a92b823a8c47','122.175.58.42',1536059727,'__ci_last_regenerate|i:1536059727;id|N;HA::CONFIG|a:2:{s:14:\"php_session_id\";s:48:\"s:40:\"36011c6a2ff7979ff592f2d553b820da681616d9\";\";s:7:\"version\";s:12:\"s:5:\"2.6.0\";\";}'),('fa0e0ae08fc4e24ddbdca479c883f650954d29c5','122.175.58.42',1536056385,'__ci_last_regenerate|i:1536056098;id|N;'),('fa60b1bf6965c80634c8052e9099941b6a4db72d','122.175.58.42',1536062445,'__ci_last_regenerate|i:1536062384;id|N;'),('fe85cb58efa48dc97e87c150260948c7029fded4','159.203.42.143',1536052543,'__ci_last_regenerate|i:1536052543;');

/*Table structure for table `cih` */

DROP TABLE IF EXISTS `cih`;

CREATE TABLE `cih` (
  `cih_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(1000) NOT NULL,
  `cih_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`cih_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `cih` */

insert  into `cih`(`cih_id`,`category_name`,`cih_fee`,`created_at`,`updated_at`) values (1,'Accessories – electronics, pc, mobile phones, tablets','8%','2017-04-26 12:44:54','2017-04-26 12:44:54'),(2,'Apparel','17%','2017-04-26 12:45:14','2017-05-10 11:21:42'),(3,'Apparel – accessories, innerwear, sleepwear ','13%','2017-04-26 12:45:42','2017-04-26 12:45:42'),(4,'Automotive – accessories','15%','2017-04-26 12:45:59','2017-04-26 12:45:59'),(5,'Automotive – automobiles ','2%','2017-04-26 12:46:27','2017-04-26 12:46:27'),(6,'Automotive – other sub categories ','15%','2017-04-26 12:46:49','2017-04-26 12:46:49'),(8,'Automotive – tyres ','3%','2017-04-26 12:49:01','2017-04-26 12:49:01'),(9,'Baby products ','5%','2017-04-26 12:49:19','2017-04-26 12:49:19'),(10,'Bed and bath linen ','10%','2017-04-26 12:49:41','2017-04-26 12:49:41'),(11,'Beauty','5%','2017-04-26 12:50:00','2017-04-26 12:50:00'),(12,'Beauty – fragrance','12%','2017-04-26 12:50:16','2017-04-26 12:50:16'),(13,'Business industrial & scientific supplies','8%','2017-04-26 12:50:30','2017-04-26 12:50:30'),(14,'Books','12%','2017-04-26 12:50:47','2017-04-26 12:50:47'),(15,'Camera lens','4%','2017-04-26 12:51:04','2017-04-26 12:51:04'),(16,'Camera & camcorder','4%','2017-04-26 12:51:25','2017-04-26 12:51:25'),(17,'Chargers ','12%','2017-04-26 12:51:41','2017-04-26 12:51:41'),(18,'Craft materials','5%','2017-04-26 12:52:24','2017-04-26 12:52:24'),(19,'Clocks ','10%','2017-04-26 12:52:42','2017-04-26 12:52:42'),(20,'Consumable physical gift card','5%','2017-04-26 12:52:58','2017-04-26 12:52:58'),(21,'Desktops','5%','2017-04-26 12:53:16','2017-04-26 12:53:16'),(22,'Educational software','10%','2017-04-26 11:03:41','2017-04-26 11:03:41'),(23,'Bags & sleeves – electronics & pc, wireless','13%','2017-04-26 11:04:16','2017-04-26 11:04:16'),(24,'Electronic devices – except TV, camera,& camcorder, camera lens, gps devices, speakers, mobile phones and tablets','7%','2017-04-26 11:04:36','2017-04-26 11:04:36'),(25,'Cases/cover/skin guard – electronics, pc, wireless','22%','2017-04-26 11:04:57','2017-04-26 11:04:57'),(26,'Cables – electronics, pc, wireless','17%','2017-04-26 11:05:17','2017-04-26 11:05:17'),(27,'Pc – devices (printers & scanners) ','4%','2017-04-26 11:05:36','2017-04-26 11:05:36'),(28,'Electronics – kindle accessories','25%','2017-04-26 11:05:53','2017-04-26 11:05:53'),(29,'Storage devices (except memory cards & pen drives) electronics, pc, wireless','5%','2017-04-26 11:06:09','2017-04-26 11:06:09'),(30,'Eye wear','17%','2017-04-26 11:06:24','2017-04-26 11:06:24'),(31,'Fashion jewellery','18%','2017-04-26 11:06:42','2017-04-26 11:06:42'),(32,'Fine jewellery studded ','7%','2017-04-26 11:06:58','2017-04-26 11:06:58'),(33,'Fine jewellery unstudded ','4%','2017-04-26 11:07:14','2017-04-26 11:07:14'),(34,'Furniture','10%','2017-04-26 11:07:30','2017-04-26 11:07:30'),(35,'Gps devices','4%','2017-04-26 11:07:47','2017-04-26 11:07:47'),(36,'Grocery & gourmet ','5%','2017-04-26 11:08:02','2017-04-26 11:08:02'),(37,'Hand bags','11%','2017-04-26 11:08:16','2017-04-26 11:08:16'),(38,'Health & personal care','5%','2017-04-26 11:08:32','2017-04-26 11:08:32'),(39,'Home – cushions & covers','10%','2017-04-26 11:08:48','2017-04-26 11:08:48'),(40,'Home improvement','8%','2017-04-26 11:09:07','2017-04-26 11:09:07'),(41,'Home small appliances ','3%','2017-04-26 11:09:22','2017-04-26 11:09:22'),(42,'Home others (excluding small appliances & home improvements)','15%','2017-04-26 11:17:47','2017-04-26 11:17:47'),(43,'HPC – body support','10%','2017-04-26 11:18:06','2017-04-26 11:18:06'),(44,'Indoor lightening (expect led bulbs) ','10','2017-04-26 11:18:26','2017-04-26 11:18:26'),(45,'Kitchen – non-appliances','12%','2017-04-26 11:18:50','2017-04-26 11:18:50'),(46,'Laptop battery ','12','2017-04-26 11:19:19','2017-04-26 11:19:19'),(47,'Laptops','3%','2017-04-26 11:19:37','2017-04-26 11:19:37'),(48,'Large appliances','5%','2017-04-26 11:19:55','2017-04-26 11:19:55'),(49,'Lawn & garden','10','2017-04-26 11:20:10','2017-04-26 11:20:10'),(50,'Led bulbs','8%','2017-04-26 11:20:31','2017-04-26 11:20:31'),(51,'Luggage','13%','2017-04-26 11:20:49','2017-04-26 11:20:49'),(52,'Luxury beauty','12%','2017-04-26 11:21:05','2017-04-26 11:21:05'),(53,'Medical equipment','8%','2017-04-27 04:49:27','2017-04-27 04:49:27'),(54,'Memory cards','10%','2017-04-27 04:49:42','2017-04-27 04:49:42'),(55,'Mobile phones and tablets','3.5%','2017-04-27 04:50:01','2017-04-27 04:50:01'),(56,'Modems and networking devices','6%','2017-04-27 04:50:17','2017-04-27 04:50:17'),(57,'Monitors','3%','2017-04-27 04:50:31','2017-04-27 04:50:31'),(58,'Movies ','5%','2017-04-27 04:50:48','2017-04-27 04:50:48'),(59,'Music','5%','2017-04-27 04:51:03','2017-04-27 04:51:03'),(60,'Musical instruments','6%','2017-04-27 04:51:22','2017-04-27 04:51:22'),(61,'Non-educational software','10%','2017-04-27 04:51:48','2017-04-27 04:51:48'),(62,'Nursing and feeding','6%','2017-04-27 04:52:09','2017-04-27 04:52:09'),(63,'Nutrition','8%','2017-04-27 04:52:31','2017-04-27 04:52:31'),(64,'Office products ','7%','2017-04-27 04:52:46','2017-04-27 04:52:46'),(65,'Pantry ','13%','2017-04-27 04:52:59','2017-04-27 04:52:59'),(66,'Pc components (ram, mother board) ','5%','2017-04-27 04:53:13','2017-04-27 04:53:13'),(67,'Personal care appliances','7%','2017-04-27 04:53:33','2017-04-27 04:53:33'),(68,'Pet accessories','10%','2017-04-27 04:53:54','2017-04-27 04:53:54'),(69,'Pet food (dog food)','7%','2017-04-27 04:54:11','2017-04-27 04:54:11'),(70,'Pet food (expect dog food) ','5%','2017-04-27 04:54:24','2017-04-27 04:54:24'),(71,'Selfie sticks','13%','2017-04-27 04:54:38','2017-04-27 04:54:38'),(72,'Shoes','13%','2017-04-27 04:54:51','2017-04-27 04:54:51'),(73,'Speakers','4%','2017-04-27 04:55:04','2017-04-27 04:55:04'),(74,'Sporting goods','10%','2017-04-27 04:55:19','2017-04-27 04:55:19'),(75,'Toys','8%','2017-04-27 04:55:33','2017-04-27 04:55:33'),(76,'TV ','4%','2017-04-27 04:55:53','2017-04-27 04:55:53'),(77,'Usb flash devices (pen drives) ','8%','2017-04-27 04:56:08','2017-04-27 04:56:08'),(78,'Video games ','5%','2017-04-27 04:56:22','2017-04-27 04:56:22'),(79,'Video game – accessories','7%','2017-04-27 04:56:39','2017-04-27 04:56:39'),(80,'Video game consoles','4%','2017-04-27 04:56:54','2017-04-27 04:56:54'),(81,'Wallets & backpacks','15%','2017-04-27 04:57:08','2017-04-27 04:57:08'),(82,'Warranty services','37','2017-04-27 04:57:19','2017-04-27 04:57:19'),(83,'Watches','8%','2017-04-27 04:57:35','2017-04-27 04:57:35'),(84,'Food','15%','2017-04-29 05:45:00','2017-05-09 07:00:48'),(86,'keyboard','6%','2017-05-10 07:28:10','2017-05-10 09:16:24');

/*Table structure for table `closingfee` */

DROP TABLE IF EXISTS `closingfee`;

CREATE TABLE `closingfee` (
  `closing_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_price` varchar(500) NOT NULL,
  `closing_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`closing_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `closingfee` */

insert  into `closingfee`(`closing_id`,`product_price`,`closing_fee`,`created_at`,`updated_at`) values (1,'100','10','2017-04-28 13:09:11','2017-05-10 11:53:09'),(2,'10000','20','2017-04-28 13:09:25','2017-04-28 13:09:25'),(4,'100000','30','2017-04-28 13:11:17','2017-04-28 13:11:17'),(5,'8000','18','2017-05-10 11:51:19','2017-05-10 11:51:19'),(6,'5222','50','2017-05-10 13:47:52','2017-05-10 13:47:52');

/*Table structure for table `colorslist` */

DROP TABLE IF EXISTS `colorslist`;

CREATE TABLE `colorslist` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `colorslist` */

insert  into `colorslist`(`color_id`,`color_name`,`status`,`create_at`) values (1,'Red',1,'2018-08-11 15:31:39');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `like` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`post_id`,`name`,`email`,`comment`,`like`,`create_at`) values (1,1,'else','vaasuforu2@gmail.com','fhfghfg','17','2018-03-20 12:28:51'),(2,1,'test','vasudevareddy549@gmail.com','vasudevareddy this  is  a test file','5','2018-03-20 12:29:46'),(3,1,'vasudevareddy','vasudevareddy549@gmail.com','gtesting','7','2018-03-20 12:40:11'),(4,1,'kalyan','vaasuforu2@gmail.com','testing','3','2018-03-20 13:18:10'),(5,1,'testing ','vasu@gmail.co','like','6','2018-03-20 14:56:33'),(6,2,'vasudevareddy','admin@gmail.com','hgj','3','2018-03-20 14:57:12');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(200) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `contactus` */

/*Table structure for table `customer_address` */

DROP TABLE IF EXISTS `customer_address`;

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `emal_id` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `address1` varchar(250) DEFAULT NULL,
  `address2` varchar(250) DEFAULT NULL,
  `landmark` varchar(250) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `create-at` datetime DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `customer_address` */

insert  into `customer_address`(`address_id`,`cust_id`,`title`,`name`,`emal_id`,`mobile`,`address1`,`address2`,`landmark`,`pincode`,`city`,`state`,`create-at`) values (1,191,'Office','vasu','vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor','Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts','2018-08-11 17:38:18'),(2,190,'Nagole','Arya','aryasatheesan12345@gmail.com','9550252384','Nagole','New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana','2018-08-13 12:53:45'),(3,193,'home','kithada','ramu.kithada@gmail.com','9951040410','ramalayam street ','kukatpally','near bogbazar','500038','hyderabad','telangana','2018-08-31 14:26:15');

/*Table structure for table `customercontactus` */

DROP TABLE IF EXISTS `customercontactus`;

CREATE TABLE `customercontactus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` tinytext,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `customercontactus` */

insert  into `customercontactus`(`id`,`customer_id`,`name`,`email`,`subject`,`message`,`create_at`) values (1,13,'iui','uityu@gmai.com','hudfjs','fgfgdhfghg','2017-10-11 18:15:21'),(2,99,'FAISAL RIZWAN','fais.riz@gmail.com','sf','fs','2017-10-20 12:24:03');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `cust_firstname` varchar(250) DEFAULT NULL,
  `cust_lastname` varchar(250) DEFAULT NULL,
  `cust_email` varchar(250) DEFAULT NULL,
  `cust_password` varchar(250) DEFAULT NULL,
  `cust_mobile` varchar(45) DEFAULT NULL,
  `cust_propic` varchar(250) DEFAULT NULL,
  `address1` varchar(250) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `address2` varchar(250) DEFAULT NULL,
  `landmark` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `forgot_verification` varchar(45) DEFAULT NULL,
  `subscribe` int(11) DEFAULT '0',
  `deliveryboy_current_location` varchar(250) DEFAULT NULL,
  `bike` varchar(250) DEFAULT NULL,
  `active_status` int(11) DEFAULT '1',
  `current_login` int(11) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `customers`(`customer_id`,`role_id`,`cust_firstname`,`cust_lastname`,`cust_email`,`cust_password`,`cust_mobile`,`cust_propic`,`address1`,`pincode`,`address2`,`landmark`,`city`,`state`,`area`,`status`,`create_at`,`forgot_verification`,`subscribe`,`deliveryboy_current_location`,`bike`,`active_status`,`current_login`) values (2,2,'Admin','admin','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','8500050945','c2.jpg','testing',NULL,'testing1',NULL,NULL,NULL,0,1,NULL,NULL,0,NULL,NULL,1,NULL),(12,5,'inventory','management','inventory@gmail.com','e10adc3949ba59abbe56e057f20f883e','3214656852',NULL,'test',NULL,NULL,NULL,NULL,NULL,1,1,'2017-07-12 08:30:14',NULL,0,NULL,NULL,1,NULL),(101,6,'del','002','del002@gmail.com','c8837b23ff8aaa8a2dde915473ce0991','9494422779',NULL,'16-2-227/248/401, 8th Rd, Sardar Patel Nagar, Hydernagar, Kukatpally Housing Board Colony, ','500072','16-2-227/248/401, 8th Rd, Sardar Patel Nagar, Hydernagar, Kukatpally Housing Board Colony, ',NULL,'test','test',1,1,NULL,NULL,0,'',NULL,1,1),(190,1,'Arya','Satheesan','aryasatheesan12345@gmail.com','e10adc3949ba59abbe56e057f20f883e','9550252384','herb.png','Nagole','500072','New Nagole','Beside Balaji Temple','Hyderabad','Telangana',0,1,'2018-08-11 15:08:21','',0,NULL,NULL,1,NULL),(191,1,'vasu','reddy','vasudevareddy549@gmail.com','e10adc3949ba59abbe56e057f20f883e','8500050944',NULL,'Plot No. 177, Sri Vani Nilayam, 1st floor','500072','Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','hyderbad','ts',0,1,'2018-08-11 17:36:14','488417',0,NULL,NULL,1,NULL),(192,1,'ram','k','ram@gmail.com','e10adc3949ba59abbe56e057f20f883e','7013319036',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-22 10:36:55',NULL,0,NULL,NULL,1,NULL),(193,1,'kithada','ramu','ramu.kithada@gmail.com','c33367701511b4f6020ec61ded352059','9951040410',NULL,'ramalayam street ','500038','kukatpally','near bogbazar','hyderabad','telangana',0,1,'2018-08-31 14:23:01',NULL,0,NULL,NULL,1,NULL);

/*Table structure for table `deals_ofthe_day` */

DROP TABLE IF EXISTS `deals_ofthe_day`;

CREATE TABLE `deals_ofthe_day` (
  `deal_offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item_price` varchar(250) DEFAULT NULL,
  `offer_percentage` varchar(11) DEFAULT NULL,
  `offer_amount` varchar(250) DEFAULT NULL,
  `intialdate` date DEFAULT NULL,
  `expairdate` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `home_page_status` int(11) DEFAULT '0',
  `preview_ok` int(11) DEFAULT '0',
  PRIMARY KEY (`deal_offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `deals_ofthe_day` */

insert  into `deals_ofthe_day`(`deal_offer_id`,`item_id`,`seller_id`,`category_id`,`subcategory_id`,`item_price`,`offer_percentage`,`offer_amount`,`intialdate`,`expairdate`,`status`,`create_at`,`area`,`home_page_status`,`preview_ok`) values (1,2,3,37,247,'600','25.00','150','2018-08-11','2018-08-12 06:15:47 PM',0,'2018-08-11 18:15:47',1,1,0),(2,2,3,37,247,'600','50.00','300','2018-08-13','2018-08-14 10:34:46 AM',0,'2018-08-13 10:34:46',1,1,0),(3,2,3,37,247,'600','50.00','300','2018-08-13','2018-08-14 10:45:59 AM',0,'2018-08-13 10:45:59',1,1,0),(4,2,3,37,247,'600','25.00','150','2018-08-13','2018-08-14 10:47:06 AM',0,'2018-08-13 10:47:06',1,1,0),(5,5,3,37,249,'300','35.00','105','2018-08-13','2018-08-14 04:39:04 PM',0,'2018-08-13 16:39:04',1,1,0),(6,4,3,37,248,'450','10.00','45','2018-08-14','2018-08-15 11:17:09 AM',1,'2018-08-14 11:17:09',1,1,0),(7,8,3,37,251,'1200','10.00','120','2018-08-16','2018-08-17 02:40:10 PM',0,'2018-08-16 14:40:10',1,1,0),(8,11,3,37,251,'800','10.00','80','2018-08-20','2018-08-21 01:15:28 PM',0,'2018-08-20 13:15:28',1,1,0),(9,13,3,37,251,'2500','50.00','1250','2018-08-20','2018-08-21 05:25:40 PM',0,'2018-08-20 17:25:40',1,1,0),(10,10,3,37,251,'2000','12.00','240','2018-09-04','2018-09-05 04:45:15 PM',1,'2018-09-04 16:45:15',1,1,1);

/*Table structure for table `descrotion_list` */

DROP TABLE IF EXISTS `descrotion_list`;

CREATE TABLE `descrotion_list` (
  `desc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `description` text,
  `image` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`desc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `descrotion_list` */

insert  into `descrotion_list`(`desc_id`,`item_id`,`description`,`image`,`create_at`,`status`) values (6,6,'Herbal Supplement','','2018-08-14 15:17:25',1),(11,8,'Prevents Hair fall.\r\nNo Added colors.','0.99898000 1534406965ayur shampoo.png','2018-08-16 14:29:49',1),(12,9,'sri sri madhukari herbal tea is an exquisite blend of 16 exotic herbs. No added preservatives','0.41313300 1534411671tea powder.png','2018-08-16 14:57:51',1),(13,10,'Maintains the moisture balance  of  scalp','0.47402500 1534412416aryanveda1.png','2018-08-16 15:10:16',1),(14,11,'Prevents Tangling, breakage & fall of Hair','0.68444300 1534415081milk shampoo.png','2018-08-16 15:54:41',1),(15,12,'Ayurvedic medicine for hair fall','0.35665100 1534415524indu.png','2018-08-16 16:02:04',1),(16,13,'Prevents Hair Loss.\r\nSuitable for all types of hair.','0.39709400 1534416570anti dandruff.png','2018-08-16 16:19:30',1),(17,7,'Tulsi Assorted Infusion is the combination of tulsi herbal infusion, tulsi lemon,ginger infusion, tulsi lemon mint infusion.','0.27372000 1534401364herbal tea.png','2018-08-17 14:51:12',1),(18,14,'Organic tomatoes are free from harmful chemicals and toxins. It also a healthy source of Vitamin C and A.','0.33253900 153484684640022638_3-fresho-tomato-local-organically-grown.jpg','2018-08-21 15:50:46',1),(19,15,'Onions are known to have antiseptic, antimicrobial and antibiotic properties which help you to get rid of infections.','0.23805600 1534847224on1.jpg','2018-08-21 15:57:04',1),(20,16,'Cool & Spicy With Lemon & Ginger.','0.56702900 153484932720004650_3-gtee-green-tea-lemon-ginger.jpg','2018-08-21 16:32:07',1),(21,17,'Tetley Green Tea with uplifting flavour of Lemon and Honey','0.27391900 1534849561tet.png','2018-08-21 16:36:01',1),(22,18,'Toprose gives the best nourishment to the Roses. This food makes the plant healthy with enhanced quantity with quality of Rose flowers. ','0.75677300 1534849983toprose.jpg','2018-08-21 16:43:03',1),(23,19,'Natural Plus Neem Mix improves Soil Nutrition Resulting in Healthy, Robust Plants Enhances Soil Fertility Causing Faster plant Growth condition the soil to improve porosify Permeability','0.69339400 1534850136neem mix1.png','2018-08-21 16:45:36',1),(24,20,'Cloves are the dried, flower bud of the evergreen tree, Eugenia aromatica. Cloves are an incredibly common type of spices that are broadly used for cooking and other purposes.','0.01188900 1534850745cl3.jpg','2018-08-21 16:55:45',1),(25,21,'Best Quality & Raw Form','0.28045300 1534851014pepper1.jpg','2018-08-21 17:00:14',1),(26,22,'Cinnamon a sweet spice completed from the bark of an Asian tree and utilized in baking and cooking. The light-brown spice contains a delicately fragrant aroma and warm, sugary flavor. It was once more precious than gold.\r\n','0.08836300 1534851464DALCHINI-compressor-510x510.jpg','2018-08-21 17:07:44',1),(28,3,'Ready to use for all container and garden beds. Easy to apply liquid plant food.  Perfect for your herbs and veggies!Use to promote strong, healthy plants, rapid growth and bigger yields.','0.18728800 1536052401organic_plant_food_liquid_larger.jpg','2018-09-04 14:47:40',1),(29,4,'When garden plants make more flowers, you get more produce. It’s that simple. Flower Girl Bud & Bloom Booster (1-2-1) is a gentle, balanced concentrate that builds bigger, more abundant blooms — naturally!','0.49499000 1536053470flower_hose.png','2018-09-04 15:01:10',1),(30,1,'Wrapped in lime colored husks with silk, sweet corn contains numerous yellow succulent kernels that have a starchy and doughy consistency. The skin pops out as you bite into it. ','0.02016800 153605444040004992-2_1-fresho-sweet-corn.jpg','2018-09-04 15:17:22',1),(31,2,'Kiwis are oval shaped with a brownish outer skin. The flesh is bright green and juicy with tiny, edible black seeds. With its distinct sweet-sour taste and a pleasant smell, it tastes like strawberry and honeydew melon. ','0.08649900 153605605920000911-3_9-fresho-kiwi-green.jpg','2018-09-04 15:44:19',1),(32,5,'Green Cardamom is a very popular spice featuring green shell and small brown seeds. It is added in dishes to provide a strong aroma and flavor but in Ayurveda it is considered to be a very useful and effective medicine. The spice can be crushed and used in foods to enhance the flavour of the dishes.','0.92035600 1536058224Cardamom-01.jpg','2018-09-04 16:20:25',1);

/*Table structure for table `exchange_return_order_list` */

DROP TABLE IF EXISTS `exchange_return_order_list`;

CREATE TABLE `exchange_return_order_list` (
  `return_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_item_id` int(11) DEFAULT NULL,
  `delivery_boy_id` varchar(250) DEFAULT '0',
  `status` varchar(250) DEFAULT NULL,
  `order_status` varchar(250) DEFAULT NULL,
  `status_packing` varchar(250) DEFAULT NULL,
  `status_road` varchar(250) DEFAULT NULL,
  `status_deliverd` varchar(250) DEFAULT '0',
  `delievry_time` varchar(250) DEFAULT NULL,
  `customer_seller_km` varchar(250) DEFAULT NULL,
  `customer_seller_time` varchar(250) DEFAULT NULL,
  `customer_seller_timevalue` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT 'Redelivered',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exchange_return_order_list` */

/*Table structure for table `fliter_search` */

DROP TABLE IF EXISTS `fliter_search`;

CREATE TABLE `fliter_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ip_address` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `cusine` varchar(250) DEFAULT NULL,
  `restraent` varchar(250) DEFAULT NULL,
  `mini_amount` varchar(250) DEFAULT NULL,
  `max_amount` varchar(250) DEFAULT NULL,
  `offers` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1',
  `size` varchar(250) DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `create` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3976 DEFAULT CHARSET=latin1;

/*Data for the table `fliter_search` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values (1,'admin','Administrator'),(2,'members','Remediation Coordinator'),(3,'projectlead','Project Lead');

/*Table structure for table `home_banner` */

DROP TABLE IF EXISTS `home_banner`;

CREATE TABLE `home_banner` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1',
  `intialdate` date DEFAULT NULL,
  `expairydate` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `home_page_status` int(11) DEFAULT '0',
  `preview_ok` int(11) DEFAULT '0',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `home_banner` */

insert  into `home_banner`(`image_id`,`seller_id`,`file_name`,`status`,`intialdate`,`expairydate`,`created_at`,`updated_at`,`home_page_status`,`preview_ok`) values (14,12,'1514376552.jpg',1,'2018-08-18','2018-08-19 01:07:16','2018-08-18 13:07:16','2018-08-18 13:07:16',0,0),(29,3,'Banner9-min-1920x800_1920x650.jpg',1,'2018-09-04','2018-09-05 11:53:00','2018-09-04 11:53:00','2018-09-04 11:53:00',1,1),(32,3,'Organic-spices-india-farmer-cooperative.jpg',1,'2018-09-04','2018-09-05 12:39:36','2018-09-04 12:39:36','2018-09-04 12:39:36',1,1),(34,3,'banner4_2_1920x500.jpg',1,'2018-09-04','2018-09-05 12:44:50','2018-09-04 12:44:50','2018-09-04 12:44:50',1,1),(36,3,'bannernew2_1920x600.jpg',1,'2018-09-04','2018-09-05 01:08:16','2018-09-04 13:08:16','2018-09-04 13:08:16',1,1);

/*Table structure for table `homepage_banners` */

DROP TABLE IF EXISTS `homepage_banners`;

CREATE TABLE `homepage_banners` (
  `baneer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `subitem_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `link` varchar(11) DEFAULT NULL,
  `selected_id` varchar(250) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `expirydate` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `admin_status` int(11) DEFAULT '0',
  PRIMARY KEY (`baneer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `homepage_banners` */

insert  into `homepage_banners`(`baneer_id`,`category_id`,`subcategory_id`,`subitem_id`,`item_id`,`position`,`name`,`link`,`selected_id`,`seller_id`,`expirydate`,`created_at`,`updated`,`status`,`admin_status`) values (6,37,249,481,0,2,'1534510401.jpg','3','481',NULL,'2018-08-21 18:23:21','2018-08-17 18:23:21','2018-08-21 18:26:55',1,0),(15,37,249,481,0,2,'1536038056.png','3','481',3,'2018-09-11 10:44:16','2018-09-04 10:44:16','2018-09-04 10:44:35',1,1),(16,37,248,480,0,2,'1536039911.png','3','480',3,'2018-09-11 11:15:13','2018-09-04 11:15:13','2018-09-04 11:19:53',1,1),(17,37,250,0,6,2,'1536041298.jpg','4','6',3,'2018-09-11 11:38:20','2018-09-04 11:38:20','2018-09-04 11:38:49',1,1),(20,37,247,0,1,3,'1536054487.jpg','4','1',3,'2018-09-11 15:18:07','2018-09-04 15:18:07','2018-09-04 15:18:40',1,1),(21,37,249,0,5,3,'1536055136.jpg','4','5',3,'2018-09-11 15:28:56','2018-09-04 15:28:56','2018-09-04 15:30:38',1,1),(22,37,251,0,0,3,'1536055856.jpg','2','251',3,'2018-09-11 15:40:55','2018-09-04 15:40:55','2018-09-04 15:47:53',1,1),(23,37,248,480,0,3,'1536056336.jpg','3','480',3,'2018-09-11 15:48:56','2018-09-04 15:48:56','2018-09-04 15:49:36',1,1),(24,37,251,0,0,4,'1536057095.jpg','2','251',3,'2018-09-11 16:01:34','2018-09-04 16:01:34','2018-09-04 16:29:01',1,1),(26,37,251,0,0,4,'1536061921.jpg','2','251',3,'2018-09-11 17:22:00','2018-09-04 17:22:00','2018-09-04 17:22:31',1,1),(27,0,0,0,0,4,'1536062055.jpeg','5','16',3,'2018-09-11 17:24:14','2018-09-04 17:24:14','2018-09-04 17:25:03',1,1);

/*Table structure for table `homesubbanners_list` */

DROP TABLE IF EXISTS `homesubbanners_list`;

CREATE TABLE `homesubbanners_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `homesubbanners_list` */

/*Table structure for table `image_urls` */

DROP TABLE IF EXISTS `image_urls`;

CREATE TABLE `image_urls` (
  `img_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img_name` varchar(250) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `image_urls` */

insert  into `image_urls`(`img_id`,`img_name`,`seller_id`,`created_at`) values (1,'0.89321700 1534399567herb ban.jpg',3,'2018-08-16 11:36:07'),(2,'0.45566100 1535790997512s.png',15,'2018-09-01 14:06:37');

/*Table structure for table `invoice_list` */

DROP TABLE IF EXISTS `invoice_list`;

CREATE TABLE `invoice_list` (
  `invoice_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_item_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `invoicename` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `mail_send` int(11) DEFAULT '0',
  `customer_email_send` int(11) DEFAULT '0',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `invoice_list` */

insert  into `invoice_list`(`invoice_id`,`cust_id`,`order_id`,`order_item_id`,`item_id`,`invoicename`,`create_at`,`mail_send`,`customer_email_send`) values (1,191,1,1,1,NULL,'2018-08-11 05:38:36',0,0),(2,190,2,2,1,NULL,'2018-08-13 12:54:02',0,0),(3,190,3,3,9,NULL,'2018-08-16 05:31:55',0,0),(4,190,4,4,6,NULL,'2018-08-17 12:55:43',0,0),(5,190,7,6,11,NULL,'2018-08-17 01:24:56',0,0),(6,190,9,7,4,NULL,'2018-08-17 01:26:45',0,0),(7,191,12,10,1,NULL,'2018-08-20 12:01:57',0,0),(8,190,13,11,12,NULL,'2018-08-20 03:44:53',0,0),(9,190,14,12,12,NULL,'2018-08-20 03:48:05',0,0),(10,190,16,14,6,NULL,'2018-08-20 04:19:41',0,0),(11,190,17,15,2,NULL,'2018-08-20 04:21:03',0,0),(12,193,18,16,16,NULL,'2018-08-31 02:26:25',0,0);

/*Table structure for table `item_wise_filter_search` */

DROP TABLE IF EXISTS `item_wise_filter_search`;

CREATE TABLE `item_wise_filter_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(250) DEFAULT NULL,
  `itemid` varchar(250) DEFAULT NULL,
  `max` varchar(250) DEFAULT NULL,
  `minimum_price` varchar(250) DEFAULT NULL,
  `maximum_price` varchar(250) DEFAULT NULL,
  `offer` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `sim_type` varchar(250) DEFAULT NULL,
  `camera` varchar(250) DEFAULT NULL,
  `internal_memeory` varchar(250) DEFAULT NULL,
  `screen_size` varchar(250) DEFAULT NULL,
  `Processor` varchar(250) DEFAULT NULL,
  `printer_type` varchar(250) DEFAULT NULL,
  `type` varbinary(250) DEFAULT NULL,
  `max_copies` varchar(250) DEFAULT NULL,
  `paper_size` varchar(250) DEFAULT NULL,
  `headphone_jack` varchar(250) DEFAULT NULL,
  `noise_reduction` varchar(250) DEFAULT NULL,
  `usb_port` varchar(250) DEFAULT NULL,
  `compatible_for` varchar(250) DEFAULT NULL,
  `scanner_type` varchar(250) DEFAULT NULL,
  `resolution` varchar(250) DEFAULT NULL,
  `f_stop` varchar(250) DEFAULT NULL,
  `minimum_focusing_distance` varchar(250) DEFAULT NULL,
  `aperture_withmaxfocal_length` varchar(250) DEFAULT NULL,
  `picture_angle` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `occasion` varchar(250) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `collar_type` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `sleeve` varchar(250) DEFAULT NULL,
  `look` varchar(250) DEFAULT NULL,
  `style_code` varchar(250) DEFAULT NULL,
  `inner_material` varchar(250) DEFAULT NULL,
  `waterproof` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

/*Data for the table `item_wise_filter_search` */

insert  into `item_wise_filter_search`(`id`,`ip_address`,`itemid`,`max`,`minimum_price`,`maximum_price`,`offer`,`brand`,`discount`,`colour`,`size`,`ram`,`os`,`sim_type`,`camera`,`internal_memeory`,`screen_size`,`Processor`,`printer_type`,`type`,`max_copies`,`paper_size`,`headphone_jack`,`noise_reduction`,`usb_port`,`compatible_for`,`scanner_type`,`resolution`,`f_stop`,`minimum_focusing_distance`,`aperture_withmaxfocal_length`,`picture_angle`,`weight`,`occasion`,`material`,`collar_type`,`gender`,`sleeve`,`look`,`style_code`,`inner_material`,`waterproof`,`create_at`) values (53,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:43:49'),(54,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:43:52'),(55,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:43:53'),(56,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:43:54'),(57,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:43:59'),(58,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:44:05'),(59,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:44:05'),(60,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:44:05'),(61,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:45:12'),(62,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:45:14'),(63,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-21 10:45:17'),(64,'122.175.58.42','2',NULL,'120','120','20.00','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:03'),(65,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:05'),(66,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:07'),(67,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:13'),(68,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:13'),(69,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:15'),(70,'122.175.58.42','5',NULL,'120','120','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-31 15:00:21'),(71,'122.175.58.42','4',NULL,'120','120','20.00','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-09-03 16:05:04');

/*Table structure for table `item_wishlist` */

DROP TABLE IF EXISTS `item_wishlist`;

CREATE TABLE `item_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `yes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `item_wishlist` */

insert  into `item_wishlist`(`id`,`cust_id`,`item_id`,`create_at`,`yes`) values (1,1,0,NULL,NULL),(28,190,7,'2018-08-18 11:59:49',1),(29,191,4,'2018-08-20 12:16:46',1),(30,190,11,'2018-08-20 12:53:14',1),(31,190,9,'2018-08-20 14:57:35',1),(32,190,13,'2018-08-20 17:32:36',1),(33,190,14,'2018-08-21 17:28:32',1);

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `items` */

/*Table structure for table `items_list` */

DROP TABLE IF EXISTS `items_list`;

CREATE TABLE `items_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subitemid` int(11) DEFAULT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` tinyblob,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `items_list` */

insert  into `items_list`(`id`,`subitemid`,`item_name`,`create_at`,`update_at`,`status`,`image`,`created_by`) values (1,478,'Tomato','2018-08-21 12:34:19','2018-08-21 12:34:19',1,NULL,12),(2,478,'Onions','2018-08-21 15:52:17','2018-08-21 15:52:17',1,NULL,12),(3,480,'Rose Fertilizer','2018-08-21 15:41:35','2018-08-21 15:41:35',1,NULL,12),(4,480,'Neem Fertilizer','2018-08-21 15:40:56','2018-08-21 15:40:56',1,NULL,12),(5,481,'Cloves','2018-08-21 16:50:38','2018-08-21 16:50:38',1,NULL,12),(6,482,'Lemon Ginger Green Tea','2018-08-21 16:25:12','2018-08-21 16:25:12',1,NULL,12),(7,483,'Bringha Hair Cleanser','2018-08-16 13:33:03','2018-08-16 13:33:03',1,NULL,12),(8,482,'lemon & Honey Green Tea','2018-08-21 16:32:39','2018-08-21 16:32:39',1,NULL,12),(9,485,'Aryanveda Herbal Shampoo','2018-08-16 15:02:09','2018-08-16 15:02:09',1,NULL,12),(10,483,'Indulekha Coconut Milk Shampoo','2018-08-16 15:50:16','2018-08-16 15:50:16',1,NULL,12),(11,483,'Bringha Hair Cleanser Sachets','2018-08-16 15:56:50','2018-08-16 15:56:50',1,NULL,12),(12,486,'Aryanveda Anti Dandruff Shampoo','2018-08-16 16:07:53','2018-08-16 16:07:53',1,NULL,12),(13,481,'Pepper','2018-08-21 16:56:51','2018-08-21 16:56:51',1,NULL,12),(14,481,'Cinnamon','2018-08-21 17:02:16','2018-08-21 17:02:16',1,NULL,12),(15,479,'Bud and Bloom Booster','2018-09-04 14:53:25','2018-09-04 14:53:25',1,NULL,12),(16,220,'Sweet Corn','2018-09-04 15:10:18','2018-09-04 15:10:18',0,NULL,12),(17,478,'Sweet Corn','2018-09-04 15:12:04','2018-09-04 15:12:04',1,NULL,12),(18,487,'Kiwi','2018-09-04 15:30:28','2018-09-04 15:30:28',1,NULL,12),(19,481,'Cardamom','2018-09-04 16:07:57','2018-09-04 16:07:57',1,NULL,12);

/*Table structure for table `locations` */

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(500) NOT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `locations` */

insert  into `locations`(`location_id`,`location_name`,`pincode`,`status`) values (1,'Kphb','500072',1),(2,'Kukatpally','500072',1),(3,'Miyapur','500049',1),(4,'Ameerpet','500016',1),(6,'Hi tech','500081',1),(7,'sample2',NULL,1),(8,'sample3',NULL,1),(9,'sample4',NULL,1),(10,'sample5',NULL,1),(11,'sample6',NULL,1),(12,'sample7',NULL,1),(13,'sample8',NULL,1),(14,'sample8',NULL,1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `replyed_id` int(11) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `seller_message` text,
  `message_type` enum('REPLIED','REPLY') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `read_count` tinyint(1) DEFAULT '1',
  `delete_message` tinyint(1) DEFAULT '0',
  `view` tinyint(1) DEFAULT '0',
  `viewed_by` int(11) DEFAULT NULL,
  `category_status` int(11) DEFAULT '0',
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `notifications` */

insert  into `notifications`(`notification_id`,`seller_id`,`replyed_id`,`subject`,`seller_message`,`message_type`,`created_at`,`read_count`,`delete_message`,`view`,`viewed_by`,`category_status`) values (1,2,NULL,'New seller',' was successfully Registered.','REPLY','2018-08-11 15:09:22',0,0,0,NULL,0),(2,3,NULL,'New seller','anu was successfully Registered.','REPLY','2018-08-11 15:13:15',0,0,0,NULL,0),(3,3,NULL,'Category activation successfully','Category activation successfully','REPLY','2018-08-11 16:02:41',0,0,0,NULL,0),(4,3,NULL,'helloo','hiiiiii','REPLY','2018-08-13 14:37:05',0,0,0,NULL,0),(5,12,NULL,'New seller','reddy was successfully Registered.','REPLY','2018-08-14 11:08:31',0,0,0,NULL,0),(6,13,NULL,'New seller','reddy was successfully Registered.','REPLY','2018-08-16 11:50:07',0,0,0,NULL,0),(7,3,12,'helloo','hiiiiiiiiiiieeeeeeeeee','REPLIED','2018-08-20 12:31:47',0,0,0,NULL,0);

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `item_price` varchar(250) DEFAULT NULL,
  `total_price` varchar(250) DEFAULT NULL,
  `delivery_amount` varchar(250) DEFAULT NULL,
  `delivery_type` int(11) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `commission_price` varchar(250) DEFAULT NULL,
  `order_status` int(11) DEFAULT '0',
  `customer_email` varchar(250) DEFAULT NULL,
  `customer_phone` varchar(250) DEFAULT NULL,
  `customer_address` varchar(250) DEFAULT NULL,
  `landmark` varchar(250) DEFAULT NULL,
  `pincode` varchar(11) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `amount_status_paid` varchar(11) DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `uksize` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `delivery_boy_assign` int(11) DEFAULT '0',
  `deliveryboy_status` int(11) DEFAULT '0',
  `message_sent` int(11) DEFAULT NULL,
  `customer_seller_km` varchar(250) DEFAULT NULL,
  `customer_seller_time` varchar(250) DEFAULT NULL,
  `customer_seller_timevalue` varchar(250) DEFAULT NULL,
  `invoice_id` varchar(250) DEFAULT NULL,
  `return_deliveryboy_id` int(11) DEFAULT NULL,
  `expected_delivery_time` varchar(250) DEFAULT NULL,
  `completed_date` datetime DEFAULT NULL,
  `type` varchar(250) DEFAULT 'Delivered',
  `singature` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `order_items` */

insert  into `order_items`(`order_item_id`,`order_id`,`item_id`,`seller_id`,`customer_id`,`qty`,`item_price`,`total_price`,`delivery_amount`,`delivery_type`,`payment_type`,`commission_price`,`order_status`,`customer_email`,`customer_phone`,`customer_address`,`landmark`,`pincode`,`city`,`state`,`area`,`time`,`amount_status_paid`,`color`,`size`,`uksize`,`create_at`,`delivery_boy_id`,`delivery_boy_assign`,`deliveryboy_status`,`message_sent`,`customer_seller_km`,`customer_seller_time`,`customer_seller_timevalue`,`invoice_id`,`return_deliveryboy_id`,`expected_delivery_time`,`completed_date`,`type`,`singature`) values (1,1,1,3,191,3,'400','1200','0',NULL,3,'120.00',1,'vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',0,NULL,'0','','','','2018-08-11 17:38:36',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(2,2,1,3,190,1,'250','250','75',NULL,3,'25.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,NULL,'0','','','','2018-08-13 12:54:02',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(3,3,9,3,190,1,'750','750',NULL,NULL,3,'97.50',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,NULL,'0','','','','2018-08-16 17:31:55',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(4,4,6,3,190,1,'395','395','75',NULL,2,'39.50',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'Min 2 hrs - Max 24 hrs','0','','','','2018-08-17 12:55:43',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(5,6,11,3,190,1,'400','400','75',NULL,1,'52.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',NULL,NULL,'1','','','','2018-08-17 13:16:23',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(6,7,11,3,190,1,'400','400','75',NULL,3,'52.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'Min 2 hrs - Max 24 hrs','0','','','','2018-08-17 13:24:56',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(7,9,4,3,190,1,'90','90','75',NULL,2,'18.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'Min 2 hrs - Max 24 hrs','0','','','','2018-08-17 13:26:45',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(8,10,1,3,190,1,'400','400',NULL,NULL,1,'40.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',NULL,NULL,'1','','','','2018-08-18 18:06:25',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(9,11,4,3,191,1,'90','90','75',NULL,1,'18.00',1,'vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',NULL,NULL,'1','','','','2018-08-20 11:44:45',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(10,12,1,3,191,1,'425','425','75',NULL,3,'42.50',1,'vasudevareddy549@gmail.com','8500050944','Plot No. 177, Sri Vani Nilayam, 1st floor Beside Sri Chaitanya High School, Sardar Patel Nagar, ','Opp Nizampet X-Road, Hyderabad, ','500072','hyderbad','ts',0,NULL,'0','','','','2018-08-20 12:01:56',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(11,13,12,3,190,1,'400','400','75',NULL,3,'52.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'','0',' black','','','2018-08-20 15:44:53',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(12,14,12,3,190,1,'400','400','75',NULL,3,'52.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,'','0',' black','','','2018-08-20 15:48:05',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(13,15,10,3,190,1,'1600','1600',NULL,NULL,1,'208.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',NULL,NULL,'1','','','','2018-08-20 16:00:40',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(14,16,6,3,190,1,'319.2','319.2','75',NULL,3,'31.92',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,NULL,'0','','','','2018-08-20 16:19:41',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(15,17,2,3,190,1,'500','500',NULL,NULL,2,'50.00',1,'aryasatheesan12345@gmail.com','9550252384','Nagole New Nagole','Beside Balaji Temple','500072','Hyderabad','Telangana',0,NULL,'0','','','','2018-08-20 16:21:03',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL),(16,18,16,3,193,1,'160','160','75',NULL,2,'20.80',1,'ramu.kithada@gmail.com','9951040410','ramalayam street  kukatpally','near bogbazar','500038','hyderabad','telangana',0,NULL,'0','','','','2018-08-31 14:26:25',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,' today 10 pm',NULL,'Delivered',NULL);

/*Table structure for table `order_status` */

DROP TABLE IF EXISTS `order_status`;

CREATE TABLE `order_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_item_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status_confirmation` int(11) DEFAULT NULL,
  `status_packing` int(11) DEFAULT NULL,
  `status_road` int(11) DEFAULT NULL,
  `status_deliverd` int(11) DEFAULT '0',
  `status_refund` enum('Refund','Exchange','Replacement','cancel') DEFAULT NULL,
  `region` text,
  `color` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `uksize` varchar(250) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `comments` text,
  `reason` varchar(250) DEFAULT NULL,
  `cancel_date` datetime DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `order_status` */

insert  into `order_status`(`status_id`,`order_item_id`,`order_id`,`item_id`,`status_confirmation`,`status_packing`,`status_road`,`status_deliverd`,`status_refund`,`region`,`color`,`size`,`uksize`,`create_time`,`update_time`,`delivery_boy_id`,`comments`,`reason`,`cancel_date`) values (1,1,1,1,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-11 05:38:36','2018-08-11 05:38:36',NULL,NULL,NULL,NULL),(2,2,2,1,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-13 12:54:02','2018-08-13 12:54:02',NULL,NULL,NULL,NULL),(3,3,3,9,5,NULL,NULL,0,'cancel',NULL,NULL,NULL,NULL,'2018-08-16 05:31:55','2018-08-16 05:31:55',NULL,'','order placed by mistake','2018-08-17 01:08:45'),(4,4,4,6,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-17 12:55:43','2018-08-17 12:55:43',NULL,NULL,NULL,NULL),(5,5,6,11,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-17 01:16:23','2018-08-17 01:16:23',NULL,NULL,NULL,NULL),(6,6,7,11,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-17 01:24:56','2018-08-17 01:24:56',NULL,NULL,NULL,NULL),(7,7,9,4,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-17 01:26:45','2018-08-17 01:26:45',NULL,NULL,NULL,NULL),(8,8,10,1,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-18 06:06:25','2018-08-18 06:06:25',NULL,NULL,NULL,NULL),(9,9,11,4,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 11:44:45','2018-08-20 11:44:45',NULL,NULL,NULL,NULL),(10,10,12,1,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 12:01:56','2018-08-20 12:01:56',NULL,NULL,NULL,NULL),(11,11,13,12,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 03:44:53','2018-08-20 03:44:53',NULL,NULL,NULL,NULL),(12,12,14,12,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 03:48:05','2018-08-20 03:48:05',NULL,NULL,NULL,NULL),(13,13,15,10,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 04:00:40','2018-08-20 04:00:40',NULL,NULL,NULL,NULL),(14,14,16,6,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 04:19:41','2018-08-20 04:19:41',NULL,NULL,NULL,NULL),(15,15,17,2,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-20 04:21:03','2018-08-20 04:21:03',NULL,NULL,NULL,NULL),(16,16,18,16,1,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'2018-08-31 02:26:25','2018-08-31 02:26:25',NULL,NULL,NULL,NULL);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(250) DEFAULT NULL,
  `net_amount` varchar(250) DEFAULT NULL,
  `total_price` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `card_number` varchar(250) DEFAULT NULL,
  `bank_reference_number` varchar(250) DEFAULT NULL,
  `payment_mode` varchar(750) DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `hash` text,
  `razorpay_payment_id` text,
  `razorpay_order_id` text,
  `razorpay_signature` text,
  `payment_type` int(11) DEFAULT NULL,
  `amount_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`order_id`,`customer_id`,`transaction_id`,`net_amount`,`total_price`,`discount`,`card_number`,`bank_reference_number`,`payment_mode`,`order_status`,`created_at`,`seller_id`,`email`,`phone`,`hash`,`razorpay_payment_id`,`razorpay_order_id`,`razorpay_signature`,`payment_type`,`amount_status`) values (1,191,'','','','','','','',1,'2018-08-11 17:38:36',NULL,'','','',NULL,NULL,NULL,3,0),(2,190,'','','','','','','',1,'2018-08-13 12:54:02',NULL,'','','',NULL,NULL,NULL,3,0),(3,190,'','','','','','','',1,'2018-08-16 17:31:55',NULL,'','','',NULL,NULL,NULL,3,0),(4,190,'','','','','','','',1,'2018-08-17 12:55:43',NULL,'','','',NULL,NULL,NULL,2,0),(5,190,'','','','','','','',1,'2018-08-17 12:55:45',NULL,'','','',NULL,NULL,NULL,2,0),(6,190,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-17 13:16:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1),(7,190,'','','','','','','',1,'2018-08-17 13:24:56',NULL,'','','',NULL,NULL,NULL,3,0),(8,190,'','','','','','','',1,'2018-08-17 13:24:58',NULL,'','','',NULL,NULL,NULL,3,0),(9,190,'','','','','','','',1,'2018-08-17 13:26:45',NULL,'','','',NULL,NULL,NULL,2,0),(10,190,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-18 18:06:25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1),(11,191,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-20 11:44:44',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1),(12,191,'','','','','','','',1,'2018-08-20 12:01:56',NULL,'','','',NULL,NULL,NULL,3,0),(13,190,'','','','','','','',1,'2018-08-20 15:44:53',NULL,'','','',NULL,NULL,NULL,3,0),(14,190,'','','','','','','',1,'2018-08-20 15:48:05',NULL,'','','',NULL,NULL,NULL,3,0),(15,190,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-20 16:00:40',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1),(16,190,'','','','','','','',1,'2018-08-20 16:19:41',NULL,'','','',NULL,NULL,NULL,3,0),(17,190,'','','','','','','',1,'2018-08-20 16:21:03',NULL,'','','',NULL,NULL,NULL,2,0),(18,193,'','','','','','','',1,'2018-08-31 14:26:25',NULL,'','','',NULL,NULL,NULL,2,0);

/*Table structure for table `pincodes_list` */

DROP TABLE IF EXISTS `pincodes_list`;

CREATE TABLE `pincodes_list` (
  `pincode_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone` int(11) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created-at` datetime DEFAULT NULL,
  `hours` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pincode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `pincodes_list` */

insert  into `pincodes_list`(`pincode_id`,`zone`,`pincode`,`status`,`created-at`,`hours`) values (1,1,'500037',1,'2017-10-06 12:22:13','Min 2 hrs - Max 24 hrs'),(2,1,'500038',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(3,1,'500055',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(4,1,'500045',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(5,1,'500072',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(6,1,'500018',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(7,1,'500049',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(8,1,'502032',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(9,1,'500090',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(10,1,'500054',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(11,1,'500015',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(12,1,'500011',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(13,1,'500073',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(14,1,'500034',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(15,1,'500033',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(16,1,'500089',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(17,1,'500084',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(18,1,'500032',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(19,1,'500019',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(20,1,'500081',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(21,1,'500050',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs'),(22,1,'502319',1,'2017-10-06 13:47:18','Min 2 hrs - Max 24 hrs');

/*Table structure for table `pricewise_filters` */

DROP TABLE IF EXISTS `pricewise_filters`;

CREATE TABLE `pricewise_filters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(250) DEFAULT NULL,
  `category_id` varchar(250) DEFAULT NULL,
  `minamt` varchar(250) DEFAULT NULL,
  `group` varchar(250) DEFAULT NULL,
  `minimum_price` varchar(250) DEFAULT NULL,
  `maximum_price` varchar(250) DEFAULT NULL,
  `offer` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `sim_type` varchar(250) DEFAULT NULL,
  `camera` varchar(250) DEFAULT NULL,
  `internal_memeory` varchar(250) DEFAULT NULL,
  `screen_size` varchar(250) DEFAULT NULL,
  `Processor` varchar(250) DEFAULT NULL,
  `printer_type` varchar(250) DEFAULT NULL,
  `type` varbinary(250) DEFAULT NULL,
  `max_copies` varchar(250) DEFAULT NULL,
  `paper_size` varchar(250) DEFAULT NULL,
  `headphone_jack` varchar(250) DEFAULT NULL,
  `noise_reduction` varchar(250) DEFAULT NULL,
  `usb_port` varchar(250) DEFAULT NULL,
  `compatible_for` varchar(250) DEFAULT NULL,
  `scanner_type` varchar(250) DEFAULT NULL,
  `resolution` varchar(250) DEFAULT NULL,
  `f_stop` varchar(250) DEFAULT NULL,
  `minimum_focusing_distance` varchar(250) DEFAULT NULL,
  `aperture_withmaxfocal_length` varchar(250) DEFAULT NULL,
  `picture_angle` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `occasion` varchar(250) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `collar_type` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `sleeve` varchar(250) DEFAULT NULL,
  `look` varchar(250) DEFAULT NULL,
  `style_code` varchar(250) DEFAULT NULL,
  `inner_material` varchar(250) DEFAULT NULL,
  `waterproof` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `pricewise_filters` */

insert  into `pricewise_filters`(`id`,`ip_address`,`category_id`,`minamt`,`group`,`minimum_price`,`maximum_price`,`offer`,`brand`,`discount`,`colour`,`size`,`ram`,`os`,`sim_type`,`camera`,`internal_memeory`,`screen_size`,`Processor`,`printer_type`,`type`,`max_copies`,`paper_size`,`headphone_jack`,`noise_reduction`,`usb_port`,`compatible_for`,`scanner_type`,`resolution`,`f_stop`,`minimum_focusing_distance`,`aperture_withmaxfocal_length`,`picture_angle`,`weight`,`occasion`,`material`,`collar_type`,`gender`,`sleeve`,`look`,`style_code`,`inner_material`,`waterproof`,`create_at`) values (26,'159.203.42.143',NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','2018-08-17 16:07:00');

/*Table structure for table `product_color_list` */

DROP TABLE IF EXISTS `product_color_list`;

CREATE TABLE `product_color_list` (
  `p_color_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `color_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`p_color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=605 DEFAULT CHARSET=latin1;

/*Data for the table `product_color_list` */

insert  into `product_color_list`(`p_color_id`,`item_id`,`color_name`,`create_at`,`status`) values (590,307,'Black','2017-09-02 13:46:06',1),(591,307,'Brown','2017-09-02 13:46:06',1),(592,307,'Blue','2017-09-02 13:46:06',1),(593,307,'Green','2017-09-02 13:46:06',1),(594,314,'Black','2017-09-02 14:54:00',1),(595,314,'Blue','2017-09-02 14:54:00',1),(596,314,'Green','2017-09-02 14:54:00',1),(597,317,'Black','2017-09-05 16:37:25',1),(598,317,'Green','2017-09-05 16:37:25',1),(599,317,'Orange','2017-09-05 16:37:25',1),(600,317,'Red','2017-09-05 16:37:25',1),(601,317,'Yellow','2017-09-05 16:37:25',1),(602,325,'balck','2017-09-12 18:26:41',1),(603,325,'red','2017-09-12 18:26:41',1),(604,325,'green','2017-09-12 18:26:41',1);

/*Table structure for table `product_size_list` */

DROP TABLE IF EXISTS `product_size_list`;

CREATE TABLE `product_size_list` (
  `p_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `p_size_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`p_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_size_list` */

/*Table structure for table `product_spcifications` */

DROP TABLE IF EXISTS `product_spcifications`;

CREATE TABLE `product_spcifications` (
  `specification_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `spc_name` varchar(250) DEFAULT NULL,
  `spc_value` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`specification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_spcifications` */

/*Table structure for table `product_uksize_list` */

DROP TABLE IF EXISTS `product_uksize_list`;

CREATE TABLE `product_uksize_list` (
  `p_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `p_size_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`p_size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `product_uksize_list` */

insert  into `product_uksize_list`(`p_size_id`,`item_id`,`p_size_name`,`create_at`) values (1,314,'10','2017-09-02 14:54:00'),(2,314,'28','2017-09-02 14:54:00'),(3,314,'30','2017-09-02 14:54:00'),(4,314,'32','2017-09-02 14:54:00'),(5,314,'40','2017-09-02 14:54:00'),(6,317,'10','2017-09-05 16:37:24'),(7,317,'28','2017-09-05 16:37:25'),(8,317,'32','2017-09-05 16:37:25'),(9,317,'40','2017-09-05 16:37:25');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subitemid` int(11) DEFAULT NULL,
  `itemwise_id` int(11) DEFAULT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `item_status` int(11) DEFAULT '1',
  `item_cost` varchar(250) DEFAULT NULL,
  `special_price` varchar(250) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `highlights` text,
  `description` text,
  `warranty_summary` text,
  `warranty_type` varchar(250) DEFAULT NULL,
  `service_type` varchar(250) DEFAULT NULL,
  `return_policy` text,
  `brand` varchar(250) DEFAULT NULL,
  `product_code` varchar(250) DEFAULT NULL,
  `Processor` varchar(250) DEFAULT NULL,
  `screen_size` varchar(250) DEFAULT NULL,
  `internal_memeory` varchar(250) DEFAULT NULL,
  `camera` varchar(250) DEFAULT NULL,
  `sim_type` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `model_name` varchar(250) DEFAULT NULL,
  `model_id` varchar(250) DEFAULT NULL,
  `no_of_copartments` varchar(250) DEFAULT NULL,
  `expand_memory` varchar(250) DEFAULT NULL,
  `primary_camera` varchar(250) DEFAULT NULL,
  `primary_camera_feature` varchar(250) DEFAULT NULL,
  `secondary_camera` varchar(250) DEFAULT NULL,
  `secondary_camera_feature` varchar(250) DEFAULT NULL,
  `video_recording` varchar(250) DEFAULT NULL,
  `hd_recording` varchar(250) DEFAULT NULL,
  `flash` varchar(250) DEFAULT NULL,
  `other_camera_features` varchar(250) DEFAULT NULL,
  `battery_capacity` varchar(250) DEFAULT NULL,
  `talk_time` varchar(250) DEFAULT NULL,
  `standby_time` varchar(250) DEFAULT NULL,
  `operating_frequency` varchar(250) DEFAULT NULL,
  `preinstalled_browser` varchar(250) DEFAULT NULL,
  `2g` varchar(250) DEFAULT NULL,
  `3g` varchar(250) DEFAULT NULL,
  `4g` varchar(250) DEFAULT NULL,
  `wifi` varchar(250) DEFAULT NULL,
  `gps` varchar(250) DEFAULT NULL,
  `edge` varchar(250) DEFAULT NULL,
  `edge_features` varchar(250) DEFAULT NULL,
  `bluetooth` varchar(250) DEFAULT NULL,
  `nfc` varchar(250) DEFAULT NULL,
  `usb_connectivity` varchar(250) DEFAULT NULL,
  `music_player` varchar(250) DEFAULT NULL,
  `video_player` varchar(250) DEFAULT NULL,
  `audio_jack` varchar(250) DEFAULT NULL,
  `gpu` varchar(250) DEFAULT NULL,
  `sim_size` varchar(250) DEFAULT NULL,
  `sim_supported` varchar(250) DEFAULT NULL,
  `call_memory` varchar(250) DEFAULT NULL,
  `sms_memory` varchar(250) DEFAULT NULL,
  `phone_book_memory` varchar(250) DEFAULT NULL,
  `sensors` varchar(250) DEFAULT NULL,
  `java` varchar(250) DEFAULT NULL,
  `insales_package` varchar(250) DEFAULT NULL,
  `dislay_resolution` varchar(250) DEFAULT NULL,
  `display_type` varchar(250) DEFAULT NULL,
  `ingredients` varchar(250) DEFAULT NULL,
  `key_feature` varchar(250) DEFAULT NULL,
  `unit` varchar(250) DEFAULT NULL,
  `packingtype` varchar(250) DEFAULT NULL,
  `disclaimer` text,
  `colors` varchar(250) DEFAULT NULL,
  `wash_care` varchar(250) DEFAULT NULL,
  `style_code` varchar(250) DEFAULT NULL,
  `look` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `occasion` varchar(250) DEFAULT NULL,
  `pattern` varchar(250) DEFAULT NULL,
  `sleeve` varchar(250) DEFAULT NULL,
  `fit` varchar(250) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `collar_type` varchar(250) DEFAULT NULL,
  `set_contents` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `neck_type` varchar(250) DEFAULT NULL,
  `package_contents` varchar(250) DEFAULT NULL,
  `style` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `ideal_for` varchar(250) DEFAULT NULL,
  `blouse_length` varchar(250) DEFAULT NULL,
  `saree_length` varchar(250) DEFAULT NULL,
  `pockets` varchar(250) DEFAULT NULL,
  `length` varchar(250) DEFAULT NULL,
  `waterproof` varchar(250) DEFAULT NULL,
  `laptop_compartment` varchar(250) DEFAULT NULL,
  `closure` varchar(250) DEFAULT NULL,
  `wheels` varchar(250) DEFAULT NULL,
  `no_of_pockets` varchar(250) DEFAULT NULL,
  `inner_material` varchar(250) DEFAULT NULL,
  `product_dimension` varchar(250) DEFAULT NULL,
  `f_stop` varchar(250) DEFAULT NULL,
  `picture_angle` varchar(250) DEFAULT NULL,
  `minimum_focusing_distance` varchar(250) DEFAULT NULL,
  `aperture_withmaxfocal_length` varchar(250) DEFAULT NULL,
  `aperture_with_minfocal_length` varchar(250) DEFAULT NULL,
  `maximum_focal_length` varchar(250) DEFAULT NULL,
  `maximum_reproduction_ratio` varchar(250) DEFAULT NULL,
  `lens_construction` varchar(250) DEFAULT NULL,
  `lens_hood` varchar(250) DEFAULT NULL,
  `lens_case` varchar(250) DEFAULT NULL,
  `lens_cap` varchar(250) DEFAULT NULL,
  `filter_attachment_size` varchar(250) DEFAULT NULL,
  `dimension` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `resolution` varchar(250) DEFAULT NULL,
  `sensor_type` varchar(250) DEFAULT NULL,
  `lcd_screen_size` varchar(250) DEFAULT NULL,
  `battery_type` varchar(250) DEFAULT NULL,
  `lens_mount` varchar(250) DEFAULT NULL,
  `exposure_mode` varchar(250) DEFAULT NULL,
  `meter_coupling` varchar(250) DEFAULT NULL,
  `lens_auto_focus` varchar(250) DEFAULT NULL,
  `focus_length` varchar(250) DEFAULT NULL,
  `focus_point` varchar(250) DEFAULT NULL,
  `focus_lock` varchar(250) DEFAULT NULL,
  `manual_focus` varchar(250) DEFAULT NULL,
  `af_area_mode` varchar(250) DEFAULT NULL,
  `detection_range` varchar(250) DEFAULT NULL,
  `number_of_dots_effective_pixels` varchar(250) DEFAULT NULL,
  `brightness_setting` varchar(250) DEFAULT NULL,
  `viewfinder` varchar(250) DEFAULT NULL,
  `viewfindermagnifiaction` varchar(250) DEFAULT NULL,
  `aspect_ratio` varchar(250) DEFAULT NULL,
  `image_size` varchar(250) DEFAULT NULL,
  `image_resolution` varchar(250) DEFAULT NULL,
  `video_resolution` varchar(250) DEFAULT NULL,
  `flash_mode` varchar(250) DEFAULT NULL,
  `flash_range` varchar(250) DEFAULT NULL,
  `built_in_flash` varchar(250) DEFAULT NULL,
  `external_flash` varchar(250) DEFAULT NULL,
  `audio_recording_device` varchar(250) DEFAULT NULL,
  `audio_recording_format` varchar(250) DEFAULT NULL,
  `video_compression` varchar(250) DEFAULT NULL,
  `face_detection` varchar(250) DEFAULT NULL,
  `video_format` varchar(250) DEFAULT NULL,
  `image_format` varchar(250) DEFAULT NULL,
  `microphone` varchar(250) DEFAULT NULL,
  `pictbridge` varchar(250) DEFAULT NULL,
  `card_type` varchar(250) DEFAULT NULL,
  `supplied_battery` varchar(250) DEFAULT NULL,
  `ac_adapter` varchar(250) DEFAULT NULL,
  `iso_rating` varchar(250) DEFAULT NULL,
  `iso_sensitivity` varchar(250) DEFAULT NULL,
  `dust_reduction` varchar(250) DEFAULT NULL,
  `metering_method` varchar(250) DEFAULT NULL,
  `metering_system` varchar(250) DEFAULT NULL,
  `supported_languages` varchar(250) DEFAULT NULL,
  `sync_terminal` varchar(250) DEFAULT NULL,
  `view_finder` varchar(250) DEFAULT NULL,
  `white_balancing` varchar(250) DEFAULT NULL,
  `hdmi` varchar(250) DEFAULT NULL,
  `self_timer` varchar(250) DEFAULT NULL,
  `scene_modes` varchar(250) DEFAULT NULL,
  `environment` varchar(250) DEFAULT NULL,
  `series` varchar(250) DEFAULT NULL,
  `part_number` varchar(250) DEFAULT NULL,
  `hdd_capacity` varchar(250) DEFAULT NULL,
  `processorbrand` varchar(250) DEFAULT NULL,
  `variant` varchar(250) DEFAULT NULL,
  `chipset` varchar(250) DEFAULT NULL,
  `clock_speed` varchar(250) DEFAULT NULL,
  `cache` varchar(250) DEFAULT NULL,
  `screen_type` varchar(250) DEFAULT NULL,
  `graphic_processor` varchar(250) DEFAULT NULL,
  `memory_slots` varchar(250) DEFAULT NULL,
  `rpm` varchar(250) DEFAULT NULL,
  `optical_drive` varchar(250) DEFAULT NULL,
  `wan` varchar(250) DEFAULT NULL,
  `ethernet` varchar(250) DEFAULT NULL,
  `vgaport` varchar(250) DEFAULT NULL,
  `usb_port` varchar(250) DEFAULT NULL,
  `hdmi_port` varchar(250) DEFAULT NULL,
  `multi_card_slot` varchar(250) DEFAULT NULL,
  `web_camera` varchar(250) DEFAULT NULL,
  `keyboard` varchar(250) DEFAULT NULL,
  `speakers` varchar(250) DEFAULT NULL,
  `mic_in` varchar(250) DEFAULT NULL,
  `power_supply` varchar(250) DEFAULT NULL,
  `battery_backup` varchar(250) DEFAULT NULL,
  `battery_cell` varchar(250) DEFAULT NULL,
  `adapter` varchar(250) DEFAULT NULL,
  `office` varchar(250) DEFAULT NULL,
  `fingerprint_point` varchar(250) DEFAULT NULL,
  `noise_reduction` varchar(250) DEFAULT NULL,
  `connectivity` varchar(250) DEFAULT NULL,
  `headphone_jack` varchar(250) DEFAULT NULL,
  `compatible_for` varchar(250) DEFAULT NULL,
  `total_power_output` varchar(250) DEFAULT NULL,
  `sound_system` varchar(250) DEFAULT NULL,
  `speaker_driver` varchar(250) DEFAULT NULL,
  `power` varchar(250) DEFAULT NULL,
  `wired_wireless` varchar(250) DEFAULT NULL,
  `bluetooth_range` varchar(250) DEFAULT NULL,
  `model_series` varchar(250) DEFAULT NULL,
  `installation` varchar(250) DEFAULT NULL,
  `warranty_card` varchar(250) DEFAULT NULL,
  `functions` varchar(250) DEFAULT NULL,
  `printer_type` varchar(250) DEFAULT NULL,
  `interface` varchar(250) DEFAULT NULL,
  `printer_output` varchar(250) DEFAULT NULL,
  `max_print_resolution` varchar(250) DEFAULT NULL,
  `print_speed` varchar(250) DEFAULT NULL,
  `scanner_type` varchar(250) DEFAULT NULL,
  `document_size` varchar(250) DEFAULT NULL,
  `scanning_resolution` varchar(250) DEFAULT NULL,
  `copies_from` varchar(250) DEFAULT NULL,
  `copy_size` varchar(250) DEFAULT NULL,
  `iso_29183` varchar(250) DEFAULT NULL,
  `noise_level` varchar(250) DEFAULT NULL,
  `paper_hold_input` varchar(250) DEFAULT NULL,
  `paper_hold_output` varchar(250) DEFAULT NULL,
  `paper_size` varchar(250) DEFAULT NULL,
  `print_margin` varchar(250) DEFAULT NULL,
  `standby` varchar(250) DEFAULT NULL,
  `operating_temperature_range` varchar(250) DEFAULT NULL,
  `frequency` varchar(250) DEFAULT NULL,
  `sole_material` varchar(250) DEFAULT NULL,
  `fastening` varchar(250) DEFAULT NULL,
  `toe_shape` varchar(250) DEFAULT NULL,
  `ean_upc` varchar(250) DEFAULT NULL,
  `useage` varchar(250) DEFAULT NULL,
  `factor` varchar(250) DEFAULT NULL,
  `connector1` varchar(250) DEFAULT NULL,
  `connector2` varchar(250) DEFAULT NULL,
  `portable` varchar(250) DEFAULT NULL,
  `maximumbrightness` varchar(250) DEFAULT NULL,
  `projectionratio` varchar(250) DEFAULT NULL,
  `contrastratio` varchar(250) DEFAULT NULL,
  `outputperspeaker` varchar(250) DEFAULT NULL,
  `powersupply` varchar(250) DEFAULT NULL,
  `powerconsumption` varchar(250) DEFAULT NULL,
  `minopertingtemperature` varchar(250) DEFAULT NULL,
  `maxopertingtemperature` varchar(250) DEFAULT NULL,
  `remotecontrol` varchar(250) DEFAULT NULL,
  `voltagerange` varchar(250) DEFAULT NULL,
  `turbospeed` varchar(250) DEFAULT NULL,
  `graphics` varchar(250) DEFAULT NULL,
  `capacity` varchar(250) DEFAULT NULL,
  `datarate` varchar(250) DEFAULT NULL,
  `technology` varchar(250) DEFAULT NULL,
  `externaldrivebays` varchar(250) DEFAULT NULL,
  `internaldrivebays` varchar(250) DEFAULT NULL,
  `micport` varchar(250) DEFAULT NULL,
  `inputvoltage` varchar(250) DEFAULT NULL,
  `outputvoltage` varchar(250) DEFAULT NULL,
  `inputfrequency` varchar(250) DEFAULT NULL,
  `item_image` varchar(250) DEFAULT NULL,
  `item_image1` varchar(250) DEFAULT NULL,
  `item_image2` varchar(250) DEFAULT NULL,
  `item_image3` varchar(250) DEFAULT NULL,
  `item_image4` varchar(250) DEFAULT NULL,
  `item_image5` varchar(250) DEFAULT NULL,
  `item_image6` varchar(250) DEFAULT NULL,
  `item_image7` varchar(250) DEFAULT NULL,
  `admin_status` int(11) DEFAULT '0',
  `offer_percentage` varbinary(250) DEFAULT NULL,
  `offer_amount` varchar(250) DEFAULT NULL,
  `offer_type` int(11) DEFAULT NULL,
  `offer_combo_item_id` int(111) DEFAULT NULL,
  `offer_combo_item_name` varchar(250) DEFAULT NULL,
  `offer_expairdate` varchar(250) DEFAULT NULL,
  `seller_location_area` int(11) DEFAULT NULL,
  `yes` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `offers` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`item_id`,`seller_id`,`category_id`,`subcategory_id`,`subitemid`,`itemwise_id`,`item_name`,`item_status`,`item_cost`,`special_price`,`item_quantity`,`highlights`,`description`,`warranty_summary`,`warranty_type`,`service_type`,`return_policy`,`brand`,`product_code`,`Processor`,`screen_size`,`internal_memeory`,`camera`,`sim_type`,`os`,`colour`,`ram`,`model_name`,`model_id`,`no_of_copartments`,`expand_memory`,`primary_camera`,`primary_camera_feature`,`secondary_camera`,`secondary_camera_feature`,`video_recording`,`hd_recording`,`flash`,`other_camera_features`,`battery_capacity`,`talk_time`,`standby_time`,`operating_frequency`,`preinstalled_browser`,`2g`,`3g`,`4g`,`wifi`,`gps`,`edge`,`edge_features`,`bluetooth`,`nfc`,`usb_connectivity`,`music_player`,`video_player`,`audio_jack`,`gpu`,`sim_size`,`sim_supported`,`call_memory`,`sms_memory`,`phone_book_memory`,`sensors`,`java`,`insales_package`,`dislay_resolution`,`display_type`,`ingredients`,`key_feature`,`unit`,`packingtype`,`disclaimer`,`colors`,`wash_care`,`style_code`,`look`,`size`,`material`,`occasion`,`pattern`,`sleeve`,`fit`,`gender`,`collar_type`,`set_contents`,`type`,`neck_type`,`package_contents`,`style`,`age`,`ideal_for`,`blouse_length`,`saree_length`,`pockets`,`length`,`waterproof`,`laptop_compartment`,`closure`,`wheels`,`no_of_pockets`,`inner_material`,`product_dimension`,`f_stop`,`picture_angle`,`minimum_focusing_distance`,`aperture_withmaxfocal_length`,`aperture_with_minfocal_length`,`maximum_focal_length`,`maximum_reproduction_ratio`,`lens_construction`,`lens_hood`,`lens_case`,`lens_cap`,`filter_attachment_size`,`dimension`,`weight`,`resolution`,`sensor_type`,`lcd_screen_size`,`battery_type`,`lens_mount`,`exposure_mode`,`meter_coupling`,`lens_auto_focus`,`focus_length`,`focus_point`,`focus_lock`,`manual_focus`,`af_area_mode`,`detection_range`,`number_of_dots_effective_pixels`,`brightness_setting`,`viewfinder`,`viewfindermagnifiaction`,`aspect_ratio`,`image_size`,`image_resolution`,`video_resolution`,`flash_mode`,`flash_range`,`built_in_flash`,`external_flash`,`audio_recording_device`,`audio_recording_format`,`video_compression`,`face_detection`,`video_format`,`image_format`,`microphone`,`pictbridge`,`card_type`,`supplied_battery`,`ac_adapter`,`iso_rating`,`iso_sensitivity`,`dust_reduction`,`metering_method`,`metering_system`,`supported_languages`,`sync_terminal`,`view_finder`,`white_balancing`,`hdmi`,`self_timer`,`scene_modes`,`environment`,`series`,`part_number`,`hdd_capacity`,`processorbrand`,`variant`,`chipset`,`clock_speed`,`cache`,`screen_type`,`graphic_processor`,`memory_slots`,`rpm`,`optical_drive`,`wan`,`ethernet`,`vgaport`,`usb_port`,`hdmi_port`,`multi_card_slot`,`web_camera`,`keyboard`,`speakers`,`mic_in`,`power_supply`,`battery_backup`,`battery_cell`,`adapter`,`office`,`fingerprint_point`,`noise_reduction`,`connectivity`,`headphone_jack`,`compatible_for`,`total_power_output`,`sound_system`,`speaker_driver`,`power`,`wired_wireless`,`bluetooth_range`,`model_series`,`installation`,`warranty_card`,`functions`,`printer_type`,`interface`,`printer_output`,`max_print_resolution`,`print_speed`,`scanner_type`,`document_size`,`scanning_resolution`,`copies_from`,`copy_size`,`iso_29183`,`noise_level`,`paper_hold_input`,`paper_hold_output`,`paper_size`,`print_margin`,`standby`,`operating_temperature_range`,`frequency`,`sole_material`,`fastening`,`toe_shape`,`ean_upc`,`useage`,`factor`,`connector1`,`connector2`,`portable`,`maximumbrightness`,`projectionratio`,`contrastratio`,`outputperspeaker`,`powersupply`,`powerconsumption`,`minopertingtemperature`,`maxopertingtemperature`,`remotecontrol`,`voltagerange`,`turbospeed`,`graphics`,`capacity`,`datarate`,`technology`,`externaldrivebays`,`internaldrivebays`,`micport`,`inputvoltage`,`outputvoltage`,`inputfrequency`,`item_image`,`item_image1`,`item_image2`,`item_image3`,`item_image4`,`item_image5`,`item_image6`,`item_image7`,`admin_status`,`offer_percentage`,`offer_amount`,`offer_type`,`offer_combo_item_id`,`offer_combo_item_name`,`offer_expairdate`,`seller_location_area`,`yes`,`created_at`,`discount`,`offers`,`name`,`updated_at`) values (1,3,37,247,478,17,'Sweet Corn',1,'130','120',20,'',NULL,'','','','','','ORG-004','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','500 gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Store the fresh sweet corns along with the husks in the refrigerator. Can be eaten raw directly on the cob after boiling, or can be added to salads, soups, sandwiches, chats, rolls and pastas.  Prepare delicious sweet corn vadas, fritters, rice and c','','','','','','','','','','','','','','','','','','','','','','','','','','0.49140200 153605443240004992_14-fresho-sweet-corn.jpg','0.78649200 153605443440004992-4_1-fresho-sweet-corn.jpg','0.20863900 153605443540004992-3_1-fresho-sweet-corn.jpg','','','','','',0,'15.00','75',1,0,NULL,'2018-08-21 02:30:00 PM',1,1,'2018-09-04 15:17:20','10.00','7.69','Sweet Corn','2018-09-04 15:58:24'),(2,3,37,247,487,2,'Kiwi',1,'175','160',25,'',NULL,'','','','','','ORG-006','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','600 gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Store them in a cool, dry place away from direct sunlight. Cut and serve it chilled. Blend them into thick milkshakes, smoothies, juices. Add them in salads and bake delicious pies. The nutritive value and flavour are retained even on cooking.','','','','','','','','','','','','','','','','','','','','','','','','','','0.95272400 1536056058KiwiPyramid.jpg','0.96867200 1536056058index.jpg','0.98729900 15360560581.jpg','','','','','',0,'60.00','360',1,0,NULL,'2018-08-14 10:20:00 AM',1,1,'2018-09-04 15:44:19','15.00','8.57','Kiwi','2018-09-04 15:56:47'),(3,3,37,248,479,0,'Organic Liquid Plant Fertilizer',1,'540','500',50,'',NULL,'','','','','Nurseryland','NSL-001','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','250 ml','','','','','','','','','Liquid','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','250 ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Spray twice in a day','','','','','','','','','','','','','','','','','','','','','','','','','','0.13684500 1536052401Nurseryland-Liquid-Organic-Plant-Food-1L-900x900.jpg','0.72809200 1536052660organic_plant_food_liquid_larger.jpg','','','','','','',0,'25.00','100',2,0,NULL,'2018-08-13 03:32:00 PM',1,1,'2018-09-04 14:47:40','40.00','7.41','Organic Liquid Plant Fertilizer','2018-09-04 14:45:15'),(4,3,37,248,479,4,'Bud and Bloom Booster',1,'450','400',48,'',NULL,'','','','','DR. EARTH','DET-002','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','Liquid','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','500 ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Hose End Spray: Attach to your garden hose and spray desired area. Apply every two weeks for maximum results. Each bottle covers up to 1200 sq. ft.  Ingredients: Fish bone meal, mined potassium sulfate, fish meal, soft rock phosphate, kelp meal, seaw','','','','','','','','','','','','','','','','','','','','','','','','','','0.46942400 1536053470flower-girl-conc.jpg','0.47901500 153605347081zTjBySz9L._SY550_.jpg','0.47930200 1536053470images.jpg','','','','','',0,'80.00','360',5,0,NULL,'2018-08-23 01:02:01 PM',1,1,'2018-09-04 15:01:10','50.00','11.11','Bud and Bloom Booster','2018-09-04 14:52:30'),(5,3,37,249,481,19,'Cardamom',1,'225','210',10,'',NULL,'','','','','Hill Valley Spices','FES-289','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','100 gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Add the cardamom powder into your favourite sweets, soups. Tea and coffee made with cardamom are pleasantly aromatic and refreshing.','','','','','','','','','','','','','','','','','','','','','','','','','','0.82756200 153605822491eSXQ3E1BL._SX679_.jpg','0.83884300 153605822491PD2+Vc-wL._SL1500_.jpg','','','','','','',0,'70.00','210',5,0,NULL,'2018-08-21 04:57:18 PM',1,1,'2018-09-04 16:20:24','15.00','6.67','Cardamom','2018-09-04 16:00:59'),(6,3,37,249,481,5,'Rose Essential',0,'399','250',18,'',NULL,'','','','7 days Return','Natural Plant Flower Essentials','NPE-145','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','10 ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.33052300 1534240045rose eo.jpg','','','','','','','',0,'20.00','79.8',2,0,NULL,'2018-08-31 11:55:00 PM',1,1,'2018-08-14 15:17:25','149.00','37.34','Rose Essential','2018-08-18 16:31:43'),(7,3,37,250,482,6,'Tulsi Assorted Tea Bags',1,'1000','800',20,'',NULL,'','','','','Grenera','GRE-004','','','','','','','','','Organic Herbal Tea','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','20 tea bags-250grms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.54175500 1534497672tai.jpg','','','','','','','',0,'50.00','500',5,NULL,NULL,'2018-08-27 04:42:12 PM',1,1,'2018-08-17 14:51:12','200.00','20.00','Tulsi Assorted Tea Bags','2018-09-04 15:55:04'),(8,3,37,251,483,7,'Indhulekha Bringha Hair Cleanser',1,'1200','1100',15,'',NULL,'','','','','Indhulekha','IND-002','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.52274400 1534409859ayur shampoo.png','','','','','','','',0,'10.00','120',5,NULL,NULL,'2018-08-17 02:40:10 PM',1,1,'2018-08-16 14:29:49','100.00','8.33','Indhulekha Bringha Hair Cleanser','2018-08-16 16:32:15'),(9,3,37,250,484,8,'shri shri madhukari herbal tea',1,'1500','1200',19,'',NULL,'','','','','sri sri','SMH-128','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','100g','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.37608100 1534411671tp1.png','','','','','','','',0,'50.00','750',5,NULL,NULL,'2018-08-23 02:58:42 PM',1,1,'2018-08-16 14:57:51','300.00','20.00','shri shri madhukari herbal tea','2018-09-04 15:55:51'),(10,3,37,251,485,9,'Aryanveda Shampoo',1,'2000','500',4,'',NULL,'','','','','arya','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','250ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.98340700 1534412413aryanveda2.png','','','','','','','',0,'12.00','240',5,NULL,NULL,'2018-09-05 04:45:15 PM',1,1,'2018-08-16 15:10:16','2,000.00','100.00','Aryanveda Shampoo','2018-08-16 16:32:00'),(11,3,37,251,483,10,'Coconut Milk Shampoo',1,'800','400',8,'',NULL,'','','','','Indhulekha','IND-003','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','250ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.66116000 1534415081milk shampoo.png','','','','','','','',0,'11.00','88',5,NULL,NULL,'2018-09-11 04:31:29 PM',1,1,'2018-08-16 15:54:41','800.00','100.00','Coconut Milk Shampoo','2018-08-16 16:31:12'),(12,3,37,251,483,11,'Bringha Hair Cleanser Sachets  black',1,'500','400',13,'',NULL,'','','','','Indhulekha','IND-004','','','','','','',' black','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','20 sachets','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.34696500 1534415524indu.png','','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-16 16:02:04','100.00','20.00','Bringha Hair Cleanser Sachets','2018-08-16 16:03:34'),(13,3,37,251,486,12,'Aryanveda Anti Dandruff Shampoo',1,'2500','1000',100,'',NULL,'','','','','arya','ADS-124','','','','','','','','','Anti Dandruff Shampoo','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','250ml','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','Twice in a Week','','','','','','','','','','','','','','','','','','','','','','','','','','0.38875500 1534416570anti dandruff.png','','','','','','','',0,'50.00','1250',5,NULL,NULL,'2018-08-21 05:25:40 PM',1,1,'2018-08-16 16:19:30','2,500.00','100.00','Aryanveda Anti Dandruff Shampoo','2018-09-04 15:02:01'),(14,3,37,247,478,1,'Tomato-Local Organically grown Red',1,'120','110',50,'',NULL,'','','','','','ORG-003','','','','','','','Red','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','5kg','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.28663500 1534846846T1.jpg','0.31108100 1534846846t2.jpg','','','','','','',0,'5.00','6',5,NULL,NULL,'2018-09-11 04:30:51 PM',1,1,'2018-08-21 15:50:46','10.00','8.33','Tomato-Local Organically grown','2018-09-04 15:57:12'),(15,3,37,247,478,2,' Onions',1,'150','120',60,'',NULL,'','','','','','ORG-002','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','5 kg','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.20970300 1534847224on2.jpg','0.21327300 1534847224on3.jpg','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-21 15:57:04','30.00','20.00',' Onions','2018-09-04 15:57:09'),(16,3,37,250,482,6,'Gtee- Green Tea',1,'170','160',24,'',NULL,'','','','','','GGT-258','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','500gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.53990500 153484932720004650_3-gtee-green-tea-lemon-ginger.jpg','','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-21 16:32:07','10.00','5.88','Gtee- Green Tea','2018-09-04 15:55:34'),(17,3,37,250,482,0,'Tetley Green Tea-LEmon & Honey',1,'450','420',100,'',NULL,'','','','','Tetley','ORG_003','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','500gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.24407800 153484956120004601_10-tetley-green-tea-lemon-honey.jpg','','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-21 16:36:01','30.00','6.67','Tetley Green Tea-LEmon & Honey',NULL),(18,3,37,248,480,3,'Top Rose Fertilizer',1,'250','200',500,'',NULL,'','','','','Top Rose','ORG-004','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','500gms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.73814300 1534849983TopRose1.png','0.74788100 1534849983tp2.png','','','','','','',0,'10.00','25',1,0,NULL,'2018-09-16 07:05:00 PM',1,1,'2018-08-21 16:43:03','50.00','20.00','Top Rose Fertilizer',NULL),(19,3,37,248,480,4,'Neem Mix Fertilizer',1,'150','120',1,'',NULL,'','','','','','ORG-005','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.66309300 1534850136neem mix1.png','0.68603900 1534850136nm2.png','','','','','','',0,'20.00','30',5,NULL,NULL,'2018-09-11 05:16:17 PM',1,1,'2018-08-21 16:45:36','30.00','20.00','Neem Mix Fertilizer',NULL),(20,3,37,249,481,5,'Royal Cloves',1,'120','110',100,'',NULL,'','','','','Royal','ORG-006','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.00375000 1534850745cl2.jpg','0.00420500 1534850745cl3.jpg','','','','','','',0,'8.00','9.6',5,NULL,NULL,'2018-09-11 04:27:46 PM',1,1,'2018-08-21 16:55:45','10.00','8.33','Royal Cloves',NULL),(21,3,37,249,481,13,'Black Pepper',1,'380','350',250,'',NULL,'','','','','Attar Ayurveda','ORG-007','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.27549700 1534851014bp1.jpg','0.27584300 1534851014bp2.jpg','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-21 17:00:14','30.00','7.89','Black Pepper',NULL),(22,3,37,249,481,14,'Cinnmon-Dalchini',1,'320','300',250,'',NULL,'','','','','Attar Ayurveda','ORG-008','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','250grms','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0.07274000 1534851464DALCHINI-compressor-510x510.jpg','0.07315200 1534851464Cinamon3-247x300.jpg','','','','','','',0,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-08-21 17:07:44','20.00','6.25','Cinnmon-Dalchini',NULL);

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ratings` */

insert  into `ratings`(`rating_id`,`review_id`,`customer_id`,`item_id`,`name`,`email`,`rating`,`seller_id`,`create_at`) values (5,5,190,1,'Arya Satheesan','aryasatheesan12345@gmail.com',3,3,'2018-08-20 14:23:43'),(6,6,190,1,'Arya Satheesan','aryasatheesan12345@gmail.com',5,3,'2018-08-20 14:25:07'),(7,8,190,11,'Arya Satheesan','aryasatheesan12345@gmail.com',4,3,'2018-08-20 14:39:02');

/*Table structure for table `referral_fee` */

DROP TABLE IF EXISTS `referral_fee`;

CREATE TABLE `referral_fee` (
  `referral_fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `referral_fee` varchar(500) NOT NULL,
  PRIMARY KEY (`referral_fee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `referral_fee` */

insert  into `referral_fee`(`referral_fee_id`,`category_id`,`subcategory_id`,`referral_fee`) values (1,1,1,'10%'),(2,1,3,'12%'),(3,2,11,'13%'),(5,3,6,'9%'),(6,3,12,'15%'),(7,3,13,'15%'),(8,4,14,'10%'),(9,4,15,'12%'),(10,2,16,'15%');

/*Table structure for table `rejected_orders_list` */

DROP TABLE IF EXISTS `rejected_orders_list`;

CREATE TABLE `rejected_orders_list` (
  `rejected_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_item_id` int(11) DEFAULT NULL,
  `delivery_boy_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`rejected_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rejected_orders_list` */

/*Table structure for table `replay_comments` */

DROP TABLE IF EXISTS `replay_comments`;

CREATE TABLE `replay_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `replay_comments` */

/*Table structure for table `request_for_services` */

DROP TABLE IF EXISTS `request_for_services`;

CREATE TABLE `request_for_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(500) COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(500) COLLATE utf8_bin NOT NULL,
  `select_plan` varchar(500) COLLATE utf8_bin NOT NULL,
  `replymsg` text COLLATE utf8_bin,
  `status` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `request_for_services` */

insert  into `request_for_services`(`service_id`,`seller_id`,`seller_name`,`phone_number`,`select_plan`,`replymsg`,`status`,`created_at`,`updated_at`) values (1,3,'anu','9502710179','Inventory management','Test...',0,'2018-08-13 15:44:22','2018-08-13 15:44:22');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `review_content` text,
  `seller_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `reviews` */

insert  into `reviews`(`review_id`,`customer_id`,`item_id`,`name`,`email`,`review_content`,`seller_id`,`create_at`) values (5,190,1,'Arya Satheesan','aryasatheesan12345@gmail.com','good',3,'2018-08-20 14:23:43'),(6,190,1,'Arya Satheesan','aryasatheesan12345@gmail.com','cvvv',3,'2018-08-20 14:25:07'),(7,190,1,'Arya Satheesan','aryasatheesan12345@gmail.com','test',3,'2018-08-20 14:26:25'),(8,190,11,'Arya Satheesan','aryasatheesan12345@gmail.com','Good product',3,'2018-08-20 14:39:02');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role`,`status`) values (1,'customer',1),(2,'admin',1),(4,'seller',1),(5,'inventory manager',1),(6,'deliveryboy',1);

/*Table structure for table `season_sales` */

DROP TABLE IF EXISTS `season_sales`;

CREATE TABLE `season_sales` (
  `season_sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item_price` varchar(250) DEFAULT NULL,
  `offer_percentage` varchar(11) DEFAULT NULL,
  `offer_amount` varchar(250) DEFAULT NULL,
  `intialdate` date DEFAULT NULL,
  `expairdate` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `home_page_status` int(11) DEFAULT '0',
  `preview_ok` int(11) DEFAULT '0',
  PRIMARY KEY (`season_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `season_sales` */

insert  into `season_sales`(`season_sales_id`,`item_id`,`seller_id`,`category_id`,`subcategory_id`,`item_price`,`offer_percentage`,`offer_amount`,`intialdate`,`expairdate`,`status`,`create_at`,`area`,`home_page_status`,`preview_ok`) values (1,3,3,37,248,'400','50.00','200','2018-08-13','2018-08-20 11:22:09 AM',0,'2018-08-13 11:22:09',1,1,0),(2,5,3,37,249,'300','70.00','210','2018-08-14','2018-08-21 04:57:18 PM',0,'2018-08-14 16:57:18',1,1,0),(3,9,3,37,250,'1500','50.00','750','2018-08-16','2018-08-23 02:58:42 PM',0,'2018-08-16 14:58:42',1,1,0),(4,5,3,37,249,'500','12.00','60','2018-08-18','2018-08-25 06:43:57 PM',0,'2018-08-18 18:43:57',1,1,0),(5,5,3,37,249,'500','15.00','75','2018-08-18','2018-08-25 06:44:35 PM',0,'2018-08-18 18:44:35',1,1,0),(6,5,3,37,249,'500','15.00','75','2018-08-18','2018-08-25 06:46:13 PM',0,'2018-08-18 18:46:13',1,1,0),(7,19,3,37,248,'150','20.00','30','2018-09-04','2018-09-11 05:16:17 PM',1,'2018-09-04 17:16:17',1,1,1);

/*Table structure for table `seller_all_notifications` */

DROP TABLE IF EXISTS `seller_all_notifications`;

CREATE TABLE `seller_all_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seller_all_notifications` */

/*Table structure for table `seller_categories` */

DROP TABLE IF EXISTS `seller_categories`;

CREATE TABLE `seller_categories` (
  `seller_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `seller_category_id` int(11) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `ip_address` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`seller_cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=407 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_categories` */

insert  into `seller_categories`(`seller_cat_id`,`seller_id`,`seller_category_id`,`category_name`,`created_at`,`updated_at`,`ip_address`) values (269,139,20,'ELECTRONICS','2017-10-27 04:59:12','2017-10-27 04:59:12',NULL),(271,141,20,'ELECTRONICS','2017-10-28 11:25:13','2017-10-28 11:25:13',NULL),(275,143,20,'ELECTRONICS','2017-11-24 04:00:43','2017-11-24 04:00:43','49.207.6.7'),(276,144,20,'ELECTRONICS','2017-11-28 05:08:17','2017-11-28 05:08:17','110.224.241.29'),(282,145,21,'Grocery','2017-12-13 11:02:00','2017-12-13 11:02:00','49.207.6.7'),(347,142,20,'Mobiles & Tablets','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(348,142,21,'Grocery','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(349,142,22,'Computers, Laptops & Accessories.','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(350,142,23,'TVs, ACs & Appliances','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(351,142,24,'Women\'s Fashion','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(352,142,35,'Bags & Outdoor','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(353,142,34,'Gifts Store','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(354,142,28,'Car & Bike Accessories ','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(355,142,18,'Home & Kitchen','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(356,142,19,'Men\'s Fashion','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(357,142,29,'Books & Stationary','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(358,142,30,'Kids Store','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(359,142,31,'Sports & Fitness','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(360,142,32,'Furniture & Home-Living','2017-12-27 11:54:42','2017-12-27 11:54:42',NULL),(361,147,18,'Home & Kitchen','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(362,147,19,'Men\'s Fashion','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(363,147,20,'Mobiles & Tablets','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(364,147,21,'Grocery','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(365,147,22,'Computers, Laptops & Accessories.','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(366,147,23,'TVs, ACs & Appliances','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(367,147,24,'Women\'s Fashion','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(368,147,28,'Car & Bike Accessories ','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(369,147,29,'Books & Stationary','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(370,147,30,'Kids Store','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(371,147,31,'Sports & Fitness','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(372,147,32,'Furniture & Home-Living','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(373,147,34,'Gifts Store','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(374,147,35,'Bags & Outdoor','2017-12-28 11:10:21','2017-12-28 11:10:21','122.175.88.214'),(379,150,19,'Men\'s Fashion','2018-01-10 04:44:41','2018-01-10 04:44:41','117.98.157.160'),(380,150,21,'Grocery','2018-01-10 04:44:41','2018-01-10 04:44:41','117.98.157.160'),(381,150,24,'Women\'s Fashion','2018-01-10 04:44:41','2018-01-10 04:44:41','117.98.157.160'),(384,146,22,'Computers, Laptops & Accessories.','2018-01-12 06:12:06','2018-01-12 06:12:06',NULL),(385,146,35,'Bags & Outdoor','2018-01-12 06:12:06','2018-01-12 06:12:06',NULL),(386,149,35,'Bags & Outdoor','2018-01-12 06:45:11','2018-01-12 06:45:11',NULL),(387,140,20,'Mobiles & Tablets','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(388,140,18,'Home & Kitchen','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(389,140,19,'Men\'s Fashion','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(390,140,21,'Grocery','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(391,140,22,'Computers, Laptops & Accessories.','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(392,140,23,'TVs, ACs & Appliances','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(393,140,32,'Furniture & Home-Living','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(394,140,24,'Women\'s Fashion','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(395,140,35,'Bags & Outdoor','2018-01-23 11:09:00','2018-01-23 11:09:00',NULL),(397,3,21,'Grocery','2018-08-11 03:12:06','2018-08-11 03:12:06','122.175.58.42'),(398,3,37,'Herbs & Homeopathy','2018-08-11 04:02:41','2018-08-11 04:02:41',NULL),(399,12,19,'Men\'s Fashion','2018-08-14 11:07:36','2018-08-14 11:07:36','::1'),(400,12,20,'Mobiles & Tablets','2018-08-14 11:07:36','2018-08-14 11:07:36','::1'),(401,12,37,'Herbs & Homeopathy','2018-08-14 11:07:36','2018-08-14 11:07:36','::1'),(402,13,18,'Home & Kitchen','2018-08-16 11:46:52','2018-08-16 11:46:52','::1'),(403,13,37,'Herbs & Homeopathy','2018-08-16 11:46:52','2018-08-16 11:46:52','::1');

/*Table structure for table `seller_payments` */

DROP TABLE IF EXISTS `seller_payments`;

CREATE TABLE `seller_payments` (
  `seller_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `cih_comission` varchar(500) NOT NULL,
  `net_profit` varchar(500) NOT NULL,
  `amount_status` int(11) NOT NULL DEFAULT '0',
  `invoice` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seller_payments` */

/*Table structure for table `seller_request` */

DROP TABLE IF EXISTS `seller_request`;

CREATE TABLE `seller_request` (
  `seller_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`seller_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_request` */

/*Table structure for table `seller_store_details` */

DROP TABLE IF EXISTS `seller_store_details`;

CREATE TABLE `seller_store_details` (
  `seller_store_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) DEFAULT NULL,
  `store_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `addrees1` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `addrees2` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `pin_code` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `other_shops` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `other_shops_location` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `deliveryes` int(11) DEFAULT NULL,
  `weblink` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tin_vat` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tinvatimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tan` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `tanimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `cst` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `cstimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `gstin` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `gstinimage` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `image` tinyblob,
  `ip_address` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`seller_store_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `seller_store_details` */

insert  into `seller_store_details`(`seller_store_details_id`,`seller_id`,`store_name`,`addrees1`,`addrees2`,`area`,`pin_code`,`other_shops`,`other_shops_location`,`deliveryes`,`weblink`,`tin_vat`,`tinvatimage`,`tan`,`tanimage`,`cst`,`cstimage`,`gstin`,`gstinimage`,`created_at`,`image`,`ip_address`) values (3,3,'sow','2-4-87','rd no n17',1,'500035','','',NULL,'','',NULL,'',NULL,'',NULL,NULL,NULL,'2018-08-11 15:12:39',NULL,'122.175.58.42'),(12,12,'testing','hyderbad','hyderbad',2,'516172','yes','Kukatpally',NULL,'www.reddy.com','',NULL,'',NULL,'',NULL,NULL,NULL,'2018-08-14 11:08:16',NULL,'::1'),(13,13,'testing','hyderbad','community hall',3,'516172','','',NULL,'','',NULL,'',NULL,'',NULL,NULL,NULL,'2018-08-16 11:48:06',NULL,'::1');

/*Table structure for table `sellers` */

DROP TABLE IF EXISTS `sellers`;

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_rand_id` varchar(250) DEFAULT NULL,
  `seller_name` varchar(20) DEFAULT NULL,
  `seller_email` varchar(50) DEFAULT NULL,
  `seller_mobile` bigint(20) DEFAULT NULL,
  `mobile_verification` varchar(20) DEFAULT NULL,
  `verifiation_yes` int(11) DEFAULT '0',
  `seller_password` varchar(60) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `password_status` varchar(250) DEFAULT NULL,
  `seller_address` text,
  `seller_location` varchar(500) DEFAULT NULL,
  `seller_shop` varchar(250) DEFAULT NULL,
  `seller_bank_account` varchar(250) DEFAULT NULL,
  `seller_aaccount_ifsc_code` varchar(250) DEFAULT NULL,
  `seller_account_name` varchar(250) DEFAULT NULL,
  `seller_pan_card` varchar(250) DEFAULT NULL,
  `seller_adhar` varchar(250) DEFAULT NULL,
  `seller_license` varchar(250) DEFAULT NULL,
  `seller_servicetime` varchar(250) DEFAULT NULL,
  `seller_bank` varchar(250) DEFAULT NULL,
  `seller_business_name` varchar(500) DEFAULT NULL,
  `seller_business_displayname` varchar(500) DEFAULT NULL,
  `seller_type_category` varchar(500) DEFAULT NULL,
  `seller_tan` varchar(500) DEFAULT NULL,
  `seller_gstin` varchar(500) DEFAULT NULL,
  `seller_pan` varchar(500) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `register_complete` int(11) DEFAULT '0',
  `profile_pic` varchar(500) DEFAULT NULL,
  `any_refer` varchar(250) DEFAULT NULL,
  `bank_complete` int(11) NOT NULL,
  `readcount` int(11) DEFAULT '0',
  `verification_otp` varchar(250) DEFAULT NULL,
  `ip_address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `sellers` */

insert  into `sellers`(`seller_id`,`seller_rand_id`,`seller_name`,`seller_email`,`seller_mobile`,`mobile_verification`,`verifiation_yes`,`seller_password`,`org_password`,`password_status`,`seller_address`,`seller_location`,`seller_shop`,`seller_bank_account`,`seller_aaccount_ifsc_code`,`seller_account_name`,`seller_pan_card`,`seller_adhar`,`seller_license`,`seller_servicetime`,`seller_bank`,`seller_business_name`,`seller_business_displayname`,`seller_type_category`,`seller_tan`,`seller_gstin`,`seller_pan`,`type`,`status`,`created_at`,`updated_at`,`register_complete`,`profile_pic`,`any_refer`,`bank_complete`,`readcount`,`verification_otp`,`ip_address`) values (3,'SEL307150','anu','anu.kulkarni3592@gmail.com',9502710179,NULL,0,'fcea920f7412b5da7be0cf42b8c93759','123456','0',NULL,NULL,NULL,'123456789','hdfc1234567','hdfc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-11 15:13:03','2018-08-11 15:13:03',1,'rose.jpg','',1,1,NULL,'122.175.58.42'),(12,'SEL848142','reddy','reddy@gmail.com',1234567890,NULL,0,'e10adc3949ba59abbe56e057f20f883e','123456','0',NULL,NULL,NULL,'32473655713','SBIN0002671','SBI',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-14 11:17:51','2018-08-14 11:17:51',1,NULL,'',1,1,NULL,'::1'),(13,'SEL236456','reddy','123@gmail.com',4878542124,NULL,0,'e10adc3949ba59abbe56e057f20f883e','123456','0',NULL,NULL,NULL,'32473655713','SBIN0002671','SBI',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-08-16 11:49:25','2018-08-16 11:49:25',1,NULL,'',1,1,NULL,'::1');

/*Table structure for table `servicefee` */

DROP TABLE IF EXISTS `servicefee`;

CREATE TABLE `servicefee` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_fee` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `servicefee` */

insert  into `servicefee`(`service_id`,`service_fee`,`created_at`,`updated_at`) values (1,'1.3%','2017-04-28 13:33:38','2017-05-10 09:11:30');

/*Table structure for table `shipping` */

DROP TABLE IF EXISTS `shipping`;

CREATE TABLE `shipping` (
  `weight_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_weight` int(11) NOT NULL,
  `shipping_charges` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

/*Data for the table `shipping` */

insert  into `shipping`(`weight_id`,`product_weight`,`shipping_charges`,`created_at`,`updated_at`) values (1,500,30,'2017-05-09 11:43:31','2017-05-10 11:33:28'),(2,1000,55,'2017-05-09 11:43:48','2017-05-09 11:43:48'),(3,1500,80,'2017-05-09 11:44:03','2017-05-09 11:44:03'),(4,2000,105,'2017-05-09 11:44:13','2017-05-09 11:44:13'),(5,2500,130,'2017-05-09 11:44:23','2017-05-09 11:44:23'),(6,3000,155,'2017-05-09 11:44:35','2017-05-09 11:44:35'),(7,3500,180,'2017-05-09 11:44:50','2017-05-09 11:44:50'),(8,4000,205,'2017-05-09 11:45:00','2017-05-09 11:45:00'),(9,4500,230,'2017-05-09 11:45:23','2017-05-09 11:45:23'),(10,5000,255,'2017-05-09 11:45:33','2017-05-09 11:45:33'),(11,6000,80,'2017-05-09 11:46:11','2017-05-09 11:46:11'),(12,7000,90,'2017-05-09 11:46:19','2017-05-09 11:46:19'),(13,8000,100,'2017-05-09 11:46:27','2017-05-09 11:46:27'),(14,9000,110,'2017-05-09 11:46:34','2017-05-09 11:46:34'),(15,10000,120,'2017-05-09 11:46:44','2017-05-09 11:46:44'),(16,11000,130,'2017-05-09 11:47:09','2017-05-09 11:47:09'),(17,12000,140,'2017-05-09 11:47:26','2017-05-09 11:47:26'),(18,13000,200,'2017-05-09 11:47:59','2017-05-09 11:47:59'),(19,14000,203,'2017-05-09 11:48:06','2017-05-09 11:48:06'),(20,15000,206,'2017-05-09 11:48:14','2017-05-09 11:48:14'),(21,16000,209,'2017-05-09 11:48:23','2017-05-09 11:48:23'),(22,17000,212,'2017-05-09 11:48:34','2017-05-09 11:48:34'),(23,18000,215,'2017-05-09 11:48:42','2017-05-09 11:48:42'),(24,19000,218,'2017-05-09 11:48:51','2017-05-09 11:48:51'),(25,20000,221,'2017-05-09 11:49:28','2017-05-09 11:49:28'),(26,21000,224,'2017-05-09 11:49:42','2017-05-09 11:49:42'),(27,22000,227,'2017-05-09 11:49:56','2017-05-09 11:49:56'),(28,23000,230,'2017-05-09 11:50:15','2017-05-09 11:50:15'),(29,24000,233,'2017-05-09 11:50:23','2017-05-09 11:50:23'),(30,25000,236,'2017-05-09 11:50:31','2017-05-09 11:50:31'),(31,26000,239,'2017-05-09 11:50:39','2017-05-09 11:50:39'),(32,27000,242,'2017-05-09 11:51:09','2017-05-09 11:51:09'),(33,28000,245,'2017-05-09 11:51:16','2017-05-09 11:51:16'),(34,29000,248,'2017-05-09 11:51:26','2017-05-09 11:51:26'),(35,30000,251,'2017-05-09 11:52:28','2017-05-09 11:52:28'),(36,31000,254,'2017-05-09 11:52:49','2017-05-09 11:52:49'),(37,32000,257,'2017-05-09 11:53:05','2017-05-09 11:53:05'),(38,33000,260,'2017-05-09 11:53:12','2017-05-09 11:53:12'),(39,34000,263,'2017-05-09 11:53:37','2017-05-09 11:53:37'),(40,35000,266,'2017-05-09 11:53:49','2017-05-09 11:53:49'),(41,36000,269,'2017-05-09 11:54:17','2017-05-09 11:54:17'),(42,37000,272,'2017-05-09 11:54:28','2017-05-09 11:54:28'),(43,38000,275,'2017-05-09 11:54:35','2017-05-09 11:54:35'),(44,39000,278,'2017-05-09 11:54:44','2017-05-09 11:54:44'),(45,40000,281,'2017-05-09 11:54:53','2017-05-09 11:54:53'),(46,41000,284,'2017-05-09 11:56:38','2017-05-09 11:56:38'),(47,42000,287,'2017-05-09 11:56:48','2017-05-09 11:56:48'),(48,43000,290,'2017-05-09 11:56:57','2017-05-09 11:56:57'),(49,44000,293,'2017-05-09 11:57:21','2017-05-09 11:57:21'),(50,45000,296,'2017-05-09 11:57:30','2017-05-09 11:57:30'),(51,46000,299,'2017-05-09 11:57:48','2017-05-09 11:57:48'),(52,47000,302,'2017-05-09 11:58:06','2017-05-09 11:58:06'),(53,48000,305,'2017-05-09 11:58:27','2017-05-09 11:58:27'),(54,49000,308,'2017-05-09 11:58:42','2017-05-09 11:58:42'),(55,50000,311,'2017-05-09 11:58:50','2017-05-09 11:58:50'),(56,51000,314,'2017-05-09 11:59:41','2017-05-09 11:59:41'),(57,52000,317,'2017-05-09 11:59:51','2017-05-09 11:59:51'),(58,53000,320,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(59,54000,323,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(60,55000,326,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(61,56000,329,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(62,57000,333,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(63,58000,335,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(64,59000,338,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(65,60000,341,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(66,61000,344,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(67,62000,347,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(68,63000,350,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(69,64000,353,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(70,65000,356,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(71,66000,359,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(72,67000,362,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(73,68000,365,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(74,69000,368,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(75,70000,371,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(76,71000,374,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(77,72000,377,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(78,73000,381,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(79,74000,384,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(80,75000,387,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(81,76000,390,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(82,77000,393,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(83,78000,396,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(84,79000,399,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(85,80000,402,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(86,81000,405,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(87,82000,408,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(88,83000,412,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(89,84000,415,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(90,85000,418,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(91,86000,421,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(92,87000,424,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(93,88000,427,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(94,89000,430,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(95,90000,433,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(96,91000,436,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(97,92000,439,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(98,93000,442,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(99,94000,445,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(100,95000,448,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(101,96000,451,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(102,97000,454,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(103,98000,457,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(104,99000,460,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(105,100000,463,'2017-05-09 12:00:11','2017-05-09 12:00:11'),(106,0,0,'2017-05-10 08:55:21','2017-05-10 08:55:21'),(107,0,0,'2017-05-10 08:56:21','2017-05-10 08:56:21'),(108,123123,2131,'2017-05-10 11:31:11','2017-05-10 11:31:11'),(109,10,100,'2017-05-10 13:46:33','2017-05-10 13:46:33');

/*Table structure for table `sizes_list` */

DROP TABLE IF EXISTS `sizes_list`;

CREATE TABLE `sizes_list` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `seller_status` int(11) DEFAULT '1',
  PRIMARY KEY (`size_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `sizes_list` */

insert  into `sizes_list`(`size_id`,`size_name`,`status`,`create_at`,`seller_id`,`seller_status`) values (1,'xl',1,'2018-08-11 15:32:00',1,1);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_text` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`id`,`status_text`) values (0,'Deactive'),(1,'Active');

/*Table structure for table `sub_items` */

DROP TABLE IF EXISTS `sub_items`;

CREATE TABLE `sub_items` (
  `subitem_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subitem_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `image` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`subitem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=488 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `sub_items` */

insert  into `sub_items`(`subitem_id`,`category_id`,`subcategory_id`,`subitem_name`,`image`,`created_at`,`updated_at`,`status`,`created_by`) values (141,22,55,'shirts',NULL,'2017-12-12 11:00:36','2017-12-12 11:00:36',1,12),(142,21,102,'Dog Supplies',NULL,'2017-12-12 11:09:26','2017-12-12 11:09:26',1,12),(143,21,102,'Cat Supplies',NULL,'2017-12-12 11:09:26','2017-12-12 11:09:26',1,12),(144,21,101,'Chocolates & Snacks',NULL,'2017-12-12 11:10:41','2017-12-12 11:10:41',1,12),(145,21,101,'Jams & Spreads',NULL,'2017-12-12 11:10:41','2017-12-12 11:10:41',1,12),(146,21,101,'Breakfast & Dairy',NULL,'2017-12-12 11:10:41','2017-12-12 11:10:41',1,12),(147,21,101,'Cooking & Baking',NULL,'2017-12-12 11:10:41','2017-12-12 11:10:41',1,12),(148,21,100,'Baby Food',NULL,'2017-12-12 11:12:02','2017-12-12 11:12:02',1,12),(149,21,100,'Diapers & Wipes',NULL,'2017-12-12 11:12:02','2017-12-12 11:12:02',1,12),(150,21,100,'Baby Skin & Hair Care',NULL,'2017-12-12 11:12:02','2017-12-12 11:12:02',1,12),(151,21,100,'Baby Accessories & More',NULL,'2017-12-12 11:12:02','2017-12-12 11:12:02',1,12),(152,21,99,'Noodles & Vermicelli',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(153,21,99,'Sauces & Ketchups',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(154,21,99,'Jams, Honey & Spreads',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(155,21,99,'Pasta & Soups',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(156,21,99,'Ready Made Meals & Mixes',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(157,21,99,'Baking & Dessert Items',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(158,21,99,'Canned & Frozen Food',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(159,21,99,'Pickles & Chutneys',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(160,21,99,'Chyawanprash & Health Foods',NULL,'2017-12-12 11:13:07','2017-12-12 11:13:07',1,12),(161,21,98,'Biscuits & Cookies',NULL,'2017-12-12 11:14:08','2017-12-12 11:14:08',1,12),(162,21,98,'Namkeen & Snacks',NULL,'2017-12-12 11:14:08','2017-12-12 11:14:08',1,12),(163,21,98,'Chips & Crisps',NULL,'2017-12-12 11:14:08','2017-12-12 11:14:08',1,12),(164,21,98,'Chocolates & Candies',NULL,'2017-12-12 11:14:08','2017-12-12 11:14:08',1,12),(165,21,98,'Sweets',NULL,'2017-12-12 11:14:08','2017-12-12 11:14:08',1,12),(166,21,97,'Milk & Milk Products',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(167,21,97,'Bread & Eggs',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(168,21,97,'Paneer & Curd',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(169,21,97,'Butter & Cheese',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(170,21,97,'Breakfast Cereal & Mixes',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(171,21,97,'Jams, Honey & Spreads',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(172,21,97,'Fruits',NULL,'2017-12-12 11:15:32','2017-12-12 11:15:32',1,12),(173,21,96,'Bath & Body',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(174,21,96,'Hair Care',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(175,21,96,'Skin Care',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(176,21,96,'Oral Care',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(177,21,96,'Deos & Perfumes',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(178,21,96,'Face Care',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(179,21,96,'Feminine Hygiene',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(180,21,96,'Shaving Needs',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(181,21,96,'Health & Wellness',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(182,21,96,'Cosmetics',NULL,'2017-12-12 11:16:12','2017-12-12 11:16:12',1,12),(183,21,95,'Plasticware',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(184,21,95,'Cookware',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(185,21,95,'Kitchen Tools & Accessories',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(186,21,95,'Home Furnishing',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(187,21,95,'Dining & Servings',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(188,21,95,'Rainwear',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(189,21,95,'Stationery & Magazines',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(190,21,95,'Cleaning Equipment',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(191,21,95,'Storage & Containers',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(192,21,95,'Electrical Goods & Accessories',NULL,'2017-12-12 11:17:13','2017-12-12 11:17:13',1,12),(193,21,45,'Laundry Detergents',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(194,21,45,'Dishwashers',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(195,21,45,'Cleaners',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(196,21,45,'Cleaning Tools & Brushes',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(197,21,45,'Pooja Needs',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(198,21,45,'Repellents',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(199,21,45,'Home & Car Fresheners',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(200,21,45,'Tissues & Disposables',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(201,21,45,'Shoe Care',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(202,21,45,'Storage & Containers',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(203,21,45,'Electrical Goods & Accessories',NULL,'2017-12-12 11:17:53','2017-12-12 11:17:53',1,12),(204,21,44,'Soft Drinks',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(205,21,44,'Juices & Concentrates',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(206,21,44,'Tea & Coffee',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(207,21,44,'Health & Energy Drinks',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(208,21,44,'Water & Soda',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(209,21,44,'Milk Drinks',NULL,'2017-12-12 11:18:38','2017-12-12 11:18:38',1,12),(210,21,42,'Pulses',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(211,21,42,'Atta & Other Flours',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(212,21,42,'Rice & Other Grains',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(213,21,42,'Dry Fruits & Nuts',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(214,21,42,'Edible Oils',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(215,21,42,'Ghee & Vanaspati',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(216,21,42,'Spices',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(217,21,42,'Salt & Sugar',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(218,21,42,'Organic Staples',NULL,'2017-12-12 11:19:26','2017-12-12 11:19:26',1,12),(219,21,41,'Fruits','1517900360.jpg','2018-02-06 12:29:19','2018-02-06 12:29:19',1,12),(220,21,41,'Vegetables',NULL,'2017-12-12 11:21:58','2017-12-12 11:21:58',1,12),(221,21,41,'Cut fresh, sprouts & herbs',NULL,'2017-12-12 11:52:25','2017-12-12 11:52:25',1,12),(222,22,107,'Laptops for Businesses',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(223,22,107,'2 in 1 Laptops',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(224,22,107,'Intel Gaming Store',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(225,22,107,'Intel I3 Laptops',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(226,22,107,'Microsoft Surface',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(227,22,107,'HP',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(228,22,107,'Lenovo',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(229,22,107,'MSI',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(230,22,107,'Dell Vostro Laptops',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(231,22,107,'Dell',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(232,22,107,'Asus',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(233,22,107,'MacBook',NULL,'2017-12-13 17:54:01','2017-12-13 17:54:01',1,12),(234,22,108,'All in One PCs',NULL,'2017-12-13 17:55:15','2017-12-13 17:55:15',1,12),(235,22,108,'Desktops',NULL,'2017-12-13 17:55:15','2017-12-13 17:55:15',1,12),(236,22,108,'Monitors',NULL,'2017-12-13 17:55:15','2017-12-13 17:55:15',1,12),(237,22,109,'DSLRs',NULL,'2017-12-13 17:55:54','2017-12-13 17:55:54',1,12),(238,22,109,'Point & Shoot',NULL,'2017-12-13 17:55:54','2017-12-13 17:55:54',1,12),(239,22,109,'Lifestyle & Action Cameras',NULL,'2017-12-13 17:55:54','2017-12-13 17:55:54',1,12),(240,22,109,'Camera Accessories',NULL,'2017-12-13 17:55:54','2017-12-13 17:55:54',1,12),(241,22,110,'Routers',NULL,'2017-12-13 17:56:37','2017-12-13 17:56:37',1,12),(242,22,110,'Keyboards & Mouse',NULL,'2017-12-13 17:56:37','2017-12-13 17:56:37',1,12),(243,22,110,'Computer Components',NULL,'2017-12-13 17:56:37','2017-12-13 17:56:37',1,12),(244,22,110,'Softwares',NULL,'2017-12-13 17:56:37','2017-12-13 17:56:37',1,12),(245,22,111,'Printers',NULL,'2017-12-13 17:57:26','2017-12-13 17:57:26',1,12),(246,22,111,'Ink Cartridges',NULL,'2017-12-13 17:57:26','2017-12-13 17:57:26',1,12),(247,22,111,'Projectors',NULL,'2017-12-13 17:57:26','2017-12-13 17:57:26',1,12),(248,22,111,'Toner Cartridges',NULL,'2017-12-13 17:57:26','2017-12-13 17:57:26',1,12),(249,22,111,'Scanners',NULL,'2017-12-13 17:57:26','2017-12-13 17:57:26',1,12),(250,22,112,'Gaming Laptops',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(251,22,112,'Gaming Console',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(252,22,112,'Gaming Monitors',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(253,22,112,'Sony Playstation',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(254,22,112,'Microsoft Xbox',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(255,22,112,'Games',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(256,22,112,'Gaming Accessories',NULL,'2017-12-13 17:58:00','2017-12-13 17:58:00',1,12),(257,22,113,'External Hard Disks',NULL,'2017-12-13 17:59:03','2017-12-13 17:59:03',1,12),(258,22,113,'Seagate Hard Disks',NULL,'2017-12-13 17:59:03','2017-12-13 17:59:03',1,12),(259,22,113,'WD Hard Disks',NULL,'2017-12-13 17:59:03','2017-12-13 17:59:03',1,12),(260,22,113,'Pendrives','1515160637.jpg','2018-01-05 19:27:17','2018-01-05 19:27:17',1,12),(261,22,113,'Memory Cards','1515160766.jpeg','2018-01-05 19:29:26','2018-01-05 19:29:26',1,12),(262,22,114,'Bluetooth Speakers',NULL,'2017-12-13 17:59:23','2017-12-13 17:59:23',1,12),(263,22,114,'Computer Speakers',NULL,'2017-12-13 17:59:40','2017-12-13 17:59:40',1,12),(264,20,231,'Cases & Covers',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(265,20,231,'Power Banks',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(266,20,231,'Cables',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(267,20,231,'Mobile Chargers',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(268,20,231,'VR Headsets',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(269,20,231,'Selfie Sticks',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(270,20,231,'Mobile Holders',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(271,20,231,'Batteries',NULL,'2017-12-18 11:25:27','2017-12-18 11:25:27',1,12),(272,20,226,'Android','1515396506.png','2018-01-08 12:58:26','2018-01-08 12:58:26',1,12),(273,20,227,'Windows','1515396531.png','2018-01-08 12:58:52','2018-01-08 12:58:52',1,12),(274,20,228,'IOS',NULL,'2017-12-18 11:31:06','2017-12-18 11:31:06',1,12),(275,20,229,'Symbian',NULL,'2017-12-18 11:31:46','2017-12-18 11:31:46',1,12),(276,20,230,'Basic',NULL,'2017-12-18 11:32:41','2017-12-18 11:32:41',1,12),(277,20,231,'Mobile Accessories',NULL,'2017-12-18 11:33:00','2017-12-18 11:33:00',1,12),(278,20,234,'Tablets',NULL,'2017-12-18 11:33:17','2017-12-18 11:33:17',1,12),(279,20,226,'Mobiles Store','1514902947.png','2018-01-02 19:52:26','2018-01-02 19:52:26',1,12),(280,35,221,'luggage sub item',NULL,'2017-12-18 16:43:42','2017-12-18 16:43:42',1,12),(281,35,220,'bags packs sub item',NULL,'2017-12-18 16:50:13','2017-12-18 16:50:13',1,12),(282,35,220,'hand bags sub item',NULL,'2017-12-18 16:56:25','2017-12-18 16:56:25',1,12),(283,35,223,'wallet sub item',NULL,'2017-12-18 17:00:13','2017-12-18 17:00:13',1,12),(284,35,222,'clutches',NULL,'2017-12-18 17:07:35','2017-12-18 17:07:35',1,12),(285,35,224,'Store Sub item',NULL,'2017-12-18 17:09:51','2017-12-18 17:09:51',1,12),(286,35,225,'camping and hiking sub item',NULL,'2017-12-18 17:15:59','2017-12-18 17:15:59',1,12),(287,24,135,'ethinic',NULL,'2017-12-18 17:25:02','2017-12-18 17:25:02',1,12),(288,24,135,'vasu',NULL,'2017-12-18 17:32:49','2017-12-18 17:32:49',1,12),(290,24,137,'t-shirt','1517895113.jpg','2018-02-06 11:01:53','2018-02-06 11:01:53',1,12),(291,24,135,'womens  ethinic','1515565367.jpg','2018-08-20 12:03:25','2018-08-20 12:03:25',1,12),(292,34,211,'gift store.',NULL,'2017-12-18 17:52:35','2017-12-18 17:52:35',1,12),(293,24,233,'ladies shoes',NULL,'2017-12-18 17:54:15','2017-12-18 17:54:15',1,12),(294,24,233,'women ',NULL,'2017-12-18 17:57:23','2017-12-18 17:57:23',1,12),(295,19,124,'inner pocket, front pocket',NULL,'2017-12-18 18:04:35','2017-12-18 18:04:35',1,12),(296,23,115,'videocon',NULL,'2017-12-18 18:06:16','2017-12-18 18:06:16',1,12),(297,23,117,'washing',NULL,'2017-12-18 18:08:55','2017-12-18 18:08:55',1,12),(298,23,121,'kitchen',NULL,'2017-12-18 18:10:52','2017-12-18 18:10:52',1,12),(299,23,119,'home appliances sub item',NULL,'2017-12-18 18:11:33','2017-12-18 18:11:33',1,12),(300,23,118,'refri-item',NULL,'2017-12-18 18:14:02','2017-12-18 18:14:02',1,12),(301,23,120,'Break fast essential',NULL,'2017-12-18 18:16:13','2017-12-18 18:16:13',1,12),(302,23,116,'audio & video',NULL,'2017-12-18 18:19:56','2017-12-18 18:19:56',1,12),(303,34,217,'gift type',NULL,'2017-12-18 18:21:51','2017-12-18 18:21:51',1,12),(304,34,218,'byrecipent',NULL,'2017-12-18 18:24:30','2017-12-18 18:24:30',1,12),(305,28,155,'GPS',NULL,'2017-12-18 18:37:45','2017-12-18 18:37:45',1,12),(306,24,145,'Shawl',NULL,'2017-12-18 18:52:59','2017-12-18 18:52:59',1,12),(307,24,137,'sweater',NULL,'2017-12-18 18:53:23','2017-12-18 18:53:23',1,12),(308,24,143,'lensess',NULL,'2017-12-18 18:53:45','2017-12-18 18:53:45',1,12),(309,24,142,'hand bags',NULL,'2017-12-18 18:54:03','2017-12-18 18:54:03',1,12),(310,24,141,'ladies Watch',NULL,'2017-12-18 18:54:21','2017-12-18 18:54:21',1,12),(311,24,135,'shawl',NULL,'2017-12-18 18:55:27','2017-12-18 18:55:27',1,12),(312,24,145,'jacket',NULL,'2017-12-18 18:56:12','2017-12-18 18:56:12',1,12),(313,19,123,'t shirt','1515565320.jpg','2018-01-10 11:51:59','2018-01-10 11:51:59',1,12),(314,28,156,'car perfume sub item',NULL,'2017-12-19 10:39:06','2017-12-19 10:39:06',1,12),(315,22,110,'computer sub accessories',NULL,'2017-12-19 10:55:24','2017-12-19 10:55:24',1,12),(316,32,204,'Furniture sub item',NULL,'2017-12-19 11:29:18','2017-12-19 11:29:18',1,12),(317,24,232,'casual shoes','1515566509.jpg','2018-01-10 12:11:48','2018-01-10 12:11:48',1,12),(318,24,140,'Footwear',NULL,'2017-12-19 11:32:07','2017-12-19 11:32:07',1,12),(319,32,205,'Living Room',NULL,'2017-12-19 12:01:51','2017-12-19 12:01:51',1,12),(320,32,206,'BED ROOM',NULL,'2017-12-19 12:13:52','2017-12-19 12:13:52',1,12),(321,32,207,'MODULAR WARDROBES',NULL,'2017-12-19 12:17:19','2017-12-19 12:17:19',1,12),(322,32,204,'MODULAR KITCHENS',NULL,'2017-12-19 12:21:19','2017-12-19 12:21:19',1,12),(323,32,209,'KIDS FURNITURE',NULL,'2017-12-19 12:29:01','2017-12-19 12:29:01',1,12),(324,32,210,'STUDY ROOM',NULL,'2017-12-19 12:36:26','2017-12-19 12:36:26',1,12),(325,32,205,'WALL SHELVES',NULL,'2017-12-19 14:41:33','2017-12-19 14:41:33',1,12),(326,32,204,'Coffee Tables',NULL,'2017-12-19 14:47:24','2017-12-19 14:47:24',1,12),(327,32,204,'MODULARS  WARDROBES',NULL,'2017-12-19 14:55:54','2017-12-19 14:55:54',1,12),(328,32,204,'FINISHING TOUCHES',NULL,'2017-12-19 15:01:21','2017-12-19 15:01:21',1,12),(329,32,204,'GARDEN & PATIO FURNITURE',NULL,'2017-12-19 15:03:23','2017-12-19 15:03:23',1,12),(330,32,205,'WALL ACCENTS',NULL,'2017-12-19 15:04:41','2017-12-19 15:04:41',1,12),(331,32,206,'WALL LIGHTS',NULL,'2017-12-19 15:09:13','2017-12-19 15:09:13',1,12),(332,32,206,'CEILING LIGHTS',NULL,'2017-12-19 15:16:47','2017-12-19 15:16:47',1,12),(333,32,207,'CARPETS & AREA RUGS',NULL,'2017-12-19 15:21:38','2017-12-19 15:21:38',1,12),(334,32,208,'FOOD STORAGE',NULL,'2017-12-19 15:24:27','2017-12-19 15:24:27',1,12),(335,32,209,'DRINKWARE',NULL,'2017-12-19 15:26:24','2017-12-19 15:26:24',1,12),(336,32,210,'FANS',NULL,'2017-12-19 15:28:22','2017-12-19 15:28:22',1,12),(337,19,123,'Tshirts',NULL,'2018-01-02 19:19:40','2018-01-02 19:19:40',1,12),(338,19,124,'Jeans',NULL,'2017-12-19 15:53:52','2017-12-19 15:53:52',1,12),(339,19,125,'Active T-shirts',NULL,'2017-12-19 15:54:14','2017-12-19 15:54:14',1,12),(340,19,126,'Briefs & Trunks',NULL,'2017-12-19 15:54:33','2017-12-19 15:54:33',1,12),(341,19,127,'Kurta Pyjamas',NULL,'2017-12-19 15:54:51','2017-12-19 15:54:51',1,12),(342,19,129,'Formal Shoes',NULL,'2017-12-19 15:55:38','2017-12-19 15:55:38',1,12),(343,19,130,'Running',NULL,'2017-12-19 15:56:06','2017-12-19 15:56:06',1,12),(344,19,131,'All Watches','1517895399.jpg','2018-02-06 11:06:38','2018-02-06 11:06:38',1,12),(345,19,132,'Luggage & Suitcases',NULL,'2017-12-19 15:56:45','2017-12-19 15:56:45',1,12),(346,19,133,'Men Sunglasses',NULL,'2017-12-19 15:57:11','2017-12-19 15:57:11',1,12),(347,19,134,'Wallets',NULL,'2017-12-19 15:57:32','2017-12-19 15:57:32',1,12),(348,24,135,'Kurtas & Kurtis',NULL,'2017-12-19 15:59:55','2017-12-19 15:59:55',1,12),(349,29,172,'Premium Pens',NULL,'2017-12-19 16:17:36','2017-12-19 16:17:36',1,12),(350,29,173,'Pencils',NULL,'2017-12-19 16:18:06','2017-12-19 16:18:06',1,12),(351,29,174,'Clip Files',NULL,'2017-12-19 16:18:38','2017-12-19 16:18:38',1,12),(352,29,175,'Office MachinesNote-counting Machine',NULL,'2017-12-19 16:18:59','2017-12-19 16:18:59',1,12),(353,29,176,'Scientific',NULL,'2017-12-19 16:19:18','2017-12-19 16:19:18',1,12),(354,29,177,'Notebooks',NULL,'2017-12-19 16:19:38','2017-12-19 16:19:38',1,12),(355,29,178,'Adhesives',NULL,'2017-12-19 16:19:56','2017-12-19 16:19:56',1,12),(356,29,179,'School Bags',NULL,'2017-12-19 16:20:13','2017-12-19 16:20:13',1,12),(357,29,180,'Printer & Copier Paper',NULL,'2017-12-19 16:20:31','2017-12-19 16:20:31',1,12),(358,29,181,'Competitive Exams',NULL,'2017-12-19 16:21:12','2017-12-19 16:21:12',1,12),(359,34,216,'Everyday',NULL,'2017-12-19 16:27:38','2017-12-19 16:27:38',1,12),(360,34,217,'Flowers',NULL,'2017-12-19 16:43:17','2017-12-19 16:43:17',1,12),(361,34,217,'Eggless Cakes',NULL,'2017-12-19 16:45:09','2017-12-19 16:45:09',1,12),(362,34,217,'Cakes',NULL,'2017-12-19 16:46:10','2017-12-19 16:46:10',1,12),(363,32,208,'MODULAR KITCHENS',NULL,'2017-12-19 16:50:34','2017-12-19 16:50:34',1,12),(364,34,217,'Corporate',NULL,'2017-12-19 16:55:50','2017-12-19 16:55:50',1,12),(365,34,218,'Corporate',NULL,'2017-12-19 16:56:26','2017-12-19 16:56:26',1,12),(366,24,144,'Luggage & Trolley Bags',NULL,'2017-12-19 17:55:35','2017-12-19 17:55:35',1,12),(367,24,143,'Ray-Ban,IDEE & More',NULL,'2017-12-19 17:55:56','2017-12-19 17:55:56',1,12),(368,24,142,'Wallets',NULL,'2017-12-19 17:56:30','2017-12-19 17:56:30',1,12),(369,24,141,'Women Watches',NULL,'2017-12-19 17:57:30','2017-12-19 17:57:30',1,12),(370,24,139,'Jewellery',NULL,'2017-12-19 17:58:05','2017-12-19 17:58:05',1,12),(371,24,138,'Lingerie & Sleepwear',NULL,'2017-12-19 17:58:37','2017-12-19 17:58:37',1,12),(372,24,137,'Jackets',NULL,'2017-12-19 17:59:00','2017-12-19 17:59:00',1,12),(373,24,136,'Trousers','1515565496.jpg','2018-01-10 11:54:56','2018-01-10 11:54:56',1,12),(374,24,135,'Sarees',NULL,'2017-12-19 18:00:05','2017-12-19 18:00:05',1,12),(375,32,210,'Pedestal Fans',NULL,'2017-12-20 11:03:11','2017-12-20 11:03:11',1,12),(376,32,210,'Storage Geysers',NULL,'2017-12-20 11:47:33','2017-12-20 11:47:33',1,12),(377,32,209,'Home Safes',NULL,'2017-12-20 11:52:51','2017-12-20 11:52:51',1,12),(378,32,209,'Toasters',NULL,'2017-12-20 11:53:17','2017-12-20 11:53:17',1,12),(379,32,209,'Stand Mixers',NULL,'2017-12-20 11:56:21','2017-12-20 11:56:21',1,12),(380,32,209,'Built-In Hobs',NULL,'2017-12-20 11:56:52','2017-12-20 11:56:52',1,12),(381,32,209,'Designer Chimneys',NULL,'2017-12-20 11:57:33','2017-12-20 11:57:33',1,12),(382,32,208,'Designer Chimneys',NULL,'2017-12-20 11:58:04','2017-12-20 11:58:04',1,12),(383,32,208,'Blinds & Shades',NULL,'2017-12-20 11:59:27','2017-12-20 11:59:27',1,12),(384,32,204,'BEDDING',NULL,'2017-12-20 11:59:56','2017-12-20 11:59:56',1,12),(385,32,208,'Salt & Pepper Storage',NULL,'2017-12-20 12:02:06','2017-12-20 12:02:06',1,12),(386,32,208,'Shelves & Racks',NULL,'2017-12-20 12:02:39','2017-12-20 12:02:39',1,12),(387,31,202,'Body Fat Monitors',NULL,'2017-12-20 13:32:22','2017-12-20 13:32:22',1,12),(388,31,202,'Hiking Tents',NULL,'2017-12-20 13:32:45','2017-12-20 13:32:45',1,12),(389,31,203,'Hiking Tents',NULL,'2017-12-20 13:33:03','2017-12-20 13:33:03',1,12),(390,31,196,'Badminton',NULL,'2017-12-20 14:37:14','2017-12-20 14:37:14',1,12),(391,31,197,'Bicycles',NULL,'2017-12-20 14:38:02','2017-12-20 14:38:02',1,12),(392,31,198,'Home gyms',NULL,'2017-12-20 14:47:44','2017-12-20 14:47:44',1,12),(393,31,199,'Dumbbells',NULL,'2017-12-20 14:48:06','2017-12-20 14:48:06',1,12),(394,31,200,'Body Massagers',NULL,'2017-12-20 14:48:29','2017-12-20 14:48:29',1,12),(395,31,201,'Poker',NULL,'2017-12-20 14:48:50','2017-12-20 14:48:50',1,12),(396,31,203,'Bags & Packs',NULL,'2017-12-20 14:50:14','2017-12-20 14:50:14',1,12),(397,30,183,'Toy wonder',NULL,'2017-12-20 15:28:41','2017-12-20 15:28:41',1,12),(398,30,182,'doll',NULL,'2017-12-20 15:30:35','2017-12-20 15:30:35',1,12),(399,30,184,'carrom',NULL,'2017-12-20 15:31:07','2017-12-20 15:31:07',1,12),(400,30,185,'Toy Cars, Trains & Vehicles',NULL,'2017-12-20 15:32:14','2017-12-20 15:32:14',1,12),(401,30,186,'Scooters & Rideons',NULL,'2017-12-20 15:32:55','2017-12-20 15:32:55',1,12),(402,30,187,'computers  & Tablets ',NULL,'2017-12-20 15:34:00','2017-12-20 15:34:00',1,12),(403,30,188,'Musical Toys',NULL,'2017-12-20 15:34:21','2017-12-20 15:34:21',1,12),(404,30,189,'Fidgets',NULL,'2017-12-20 15:34:38','2017-12-20 15:34:38',1,12),(405,30,190,'Dolls & Accessories',NULL,'2017-12-20 15:34:57','2017-12-20 15:34:57',1,12),(406,30,191,'Baby Bath',NULL,'2017-12-20 15:35:20','2017-12-20 15:35:20',1,12),(407,30,192,'Frocks & Dresses',NULL,'2017-12-20 15:35:38','2017-12-20 15:35:38',1,12),(408,30,193,'Shirts',NULL,'2017-12-20 15:35:55','2017-12-20 15:35:55',1,12),(409,30,194,'Combo Sets',NULL,'2017-12-20 15:36:17','2017-12-20 15:36:17',1,12),(410,30,195,'Hair Band & Hair Clips',NULL,'2017-12-20 15:36:35','2017-12-20 15:36:35',1,12),(411,19,128,'shoe','1517895270.jpg','2018-02-06 11:04:30','2018-02-06 11:04:30',1,12),(412,18,146,'Wall Stickers',NULL,'2017-12-20 17:43:29','2017-12-20 17:43:29',1,12),(413,18,147,'Bedsheets',NULL,'2017-12-20 17:44:00','2017-12-20 17:44:00',1,12),(414,18,148,'Gas Stoves',NULL,'2017-12-20 17:44:43','2017-12-20 17:44:43',1,12),(415,18,149,'Mosquito Killers',NULL,'2017-12-20 17:45:33','2017-12-20 17:45:33',1,12),(416,18,150,'Extension Cord',NULL,'2017-12-20 17:46:10','2017-12-20 17:46:10',1,12),(417,18,151,'LEDs',NULL,'2017-12-20 17:46:24','2017-12-20 17:46:24',1,12),(418,18,152,'Taps & Faucets',NULL,'2017-12-20 17:46:38','2017-12-20 17:46:38',1,12),(419,18,153,'Big Bazaar',NULL,'2017-12-20 17:46:52','2017-12-20 17:46:52',1,12),(420,18,154,'Any',NULL,'2017-12-20 17:47:20','2017-12-20 17:47:20',1,12),(421,28,157,'Helmets',NULL,'2017-12-20 17:58:23','2017-12-20 17:58:23',1,12),(422,28,158,'covers',NULL,'2017-12-20 17:59:14','2017-12-20 17:59:14',1,12),(423,28,159,'seat covers',NULL,'2017-12-20 18:01:14','2017-12-20 18:01:14',1,12),(424,28,160,'Vaccum',NULL,'2017-12-20 18:01:34','2017-12-20 18:01:34',1,12),(425,28,161,'Bluetooth',NULL,'2017-12-20 18:03:24','2017-12-20 18:03:24',1,12),(426,28,162,'Tyres',NULL,'2017-12-20 18:04:24','2017-12-20 18:04:24',1,12),(427,28,163,'Interior',NULL,'2017-12-20 18:06:11','2017-12-20 18:06:11',1,12),(428,28,164,'Exterior',NULL,'2017-12-20 18:07:30','2017-12-20 18:07:30',1,12),(429,28,165,'Full Face',NULL,'2017-12-20 18:08:35','2017-12-20 18:08:35',1,12),(430,28,166,'GPS & Navigation Systems',NULL,'2017-12-20 18:09:53','2017-12-20 18:09:53',1,12),(431,28,167,'Tyre Inflators',NULL,'2017-12-20 18:11:10','2017-12-20 18:11:10',1,12),(432,28,168,'Gel Based',NULL,'2017-12-20 18:16:22','2017-12-20 18:16:22',1,12),(433,28,170,'Arm Sleeves',NULL,'2017-12-20 18:17:25','2017-12-20 18:17:25',1,12),(434,28,169,'Arm Sleeves',NULL,'2017-12-20 18:17:53','2017-12-20 18:17:53',1,12),(435,28,171,'Cushions & Rest',NULL,'2017-12-20 18:23:28','2017-12-20 18:23:28',1,12),(436,28,235,'Engine Oil',NULL,'2017-12-20 18:24:28','2017-12-20 18:24:28',1,12),(437,23,115,'32\" TVs',NULL,'2017-12-21 11:17:31','2017-12-21 11:17:31',1,12),(438,23,116,'Set Top Box',NULL,'2017-12-21 11:17:48','2017-12-21 11:17:48',1,12),(439,23,117,'Semi Automatic',NULL,'2017-12-21 11:18:04','2017-12-21 11:18:04',1,12),(440,23,118,'Single Door Refrigerators',NULL,'2017-12-21 11:18:24','2017-12-21 11:18:24',1,12),(441,23,119,'Air Conditioners',NULL,'2017-12-21 11:18:40','2017-12-21 11:18:40',1,12),(442,23,120,'Juicer Mixer Grinders',NULL,'2017-12-21 11:18:59','2017-12-21 11:18:59',1,12),(443,23,121,'Electric Water Purifier',NULL,'2017-12-21 11:19:31','2017-12-21 11:19:31',1,12),(444,23,122,'Havells Range',NULL,'2017-12-21 11:19:48','2017-12-21 11:19:48',1,12),(445,22,219,'Audio',NULL,'2017-12-21 11:41:53','2017-12-21 11:41:53',1,12),(446,32,204,'1',NULL,'2017-12-21 14:09:19','2017-12-21 14:09:19',1,12),(447,24,136,'International collection',NULL,'2017-12-22 13:08:08','2017-12-22 13:08:08',1,12),(448,22,237,'External DVD Writer','1515051295.jpg','2018-01-04 13:04:55','2018-01-04 13:04:55',1,12),(449,22,238,'Converters','1515051379.jpg','2018-01-04 13:06:18','2018-01-04 13:06:18',1,12),(450,22,239,'Projectors','1515056797.jpg','2018-01-04 14:36:37','2018-01-04 14:36:37',1,12),(451,22,240,'Card Reader','1515059443.jpeg','2018-01-04 15:20:43','2018-01-04 15:20:43',1,12),(452,22,113,'Harddrives','1515065447.jpg','2018-01-04 17:00:46','2018-01-04 17:00:46',1,12),(453,22,244,'Headphones','1515065689.jpg','2018-01-04 17:04:49','2018-01-04 17:04:49',1,12),(454,22,242,'SMPS','1515068714.jpg','2018-01-04 17:55:13','2018-01-04 17:55:13',1,12),(455,22,243,'Processors','1515071101.jpg','2018-01-04 18:35:01','2018-01-04 18:35:01',1,12),(456,22,113,'RAM','1515073836.jpg','2018-01-04 19:20:36','2018-01-04 19:20:36',1,12),(457,22,245,'Cabinets','1515132105.jpg','2018-01-05 11:31:46','2018-01-05 11:31:46',1,12),(458,22,246,'Back UPS','1515136529.jpg','2018-01-05 12:45:29','2018-01-05 12:45:29',1,12),(459,22,241,'Printer Cables','1515161134.jpg','2018-01-05 19:35:33','2018-01-05 19:35:33',1,12),(460,19,123,'Mens T- Shirt','1517831632.jpg','2018-02-05 17:23:52','2018-02-05 17:23:52',1,12),(461,19,124,'Mens Jeans','1517831650.jpg','2018-02-05 17:24:10','2018-02-05 17:24:10',1,12),(462,19,125,'Men sports','1517831672.jpg','2018-02-05 17:24:32','2018-02-05 17:24:32',1,12),(463,19,126,'Men Inner wear','1517831701.jpg','2018-02-05 17:25:01','2018-02-05 17:25:01',1,12),(464,19,127,'Men Ethinic Wear','1517831728.jpg','2018-02-05 17:25:28','2018-02-05 17:25:28',1,12),(465,19,128,'Mens Footwear','1517831847.jpg','2018-02-05 17:27:27','2018-02-05 17:27:27',1,12),(466,19,129,'Mens Formal & Casual','1517831885.jpg','2018-02-05 17:28:05','2018-02-05 17:28:05',1,12),(467,19,130,'Mens Sport shoes','1517831912.jpg','2018-02-05 17:28:32','2018-02-05 17:28:32',1,12),(468,19,131,'Mens Watch Store','1517832266.jpg','2018-02-05 17:34:25','2018-02-05 17:34:25',1,12),(469,19,132,'Mens Bags and Luggage ','1517832301.jpg','2018-02-05 17:35:01','2018-02-05 17:35:01',1,12),(470,19,133,'Mens EyeWear','1517832324.jpg','2018-02-05 17:35:23','2018-02-05 17:35:23',1,12),(471,19,134,'Mens Belt','1517832353.jpg','2018-02-05 17:35:53','2018-02-05 17:35:53',1,12),(472,34,212,'flower','1518083364.jpg','2018-02-08 15:19:23','2018-02-08 15:19:23',1,12),(473,34,212,'birthday cake','1518083686.jpg','2018-02-08 15:24:46','2018-02-08 15:24:46',1,12),(474,34,217,'birthday cake','1518083705.jpg','2018-02-08 15:25:05','2018-02-08 15:25:05',1,12),(475,34,217,'cake','1518083738.jpg','2018-02-08 15:25:38','2018-02-08 15:25:38',1,12),(476,34,218,'birthday cake','1518083763.jpg','2018-02-08 15:26:02','2018-02-08 15:26:02',1,12),(477,34,214,'Birthday item','1518084083.jpg','2018-02-08 15:31:22','2018-02-08 15:31:22',1,12),(478,37,247,'Organic Vegetables','1534834669.png','2018-08-21 12:27:48','2018-08-21 12:27:48',1,12),(479,37,248,'Liquid Fertilizer','1534850178.jpg','2018-08-21 16:46:17','2018-08-21 16:46:17',1,12),(480,37,248,'Plant Growth Fertilizers','1534846085.png','2018-08-21 15:38:05','2018-08-21 15:38:05',1,12),(481,37,249,'Masala spices','1534850344.jpg','2018-08-21 16:49:03','2018-08-21 16:49:03',1,12),(482,37,250,'Organic Green Tea','1534836688.jpg','2018-08-21 13:01:27','2018-08-21 13:01:27',1,12),(483,37,251,'Hair cleanser ','1534406456.jpeg','2018-08-16 13:30:56','2018-08-16 13:30:56',1,12),(484,37,250,'Ayurvedic Proprietary Herbal Tea','1534411197.jpeg','2018-08-16 14:49:57','2018-08-16 14:49:57',0,12),(485,37,251,'Hair Loss preventive Shampoo','1534411733.jpg','2018-08-16 14:58:52','2018-08-16 14:58:52',1,12),(486,37,251,'Anti Dandruff Shampoo','1534415817.jpg','2018-08-16 16:06:56','2018-08-16 16:06:56',1,12),(487,37,247,'Organic Fruits','1536055001.jpg','2018-09-04 15:26:41','2018-09-04 15:26:41',1,12);

/*Table structure for table `subcat_wise_fliter_search` */

DROP TABLE IF EXISTS `subcat_wise_fliter_search`;

CREATE TABLE `subcat_wise_fliter_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ip_address` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `min` varchar(250) DEFAULT NULL,
  `max` varchar(250) DEFAULT NULL,
  `mini_amount` varchar(250) DEFAULT NULL,
  `max_amount` varchar(250) DEFAULT NULL,
  `offers` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `create` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `subcat_wise_fliter_search` */

/*Table structure for table `subcategories` */

DROP TABLE IF EXISTS `subcategories`;

CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(500) NOT NULL,
  `subcategory_image` varchar(500) DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `yes` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `document` varchar(250) DEFAULT 'allfields.xlsx',
  PRIMARY KEY (`subcategory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

/*Data for the table `subcategories` */

insert  into `subcategories`(`subcategory_id`,`category_id`,`subcategory_name`,`subcategory_image`,`commission`,`created_at`,`updated_at`,`yes`,`status`,`created_by`,`document`) values (41,21,'Fruits & Vegetables','Fruits-&-Vegetables.png',12,'2018-01-04 13:00:38','2018-01-04 13:00:38',0,1,12,'grocerycategoryfile.xlsx'),(42,21,'Grocery & Staples','Grocery-&-Staples.png',12,'2018-01-04 13:00:22','2018-01-04 13:00:22',0,1,12,'grocerycategoryfile.xlsx'),(44,21,'Beverages','Beverages.png',12,'2018-01-04 13:00:03','2018-01-04 13:00:03',0,1,12,'grocerycategoryfile.xlsx'),(45,21,'Home & Kitchen','Home-&-Kitchen.png',12,'2018-01-04 12:59:49','2018-01-04 12:59:49',0,1,12,'grocerycategoryfile.xlsx'),(95,21,'Household Needs','Household-Needs.png',14,'2018-01-04 12:59:30','2018-01-04 12:59:30',0,1,12,'grocerycategoryfile.xlsx'),(96,21,'Personal Care','Personal-Care.png',14,'2018-01-04 12:56:46','2018-01-04 12:56:46',0,1,12,'grocerycategoryfile.xlsx'),(97,21,'Breakfast & Dairy','Breakfast-&-Dairy.png',12,'2018-01-04 12:56:28','2018-01-04 12:56:28',0,1,12,'grocerycategoryfile.xlsx'),(98,21,'Biscuits, Snacks & Chocolates','Biscuits.png',14,'2018-01-04 12:56:12','2018-01-04 12:56:12',0,1,12,'grocerycategoryfile.xlsx'),(99,21,'Noodles, Sauces & Instant Food','Noodles,-Sauces-&-Instant-Food.png',41,'2018-01-04 12:55:41','2018-01-04 12:55:41',0,1,12,'grocerycategoryfile.xlsx'),(100,21,'Baby & Kids','Baby-&-Kids.png',45,'2017-12-13 18:36:57','2017-12-13 18:36:57',0,1,12,'grocerycategoryfile.xlsx'),(101,21,'Organic & Gourmet','Organic-&-Gourmet.png',41,'2017-12-13 18:40:14','2017-12-13 18:40:14',0,1,12,'grocerycategoryfile.xlsx'),(102,21,'Pet Care','Pet-Care.png',14,'2017-12-13 18:36:31','2017-12-13 18:36:31',0,1,12,'grocerycategoryfile.xlsx'),(107,22,'Laptops Store','Laptops-Store.png',20,'2018-02-09 17:38:31','2018-02-09 17:38:31',0,1,12,'Electroniclaptops.xlsx'),(108,22,'Desktops & Monitors','Desktops-&-Monitors.png',20,'2018-02-09 17:38:54','2018-02-09 17:38:54',0,1,12,'allfields.xlsx'),(109,22,'Camera & Accessories','Camera-&-Accessories.png',20,'2018-02-09 17:40:34','2018-02-09 17:40:34',0,1,12,'Electroniccameraaccessories.xlsx'),(110,22,'Computer Accessories','Computer-Accessories.png',20,'2018-02-09 17:53:53','2018-02-09 17:53:53',0,1,12,'allfields.xlsx'),(111,22,'Printers & Office Electronics','Printers-&-Office-Electronics.png',20,'2018-02-09 17:44:52','2018-02-09 17:44:52',0,1,12,'Electronicprinters.xlsx'),(112,22,'Gaming','Gaming.png',20,'2018-02-09 17:45:13','2018-02-09 17:45:13',0,1,12,'allfields.xlsx'),(113,22,'Storage Devices','Storage-Devices.png',20,'2018-02-09 17:45:30','2018-02-09 17:45:30',0,1,12,'storagedevices.xlsx'),(115,23,'All Televisions',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(116,23,'Audio & Video',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(117,23,'Washing Machines',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(118,23,'Refrigerators',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(119,23,'Home Appliances',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(120,23,'Breakfast Essentials',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(121,23,'Kitchen Essentials',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(122,23,'Personal Grooming Appliances',NULL,20,'2017-12-13 18:02:42','2017-12-13 18:02:42',0,1,12,'allfields.xlsx'),(123,19,'Men T-shirts,Shirts & More','Men-T-shirts,Shirts-&-More.png',20,'2018-01-02 17:21:10','2018-01-02 17:21:10',0,1,12,'clothcategoryfile.xlsx'),(124,19,'Men Jeans, Trousers & More','Men-Jeans,-Trousers-&-More.png',20,'2018-02-05 16:40:35','2018-02-05 16:40:35',0,1,12,'clothcategoryfile62.xlsx'),(125,19,'Men Sports & Active Wear','Men-Sports-&-Active-Wear.png',20,'2018-02-05 16:41:05','2018-02-05 16:41:05',0,1,12,'clothcategoryfile.xlsx'),(126,19,'Men Innerwear & Nightwear','Men-Innerwear-&-Nightwear.png',20,'2018-02-05 16:45:51','2018-02-05 16:45:51',0,1,12,'clothcategoryfile.xlsx'),(127,19,'Men Ethnic Wear','Men-Ethnic-Wear.png',20,'2018-02-05 16:53:15','2018-02-05 16:53:15',0,1,12,'clothcategoryfile.xlsx'),(128,19,'Men\'s Footwear Store','Mens-Footwear-Store.png',20,'2018-02-05 17:19:01','2018-02-05 17:19:01',0,1,12,'footwareshoe.xlsx'),(129,19,'Formal & Casual Shoes','Mens-Footwear-Store.png',20,'2018-02-05 16:58:40','2018-02-05 16:58:40',0,1,12,'footwareshoe.xlsx'),(130,19,'Sports Shoes','Sports-Shoes.png',20,'2018-02-05 17:19:42','2018-02-05 17:19:42',0,1,12,'footwareshoe.xlsx'),(131,19,'Watch Store','Watch-Store.png',20,'2018-02-05 17:05:42','2018-02-05 17:05:42',0,1,12,'allfields.xlsx'),(132,19,'Bags & Luggage Store','Bags-&-Luggage-Store.png',20,'2018-02-05 17:16:02','2018-02-05 17:16:02',0,1,12,'bagscategoryfile.xlsx'),(133,19,'Eyewear','Eyewear.png',20,'2018-02-05 16:46:35','2018-02-05 16:46:35',0,1,12,'allfields.xlsx'),(134,19,'Wallet, Belts & more','Wallet,-Belts-&-more.png',20,'2018-02-05 17:06:08','2018-02-05 17:06:08',0,1,12,'allfields.xlsx'),(135,24,'Women Ethnic Wear','Women-Ethnic-Wear.png',20,'2018-08-14 12:43:38','2018-08-14 12:43:38',0,1,12,'clothcategoryfile63.xlsx'),(136,24,'Women Western Wear','Women-Western-Wear.png',20,'2018-01-04 12:37:07','2018-01-04 12:37:07',0,1,12,'clothcategoryfile.xlsx'),(137,24,'Women Winterwear','Women-Winterwear.png',20,'2018-01-04 12:37:20','2018-01-04 12:37:20',0,1,12,'clothcategoryfile.xlsx'),(138,24,'Woman Sports & Active Wear','Woman-Sports-&-Active-Wear.png',20,'2018-01-04 12:37:31','2018-01-04 12:37:31',0,1,12,'clothcategoryfile.xlsx'),(139,24,'Women\'s Clothing Store','Women\'s-Clothing-Store.png',20,'2018-01-04 12:38:22','2018-01-04 12:38:22',0,1,12,'clothcategoryfile63.xlsx'),(140,24,'Women\'s Footwear Store','Women\'s-Footwear-Store.png',20,'2018-01-04 12:38:12','2018-01-04 12:38:12',0,1,12,'footwareshoe.xlsx'),(141,24,'Watch Store','Watch-Store.png',20,'2018-01-04 12:38:38','2018-01-04 12:38:38',0,1,12,'allfields.xlsx'),(142,24,'Women Bags','Women-Bags.png',20,'2018-01-04 12:38:54','2018-01-04 12:38:54',0,1,12,'bagscategoryfile.xlsx'),(143,24,'Eyewear','Eyewear.png',20,'2018-01-04 12:39:06','2018-01-04 12:39:06',0,1,12,'allfields.xlsx'),(144,24,'Bags & Luggage Store','Bags-&-Luggage-Store.png',20,'2018-01-04 12:39:17','2018-01-04 12:39:17',0,1,12,'bagscategoryfile.xlsx'),(145,24,'Winter Accessories','Winter-Accessories.png',20,'2018-01-04 12:42:49','2018-01-04 12:42:49',0,1,12,'allfields.xlsx'),(146,18,'Home Decorative','Home-Decorative.png',20,'2018-02-09 17:29:45','2018-02-09 17:29:45',0,1,12,'allfields.xlsx'),(147,18,'Home Furnishings','Home-Furnishings.png',20,'2018-02-09 17:30:12','2018-02-09 17:30:12',0,1,12,'allfields.xlsx'),(148,18,'Kitchen & Dining','Kitchen-&-Dining.png',20,'2018-02-09 17:30:29','2018-02-09 17:30:29',0,1,12,'allfields.xlsx'),(149,18,'Home Improvement','Home-Improvement.png',20,'2018-02-09 17:30:52','2018-02-09 17:30:52',0,1,12,'allfields.xlsx'),(150,18,'Hardware & Fittings','Hardware-&-Fittings.png',20,'2018-02-09 17:31:11','2018-02-09 17:31:11',0,1,12,'allfields.xlsx'),(151,18,'LEDs & Lighting','LEDs-&-Lighting.png',20,'2018-02-09 17:31:29','2018-02-09 17:31:29',0,1,12,'allfields.xlsx'),(152,18,'Bathroom Accessories','Bathroom-Accessories.png',20,'2018-02-09 17:31:45','2018-02-09 17:31:45',0,1,12,'allfields.xlsx'),(153,18,'Brand Store','Brand-Store.png',20,'2018-02-09 17:31:59','2018-02-09 17:31:59',0,1,12,'allfields.xlsx'),(154,18,'Home & Kitchen products under 299','Home-&-Kitchen-products.png',20,'2018-02-09 17:32:31','2018-02-09 17:32:31',0,1,12,'allfields.xlsx'),(155,28,'Car Audio & GPS',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(156,28,'Car Perfumes',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(157,28,'Helmets',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(158,28,'Car & Bike Body Covers',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(159,28,'Seat Covers',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(160,28,'Vacuum cleaners',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(161,28,'Bluetooth Devices',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(162,28,'Tyres',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(163,28,'Car Interior Accessories',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(164,28,'Car Exterior Accessories',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(165,28,'Helmets',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(166,28,'Car Audio & GPS',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(167,28,'Car Care & Tool Kits',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(168,28,'Car Air Fresheners',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(169,28,'Riding Accessories',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(170,28,'Bike Accessories',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(171,28,'Comfort & Safety',NULL,20,'2017-12-14 17:02:12','2017-12-14 17:02:12',0,1,12,'allfields.xlsx'),(172,29,'Pens',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(173,29,'Writing & Drawing',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(174,29,'Files & Folders',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(175,29,'Office Supplies',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(176,29,'Calculators',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(177,29,'Diaries & Notebooks',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(178,29,'Tapes, Envelopes and more',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(179,29,'Student Stuff',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(180,29,'Paper Supplies',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(181,29,'Books',NULL,15,'2017-12-14 17:10:09','2017-12-14 17:10:09',0,1,12,'allfields.xlsx'),(182,30,'Toys & Games',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(183,30,'International Toys',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(184,30,'Indoor Toys & Games',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(185,30,'Travel & Outdoor',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(186,30,'Learning & Education',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(187,30,'Baby & Toddler Toys',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(188,30,'Adult Collectibles',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(189,30,'Toys For Girls',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(190,30,'Babycare & Maternity Store',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(191,30,'Kids Clothing Store',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(192,30,'Girls Clothing & Footwear',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(193,30,'Boys Clothing & Footwear',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(194,30,'Infants Clothing & Footwear',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(195,30,'Kids Accessories',NULL,15,'2017-12-14 17:13:01','2017-12-14 17:13:01',0,1,12,'allfields.xlsx'),(196,31,'Sports',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(197,31,'Cycling',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(198,31,'Fitness Equipment',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(199,31,'Fitness Accessories',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(200,31,'Massagers',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(201,31,'Indoor Games',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(202,31,'Weighing Technology',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(203,31,'Outdoor and Adventure Gear',NULL,20,'2017-12-14 17:15:00','2017-12-14 17:15:00',0,1,12,'allfields.xlsx'),(204,32,'Furniture',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(205,32,'Decor',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(206,32,'Lamps & Lighting',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(207,32,'Furnishings',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(208,32,'Kitchen',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(209,32,'Dining ',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(210,32,'Hardware & Electricals',NULL,20,'2017-12-14 18:17:03','2017-12-14 18:17:03',0,1,12,'allfields.xlsx'),(211,34,'Christmas',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(212,34,'New Year',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(213,34,'Same Day',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(214,34,'Birthday',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(215,34,'Anniversary',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(216,34,'Occasions',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(217,34,'Gift Type',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(218,34,'By Recipient',NULL,20,'2017-12-15 16:44:46','2017-12-15 16:44:46',0,1,12,'allfields.xlsx'),(219,22,'Audio Store','Audio-Store.png',20,'2018-02-09 17:45:46','2018-02-09 17:45:46',0,1,12,'Electroniccomputerspeakers.xlsx'),(220,35,'Bags & Backpacks',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'bagscategoryfile.xlsx'),(221,35,'Luggage',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'bagscategoryfile.xlsx'),(222,35,'Handbags & Clutches',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'bagscategoryfile.xlsx'),(223,35,'Wallets',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'allfields.xlsx'),(224,35,'Stores',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'allfields.xlsx'),(225,35,'Camping & Hiking',NULL,20,'2017-12-15 17:34:33','2017-12-15 17:34:33',0,1,12,'allfields.xlsx'),(226,20,'Android','Android.png',20,'2018-01-08 13:02:01','2018-01-08 13:02:01',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(227,20,'Windows','Windows.png',20,'2018-01-08 13:02:16','2018-01-08 13:02:16',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(228,20,'IOS',NULL,20,'2017-12-15 17:38:48','2017-12-15 17:38:48',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(229,20,'Symbian ',NULL,20,'2017-12-18 11:32:24','2017-12-18 11:32:24',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(230,20,'Basic',NULL,20,'2017-12-15 17:38:48','2017-12-15 17:38:48',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(231,20,'Mobile Accessories',NULL,20,'2017-12-15 17:38:48','2017-12-15 17:38:48',0,1,12,'Electroniccategoryfilemobiles.xlsx'),(232,24,'Women\'s Formal & Causal Shoes',NULL,20,'2017-12-15 18:35:37','2017-12-15 18:35:33',0,1,12,'footwareshoe.xlsx'),(233,24,'Women\'s Sports Shoes',NULL,20,'2017-12-15 18:35:39','2017-12-15 18:35:35',0,1,12,'footwareshoe.xlsx'),(234,20,'Tablets','tablets.png',20,'2017-12-18 12:09:19','2017-12-18 12:09:19',0,1,12,'allfields.xlsx'),(235,28,'car and bIke','g4.jpg',12,'2017-12-18 18:35:20','2017-12-18 18:35:20',0,1,12,'allfields.xlsx'),(237,22,'External DVD Writers','Storage-Devices.png',12,'2018-02-09 17:46:08','2018-02-09 17:46:08',0,1,12,'externaldvdwriters.xlsx'),(238,22,'Converters','71dD9nC4hCL._SL1000_.jpg',12,'2018-01-04 13:00:44','2018-01-04 13:00:44',0,1,12,'converters.xlsx'),(239,22,'Projectors','31uhivP6uWL.jpg',12,'2018-01-04 14:35:27','2018-01-04 14:35:27',0,1,12,'projectors.xlsx'),(240,22,'Card Reader','card reader.jpeg',12,'2018-01-04 15:18:54','2018-01-04 15:18:54',0,1,12,'allfields.xlsx'),(241,22,'Cables','61ukvfPEjIL._SL1500_.jpg',12,'2018-01-04 16:19:31','2018-01-04 16:19:31',0,1,12,'allfields.xlsx'),(242,22,'SMPS','31k7x4umYaL.jpg',12,'2018-01-04 17:54:04','2018-01-04 17:54:04',0,1,12,'allfields.xlsx'),(243,22,'Processors','INTEL DUAL CORE G32 PROCESSOR.jpg',12,'2018-01-04 18:34:05','2018-01-04 18:34:05',0,1,12,'processors.xlsx'),(244,22,'Headphones','41nWgP6hr2L.jpg',12,'2018-01-04 19:50:19','2018-01-04 19:50:19',0,1,12,'Electronicheadphone.xlsx'),(245,22,'Cabinets','INTEX P4 CAMIBET.jpg',12,'2018-01-05 11:30:51','2018-01-05 11:30:51',0,1,12,'cabinets.xlsx'),(246,22,'Back UPS','51EbEwVzlGL._SL1000_.jpg',12,'2018-01-05 12:46:36','2018-01-05 12:46:36',0,1,12,'ups.xlsx'),(247,37,'Organic Fruits & Vegetables','f&v.png',10,'2018-08-21 12:31:01','2018-08-21 12:31:01',0,1,12,'allfields.xlsx'),(248,37,'Organic Fertilizers','orgfer.png',12,'2018-08-21 13:31:44','2018-08-21 13:31:44',0,1,12,'allfields.xlsx'),(249,37,'Organic Spices','Spice-Inner.png',10,'2018-08-21 14:45:26','2018-08-21 14:45:26',0,1,12,'allfields.xlsx'),(250,37,'Organic Tea','ortea.png',13,'2018-08-21 12:50:53','2018-08-21 12:50:53',0,1,12,'allfields.xlsx'),(251,37,'Organic Beauty Products','organic bp.jpg',11,'2018-08-21 15:00:35','2018-08-21 15:00:35',0,1,12,'allfields.xlsx');

/*Table structure for table `subcategory` */

DROP TABLE IF EXISTS `subcategory`;

CREATE TABLE `subcategory` (
  `seller_subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`seller_subcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subcategory` */

/*Table structure for table `subitem_wise_filter_search` */

DROP TABLE IF EXISTS `subitem_wise_filter_search`;

CREATE TABLE `subitem_wise_filter_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(250) DEFAULT NULL,
  `subcategory_id` varchar(250) DEFAULT NULL,
  `subitemid` varchar(250) DEFAULT NULL,
  `min` varchar(250) DEFAULT NULL,
  `max` varchar(250) DEFAULT NULL,
  `minimum_price` varchar(250) DEFAULT NULL,
  `maximum_price` varchar(250) DEFAULT NULL,
  `offer` varchar(250) DEFAULT NULL,
  `brand` varchar(250) DEFAULT NULL,
  `discount` varchar(250) DEFAULT NULL,
  `colour` varchar(250) DEFAULT NULL,
  `size` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `sim_type` varchar(250) DEFAULT NULL,
  `camera` varchar(250) DEFAULT NULL,
  `internal_memeory` varchar(250) DEFAULT NULL,
  `screen_size` varchar(250) DEFAULT NULL,
  `Processor` varchar(250) DEFAULT NULL,
  `printer_type` varchar(250) DEFAULT NULL,
  `type` varbinary(250) DEFAULT NULL,
  `max_copies` varchar(250) DEFAULT NULL,
  `paper_size` varchar(250) DEFAULT NULL,
  `headphone_jack` varchar(250) DEFAULT NULL,
  `noise_reduction` varchar(250) DEFAULT NULL,
  `usb_port` varchar(250) DEFAULT NULL,
  `compatible_for` varchar(250) DEFAULT NULL,
  `scanner_type` varchar(250) DEFAULT NULL,
  `resolution` varchar(250) DEFAULT NULL,
  `f_stop` varchar(250) DEFAULT NULL,
  `minimum_focusing_distance` varchar(250) DEFAULT NULL,
  `aperture_withmaxfocal_length` varchar(250) DEFAULT NULL,
  `picture_angle` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `occasion` varchar(250) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `collar_type` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `sleeve` varchar(250) DEFAULT NULL,
  `look` varchar(250) DEFAULT NULL,
  `style_code` varchar(250) DEFAULT NULL,
  `inner_material` varchar(250) DEFAULT NULL,
  `waterproof` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subitem_wise_filter_search` */

/*Table structure for table `tmpcart` */

DROP TABLE IF EXISTS `tmpcart`;

CREATE TABLE `tmpcart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cart_data` text NOT NULL,
  UNIQUE KEY `cart_id` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tmpcart` */

insert  into `tmpcart`(`cart_id`,`cart_data`) values (2,'a:0:{}'),(3,'a:0:{}'),(4,'a:1:{s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";a:6:{s:5:\"rowid\";s:32:\"1679091c5a880faf6fb5e6087eb1b2dc\";s:2:\"id\";s:1:\"6\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:3:\"500\";s:4:\"name\";s:10:\"skin cream\";s:8:\"subtotal\";i:500;}}');

/*Table structure for table `top_offers` */

DROP TABLE IF EXISTS `top_offers`;

CREATE TABLE `top_offers` (
  `top_offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item_price` varchar(250) DEFAULT NULL,
  `offer_percentage` varchar(11) DEFAULT NULL,
  `offer_amount` varchar(250) DEFAULT NULL,
  `intialdate` date DEFAULT NULL,
  `expairdate` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `home_page_status` int(11) DEFAULT '0',
  `preview_ok` int(11) DEFAULT '0',
  PRIMARY KEY (`top_offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `top_offers` */

insert  into `top_offers`(`top_offer_id`,`item_id`,`seller_id`,`category_id`,`subcategory_id`,`item_price`,`offer_percentage`,`offer_amount`,`intialdate`,`expairdate`,`status`,`create_at`,`area`,`home_page_status`,`preview_ok`) values (7,6,3,37,249,'399','20.00','79.8','2018-08-20','2018-08-31 11:55:00 PM',0,'2018-08-20 11:20:19',1,1,0),(8,7,3,37,250,'1000','50.00','500','2018-08-20','2018-08-27 04:42:12 PM',1,'2018-08-20 16:42:12',1,1,0),(9,20,3,37,249,'120','8.00','9.6','2018-09-04','2018-09-11 04:27:46 PM',1,'2018-09-04 16:27:46',1,1,1),(10,14,3,37,247,'120','5.00','6','2018-09-04','2018-09-11 04:30:51 PM',1,'2018-09-04 16:30:51',1,1,1),(11,11,3,37,251,'800','11.00','88','2018-09-04','2018-09-11 04:31:29 PM',1,'2018-09-04 16:31:29',1,1,1);

/*Table structure for table `uk_sizes_list` */

DROP TABLE IF EXISTS `uk_sizes_list`;

CREATE TABLE `uk_sizes_list` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `seller_status` int(11) DEFAULT '1',
  PRIMARY KEY (`size_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `uk_sizes_list` */

insert  into `uk_sizes_list`(`size_id`,`size_name`,`status`,`create_at`,`seller_id`,`seller_status`) values (1,'9',1,NULL,NULL,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_summary` text NOT NULL,
  `identifier` varchar(500) NOT NULL,
  `provider` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `forgot_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  `need_verification` tinyint(1) DEFAULT '0' COMMENT '1 - YES\n0 - NO',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`salt`,`email`,`activation_code`,`forgotten_password_code`,`forgotten_password_time`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`,`profile_pic`,`role`,`verification_code`,`need_verification`) values (1,'127.0.0.1','administrator','$2y$08$XLOfBQ0gwV6mDYtICXbWjusENKRyZolS7tlQwtZy5tUdBNF3Akn4u','','c.freedman@ondefend.com','',NULL,NULL,NULL,1268889823,1484760016,1,'Chris','Freedman','ADMIN','7075724001','1484053746.jpg','Admin','',0);

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (212,1,1);

/*Table structure for table `vewed_products` */

DROP TABLE IF EXISTS `vewed_products`;

CREATE TABLE `vewed_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=740 DEFAULT CHARSET=latin1;

/*Data for the table `vewed_products` */

insert  into `vewed_products`(`id`,`item_id`,`customer_id`,`created_at`) values (1,1,0,'2018-08-11 16:26:45'),(2,0,0,'2018-08-11 16:26:45'),(3,1,190,'2018-08-11 16:27:13'),(4,0,190,'2018-08-11 16:27:14'),(5,1,0,'2018-08-11 16:27:26'),(6,0,0,'2018-08-11 16:27:27'),(7,1,0,'2018-08-11 16:40:24'),(8,0,0,'2018-08-11 16:40:24'),(9,1,0,'2018-08-11 17:35:40'),(10,0,0,'2018-08-11 17:35:40'),(11,1,0,'2018-08-11 17:41:19'),(12,0,0,'2018-08-11 17:41:21'),(13,1,190,'2018-08-11 17:41:51'),(14,0,190,'2018-08-11 17:41:52'),(15,1,0,'2018-08-11 18:04:53'),(16,0,0,'2018-08-11 18:04:53'),(17,1,190,'2018-08-11 18:05:06'),(18,0,190,'2018-08-11 18:05:06'),(19,1,190,'2018-08-11 18:05:23'),(20,0,190,'2018-08-11 18:05:23'),(21,1,190,'2018-08-11 18:24:49'),(22,0,190,'2018-08-11 18:24:50'),(23,2,190,'2018-08-11 18:26:03'),(24,0,190,'2018-08-11 18:26:04'),(25,2,190,'2018-08-11 18:27:57'),(26,0,190,'2018-08-11 18:27:57'),(27,1,0,'2018-08-13 01:41:07'),(28,2,0,'2018-08-13 10:43:52'),(29,0,0,'2018-08-13 10:43:52'),(30,1,0,'2018-08-13 10:43:56'),(31,1,0,'2018-08-13 10:43:57'),(32,0,0,'2018-08-13 10:43:57'),(33,2,0,'2018-08-13 10:45:40'),(34,0,0,'2018-08-13 10:45:40'),(35,2,0,'2018-08-13 10:46:21'),(36,0,0,'2018-08-13 10:46:26'),(37,2,0,'2018-08-13 10:47:35'),(38,0,0,'2018-08-13 10:47:36'),(39,2,0,'2018-08-13 10:47:43'),(40,0,0,'2018-08-13 10:47:43'),(41,2,0,'2018-08-13 10:51:27'),(42,0,0,'2018-08-13 10:51:27'),(43,2,0,'2018-08-13 10:57:44'),(44,0,0,'2018-08-13 10:57:45'),(45,3,0,'2018-08-13 11:38:41'),(46,0,0,'2018-08-13 11:38:41'),(47,1,190,'2018-08-13 12:46:37'),(48,0,190,'2018-08-13 12:46:37'),(49,1,190,'2018-08-13 12:58:59'),(50,0,190,'2018-08-13 12:59:00'),(51,3,0,'2018-08-13 13:25:16'),(52,0,0,'2018-08-13 13:25:17'),(53,5,190,'2018-08-13 14:45:17'),(54,0,190,'2018-08-13 14:45:17'),(55,3,0,'2018-08-13 15:38:08'),(56,0,0,'2018-08-13 15:38:09'),(57,3,0,'2018-08-13 15:38:20'),(58,0,0,'2018-08-13 15:38:21'),(59,5,0,'2018-08-13 16:45:59'),(60,0,0,'2018-08-13 16:46:00'),(61,1,0,'2018-08-13 16:47:37'),(62,0,0,'2018-08-13 16:47:37'),(63,1,0,'2018-08-13 16:50:14'),(64,0,0,'2018-08-13 16:50:15'),(65,1,0,'2018-08-13 16:58:12'),(66,0,0,'2018-08-13 16:58:13'),(67,1,0,'2018-08-13 17:55:55'),(68,5,0,'2018-08-13 18:06:41'),(69,0,0,'2018-08-13 18:06:41'),(70,5,0,'2018-08-13 18:13:38'),(71,0,0,'2018-08-13 18:13:40'),(72,1,190,'2018-08-14 10:29:08'),(73,0,190,'2018-08-14 10:29:08'),(74,6,190,'2018-08-14 16:46:20'),(75,0,190,'2018-08-14 16:46:20'),(76,6,0,'2018-08-14 16:46:20'),(77,2,0,'2018-08-14 17:31:44'),(78,0,0,'2018-08-14 17:31:46'),(79,1,190,'2018-08-16 11:24:45'),(80,0,190,'2018-08-16 11:24:45'),(81,6,0,'2018-08-16 11:28:39'),(82,0,0,'2018-08-16 11:28:40'),(83,0,0,'2018-08-16 11:28:40'),(84,4,190,'2018-08-16 13:09:20'),(85,0,190,'2018-08-16 13:09:20'),(86,8,0,'2018-08-16 14:26:05'),(87,0,0,'2018-08-16 14:26:05'),(88,8,0,'2018-08-16 14:27:46'),(89,0,0,'2018-08-16 14:27:46'),(90,8,0,'2018-08-16 14:28:04'),(91,0,0,'2018-08-16 14:28:04'),(92,8,0,'2018-08-16 14:29:51'),(93,0,0,'2018-08-16 14:29:51'),(94,8,0,'2018-08-16 14:30:18'),(95,0,0,'2018-08-16 14:30:19'),(96,8,0,'2018-08-16 14:45:59'),(97,0,0,'2018-08-16 14:46:00'),(98,9,190,'2018-08-16 15:00:42'),(99,0,190,'2018-08-16 15:00:43'),(100,3,190,'2018-08-16 15:25:25'),(101,0,190,'2018-08-16 15:25:25'),(102,10,0,'2018-08-16 15:49:50'),(103,0,0,'2018-08-16 15:49:51'),(104,10,190,'2018-08-16 15:50:20'),(105,0,190,'2018-08-16 15:50:20'),(106,3,190,'2018-08-16 16:05:53'),(107,0,190,'2018-08-16 16:05:53'),(108,9,0,'2018-08-16 16:08:26'),(109,0,0,'2018-08-16 16:08:27'),(110,13,0,'2018-08-16 16:21:07'),(111,0,0,'2018-08-16 16:21:08'),(112,8,0,'2018-08-16 16:22:29'),(113,0,0,'2018-08-16 16:22:30'),(114,13,0,'2018-08-16 16:23:09'),(115,0,0,'2018-08-16 16:23:09'),(116,10,190,'2018-08-16 16:32:58'),(117,0,190,'2018-08-16 16:32:59'),(118,1,0,'2018-08-16 16:44:33'),(119,0,0,'2018-08-16 16:44:33'),(120,11,0,'2018-08-16 16:46:15'),(121,0,0,'2018-08-16 16:46:15'),(122,12,0,'2018-08-16 16:46:48'),(123,0,0,'2018-08-16 16:46:49'),(124,10,0,'2018-08-16 16:49:30'),(125,0,0,'2018-08-16 16:49:30'),(126,8,0,'2018-08-16 16:53:01'),(127,0,0,'2018-08-16 16:53:01'),(128,0,0,'2018-08-16 16:53:02'),(129,2,0,'2018-08-16 16:54:00'),(130,0,0,'2018-08-16 16:54:01'),(131,0,0,'2018-08-16 16:54:01'),(132,2,0,'2018-08-16 16:54:59'),(133,0,0,'2018-08-16 16:55:00'),(134,0,0,'2018-08-16 16:55:01'),(135,3,190,'2018-08-16 17:21:17'),(136,0,190,'2018-08-16 17:21:18'),(137,3,0,'2018-08-16 17:21:18'),(138,9,0,'2018-08-16 17:22:07'),(139,0,0,'2018-08-16 17:22:07'),(140,6,190,'2018-08-16 17:38:00'),(141,0,190,'2018-08-16 17:38:00'),(142,1,190,'2018-08-16 17:42:35'),(143,0,190,'2018-08-16 17:42:35'),(144,8,190,'2018-08-16 17:42:49'),(145,0,190,'2018-08-16 17:42:50'),(146,8,0,'2018-08-16 17:42:53'),(147,1,190,'2018-08-16 17:48:38'),(148,0,190,'2018-08-16 17:48:38'),(149,4,190,'2018-08-16 17:50:08'),(150,0,190,'2018-08-16 17:50:08'),(151,3,190,'2018-08-16 17:58:43'),(152,0,190,'2018-08-16 17:58:43'),(153,4,190,'2018-08-16 17:59:29'),(154,0,190,'2018-08-16 17:59:29'),(155,13,0,'2018-08-16 18:00:40'),(156,0,0,'2018-08-16 18:00:40'),(157,13,190,'2018-08-16 18:00:54'),(158,0,190,'2018-08-16 18:00:55'),(159,13,0,'2018-08-16 18:01:15'),(160,0,0,'2018-08-16 18:01:15'),(161,13,190,'2018-08-16 18:01:47'),(162,13,0,'2018-08-16 18:01:47'),(163,0,0,'2018-08-16 18:01:47'),(164,0,190,'2018-08-16 18:01:49'),(165,13,0,'2018-08-16 18:02:05'),(166,0,0,'2018-08-16 18:02:05'),(167,13,190,'2018-08-16 18:02:36'),(168,0,190,'2018-08-16 18:02:38'),(169,6,0,'2018-08-16 18:17:44'),(170,0,0,'2018-08-16 18:17:44'),(171,0,0,'2018-08-16 18:17:45'),(172,5,0,'2018-08-16 18:18:52'),(173,0,0,'2018-08-16 18:18:52'),(174,0,0,'2018-08-16 18:18:53'),(175,6,0,'2018-08-16 18:20:44'),(176,0,0,'2018-08-16 18:20:45'),(177,0,0,'2018-08-16 18:20:46'),(178,5,0,'2018-08-17 10:37:53'),(179,0,0,'2018-08-17 10:37:54'),(180,8,0,'2018-08-17 10:39:11'),(181,1,0,'2018-08-17 10:39:58'),(182,2,0,'2018-08-17 10:41:24'),(183,5,0,'2018-08-17 10:43:09'),(184,0,0,'2018-08-17 10:43:10'),(185,3,0,'2018-08-17 10:52:35'),(186,0,0,'2018-08-17 10:52:37'),(187,3,0,'2018-08-17 11:09:53'),(188,0,0,'2018-08-17 11:09:54'),(189,0,0,'2018-08-17 11:09:55'),(190,8,190,'2018-08-17 11:47:07'),(191,0,190,'2018-08-17 11:47:08'),(192,1,190,'2018-08-17 11:57:27'),(193,0,190,'2018-08-17 11:57:27'),(194,8,190,'2018-08-17 11:58:27'),(195,0,190,'2018-08-17 11:58:27'),(196,5,190,'2018-08-17 12:09:12'),(197,0,190,'2018-08-17 12:09:13'),(198,9,190,'2018-08-17 12:10:02'),(199,0,190,'2018-08-17 12:10:02'),(200,9,0,'2018-08-17 12:10:02'),(201,0,190,'2018-08-17 12:10:03'),(202,8,190,'2018-08-17 12:24:31'),(203,0,190,'2018-08-17 12:24:32'),(204,8,190,'2018-08-17 12:25:42'),(205,0,190,'2018-08-17 12:25:43'),(206,0,190,'2018-08-17 12:25:43'),(207,8,190,'2018-08-17 12:36:19'),(208,0,190,'2018-08-17 12:36:20'),(209,8,190,'2018-08-17 12:36:33'),(210,0,190,'2018-08-17 12:36:33'),(211,0,190,'2018-08-17 12:36:34'),(212,8,190,'2018-08-17 12:37:10'),(213,0,190,'2018-08-17 12:37:11'),(214,8,190,'2018-08-17 12:38:08'),(215,0,190,'2018-08-17 12:38:09'),(216,5,190,'2018-08-17 12:38:17'),(217,0,190,'2018-08-17 12:38:18'),(218,6,190,'2018-08-17 12:38:28'),(219,0,190,'2018-08-17 12:38:29'),(220,0,190,'2018-08-17 12:38:29'),(221,6,190,'2018-08-17 12:39:40'),(222,0,190,'2018-08-17 12:39:41'),(223,11,190,'2018-08-17 13:01:41'),(224,0,190,'2018-08-17 13:01:41'),(225,0,190,'2018-08-17 13:01:41'),(226,6,190,'2018-08-17 13:07:23'),(227,0,190,'2018-08-17 13:07:24'),(228,6,190,'2018-08-17 13:07:45'),(229,0,190,'2018-08-17 13:07:45'),(230,11,190,'2018-08-17 13:10:30'),(231,0,190,'2018-08-17 13:10:30'),(232,9,190,'2018-08-17 13:12:43'),(233,0,190,'2018-08-17 13:12:44'),(234,6,190,'2018-08-17 13:12:44'),(235,0,190,'2018-08-17 13:12:45'),(236,0,190,'2018-08-17 13:12:45'),(237,10,190,'2018-08-17 13:17:27'),(238,0,190,'2018-08-17 13:17:27'),(239,10,190,'2018-08-17 13:18:06'),(240,0,190,'2018-08-17 13:18:07'),(241,11,190,'2018-08-17 13:22:00'),(242,0,190,'2018-08-17 13:22:01'),(243,4,190,'2018-08-17 13:26:06'),(244,0,190,'2018-08-17 13:26:07'),(245,0,190,'2018-08-17 13:26:07'),(246,4,190,'2018-08-17 13:26:20'),(247,0,190,'2018-08-17 13:26:21'),(248,0,190,'2018-08-17 13:26:21'),(249,10,190,'2018-08-17 13:27:09'),(250,0,190,'2018-08-17 13:27:10'),(251,10,190,'2018-08-17 13:28:12'),(252,0,190,'2018-08-17 13:28:12'),(253,12,190,'2018-08-17 13:33:04'),(254,12,190,'2018-08-17 13:33:04'),(255,0,190,'2018-08-17 13:33:05'),(256,0,190,'2018-08-17 13:33:05'),(257,11,190,'2018-08-17 13:33:22'),(258,0,190,'2018-08-17 13:33:22'),(259,11,190,'2018-08-17 13:33:41'),(260,0,190,'2018-08-17 13:33:42'),(261,0,190,'2018-08-17 13:33:42'),(262,3,190,'2018-08-17 13:33:52'),(263,0,190,'2018-08-17 13:33:52'),(264,0,190,'2018-08-17 13:33:53'),(265,4,190,'2018-08-17 14:33:55'),(266,0,190,'2018-08-17 14:33:55'),(267,2,190,'2018-08-17 14:34:14'),(268,0,190,'2018-08-17 14:34:14'),(269,4,190,'2018-08-17 14:37:46'),(270,0,190,'2018-08-17 14:37:46'),(271,7,190,'2018-08-17 14:55:44'),(272,0,190,'2018-08-17 14:55:45'),(273,9,190,'2018-08-17 14:57:05'),(274,9,0,'2018-08-17 14:58:55'),(275,0,0,'2018-08-17 14:58:56'),(276,9,0,'2018-08-17 15:01:03'),(277,0,0,'2018-08-17 15:01:03'),(278,0,0,'2018-08-17 15:01:04'),(279,9,0,'2018-08-17 15:01:15'),(280,0,0,'2018-08-17 15:01:16'),(281,9,0,'2018-08-17 15:01:24'),(282,0,0,'2018-08-17 15:01:25'),(283,9,0,'2018-08-17 15:01:33'),(284,0,0,'2018-08-17 15:01:34'),(285,0,0,'2018-08-17 15:01:34'),(286,9,0,'2018-08-17 15:01:42'),(287,0,0,'2018-08-17 15:01:42'),(288,9,0,'2018-08-17 15:02:16'),(289,0,0,'2018-08-17 15:02:16'),(290,9,0,'2018-08-17 15:02:36'),(291,0,0,'2018-08-17 15:02:37'),(292,8,0,'2018-08-17 15:04:12'),(293,0,0,'2018-08-17 15:04:12'),(294,0,0,'2018-08-17 15:04:13'),(295,11,0,'2018-08-17 15:04:25'),(296,0,0,'2018-08-17 15:04:25'),(297,0,0,'2018-08-17 15:04:26'),(298,6,0,'2018-08-17 15:06:43'),(299,0,0,'2018-08-17 15:06:43'),(300,6,0,'2018-08-17 15:07:07'),(301,0,0,'2018-08-17 15:07:07'),(302,5,0,'2018-08-17 15:15:20'),(303,0,0,'2018-08-17 15:15:21'),(304,0,0,'2018-08-17 15:15:21'),(305,13,190,'2018-08-17 15:32:20'),(306,0,190,'2018-08-17 15:32:22'),(307,0,190,'2018-08-17 15:32:23'),(308,10,190,'2018-08-17 15:37:36'),(309,0,190,'2018-08-17 15:37:37'),(310,0,190,'2018-08-17 15:37:37'),(311,9,0,'2018-08-17 15:47:02'),(312,0,0,'2018-08-17 15:47:03'),(313,4,0,'2018-08-17 16:02:26'),(314,0,0,'2018-08-17 16:02:27'),(315,6,0,'2018-08-17 16:07:04'),(316,0,0,'2018-08-17 16:07:05'),(317,6,0,'2018-08-17 16:07:46'),(318,0,0,'2018-08-17 16:07:46'),(319,13,0,'2018-08-17 16:12:40'),(320,0,0,'2018-08-17 16:12:40'),(321,13,190,'2018-08-17 16:13:11'),(322,0,190,'2018-08-17 16:13:12'),(323,13,190,'2018-08-17 16:13:38'),(324,0,190,'2018-08-17 16:13:38'),(325,12,0,'2018-08-17 16:14:23'),(326,0,0,'2018-08-17 16:14:24'),(327,1,0,'2018-08-17 16:49:47'),(328,10,0,'2018-08-17 16:49:51'),(329,11,0,'2018-08-17 16:49:56'),(330,12,0,'2018-08-17 16:50:00'),(331,13,0,'2018-08-17 16:50:04'),(332,2,0,'2018-08-17 16:50:07'),(333,3,0,'2018-08-17 16:50:10'),(334,4,0,'2018-08-17 16:50:12'),(335,5,0,'2018-08-17 16:50:16'),(336,6,0,'2018-08-17 16:50:19'),(337,7,0,'2018-08-17 16:50:23'),(338,8,0,'2018-08-17 16:50:26'),(339,9,0,'2018-08-17 16:50:30'),(340,1,0,'2018-08-17 17:46:47'),(341,0,0,'2018-08-17 17:46:47'),(342,12,0,'2018-08-17 17:46:52'),(343,0,0,'2018-08-17 17:46:52'),(344,12,0,'2018-08-17 17:46:52'),(345,1,0,'2018-08-17 17:47:18'),(346,0,0,'2018-08-17 17:47:19'),(347,5,0,'2018-08-17 17:56:25'),(348,0,0,'2018-08-17 17:56:26'),(349,5,0,'2018-08-17 17:58:38'),(350,5,0,'2018-08-17 17:58:38'),(351,0,0,'2018-08-17 17:58:39'),(352,6,0,'2018-08-17 17:59:01'),(353,0,0,'2018-08-17 17:59:01'),(354,5,0,'2018-08-18 10:41:56'),(355,0,0,'2018-08-18 10:41:57'),(356,5,0,'2018-08-18 10:48:42'),(357,0,0,'2018-08-18 10:48:43'),(358,5,0,'2018-08-18 11:04:51'),(359,0,0,'2018-08-18 11:04:51'),(360,5,190,'2018-08-18 11:24:01'),(361,0,190,'2018-08-18 11:24:01'),(362,7,190,'2018-08-18 12:02:01'),(363,0,190,'2018-08-18 12:02:01'),(364,10,190,'2018-08-18 12:23:13'),(365,0,190,'2018-08-18 12:23:13'),(366,10,190,'2018-08-18 12:25:03'),(367,0,190,'2018-08-18 12:25:04'),(368,3,0,'2018-08-18 14:50:47'),(369,0,0,'2018-08-18 14:50:49'),(370,3,0,'2018-08-18 14:52:18'),(371,7,0,'2018-08-18 15:12:55'),(372,0,0,'2018-08-18 15:12:56'),(373,7,0,'2018-08-18 15:12:57'),(374,9,0,'2018-08-18 15:17:57'),(375,0,0,'2018-08-18 15:17:57'),(376,8,0,'2018-08-18 17:00:32'),(377,0,0,'2018-08-18 17:00:33'),(378,8,0,'2018-08-18 17:02:24'),(379,0,0,'2018-08-18 17:02:24'),(380,11,0,'2018-08-18 17:18:12'),(381,0,0,'2018-08-18 17:18:12'),(382,11,0,'2018-08-18 17:20:02'),(383,6,0,'2018-08-18 17:21:37'),(384,0,0,'2018-08-18 17:21:38'),(385,9,0,'2018-08-18 17:21:56'),(386,0,0,'2018-08-18 17:21:56'),(387,2,0,'2018-08-18 17:22:03'),(388,0,0,'2018-08-18 17:22:04'),(389,1,0,'2018-08-18 17:22:14'),(390,0,0,'2018-08-18 17:22:14'),(391,8,0,'2018-08-18 17:22:38'),(392,0,0,'2018-08-18 17:22:38'),(393,11,0,'2018-08-18 17:22:51'),(394,0,0,'2018-08-18 17:22:51'),(395,5,0,'2018-08-18 17:23:06'),(396,0,0,'2018-08-18 17:23:07'),(397,1,0,'2018-08-18 17:23:24'),(398,0,0,'2018-08-18 17:23:25'),(399,2,0,'2018-08-18 17:23:32'),(400,0,0,'2018-08-18 17:23:32'),(401,3,0,'2018-08-18 17:23:37'),(402,0,0,'2018-08-18 17:23:37'),(403,4,0,'2018-08-18 17:23:42'),(404,0,0,'2018-08-18 17:23:42'),(405,5,0,'2018-08-18 17:23:47'),(406,0,0,'2018-08-18 17:23:47'),(407,6,0,'2018-08-18 17:23:54'),(408,0,0,'2018-08-18 17:23:54'),(409,7,0,'2018-08-18 17:24:04'),(410,0,0,'2018-08-18 17:24:04'),(411,9,0,'2018-08-18 17:24:08'),(412,0,0,'2018-08-18 17:24:09'),(413,8,0,'2018-08-18 17:24:14'),(414,0,0,'2018-08-18 17:24:14'),(415,10,0,'2018-08-18 17:24:19'),(416,0,0,'2018-08-18 17:24:19'),(417,11,0,'2018-08-18 17:24:23'),(418,0,0,'2018-08-18 17:24:23'),(419,12,0,'2018-08-18 17:24:27'),(420,0,0,'2018-08-18 17:24:28'),(421,13,0,'2018-08-18 17:24:31'),(422,0,0,'2018-08-18 17:24:32'),(423,11,0,'2018-08-18 17:26:43'),(424,0,0,'2018-08-18 17:26:44'),(425,1,0,'2018-08-18 18:05:23'),(426,0,0,'2018-08-18 18:05:24'),(427,1,0,'2018-08-20 11:37:11'),(428,0,0,'2018-08-20 11:37:11'),(429,4,191,'2018-08-20 11:42:56'),(430,0,191,'2018-08-20 11:42:59'),(431,4,190,'2018-08-20 11:45:07'),(432,0,190,'2018-08-20 11:45:08'),(433,6,190,'2018-08-20 11:45:14'),(434,0,190,'2018-08-20 11:45:14'),(435,1,191,'2018-08-20 12:01:28'),(436,0,191,'2018-08-20 12:01:31'),(437,7,190,'2018-08-20 12:08:57'),(438,0,190,'2018-08-20 12:08:58'),(439,7,190,'2018-08-20 12:09:31'),(440,0,190,'2018-08-20 12:09:31'),(441,4,191,'2018-08-20 12:16:35'),(442,0,191,'2018-08-20 12:16:37'),(443,11,191,'2018-08-20 12:38:15'),(444,0,191,'2018-08-20 12:38:18'),(445,8,0,'2018-08-20 12:51:41'),(446,0,0,'2018-08-20 12:51:42'),(447,5,190,'2018-08-20 12:52:32'),(448,0,190,'2018-08-20 12:52:32'),(449,11,0,'2018-08-20 12:52:51'),(450,0,0,'2018-08-20 12:52:51'),(451,6,190,'2018-08-20 12:53:15'),(452,0,190,'2018-08-20 12:53:15'),(453,6,190,'2018-08-20 12:53:41'),(454,0,190,'2018-08-20 12:53:41'),(455,9,190,'2018-08-20 12:54:20'),(456,0,190,'2018-08-20 12:54:21'),(457,7,190,'2018-08-20 12:57:33'),(458,0,190,'2018-08-20 12:57:33'),(459,1,190,'2018-08-20 13:03:09'),(460,0,190,'2018-08-20 13:03:10'),(461,1,190,'2018-08-20 13:03:22'),(462,0,190,'2018-08-20 13:03:22'),(463,9,190,'2018-08-20 13:04:26'),(464,0,190,'2018-08-20 13:04:26'),(465,7,190,'2018-08-20 13:05:24'),(466,0,190,'2018-08-20 13:05:24'),(467,6,190,'2018-08-20 13:05:33'),(468,0,190,'2018-08-20 13:05:33'),(469,6,190,'2018-08-20 13:05:45'),(470,0,190,'2018-08-20 13:05:46'),(471,1,190,'2018-08-20 13:06:17'),(472,0,190,'2018-08-20 13:06:17'),(473,1,190,'2018-08-20 13:06:40'),(474,0,190,'2018-08-20 13:06:40'),(475,1,190,'2018-08-20 14:24:07'),(476,0,190,'2018-08-20 14:24:14'),(477,6,190,'2018-08-20 14:30:04'),(478,0,190,'2018-08-20 14:30:04'),(479,3,190,'2018-08-20 14:36:51'),(480,0,190,'2018-08-20 14:36:51'),(481,11,190,'2018-08-20 14:39:23'),(482,0,190,'2018-08-20 14:39:23'),(483,10,190,'2018-08-20 14:40:41'),(484,0,190,'2018-08-20 14:40:42'),(485,1338,190,'2018-08-20 14:41:56'),(486,0,190,'2018-08-20 14:42:02'),(487,0,190,'2018-08-20 14:42:13'),(488,4,190,'2018-08-20 14:42:20'),(489,0,190,'2018-08-20 14:42:20'),(490,8,190,'2018-08-20 14:42:56'),(491,0,190,'2018-08-20 14:42:57'),(492,9,190,'2018-08-20 14:43:46'),(493,0,190,'2018-08-20 14:43:46'),(494,9,190,'2018-08-20 14:43:49'),(495,0,190,'2018-08-20 14:43:49'),(496,11,190,'2018-08-20 14:44:24'),(497,0,190,'2018-08-20 14:44:24'),(498,11,190,'2018-08-20 14:46:33'),(499,0,190,'2018-08-20 14:46:33'),(500,11,190,'2018-08-20 14:46:51'),(501,0,190,'2018-08-20 14:46:51'),(502,11,190,'2018-08-20 14:51:30'),(503,0,190,'2018-08-20 14:51:33'),(504,11,190,'2018-08-20 14:51:56'),(505,0,190,'2018-08-20 14:51:59'),(506,6,0,'2018-08-20 15:04:11'),(507,0,0,'2018-08-20 15:04:12'),(508,0,0,'2018-08-20 15:04:12'),(509,12,190,'2018-08-20 15:18:31'),(510,0,190,'2018-08-20 15:18:32'),(511,1,190,'2018-08-20 15:18:45'),(512,0,190,'2018-08-20 15:18:46'),(513,12,190,'2018-08-20 15:19:31'),(514,0,190,'2018-08-20 15:19:31'),(515,1,190,'2018-08-20 15:19:41'),(516,0,190,'2018-08-20 15:19:41'),(517,9,190,'2018-08-20 15:20:32'),(518,0,190,'2018-08-20 15:20:33'),(519,7,190,'2018-08-20 15:20:47'),(520,0,190,'2018-08-20 15:20:47'),(521,7,190,'2018-08-20 15:26:50'),(522,0,190,'2018-08-20 15:26:51'),(523,7,190,'2018-08-20 15:28:32'),(524,0,190,'2018-08-20 15:28:32'),(525,12,190,'2018-08-20 15:44:17'),(526,0,190,'2018-08-20 15:44:17'),(527,12,190,'2018-08-20 15:47:39'),(528,0,190,'2018-08-20 15:47:40'),(529,1,190,'2018-08-20 15:47:44'),(530,0,190,'2018-08-20 15:47:49'),(531,10,0,'2018-08-20 15:59:03'),(532,0,0,'2018-08-20 15:59:03'),(533,6,190,'2018-08-20 16:01:02'),(534,0,190,'2018-08-20 16:01:03'),(535,2,190,'2018-08-20 16:20:00'),(536,0,190,'2018-08-20 16:20:01'),(537,1,190,'2018-08-20 16:33:12'),(538,0,190,'2018-08-20 16:33:13'),(539,6,190,'2018-08-20 16:51:40'),(540,0,190,'2018-08-20 16:51:41'),(541,1,190,'2018-08-20 17:12:15'),(542,0,190,'2018-08-20 17:12:15'),(543,2,190,'2018-08-20 17:26:39'),(544,2,190,'2018-08-20 17:42:00'),(545,0,190,'2018-08-20 17:42:00'),(546,11,190,'2018-08-20 17:43:00'),(547,0,190,'2018-08-20 17:43:01'),(548,5,0,'2018-08-21 10:11:37'),(549,0,0,'2018-08-21 10:11:38'),(550,1,0,'2018-08-21 10:45:38'),(551,0,0,'2018-08-21 10:45:39'),(552,6,0,'2018-08-21 10:57:39'),(553,0,0,'2018-08-21 10:57:39'),(554,1,0,'2018-08-21 10:58:34'),(555,0,0,'2018-08-21 10:58:34'),(556,6,0,'2018-08-21 11:40:59'),(557,0,0,'2018-08-21 11:40:59'),(558,16,0,'2018-08-21 17:23:38'),(559,0,0,'2018-08-21 17:23:38'),(560,16,0,'2018-08-21 17:23:41'),(561,14,0,'2018-08-21 17:23:53'),(562,0,0,'2018-08-21 17:23:54'),(563,0,0,'2018-08-21 17:23:54'),(564,15,0,'2018-08-21 17:24:10'),(565,0,0,'2018-08-21 17:24:11'),(566,0,0,'2018-08-21 17:24:11'),(567,16,0,'2018-08-21 17:52:23'),(568,0,0,'2018-08-21 17:52:23'),(569,17,0,'2018-08-21 17:52:28'),(570,0,0,'2018-08-21 17:52:29'),(571,20,0,'2018-08-21 17:52:42'),(572,0,0,'2018-08-21 17:52:42'),(573,21,0,'2018-08-21 17:52:45'),(574,0,0,'2018-08-21 17:52:46'),(575,22,0,'2018-08-21 17:52:48'),(576,0,0,'2018-08-21 17:52:49'),(577,16,0,'2018-08-21 17:53:00'),(578,0,0,'2018-08-21 17:53:01'),(579,8,0,'2018-08-21 17:55:36'),(580,0,0,'2018-08-21 17:55:37'),(581,10,0,'2018-08-21 17:55:57'),(582,0,0,'2018-08-21 17:55:58'),(583,11,0,'2018-08-21 17:56:02'),(584,0,0,'2018-08-21 17:56:03'),(585,12,0,'2018-08-21 17:56:05'),(586,0,0,'2018-08-21 17:56:06'),(587,1,0,'2018-08-21 17:57:06'),(588,0,0,'2018-08-21 17:57:06'),(589,3,0,'2018-08-21 18:00:25'),(590,0,0,'2018-08-21 18:00:25'),(591,2,0,'2018-08-23 10:14:37'),(592,0,0,'2018-08-23 10:14:39'),(593,14,0,'2018-08-23 15:53:47'),(594,15,0,'2018-08-23 15:53:51'),(595,16,0,'2018-08-23 15:53:55'),(596,17,0,'2018-08-23 15:53:59'),(597,18,0,'2018-08-23 15:54:03'),(598,19,0,'2018-08-23 15:54:06'),(599,20,0,'2018-08-23 15:54:08'),(600,21,0,'2018-08-23 15:54:12'),(601,22,0,'2018-08-23 15:54:16'),(602,1,0,'2018-08-23 23:20:14'),(603,2,0,'2018-08-23 23:20:15'),(604,3,0,'2018-08-23 23:20:16'),(605,4,0,'2018-08-23 23:20:17'),(606,5,0,'2018-08-23 23:20:17'),(607,6,0,'2018-08-23 23:20:18'),(608,7,0,'2018-08-23 23:20:20'),(609,8,0,'2018-08-23 23:20:22'),(610,9,0,'2018-08-23 23:20:24'),(611,10,0,'2018-08-23 23:20:25'),(612,11,0,'2018-08-23 23:20:26'),(613,12,0,'2018-08-23 23:20:28'),(614,14,0,'2018-08-23 23:20:29'),(615,13,0,'2018-08-23 23:20:29'),(616,15,0,'2018-08-23 23:20:29'),(617,16,0,'2018-08-23 23:20:32'),(618,17,0,'2018-08-23 23:20:33'),(619,18,0,'2018-08-23 23:20:33'),(620,19,0,'2018-08-23 23:20:33'),(621,20,0,'2018-08-23 23:20:34'),(622,21,0,'2018-08-23 23:20:35'),(623,22,0,'2018-08-23 23:20:38'),(624,0,0,'2018-08-23 23:27:07'),(625,11,0,'2018-08-25 14:34:26'),(626,13,0,'2018-08-25 15:08:35'),(627,12,0,'2018-08-25 15:39:24'),(628,16,0,'2018-08-25 15:45:22'),(629,22,0,'2018-08-25 16:32:00'),(630,21,0,'2018-08-25 17:04:34'),(631,3,0,'2018-08-25 17:18:17'),(632,5,0,'2018-08-25 17:20:23'),(633,20,0,'2018-08-25 18:08:45'),(634,15,0,'2018-08-25 18:09:41'),(635,19,0,'2018-08-25 21:13:54'),(636,18,0,'2018-08-25 21:33:22'),(637,9,0,'2018-08-25 22:06:43'),(638,1,0,'2018-08-25 22:13:31'),(639,4,0,'2018-08-25 22:14:35'),(640,14,0,'2018-08-25 22:25:35'),(641,17,0,'2018-08-25 22:57:13'),(642,2,0,'2018-08-25 23:07:35'),(643,10,0,'2018-08-25 23:07:36'),(644,0,0,'2018-08-25 23:12:30'),(645,14,0,'2018-08-28 08:41:54'),(646,17,0,'2018-08-28 08:42:18'),(647,10,0,'2018-08-28 17:02:05'),(648,13,0,'2018-08-29 13:42:44'),(649,0,0,'2018-08-29 13:42:45'),(650,18,0,'2018-08-29 13:44:59'),(651,0,0,'2018-08-29 13:44:59'),(652,10,0,'2018-08-29 13:47:27'),(653,0,0,'2018-08-29 13:47:28'),(654,20,0,'2018-08-30 10:43:11'),(655,0,0,'2018-08-30 10:43:11'),(656,20,0,'2018-08-30 10:43:16'),(657,0,0,'2018-08-30 10:43:16'),(658,15,0,'2018-08-30 10:53:06'),(659,0,0,'2018-08-30 10:53:06'),(660,15,0,'2018-08-30 10:53:07'),(661,15,0,'2018-08-30 10:53:38'),(662,0,0,'2018-08-30 10:53:44'),(663,8,0,'2018-08-30 10:54:20'),(664,8,0,'2018-08-30 10:54:34'),(665,0,0,'2018-08-30 10:54:36'),(666,8,0,'2018-08-30 10:54:51'),(667,0,0,'2018-08-30 10:54:56'),(668,8,0,'2018-08-30 10:58:47'),(669,0,0,'2018-08-30 10:58:47'),(670,0,0,'2018-08-30 10:58:48'),(671,8,0,'2018-08-30 10:58:56'),(672,8,0,'2018-08-30 10:59:01'),(673,8,0,'2018-08-30 10:59:04'),(674,8,0,'2018-08-30 11:35:15'),(675,0,0,'2018-08-30 11:35:16'),(676,8,0,'2018-08-30 11:35:51'),(677,0,0,'2018-08-30 11:35:51'),(678,22,0,'2018-08-30 12:53:52'),(679,0,0,'2018-08-30 12:53:53'),(680,14,0,'2018-08-30 14:19:41'),(681,0,0,'2018-08-30 14:19:41'),(682,14,0,'2018-08-30 14:19:59'),(683,0,0,'2018-08-30 14:19:59'),(684,15,0,'2018-08-30 14:20:17'),(685,0,0,'2018-08-30 14:20:18'),(686,14,0,'2018-08-30 14:20:45'),(687,14,0,'2018-08-30 14:20:46'),(688,14,0,'2018-08-30 14:20:46'),(689,0,0,'2018-08-30 14:20:46'),(690,14,0,'2018-08-30 14:20:51'),(691,20,0,'2018-08-30 14:21:41'),(692,0,0,'2018-08-30 14:21:41'),(693,8,0,'2018-08-30 14:22:19'),(694,0,0,'2018-08-30 14:22:20'),(695,22,0,'2018-08-30 15:14:39'),(696,22,0,'2018-08-30 15:14:39'),(697,0,0,'2018-08-30 15:14:41'),(698,22,0,'2018-08-30 15:18:21'),(699,0,0,'2018-08-30 15:18:21'),(700,14,0,'2018-08-31 02:47:14'),(701,0,0,'2018-08-31 02:47:15'),(702,7,0,'2018-08-31 04:32:24'),(703,16,193,'2018-08-31 14:23:30'),(704,0,193,'2018-08-31 14:23:32'),(705,17,193,'2018-08-31 15:00:39'),(706,0,193,'2018-08-31 15:00:40'),(707,15,0,'2018-09-03 01:28:59'),(708,14,0,'2018-09-03 16:04:29'),(709,0,0,'2018-09-03 16:04:29'),(710,3,0,'2018-09-03 18:14:48'),(711,0,0,'2018-09-03 18:14:49'),(712,22,0,'2018-09-04 12:18:15'),(713,0,0,'2018-09-04 12:18:15'),(714,1,0,'2018-09-04 12:39:57'),(715,0,0,'2018-09-04 12:39:57'),(716,19,0,'2018-09-04 12:41:21'),(717,0,0,'2018-09-04 12:41:21'),(718,10,0,'2018-09-04 12:42:41'),(719,0,0,'2018-09-04 12:42:42'),(720,11,0,'2018-09-04 13:20:09'),(721,0,0,'2018-09-04 13:20:10'),(722,3,0,'2018-09-04 14:45:47'),(723,0,0,'2018-09-04 14:45:48'),(724,3,0,'2018-09-04 14:47:46'),(725,0,0,'2018-09-04 14:47:48'),(726,4,0,'2018-09-04 15:01:26'),(727,0,0,'2018-09-04 15:01:26'),(728,4,0,'2018-09-04 15:17:23'),(729,0,0,'2018-09-04 15:17:24'),(730,1,0,'2018-09-04 15:17:41'),(731,0,0,'2018-09-04 15:17:41'),(732,15,0,'2018-09-04 16:35:31'),(733,0,0,'2018-09-04 16:35:32'),(734,5,0,'2018-09-04 16:35:55'),(735,0,0,'2018-09-04 16:35:55'),(736,18,0,'2018-09-04 17:24:13'),(737,0,0,'2018-09-04 17:24:13'),(738,16,0,'2018-09-04 17:25:13'),(739,0,0,'2018-09-04 17:25:14');

/*Table structure for table `wishlistbanners_list` */

DROP TABLE IF EXISTS `wishlistbanners_list`;

CREATE TABLE `wishlistbanners_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `wishlistbanners_list` */

insert  into `wishlistbanners_list`(`id`,`image`,`type`,`status`,`create_at`) values (1,'Banner9-min-1920x800.jpg',1,1,'2018-08-20 12:03:50'),(2,'herb ban.jpg',1,1,'2018-08-20 12:06:34'),(3,'homeo.jpg',2,1,'2018-08-20 15:07:16');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
