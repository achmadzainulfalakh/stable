-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 08:44 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stable`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `ID` bigint(200) NOT NULL,
  `tanggal_kunjungan` varchar(50) NOT NULL,
  `jam_kunjungan` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`ID`, `tanggal_kunjungan`, `jam_kunjungan`) VALUES
(1, '17th of February 2017', '05:27:36 PM'),
(2, '17th of February 2017', '05:27:50 PM'),
(3, '17th of February 2017', '05:27:59 PM'),
(4, '17th of February 2017', '05:28:06 PM'),
(5, '18th of February 2017', '01:06:30 AM'),
(6, '18th of February 2017', '01:06:38 AM'),
(7, '18th of February 2017', '01:06:47 AM'),
(8, '18th of February 2017', '01:26:47 AM'),
(9, '18th of February 2017', '01:27:07 AM'),
(10, '18th of February 2017', '01:32:27 AM'),
(11, '18th of February 2017', '01:33:39 AM'),
(12, '18th of February 2017', '01:34:42 AM'),
(13, '18th of February 2017', '01:45:06 AM'),
(14, '18th of February 2017', '02:25:33 AM'),
(15, '18th of February 2017', '02:26:33 AM'),
(16, '18th of February 2017', '02:45:17 AM'),
(17, '18th of February 2017', '02:45:58 AM'),
(18, '21st of February 2017', '09:43:59 AM');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `option_id` bigint(20) unsigned NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM AUTO_INCREMENT=556 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost:801/demo-ol-shop', 'yes'),
(2, 'home', 'http://localhost:801/demo-ol-shop', 'yes'),
(3, 'blogname', 'SARANA LINTAS DATA', 'yes'),
(4, 'blogdescription', 'SARANA LINTAS DATA merupakan badan usaha yang bergerak dalam bisnis Telekomunikasi, Informatika, Web Developer dan Software Developer.', 'yes'),
(5, 'users_can_register', '1', 'yes'),
(6, 'admin_email', 'saranalintasdata@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'd/m/Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:195:{s:24:"^wc-auth/v([1]{1})/(.*)?";s:63:"index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]";s:22:"^wc-api/v([1-3]{1})/?$";s:51:"index.php?wc-api-version=$matches[1]&wc-api-route=/";s:24:"^wc-api/v([1-3]{1})(.*)?";s:61:"index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]";s:7:"shop/?$";s:27:"index.php?post_type=product";s:37:"shop/feed/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=product&feed=$matches[1]";s:32:"shop/(feed|rdf|rss|rss2|atom)/?$";s:44:"index.php?post_type=product&feed=$matches[1]";s:24:"shop/page/([0-9]{1,})/?$";s:45:"index.php?post_type=product&paged=$matches[1]";s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:32:"category/(.+?)/wc-api(/(.*))?/?$";s:54:"index.php?category_name=$matches[1]&wc-api=$matches[3]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:29:"tag/([^/]+)/wc-api(/(.*))?/?$";s:44:"index.php?tag=$matches[1]&wc-api=$matches[3]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:55:"product-category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_cat=$matches[1]&feed=$matches[2]";s:50:"product-category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_cat=$matches[1]&feed=$matches[2]";s:31:"product-category/(.+?)/embed/?$";s:44:"index.php?product_cat=$matches[1]&embed=true";s:43:"product-category/(.+?)/page/?([0-9]{1,})/?$";s:51:"index.php?product_cat=$matches[1]&paged=$matches[2]";s:25:"product-category/(.+?)/?$";s:33:"index.php?product_cat=$matches[1]";s:52:"product-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_tag=$matches[1]&feed=$matches[2]";s:47:"product-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?product_tag=$matches[1]&feed=$matches[2]";s:28:"product-tag/([^/]+)/embed/?$";s:44:"index.php?product_tag=$matches[1]&embed=true";s:40:"product-tag/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?product_tag=$matches[1]&paged=$matches[2]";s:22:"product-tag/([^/]+)/?$";s:33:"index.php?product_tag=$matches[1]";s:35:"product/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:45:"product/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:65:"product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:41:"product/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:24:"product/([^/]+)/embed/?$";s:40:"index.php?product=$matches[1]&embed=true";s:28:"product/([^/]+)/trackback/?$";s:34:"index.php?product=$matches[1]&tb=1";s:48:"product/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?product=$matches[1]&feed=$matches[2]";s:43:"product/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?product=$matches[1]&feed=$matches[2]";s:36:"product/([^/]+)/page/?([0-9]{1,})/?$";s:47:"index.php?product=$matches[1]&paged=$matches[2]";s:43:"product/([^/]+)/comment-page-([0-9]{1,})/?$";s:47:"index.php?product=$matches[1]&cpage=$matches[2]";s:33:"product/([^/]+)/wc-api(/(.*))?/?$";s:48:"index.php?product=$matches[1]&wc-api=$matches[3]";s:39:"product/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:50:"product/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:32:"product/([^/]+)(?:/([0-9]+))?/?$";s:46:"index.php?product=$matches[1]&page=$matches[2]";s:24:"product/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:34:"product/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:54:"product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:49:"product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:30:"product/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:45:"product_variation/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:55:"product_variation/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:75:"product_variation/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"product_variation/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"product_variation/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:51:"product_variation/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:34:"product_variation/([^/]+)/embed/?$";s:50:"index.php?product_variation=$matches[1]&embed=true";s:38:"product_variation/([^/]+)/trackback/?$";s:44:"index.php?product_variation=$matches[1]&tb=1";s:46:"product_variation/([^/]+)/page/?([0-9]{1,})/?$";s:57:"index.php?product_variation=$matches[1]&paged=$matches[2]";s:53:"product_variation/([^/]+)/comment-page-([0-9]{1,})/?$";s:57:"index.php?product_variation=$matches[1]&cpage=$matches[2]";s:43:"product_variation/([^/]+)/wc-api(/(.*))?/?$";s:58:"index.php?product_variation=$matches[1]&wc-api=$matches[3]";s:49:"product_variation/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:60:"product_variation/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:"product_variation/([^/]+)(?:/([0-9]+))?/?$";s:56:"index.php?product_variation=$matches[1]&page=$matches[2]";s:34:"product_variation/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:44:"product_variation/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:64:"product_variation/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"product_variation/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"product_variation/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:40:"product_variation/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:45:"shop_order_refund/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:55:"shop_order_refund/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:75:"shop_order_refund/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"shop_order_refund/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:70:"shop_order_refund/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:51:"shop_order_refund/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:34:"shop_order_refund/([^/]+)/embed/?$";s:50:"index.php?shop_order_refund=$matches[1]&embed=true";s:38:"shop_order_refund/([^/]+)/trackback/?$";s:44:"index.php?shop_order_refund=$matches[1]&tb=1";s:46:"shop_order_refund/([^/]+)/page/?([0-9]{1,})/?$";s:57:"index.php?shop_order_refund=$matches[1]&paged=$matches[2]";s:53:"shop_order_refund/([^/]+)/comment-page-([0-9]{1,})/?$";s:57:"index.php?shop_order_refund=$matches[1]&cpage=$matches[2]";s:43:"shop_order_refund/([^/]+)/wc-api(/(.*))?/?$";s:58:"index.php?shop_order_refund=$matches[1]&wc-api=$matches[3]";s:49:"shop_order_refund/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:60:"shop_order_refund/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:"shop_order_refund/([^/]+)(?:/([0-9]+))?/?$";s:56:"index.php?shop_order_refund=$matches[1]&page=$matches[2]";s:34:"shop_order_refund/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:44:"shop_order_refund/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:64:"shop_order_refund/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"shop_order_refund/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:59:"shop_order_refund/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:40:"shop_order_refund/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:38:"index.php?&page_id=7&cpage=$matches[1]";s:17:"wc-api(/(.*))?/?$";s:29:"index.php?&wc-api=$matches[2]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:26:"comments/wc-api(/(.*))?/?$";s:29:"index.php?&wc-api=$matches[2]";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:29:"search/(.+)/wc-api(/(.*))?/?$";s:42:"index.php?s=$matches[1]&wc-api=$matches[3]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:32:"author/([^/]+)/wc-api(/(.*))?/?$";s:52:"index.php?author_name=$matches[1]&wc-api=$matches[3]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:54:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$";s:82:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:41:"([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$";s:66:"index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:28:"([0-9]{4})/wc-api(/(.*))?/?$";s:45:"index.php?year=$matches[1]&wc-api=$matches[3]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:62:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/wc-api(/(.*))?/?$";s:99:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&wc-api=$matches[6]";s:62:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:73:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:25:"(.?.+?)/wc-api(/(.*))?/?$";s:49:"index.php?pagename=$matches[1]&wc-api=$matches[3]";s:28:"(.?.+?)/order-pay(/(.*))?/?$";s:52:"index.php?pagename=$matches[1]&order-pay=$matches[3]";s:33:"(.?.+?)/order-received(/(.*))?/?$";s:57:"index.php?pagename=$matches[1]&order-received=$matches[3]";s:25:"(.?.+?)/orders(/(.*))?/?$";s:49:"index.php?pagename=$matches[1]&orders=$matches[3]";s:29:"(.?.+?)/view-order(/(.*))?/?$";s:53:"index.php?pagename=$matches[1]&view-order=$matches[3]";s:28:"(.?.+?)/downloads(/(.*))?/?$";s:52:"index.php?pagename=$matches[1]&downloads=$matches[3]";s:31:"(.?.+?)/edit-account(/(.*))?/?$";s:55:"index.php?pagename=$matches[1]&edit-account=$matches[3]";s:31:"(.?.+?)/edit-address(/(.*))?/?$";s:55:"index.php?pagename=$matches[1]&edit-address=$matches[3]";s:34:"(.?.+?)/payment-methods(/(.*))?/?$";s:58:"index.php?pagename=$matches[1]&payment-methods=$matches[3]";s:32:"(.?.+?)/lost-password(/(.*))?/?$";s:56:"index.php?pagename=$matches[1]&lost-password=$matches[3]";s:34:"(.?.+?)/customer-logout(/(.*))?/?$";s:58:"index.php?pagename=$matches[1]&customer-logout=$matches[3]";s:37:"(.?.+?)/add-payment-method(/(.*))?/?$";s:61:"index.php?pagename=$matches[1]&add-payment-method=$matches[3]";s:40:"(.?.+?)/delete-payment-method(/(.*))?/?$";s:64:"index.php?pagename=$matches[1]&delete-payment-method=$matches[3]";s:45:"(.?.+?)/set-default-payment-method(/(.*))?/?$";s:69:"index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]";s:31:".?.+?/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:42:".?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$";s:51:"index.php?attachment=$matches[1]&wc-api=$matches[3]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:8:{i:0;s:33:"admin-branding/admin-branding.php";i:1;s:9:"hello.php";i:2;s:27:"maintenance/maintenance.php";i:3;s:39:"siteorigin-panels/siteorigin-panels.php";i:4;s:39:"so-widgets-bundle/so-widgets-bundle.php";i:5;s:27:"woocommerce/woocommerce.php";i:6;s:41:"wordpress-importer/wordpress-importer.php";i:7;s:29:"wp-mail-smtp/wp_mail_smtp.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '7', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:70:"D:\\xampp\\htdocs\\demo-ol-shop/wp-content/themes/twentysixteen/style.css";i:1;s:0:"";}', 'no'),
(40, 'template', 'twentysixteen', 'yes'),
(41, 'stylesheet', 'twentysixteen', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'customer', 'yes'),
(48, 'db_version', '36686', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '7', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '36686', 'yes'),
(92, 'dos_user_roles', 'a:7:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:131:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:18:"manage_woocommerce";b:1;s:24:"view_woocommerce_reports";b:1;s:12:"edit_product";b:1;s:12:"read_product";b:1;s:14:"delete_product";b:1;s:13:"edit_products";b:1;s:20:"edit_others_products";b:1;s:16:"publish_products";b:1;s:21:"read_private_products";b:1;s:15:"delete_products";b:1;s:23:"delete_private_products";b:1;s:25:"delete_published_products";b:1;s:22:"delete_others_products";b:1;s:21:"edit_private_products";b:1;s:23:"edit_published_products";b:1;s:20:"manage_product_terms";b:1;s:18:"edit_product_terms";b:1;s:20:"delete_product_terms";b:1;s:20:"assign_product_terms";b:1;s:15:"edit_shop_order";b:1;s:15:"read_shop_order";b:1;s:17:"delete_shop_order";b:1;s:16:"edit_shop_orders";b:1;s:23:"edit_others_shop_orders";b:1;s:19:"publish_shop_orders";b:1;s:24:"read_private_shop_orders";b:1;s:18:"delete_shop_orders";b:1;s:26:"delete_private_shop_orders";b:1;s:28:"delete_published_shop_orders";b:1;s:25:"delete_others_shop_orders";b:1;s:24:"edit_private_shop_orders";b:1;s:26:"edit_published_shop_orders";b:1;s:23:"manage_shop_order_terms";b:1;s:21:"edit_shop_order_terms";b:1;s:23:"delete_shop_order_terms";b:1;s:23:"assign_shop_order_terms";b:1;s:16:"edit_shop_coupon";b:1;s:16:"read_shop_coupon";b:1;s:18:"delete_shop_coupon";b:1;s:17:"edit_shop_coupons";b:1;s:24:"edit_others_shop_coupons";b:1;s:20:"publish_shop_coupons";b:1;s:25:"read_private_shop_coupons";b:1;s:19:"delete_shop_coupons";b:1;s:27:"delete_private_shop_coupons";b:1;s:29:"delete_published_shop_coupons";b:1;s:26:"delete_others_shop_coupons";b:1;s:25:"edit_private_shop_coupons";b:1;s:27:"edit_published_shop_coupons";b:1;s:24:"manage_shop_coupon_terms";b:1;s:22:"edit_shop_coupon_terms";b:1;s:24:"delete_shop_coupon_terms";b:1;s:24:"assign_shop_coupon_terms";b:1;s:17:"edit_shop_webhook";b:1;s:17:"read_shop_webhook";b:1;s:19:"delete_shop_webhook";b:1;s:18:"edit_shop_webhooks";b:1;s:25:"edit_others_shop_webhooks";b:1;s:21:"publish_shop_webhooks";b:1;s:26:"read_private_shop_webhooks";b:1;s:20:"delete_shop_webhooks";b:1;s:28:"delete_private_shop_webhooks";b:1;s:30:"delete_published_shop_webhooks";b:1;s:27:"delete_others_shop_webhooks";b:1;s:26:"edit_private_shop_webhooks";b:1;s:28:"edit_published_shop_webhooks";b:1;s:25:"manage_shop_webhook_terms";b:1;s:23:"edit_shop_webhook_terms";b:1;s:25:"delete_shop_webhook_terms";b:1;s:25:"assign_shop_webhook_terms";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:8:"customer";a:2:{s:4:"name";s:8:"Customer";s:12:"capabilities";a:1:{s:4:"read";b:1;}}s:12:"shop_manager";a:2:{s:4:"name";s:12:"Shop Manager";s:12:"capabilities";a:110:{s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:4:"read";b:1;s:18:"read_private_pages";b:1;s:18:"read_private_posts";b:1;s:10:"edit_users";b:1;s:10:"edit_posts";b:1;s:10:"edit_pages";b:1;s:20:"edit_published_posts";b:1;s:20:"edit_published_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"edit_private_posts";b:1;s:17:"edit_others_posts";b:1;s:17:"edit_others_pages";b:1;s:13:"publish_posts";b:1;s:13:"publish_pages";b:1;s:12:"delete_posts";b:1;s:12:"delete_pages";b:1;s:20:"delete_private_pages";b:1;s:20:"delete_private_posts";b:1;s:22:"delete_published_pages";b:1;s:22:"delete_published_posts";b:1;s:19:"delete_others_posts";b:1;s:19:"delete_others_pages";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:17:"moderate_comments";b:1;s:15:"unfiltered_html";b:1;s:12:"upload_files";b:1;s:6:"export";b:1;s:6:"import";b:1;s:10:"list_users";b:1;s:18:"manage_woocommerce";b:1;s:24:"view_woocommerce_reports";b:1;s:12:"edit_product";b:1;s:12:"read_product";b:1;s:14:"delete_product";b:1;s:13:"edit_products";b:1;s:20:"edit_others_products";b:1;s:16:"publish_products";b:1;s:21:"read_private_products";b:1;s:15:"delete_products";b:1;s:23:"delete_private_products";b:1;s:25:"delete_published_products";b:1;s:22:"delete_others_products";b:1;s:21:"edit_private_products";b:1;s:23:"edit_published_products";b:1;s:20:"manage_product_terms";b:1;s:18:"edit_product_terms";b:1;s:20:"delete_product_terms";b:1;s:20:"assign_product_terms";b:1;s:15:"edit_shop_order";b:1;s:15:"read_shop_order";b:1;s:17:"delete_shop_order";b:1;s:16:"edit_shop_orders";b:1;s:23:"edit_others_shop_orders";b:1;s:19:"publish_shop_orders";b:1;s:24:"read_private_shop_orders";b:1;s:18:"delete_shop_orders";b:1;s:26:"delete_private_shop_orders";b:1;s:28:"delete_published_shop_orders";b:1;s:25:"delete_others_shop_orders";b:1;s:24:"edit_private_shop_orders";b:1;s:26:"edit_published_shop_orders";b:1;s:23:"manage_shop_order_terms";b:1;s:21:"edit_shop_order_terms";b:1;s:23:"delete_shop_order_terms";b:1;s:23:"assign_shop_order_terms";b:1;s:16:"edit_shop_coupon";b:1;s:16:"read_shop_coupon";b:1;s:18:"delete_shop_coupon";b:1;s:17:"edit_shop_coupons";b:1;s:24:"edit_others_shop_coupons";b:1;s:20:"publish_shop_coupons";b:1;s:25:"read_private_shop_coupons";b:1;s:19:"delete_shop_coupons";b:1;s:27:"delete_private_shop_coupons";b:1;s:29:"delete_published_shop_coupons";b:1;s:26:"delete_others_shop_coupons";b:1;s:25:"edit_private_shop_coupons";b:1;s:27:"edit_published_shop_coupons";b:1;s:24:"manage_shop_coupon_terms";b:1;s:22:"edit_shop_coupon_terms";b:1;s:24:"delete_shop_coupon_terms";b:1;s:24:"assign_shop_coupon_terms";b:1;s:17:"edit_shop_webhook";b:1;s:17:"read_shop_webhook";b:1;s:19:"delete_shop_webhook";b:1;s:18:"edit_shop_webhooks";b:1;s:25:"edit_others_shop_webhooks";b:1;s:21:"publish_shop_webhooks";b:1;s:26:"read_private_shop_webhooks";b:1;s:20:"delete_shop_webhooks";b:1;s:28:"delete_private_shop_webhooks";b:1;s:30:"delete_published_shop_webhooks";b:1;s:27:"delete_others_shop_webhooks";b:1;s:26:"edit_private_shop_webhooks";b:1;s:28:"edit_published_shop_webhooks";b:1;s:25:"manage_shop_webhook_terms";b:1;s:23:"edit_shop_webhook_terms";b:1;s:25:"delete_shop_webhook_terms";b:1;s:25:"assign_shop_webhook_terms";b:1;}}}', 'yes'),
(93, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(94, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'sidebars_widgets', 'a:3:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:4:{i:0;s:28:"woocommerce_product_search-3";i:1;s:25:"woocommerce_widget_cart-3";i:2;s:26:"woocommerce_price_filter-3";i:3;s:32:"woocommerce_top_rated_products-3";}s:13:"array_version";i:3;}', 'yes'),
(99, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(100, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(101, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(103, 'cron', 'a:10:{i:1485297894;a:1:{s:14:"redux_tracking";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1485299788;a:1:{s:32:"woocommerce_cancel_unpaid_orders";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:2:{s:8:"schedule";b:0;s:4:"args";a:0:{}}}}i:1485302400;a:1:{s:27:"woocommerce_scheduled_sales";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1485318638;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1485319421;a:1:{s:28:"woocommerce_cleanup_sessions";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1485361877;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1485362621;a:1:{s:30:"woocommerce_tracker_send_event";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1485362899;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1486252800;a:1:{s:25:"woocommerce_geoip_updater";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:7:"monthly";s:4:"args";a:0:{}s:8:"interval";i:2635200;}}}s:7:"version";i:2;}', 'yes'),
(106, 'nonce_key', ',j^-8g= scMk6:o t9Z0)s0:lq}F{>M)6LA]];/hf}kFs`oI{u%skQ1P}l1 a>V/', 'yes'),
(107, 'nonce_salt', '/7Ad_Fdu-+?@Kz`f<_$9$ okuLjqu^hfqSb?if;=G0GwA&Wqf._cV;%Osm^N*u!C', 'yes'),
(109, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:4:{i:0;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.1.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.1.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.7.1-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.7.1-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.1";s:7:"version";s:5:"4.7.1";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}i:1;O:8:"stdClass":12:{s:8:"response";s:10:"autoupdate";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.1.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.1.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.7.1-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.7.1-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.1";s:7:"version";s:5:"4.7.1";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:12:"notify_email";s:1:"1";s:9:"new_files";s:1:"1";}i:2;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.2.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.2.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.6.2-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.6.2-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.6.2";s:7:"version";s:5:"4.6.2";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}i:3;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.5.5.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.5.5.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.5.5-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.5.5-new-bundled.zip";s:7:"partial";s:69:"https://downloads.wordpress.org/release/wordpress-4.5.5-partial-3.zip";s:8:"rollback";s:70:"https://downloads.wordpress.org/release/wordpress-4.5.5-rollback-3.zip";}s:7:"current";s:5:"4.5.5";s:7:"version";s:5:"4.5.5";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:5:"4.5.3";s:9:"new_files";s:0:"";}}s:12:"last_checked";i:1485296184;s:15:"version_checked";s:5:"4.5.3";s:12:"translations";a:0:{}}', 'yes'),
(114, 'auth_key', '=cS#Ji,2Pu6G3+9csOvdD0kfOUAz{d22P`b4l$xOB8-+~B^>S]-&3#1~@pBl8V{J', 'yes'),
(115, 'auth_salt', 'BI QxbGx9q%xr6]Ua5,[(Y{&2Nq4i2sVf}#S=htN[o0v~^-DSKQG|96}Wdz?f*JU', 'yes'),
(116, 'logged_in_key', '8D;mdj:G@qgKOTk(p.C}] |o3r6PY;>$#:o3+xvSHN=(vRr`6u>N7R&}3!/`:/|{', 'yes'),
(117, 'logged_in_salt', 'ILA.z`&g(=h?dc- *4+<^z/;y6N)Je#<LI3S+x(= t~6_?.+dyj[lk.z!r7o;^5(', 'yes'),
(119, '_transient_timeout_plugin_slugs', '1481064096', 'no'),
(120, '_transient_plugin_slugs', 'a:9:{i:0;s:33:"admin-branding/admin-branding.php";i:1;s:19:"akismet/akismet.php";i:2;s:9:"hello.php";i:3;s:27:"maintenance/maintenance.php";i:4;s:39:"siteorigin-panels/siteorigin-panels.php";i:5;s:39:"so-widgets-bundle/so-widgets-bundle.php";i:6;s:27:"woocommerce/woocommerce.php";i:7;s:41:"wordpress-importer/wordpress-importer.php";i:8;s:29:"wp-mail-smtp/wp_mail_smtp.php";}', 'no'),
(123, 'can_compress_scripts', '1', 'yes'),
(126, 'mail_from', '', 'yes'),
(127, 'mail_from_name', '', 'yes'),
(128, 'mailer', 'smtp', 'yes'),
(129, 'mail_set_return_path', 'false', 'yes'),
(130, 'smtp_host', 'localhost', 'yes'),
(131, 'smtp_port', '25', 'yes'),
(132, 'smtp_ssl', 'none', 'yes'),
(133, 'smtp_auth', '', 'yes'),
(134, 'smtp_user', '', 'yes'),
(135, 'smtp_pass', '', 'yes'),
(136, 'recently_activated', 'a:0:{}', 'yes'),
(140, 'woocommerce_default_country', 'ID:JI', 'yes'),
(141, 'woocommerce_allowed_countries', 'specific', 'yes'),
(142, 'woocommerce_all_except_countries', 'a:0:{}', 'yes'),
(143, 'woocommerce_specific_allowed_countries', 'a:1:{i:0;s:2:"ID";}', 'yes'),
(144, 'woocommerce_ship_to_countries', 'disabled', 'yes'),
(145, 'woocommerce_specific_ship_to_countries', 'a:0:{}', 'yes'),
(146, 'woocommerce_default_customer_address', 'geolocation', 'yes'),
(147, 'woocommerce_calc_taxes', 'no', 'yes'),
(148, 'woocommerce_demo_store', 'no', 'yes'),
(149, 'woocommerce_demo_store_notice', 'This is a demo store for testing purposes &mdash; no orders shall be fulfilled.', 'no'),
(150, 'woocommerce_currency', 'IDR', 'yes'),
(151, 'woocommerce_currency_pos', 'left', 'yes'),
(152, 'woocommerce_price_thousand_sep', '.', 'yes'),
(153, 'woocommerce_price_decimal_sep', ',', 'yes'),
(154, 'woocommerce_price_num_decimals', '0', 'yes'),
(155, 'woocommerce_weight_unit', 'g', 'yes'),
(156, 'woocommerce_dimension_unit', 'cm', 'yes'),
(157, 'woocommerce_enable_review_rating', 'yes', 'yes'),
(158, 'woocommerce_review_rating_required', 'yes', 'no'),
(159, 'woocommerce_review_rating_verification_label', 'yes', 'no'),
(160, 'woocommerce_review_rating_verification_required', 'no', 'no'),
(161, 'woocommerce_shop_page_id', '7', 'yes'),
(162, 'woocommerce_shop_page_display', '', 'yes'),
(163, 'woocommerce_category_archive_display', '', 'yes'),
(164, 'woocommerce_default_catalog_orderby', 'menu_order', 'yes'),
(165, 'woocommerce_cart_redirect_after_add', 'no', 'yes'),
(166, 'woocommerce_enable_ajax_add_to_cart', 'yes', 'yes'),
(167, 'shop_catalog_image_size', 'a:3:{s:5:"width";s:3:"300";s:6:"height";s:3:"300";s:4:"crop";i:1;}', 'yes'),
(168, 'shop_single_image_size', 'a:3:{s:5:"width";s:3:"600";s:6:"height";s:3:"600";s:4:"crop";i:1;}', 'yes'),
(169, 'shop_thumbnail_image_size', 'a:3:{s:5:"width";s:3:"180";s:6:"height";s:3:"180";s:4:"crop";i:1;}', 'yes'),
(170, 'woocommerce_enable_lightbox', 'yes', 'yes'),
(171, 'woocommerce_manage_stock', 'yes', 'yes'),
(172, 'woocommerce_hold_stock_minutes', '60', 'no'),
(173, 'woocommerce_notify_low_stock', 'yes', 'no'),
(174, 'woocommerce_notify_no_stock', 'yes', 'no'),
(175, 'woocommerce_stock_email_recipient', 'demo@gmail.com', 'no'),
(176, 'woocommerce_notify_low_stock_amount', '2', 'no'),
(177, 'woocommerce_notify_no_stock_amount', '0', 'yes'),
(178, 'woocommerce_hide_out_of_stock_items', 'no', 'yes'),
(179, 'woocommerce_stock_format', '', 'yes'),
(180, 'woocommerce_file_download_method', 'force', 'no'),
(181, 'woocommerce_downloads_require_login', 'yes', 'no'),
(182, 'woocommerce_downloads_grant_access_after_payment', 'yes', 'no'),
(183, 'woocommerce_prices_include_tax', 'no', 'yes'),
(184, 'woocommerce_tax_based_on', 'shipping', 'yes'),
(185, 'woocommerce_shipping_tax_class', '', 'yes'),
(186, 'woocommerce_tax_round_at_subtotal', 'no', 'yes'),
(187, 'woocommerce_tax_classes', 'Reduced Rate\r\nZero Rate', 'yes'),
(188, 'woocommerce_tax_display_shop', 'excl', 'yes'),
(189, 'woocommerce_tax_display_cart', 'excl', 'no'),
(190, 'woocommerce_price_display_suffix', '', 'yes'),
(191, 'woocommerce_tax_total_display', 'itemized', 'no'),
(192, 'woocommerce_enable_shipping_calc', 'yes', 'no'),
(193, 'woocommerce_shipping_cost_requires_address', 'no', 'no'),
(194, 'woocommerce_ship_to_destination', 'billing', 'no'),
(195, 'woocommerce_enable_coupons', 'yes', 'yes'),
(196, 'woocommerce_calc_discounts_sequentially', 'no', 'no'),
(197, 'woocommerce_enable_guest_checkout', 'yes', 'no'),
(198, 'woocommerce_force_ssl_checkout', 'no', 'yes'),
(199, 'woocommerce_unforce_ssl_checkout', 'no', 'yes'),
(200, 'woocommerce_cart_page_id', '8', 'yes'),
(201, 'woocommerce_checkout_page_id', '9', 'yes'),
(202, 'woocommerce_terms_page_id', '2', 'no'),
(203, 'woocommerce_checkout_pay_endpoint', 'order-pay', 'yes'),
(204, 'woocommerce_checkout_order_received_endpoint', 'order-received', 'yes'),
(205, 'woocommerce_myaccount_add_payment_method_endpoint', 'add-payment-method', 'yes'),
(206, 'woocommerce_myaccount_delete_payment_method_endpoint', 'delete-payment-method', 'yes'),
(207, 'woocommerce_myaccount_set_default_payment_method_endpoint', 'set-default-payment-method', 'yes'),
(208, 'woocommerce_myaccount_page_id', '10', 'yes'),
(209, 'woocommerce_enable_signup_and_login_from_checkout', 'yes', 'no'),
(210, 'woocommerce_enable_myaccount_registration', 'no', 'no'),
(211, 'woocommerce_enable_checkout_login_reminder', 'yes', 'no'),
(212, 'woocommerce_registration_generate_username', 'yes', 'no'),
(213, 'woocommerce_registration_generate_password', 'no', 'no'),
(214, 'woocommerce_myaccount_orders_endpoint', 'orders', 'yes'),
(215, 'woocommerce_myaccount_view_order_endpoint', 'view-order', 'yes'),
(216, 'woocommerce_myaccount_downloads_endpoint', 'downloads', 'yes'),
(217, 'woocommerce_myaccount_edit_account_endpoint', 'edit-account', 'yes'),
(218, 'woocommerce_myaccount_edit_address_endpoint', 'edit-address', 'yes'),
(219, 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods', 'yes'),
(220, 'woocommerce_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(221, 'woocommerce_logout_endpoint', 'customer-logout', 'yes'),
(222, 'woocommerce_email_from_name', 'demo-ol-shop', 'no'),
(223, 'woocommerce_email_from_address', 'demo@gmail.com', 'no'),
(224, 'woocommerce_email_header_image', '', 'no'),
(225, 'woocommerce_email_footer_text', 'demo-ol-shop - Powered by WooCommerce', 'no'),
(226, 'woocommerce_email_base_color', '#557da1', 'no'),
(227, 'woocommerce_email_background_color', '#f5f5f5', 'no'),
(228, 'woocommerce_email_body_background_color', '#fdfdfd', 'no'),
(229, 'woocommerce_email_text_color', '#505050', 'no'),
(230, 'woocommerce_api_enabled', 'yes', 'yes'),
(234, 'woocommerce_db_version', '2.6.2', 'yes'),
(235, 'woocommerce_version', '2.6.2', 'yes'),
(236, 'woocommerce_admin_notices', 'a:0:{}', 'yes'),
(238, '_transient_woocommerce_webhook_ids', 'a:0:{}', 'yes'),
(239, 'widget_woocommerce_widget_cart', 'a:2:{s:12:"_multiwidget";i:1;i:3;a:2:{s:5:"title";s:17:"Keranjang Belanja";s:13:"hide_if_empty";i:1;}}', 'yes'),
(240, 'widget_woocommerce_layered_nav_filters', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(241, 'widget_woocommerce_layered_nav', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(242, 'widget_woocommerce_price_filter', 'a:2:{s:12:"_multiwidget";i:1;i:3;a:1:{s:5:"title";s:12:"Filter Harga";}}', 'yes'),
(243, 'widget_woocommerce_product_categories', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(244, 'widget_woocommerce_product_search', 'a:2:{s:12:"_multiwidget";i:1;i:3;a:1:{s:5:"title";s:11:"Cari Barang";}}', 'yes'),
(245, 'widget_woocommerce_product_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(246, 'widget_woocommerce_products', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(247, 'widget_woocommerce_rating_filter', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(248, 'widget_woocommerce_recent_reviews', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(249, 'widget_woocommerce_recently_viewed_products', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(250, 'widget_woocommerce_top_rated_products', 'a:2:{s:12:"_multiwidget";i:1;i:3;a:0:{}}', 'yes'),
(253, 'woocommerce_meta_box_errors', 'a:0:{}', 'yes'),
(257, '_transient_timeout_geoip_::1', '1481129128', 'no'),
(258, '_transient_geoip_::1', '', 'no'),
(259, '_transient_timeout_geoip_0.0.0.0', '1481129128', 'no'),
(260, '_transient_geoip_0.0.0.0', '', 'no'),
(261, 'woocommerce_paypal-ec_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(262, 'woocommerce_stripe_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(263, 'woocommerce_paypal_settings', 'a:2:{s:7:"enabled";s:2:"no";s:5:"email";s:14:"demo@gmail.com";}', 'yes'),
(264, 'woocommerce_cheque_settings', 'a:1:{s:7:"enabled";s:2:"no";}', 'yes'),
(265, 'woocommerce_bacs_settings', 'a:5:{s:7:"enabled";s:3:"yes";s:5:"title";s:13:"Transfer Bank";s:11:"description";s:285:"Silahkan mentranfer ke bank kami setelah anda merlakukan order, barang akan kami proses saat hari kerja. segera lakukan konfirmasi settelah anda melakukan transfer melalui CS yang kami sediakan dan silahkan ikuti informasi selanjutnya. Simpan id pemesanan anda untuk konfirmasi barang.";s:12:"instructions";s:285:"Silahkan mentranfer ke bank kami setelah anda merlakukan order, barang akan kami proses saat hari kerja. segera lakukan konfirmasi settelah anda melakukan transfer melalui CS yang kami sediakan dan silahkan ikuti informasi selanjutnya. Simpan id pemesanan anda untuk konfirmasi barang.";s:15:"account_details";s:0:"";}', 'yes');
INSERT INTO `options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(266, 'woocommerce_cod_settings', 'a:6:{s:7:"enabled";s:3:"yes";s:5:"title";s:16:"Cash on Delivery";s:11:"description";s:28:"Pay with cash upon delivery.";s:12:"instructions";s:28:"Pay with cash upon delivery.";s:18:"enable_for_methods";s:0:"";s:18:"enable_for_virtual";s:3:"yes";}', 'yes'),
(268, 'theme_mods_twentysixteen', 'a:2:{s:18:"nav_menu_locations";a:2:{s:7:"primary";i:6;s:6:"social";i:9;}s:16:"background_color";s:6:"81d742";}', 'yes'),
(269, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:0:{}}', 'yes'),
(271, '_transient_product_query-transient-version', '1480540836', 'yes'),
(272, '_transient_product-transient-version', '1480539662', 'yes'),
(289, 'woocommerce_bacs_accounts', 'a:2:{i:0;a:6:{s:12:"account_name";s:5:"hasan";s:14:"account_number";s:9:"123456789";s:9:"bank_name";s:3:"BRI";s:9:"sort_code";s:0:"";s:4:"iban";s:0:"";s:3:"bic";s:0:"";}i:1;a:6:{s:12:"account_name";s:0:"";s:14:"account_number";s:0:"";s:9:"bank_name";s:0:"";s:9:"sort_code";s:0:"";s:4:"iban";s:0:"";s:3:"bic";s:0:"";}}', 'yes'),
(291, 'woocommerce_gateway_order', 'a:4:{s:4:"bacs";i:0;s:6:"cheque";i:1;s:3:"cod";i:2;s:6:"paypal";i:3;}', 'yes'),
(293, '_transient_woocommerce_cache_excluded_uris', 'a:6:{i:0;s:3:"p=8";i:1;s:6:"/cart/";i:2;s:3:"p=9";i:3;s:10:"/checkout/";i:4;s:4:"p=10";i:5;s:12:"/my-account/";}', 'yes'),
(301, 'siteorigin_panels_initial_version', '2.4.15', 'no'),
(302, 'siteorigin_panels_settings', 'a:0:{}', 'yes'),
(303, 'widget_siteorigin-panels-post-content', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(304, 'widget_siteorigin-panels-postloop', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(305, 'widget_siteorigin-panels-builder', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(307, '_site_transient_timeout_wporg_theme_feature_list', '1480538188', 'yes'),
(308, '_site_transient_wporg_theme_feature_list', 'a:0:{}', 'yes'),
(314, '_transient_timeout_wc_related_23', '1480624897', 'no'),
(315, '_transient_wc_related_23', 'a:1:{i:0;s:2:"11";}', 'no'),
(317, '_transient_timeout_wc_related_11', '1480624894', 'no'),
(318, '_transient_wc_related_11', 'a:1:{i:0;s:2:"23";}', 'no'),
(319, '_transient_orders-transient-version', '1480529210', 'yes'),
(329, 'WPLANG', '', 'yes'),
(360, '_transient_timeout_wc_report_sales_by_product', '1480625662', 'no'),
(361, '_transient_wc_report_sales_by_product', 'a:12:{s:32:"a3fbe96cedc39c19ca3e512138abaccb";a:1:{i:0;O:8:"stdClass":2:{s:10:"product_id";s:2:"11";s:14:"order_item_qty";s:1:"1";}}s:32:"8f64619599ed36978089fe91f1f941a1";a:1:{i:0;O:8:"stdClass":3:{s:10:"product_id";s:2:"11";s:15:"sparkline_value";s:1:"1";s:9:"post_date";s:19:"2016-11-30 18:00:51";}}s:32:"5ea53a7fde92dda8a862645de52c0d4c";a:0:{}s:32:"e2f08bf03e18c97bef87db09bc6131b7";a:1:{i:0;O:8:"stdClass":2:{s:10:"product_id";s:2:"11";s:16:"order_item_total";s:5:"50000";}}s:32:"ce8fdb02d1353ff5a0592cc18c5b549e";a:1:{i:0;O:8:"stdClass":3:{s:10:"product_id";s:2:"11";s:15:"sparkline_value";s:5:"50000";s:9:"post_date";s:19:"2016-11-30 18:00:51";}}s:32:"df49ff53692b10eb1f2ac180614b0325";a:1:{i:0;O:8:"stdClass":2:{s:10:"product_id";s:2:"11";s:14:"order_item_qty";s:1:"1";}}s:32:"fd4b7d439d0843fcb519d47cddfbb3c6";a:0:{}s:32:"24cf5b47a17b68f08bcab9fdf771761e";a:1:{i:0;O:8:"stdClass":2:{s:10:"product_id";s:2:"11";s:16:"order_item_total";s:5:"50000";}}s:32:"493e095daad757dbd7c6e5e94d151a8d";s:5:"50000";s:32:"259f8ed4cb5ae9160fa1f21deed185e0";s:1:"1";s:32:"92e08d83831a0dc175afb29e439a4d0f";a:1:{i:0;O:8:"stdClass":3:{s:16:"order_item_count";s:1:"1";s:9:"post_date";s:19:"2016-11-30 18:00:51";s:10:"product_id";s:2:"11";}}s:32:"fcab4175a880e262305b812490677766";a:1:{i:0;O:8:"stdClass":3:{s:17:"order_item_amount";s:5:"50000";s:9:"post_date";s:19:"2016-11-30 18:00:51";s:10:"product_id";s:2:"11";}}}', 'no'),
(364, '_transient_timeout_wc_related_33', '1480626180', 'no'),
(365, '_transient_wc_related_33', 'a:0:{}', 'no'),
(370, '_transient_wc_attribute_taxonomies', 'a:1:{i:0;O:8:"stdClass":6:{s:12:"attribute_id";s:1:"1";s:14:"attribute_name";s:5:"color";s:15:"attribute_label";s:5:"color";s:14:"attribute_type";s:6:"select";s:17:"attribute_orderby";s:10:"menu_order";s:16:"attribute_public";s:1:"0";}}', 'yes'),
(371, 'category_children', 'a:0:{}', 'yes'),
(372, 'product_cat_children', 'a:2:{i:18;a:2:{i:0;i:19;i:1;i:23;}i:20;a:2:{i:0;i:22;i:1;i:24;}}', 'yes'),
(373, 'pa_color_children', 'a:0:{}', 'yes'),
(392, '_transient_timeout_wc_upgrade_notice_2.6.2', '1481029319', 'no'),
(393, '_transient_wc_upgrade_notice_2.6.2', '', 'no'),
(399, '_site_transient_timeout_poptags_40cd750bba9870f18aada2478b24840a', '1480957307', 'yes'),
(400, '_site_transient_poptags_40cd750bba9870f18aada2478b24840a', 'a:100:{s:6:"widget";a:3:{s:4:"name";s:6:"widget";s:4:"slug";s:6:"widget";s:5:"count";s:4:"6110";}s:4:"post";a:3:{s:4:"name";s:4:"Post";s:4:"slug";s:4:"post";s:5:"count";s:4:"3747";}s:6:"plugin";a:3:{s:4:"name";s:6:"plugin";s:4:"slug";s:6:"plugin";s:5:"count";s:4:"3738";}s:5:"admin";a:3:{s:4:"name";s:5:"admin";s:4:"slug";s:5:"admin";s:5:"count";s:4:"3244";}s:5:"posts";a:3:{s:4:"name";s:5:"posts";s:4:"slug";s:5:"posts";s:5:"count";s:4:"2869";}s:9:"shortcode";a:3:{s:4:"name";s:9:"shortcode";s:4:"slug";s:9:"shortcode";s:5:"count";s:4:"2546";}s:7:"sidebar";a:3:{s:4:"name";s:7:"sidebar";s:4:"slug";s:7:"sidebar";s:5:"count";s:4:"2229";}s:6:"google";a:3:{s:4:"name";s:6:"google";s:4:"slug";s:6:"google";s:5:"count";s:4:"2155";}s:4:"page";a:3:{s:4:"name";s:4:"page";s:4:"slug";s:4:"page";s:5:"count";s:4:"2104";}s:7:"twitter";a:3:{s:4:"name";s:7:"twitter";s:4:"slug";s:7:"twitter";s:5:"count";s:4:"2089";}s:6:"images";a:3:{s:4:"name";s:6:"images";s:4:"slug";s:6:"images";s:5:"count";s:4:"2044";}s:11:"woocommerce";a:3:{s:4:"name";s:11:"woocommerce";s:4:"slug";s:11:"woocommerce";s:5:"count";s:4:"2025";}s:8:"comments";a:3:{s:4:"name";s:8:"comments";s:4:"slug";s:8:"comments";s:5:"count";s:4:"1965";}s:5:"image";a:3:{s:4:"name";s:5:"image";s:4:"slug";s:5:"image";s:5:"count";s:4:"1937";}s:8:"facebook";a:3:{s:4:"name";s:8:"Facebook";s:4:"slug";s:8:"facebook";s:5:"count";s:4:"1756";}s:3:"seo";a:3:{s:4:"name";s:3:"seo";s:4:"slug";s:3:"seo";s:5:"count";s:4:"1653";}s:9:"wordpress";a:3:{s:4:"name";s:9:"wordpress";s:4:"slug";s:9:"wordpress";s:5:"count";s:4:"1625";}s:6:"social";a:3:{s:4:"name";s:6:"social";s:4:"slug";s:6:"social";s:5:"count";s:4:"1469";}s:7:"gallery";a:3:{s:4:"name";s:7:"gallery";s:4:"slug";s:7:"gallery";s:5:"count";s:4:"1380";}s:5:"links";a:3:{s:4:"name";s:5:"links";s:4:"slug";s:5:"links";s:5:"count";s:4:"1299";}s:5:"email";a:3:{s:4:"name";s:5:"email";s:4:"slug";s:5:"email";s:5:"count";s:4:"1296";}s:7:"widgets";a:3:{s:4:"name";s:7:"widgets";s:4:"slug";s:7:"widgets";s:5:"count";s:4:"1152";}s:5:"pages";a:3:{s:4:"name";s:5:"pages";s:4:"slug";s:5:"pages";s:5:"count";s:4:"1136";}s:9:"ecommerce";a:3:{s:4:"name";s:9:"ecommerce";s:4:"slug";s:9:"ecommerce";s:5:"count";s:4:"1065";}s:5:"media";a:3:{s:4:"name";s:5:"media";s:4:"slug";s:5:"media";s:5:"count";s:4:"1027";}s:6:"jquery";a:3:{s:4:"name";s:6:"jquery";s:4:"slug";s:6:"jquery";s:5:"count";s:4:"1017";}s:5:"video";a:3:{s:4:"name";s:5:"video";s:4:"slug";s:5:"video";s:5:"count";s:3:"969";}s:7:"content";a:3:{s:4:"name";s:7:"content";s:4:"slug";s:7:"content";s:5:"count";s:3:"964";}s:5:"login";a:3:{s:4:"name";s:5:"login";s:4:"slug";s:5:"login";s:5:"count";s:3:"963";}s:4:"ajax";a:3:{s:4:"name";s:4:"AJAX";s:4:"slug";s:4:"ajax";s:5:"count";s:3:"932";}s:10:"responsive";a:3:{s:4:"name";s:10:"responsive";s:4:"slug";s:10:"responsive";s:5:"count";s:3:"929";}s:3:"rss";a:3:{s:4:"name";s:3:"rss";s:4:"slug";s:3:"rss";s:5:"count";s:3:"916";}s:10:"javascript";a:3:{s:4:"name";s:10:"javascript";s:4:"slug";s:10:"javascript";s:5:"count";s:3:"861";}s:10:"e-commerce";a:3:{s:4:"name";s:10:"e-commerce";s:4:"slug";s:10:"e-commerce";s:5:"count";s:3:"851";}s:8:"security";a:3:{s:4:"name";s:8:"security";s:4:"slug";s:8:"security";s:5:"count";s:3:"841";}s:10:"buddypress";a:3:{s:4:"name";s:10:"buddypress";s:4:"slug";s:10:"buddypress";s:5:"count";s:3:"821";}s:5:"photo";a:3:{s:4:"name";s:5:"photo";s:4:"slug";s:5:"photo";s:5:"count";s:3:"788";}s:5:"share";a:3:{s:4:"name";s:5:"Share";s:4:"slug";s:5:"share";s:5:"count";s:3:"783";}s:7:"youtube";a:3:{s:4:"name";s:7:"youtube";s:4:"slug";s:7:"youtube";s:5:"count";s:3:"783";}s:4:"spam";a:3:{s:4:"name";s:4:"spam";s:4:"slug";s:4:"spam";s:5:"count";s:3:"770";}s:4:"link";a:3:{s:4:"name";s:4:"link";s:4:"slug";s:4:"link";s:5:"count";s:3:"759";}s:4:"feed";a:3:{s:4:"name";s:4:"feed";s:4:"slug";s:4:"feed";s:5:"count";s:3:"751";}s:9:"analytics";a:3:{s:4:"name";s:9:"analytics";s:4:"slug";s:9:"analytics";s:5:"count";s:3:"749";}s:6:"slider";a:3:{s:4:"name";s:6:"slider";s:4:"slug";s:6:"slider";s:5:"count";s:3:"743";}s:3:"css";a:3:{s:4:"name";s:3:"CSS";s:4:"slug";s:3:"css";s:5:"count";s:3:"736";}s:8:"category";a:3:{s:4:"name";s:8:"category";s:4:"slug";s:8:"category";s:5:"count";s:3:"731";}s:4:"form";a:3:{s:4:"name";s:4:"form";s:4:"slug";s:4:"form";s:5:"count";s:3:"725";}s:5:"embed";a:3:{s:4:"name";s:5:"embed";s:4:"slug";s:5:"embed";s:5:"count";s:3:"718";}s:6:"search";a:3:{s:4:"name";s:6:"search";s:4:"slug";s:6:"search";s:5:"count";s:3:"718";}s:6:"photos";a:3:{s:4:"name";s:6:"photos";s:4:"slug";s:6:"photos";s:5:"count";s:3:"710";}s:6:"custom";a:3:{s:4:"name";s:6:"custom";s:4:"slug";s:6:"custom";s:5:"count";s:3:"701";}s:9:"slideshow";a:3:{s:4:"name";s:9:"slideshow";s:4:"slug";s:9:"slideshow";s:5:"count";s:3:"656";}s:4:"menu";a:3:{s:4:"name";s:4:"menu";s:4:"slug";s:4:"menu";s:5:"count";s:3:"652";}s:6:"button";a:3:{s:4:"name";s:6:"button";s:4:"slug";s:6:"button";s:5:"count";s:3:"640";}s:5:"stats";a:3:{s:4:"name";s:5:"stats";s:4:"slug";s:5:"stats";s:5:"count";s:3:"635";}s:5:"theme";a:3:{s:4:"name";s:5:"theme";s:4:"slug";s:5:"theme";s:5:"count";s:3:"629";}s:7:"comment";a:3:{s:4:"name";s:7:"comment";s:4:"slug";s:7:"comment";s:5:"count";s:3:"616";}s:9:"dashboard";a:3:{s:4:"name";s:9:"dashboard";s:4:"slug";s:9:"dashboard";s:5:"count";s:3:"615";}s:4:"tags";a:3:{s:4:"name";s:4:"tags";s:4:"slug";s:4:"tags";s:5:"count";s:3:"614";}s:6:"mobile";a:3:{s:4:"name";s:6:"mobile";s:4:"slug";s:6:"mobile";s:5:"count";s:3:"612";}s:10:"categories";a:3:{s:4:"name";s:10:"categories";s:4:"slug";s:10:"categories";s:5:"count";s:3:"601";}s:6:"editor";a:3:{s:4:"name";s:6:"editor";s:4:"slug";s:6:"editor";s:5:"count";s:3:"585";}s:10:"statistics";a:3:{s:4:"name";s:10:"statistics";s:4:"slug";s:10:"statistics";s:5:"count";s:3:"585";}s:3:"ads";a:3:{s:4:"name";s:3:"ads";s:4:"slug";s:3:"ads";s:5:"count";s:3:"584";}s:4:"user";a:3:{s:4:"name";s:4:"user";s:4:"slug";s:4:"user";s:5:"count";s:3:"580";}s:12:"social-media";a:3:{s:4:"name";s:12:"social media";s:4:"slug";s:12:"social-media";s:5:"count";s:3:"563";}s:5:"users";a:3:{s:4:"name";s:5:"users";s:4:"slug";s:5:"users";s:5:"count";s:3:"553";}s:4:"list";a:3:{s:4:"name";s:4:"list";s:4:"slug";s:4:"list";s:5:"count";s:3:"549";}s:12:"contact-form";a:3:{s:4:"name";s:12:"contact form";s:4:"slug";s:12:"contact-form";s:5:"count";s:3:"546";}s:6:"simple";a:3:{s:4:"name";s:6:"simple";s:4:"slug";s:6:"simple";s:5:"count";s:3:"540";}s:9:"affiliate";a:3:{s:4:"name";s:9:"affiliate";s:4:"slug";s:9:"affiliate";s:5:"count";s:3:"540";}s:7:"plugins";a:3:{s:4:"name";s:7:"plugins";s:4:"slug";s:7:"plugins";s:5:"count";s:3:"538";}s:9:"multisite";a:3:{s:4:"name";s:9:"multisite";s:4:"slug";s:9:"multisite";s:5:"count";s:3:"534";}s:4:"shop";a:3:{s:4:"name";s:4:"shop";s:4:"slug";s:4:"shop";s:5:"count";s:3:"522";}s:7:"picture";a:3:{s:4:"name";s:7:"picture";s:4:"slug";s:7:"picture";s:5:"count";s:3:"519";}s:9:"marketing";a:3:{s:4:"name";s:9:"marketing";s:4:"slug";s:9:"marketing";s:5:"count";s:3:"509";}s:3:"api";a:3:{s:4:"name";s:3:"api";s:4:"slug";s:3:"api";s:5:"count";s:3:"507";}s:7:"contact";a:3:{s:4:"name";s:7:"contact";s:4:"slug";s:7:"contact";s:5:"count";s:3:"496";}s:3:"url";a:3:{s:4:"name";s:3:"url";s:4:"slug";s:3:"url";s:5:"count";s:3:"484";}s:10:"navigation";a:3:{s:4:"name";s:10:"navigation";s:4:"slug";s:10:"navigation";s:5:"count";s:3:"471";}s:10:"newsletter";a:3:{s:4:"name";s:10:"newsletter";s:4:"slug";s:10:"newsletter";s:5:"count";s:3:"469";}s:8:"pictures";a:3:{s:4:"name";s:8:"pictures";s:4:"slug";s:8:"pictures";s:5:"count";s:3:"467";}s:4:"html";a:3:{s:4:"name";s:4:"html";s:4:"slug";s:4:"html";s:5:"count";s:3:"462";}s:6:"events";a:3:{s:4:"name";s:6:"events";s:4:"slug";s:6:"events";s:5:"count";s:3:"459";}s:8:"tracking";a:3:{s:4:"name";s:8:"tracking";s:4:"slug";s:8:"tracking";s:5:"count";s:3:"448";}s:10:"shortcodes";a:3:{s:4:"name";s:10:"shortcodes";s:4:"slug";s:10:"shortcodes";s:5:"count";s:3:"447";}s:8:"calendar";a:3:{s:4:"name";s:8:"calendar";s:4:"slug";s:8:"calendar";s:5:"count";s:3:"443";}s:4:"meta";a:3:{s:4:"name";s:4:"meta";s:4:"slug";s:4:"meta";s:5:"count";s:3:"438";}s:8:"lightbox";a:3:{s:4:"name";s:8:"lightbox";s:4:"slug";s:8:"lightbox";s:5:"count";s:3:"436";}s:3:"tag";a:3:{s:4:"name";s:3:"tag";s:4:"slug";s:3:"tag";s:5:"count";s:3:"430";}s:6:"paypal";a:3:{s:4:"name";s:6:"paypal";s:4:"slug";s:6:"paypal";s:5:"count";s:3:"427";}s:11:"advertising";a:3:{s:4:"name";s:11:"advertising";s:4:"slug";s:11:"advertising";s:5:"count";s:3:"426";}s:6:"upload";a:3:{s:4:"name";s:6:"upload";s:4:"slug";s:6:"upload";s:5:"count";s:3:"425";}s:12:"notification";a:3:{s:4:"name";s:12:"notification";s:4:"slug";s:12:"notification";s:5:"count";s:3:"424";}s:4:"news";a:3:{s:4:"name";s:4:"News";s:4:"slug";s:4:"news";s:5:"count";s:3:"422";}s:7:"sharing";a:3:{s:4:"name";s:7:"sharing";s:4:"slug";s:7:"sharing";s:5:"count";s:3:"422";}s:5:"flash";a:3:{s:4:"name";s:5:"flash";s:4:"slug";s:5:"flash";s:5:"count";s:3:"421";}s:9:"thumbnail";a:3:{s:4:"name";s:9:"thumbnail";s:4:"slug";s:9:"thumbnail";s:5:"count";s:3:"417";}s:16:"custom-post-type";a:3:{s:4:"name";s:16:"custom post type";s:4:"slug";s:16:"custom-post-type";s:5:"count";s:3:"414";}s:8:"linkedin";a:3:{s:4:"name";s:8:"linkedin";s:4:"slug";s:8:"linkedin";s:5:"count";s:3:"413";}}', 'yes'),
(404, 'widget_sow-button', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(405, 'widget_sow-google-map', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(406, 'widget_sow-image', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(407, 'widget_sow-slider', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(408, 'widget_sow-post-carousel', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(409, 'widget_sow-editor', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(410, 'siteorigin_widget_bundle_version', '1.7.2', 'yes'),
(411, 'siteorigin_widgets_old_widgets', 'D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/button/button.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/cta/cta.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/contact/contact.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/editor/editor.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/features/features.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/google-map/google-map.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/headline/headline.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/hero/hero.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/icon/icon.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/image/image.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/image-grid/image-grid.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/slider/slider.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/layout-slider/layout-slider.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/post-carousel/post-carousel.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/price-table/price-table.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/simple-masonry/simple-masonry.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/social-media-buttons/social-media-buttons.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/taxonomy/taxonomy.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/testimonial/testimonial.php,D:\\xampp\\htdocs\\demo-ol-shop\\wp-content\\plugins\\so-widgets-bundle/widgets/video/video.php', 'yes'),
(413, '_transient_timeout_sow:cleared', '1481551970', 'no'),
(414, '_transient_sow:cleared', '1', 'no'),
(415, 'maintenance_db_version', '1', 'yes'),
(416, 'maintenance_options', 'a:22:{s:5:"state";b:1;s:10:"page_title";s:29:"Website is under construction";s:7:"heading";s:22:"Maintenance mode is on";s:11:"description";s:30:"Website will be available soon";s:11:"footer_text";s:24:"&copy; demo-ol-shop 2016";s:10:"logo_width";i:220;s:11:"logo_height";s:0:"";s:4:"logo";s:0:"";s:11:"retina_logo";s:0:"";s:7:"body_bg";i:101;s:13:"body_bg_color";s:7:"#111111";s:10:"font_color";s:7:"#ffffff";s:16:"body_font_family";s:9:"Open Sans";s:16:"body_font_subset";s:5:"Latin";s:7:"is_blur";b:0;s:14:"blur_intensity";i:5;s:17:"admin_bar_enabled";b:1;s:11:"503_enabled";b:1;s:15:"gg_analytics_id";s:0:"";s:8:"is_login";b:1;s:10:"custom_css";s:0:"";s:13:"exclude_pages";s:0:"";}', 'yes'),
(422, 'redux-framework-tracking', 'a:3:{s:8:"dev_mode";b:0;s:4:"hash";s:32:"c2a8be49dbff6ed69e3078a24bdc9990";s:14:"allow_tracking";s:2:"no";}', 'yes'),
(423, 'wpbizplugins_uac_options', 'a:46:{s:8:"last_tab";s:0:"";s:14:"show_for_admin";s:1:"1";s:20:"capability_threshold";s:14:"delete_plugins";s:9:"login_url";s:6:"achmad";s:23:"custom_background_admin";a:7:{s:16:"background-color";s:7:"#f1f1f1";s:17:"background-repeat";s:0:"";s:15:"background-size";s:0:"";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:25:"show_extra_button_styling";s:0:"";s:23:"button_color_background";s:7:"#2EA2CC";s:19:"button_color_border";s:7:"#0074A2";s:23:"show_extra_menu_styling";s:1:"1";s:16:"menu_color_panel";s:7:"#dd8500";s:22:"menu_color_panel_shade";s:7:"#dda552";s:27:"menu_color_hover_background";s:7:"#dd9221";s:16:"menu_color_icons";s:7:"#ffffff";s:15:"menu_color_text";s:7:"#ffffff";s:21:"menu_color_text_hover";s:7:"#222222";s:11:"custom_logo";a:5:{s:3:"url";s:2:"''''";s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}s:10:"login_link";s:34:"http://www.google.com/demo-ol-shop";s:11:"login_title";s:12:"demo-ol-shop";s:17:"custom_background";a:7:{s:16:"background-color";s:7:"#dd8500";s:17:"background-repeat";s:0:"";s:15:"background-size";s:0:"";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:16:"login_box_shadow";s:1:"1";s:20:"login_box_background";a:7:{s:16:"background-color";s:7:"#ffffff";s:17:"background-repeat";s:0:"";s:15:"background-size";s:0:"";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:20:"login_box_text_color";s:0:"";s:15:"show_rememberme";s:1:"0";s:21:"show_lostyourpassword";s:1:"0";s:15:"show_backtoblog";s:1:"0";s:16:"login_custom_css";s:44:"                                            ";s:15:"login_custom_js";s:44:"                                            ";s:13:"adminbar_icon";a:5:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}s:14:"dashboard_name";s:0:"";s:13:"show_rightnow";s:1:"1";s:13:"show_activity";s:1:"1";s:15:"show_quickpress";s:1:"1";s:12:"show_primary";s:1:"1";s:9:"menu_logo";a:5:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}s:11:"menu_layout";s:16:"floating_rounded";s:18:"menu_logo_link_url";s:0:"";s:24:"menu_logo_link_newwindow";s:0:"";s:20:"show_footer_messages";s:1:"0";s:11:"footer_text";s:33:"Copyright@2016 - demo-ol-shop.com";s:20:"remove_wp_from_title";s:1:"1";s:11:"hide_screen";s:0:"";s:9:"hide_help";s:0:"";s:15:"hide_update_nag";s:1:"1";s:11:"css_to_hide";s:44:"                                            ";s:16:"admin_custom_css";s:44:"                                            ";s:15:"admin_custom_js";s:44:"                                            ";}', 'yes'),
(424, 'wpbizplugins_uac_options-transients', 'a:4:{s:14:"changed_values";a:2:{s:17:"custom_background";a:7:{s:16:"background-color";s:7:"#ffffff";s:17:"background-repeat";s:0:"";s:15:"background-size";s:0:"";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:20:"login_box_background";a:7:{s:16:"background-color";s:7:"#dd9933";s:17:"background-repeat";s:0:"";s:15:"background-size";s:0:"";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}}s:9:"last_save";i:1480982621;s:13:"last_compiler";i:1480982618;s:7:"notices";a:1:{s:8:"warnings";a:0:{}}}', 'yes'),
(426, '_transient_timeout_settings_errors', '1480982648', 'no'),
(427, '_transient_settings_errors', 'a:1:{i:0;a:4:{s:7:"setting";s:7:"general";s:4:"code";s:16:"settings_updated";s:7:"message";s:15:"Settings saved.";s:4:"type";s:7:"updated";}}', 'no'),
(432, 'wpbizplugins_uac_css_for_login', '<style type="text/css">.login #login h1 a {\n                    background-image: url( "''''" );\n                    background-size: 100% 100% !important;\n                    background-position: center top !important;\n                    background-repeat: no-repeat !important;\n                    width: px;\n                    height: px;\n                    margin-bottom: 10px;\n                    padding-bottom: 0px;\n                    display: block;\n                    \n                }\n                body {background-color: #dd8500 !important;}.login .forgetmenot { display: none !important; }.login #nav { display: none !important; }.login #backtoblog { display: none !important; }.login form {background-color: #ffffff !important;}.login label { color: ; }                                            </style>', 'yes'),
(433, 'wpbizplugins_uac_js_for_login', '<script type="text/javascript">                                            </script>', 'yes'),
(434, 'wpbizplugins_uac_login_url', 'achmad', 'yes'),
(435, 'wpbizplugins_uac_admin_general_css', '    <style type="text/css">\n\n                \n            #adminmenuwrap {\n                -webkit-border-radius: 10px;\n                -moz-border-radius: 10px;\n                border-radius: 10px;\n                padding-top: 20px;\n                padding-bottom: 20px;\n                margin-top: 50px;\n                left: 10px;\n                -webkit-box-shadow: 5px 4px 10px 0px rgba(50, 50, 50, 0.52);\n                -moz-box-shadow:    5px 4px 10px 0px rgba(50, 50, 50, 0.52);\n                box-shadow:         5px 4px 10px 0px rgba(50, 50, 50, 0.52);\n                margin-bottom: 50px;\n            }\n\n            .wrap {\n                padding: 20px 20px 20px 20px;\n            }\n\n            .update-nag { display: none; }#wpwrap {background-color: #f1f1f1 !important;}\n    </style>\n\n    ', 'yes'),
(436, 'wpbizplugins_uac_admin_panel_css', '    <style type="text/css">\n\n    /* Admin Menu */\n    #adminmenuback, #adminmenuwrap, #adminmenu { background: #dd8500 !important; }\n\n    #adminmenu a { color: #ffffff; }\n\n    #adminmenu div.wp-menu-image:before { color: #ffffff; }\n\n    #adminmenu a:hover, #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus { color: #ffffff; background-color: #dd9221; }\n\n    #adminmenu li.menu-top:hover div.wp-menu-image:before, #adminmenu li.opensub > a.menu-top div.wp-menu-image:before { color: white; }\n\n    /* Active tabs use a bottom border color that matches the page background color. */\n    .about-wrap h2 .nav-tab-active, .nav-tab-active, .nav-tab-active:hover { border-bottom-color: #dd8500; }\n\n    /* Admin Menu: submenu */\n    #adminmenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu { background: #dda552; }\n\n    #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after { border-right-color: #dda552; }\n\n    #adminmenu .wp-submenu .wp-submenu-head { color: #ffffff; }\n\n    #adminmenu .wp-submenu a, #adminmenu .wp-has-current-submenu .wp-submenu a, .folded #adminmenu .wp-has-current-submenu .wp-submenu a, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a { color: #ffffff; }\n    #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu .wp-has-current-submenu .wp-submenu a:focus, #adminmenu .wp-has-current-submenu .wp-submenu a:hover, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:focus, .folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:focus, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:focus, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover { color: #222222; }\n\n    /* Admin Menu: current */\n    #adminmenu .wp-submenu li.current a, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a, #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a { color: white; }\n    #adminmenu .wp-submenu li.current a:hover, #adminmenu .wp-submenu li.current a:focus, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a:focus, #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu li.current a:focus { color: #dd9221; }\n\n    ul#adminmenu a.wp-has-current-submenu:after, ul#adminmenu > li.current > a.current:after { border-right-color: #dd8500; }\n\n    #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head, .folded #adminmenu li.current.menu-top { color: white; background: #dd9221; }\n\n    #adminmenu li.wp-has-current-submenu div.wp-menu-image:before { color: white; }\n\n    /* Admin Menu: bubble */\n    #adminmenu .awaiting-mod, #adminmenu .update-plugins { color: white; background: #dd9221; }\n\n    #adminmenu li.current a .awaiting-mod, #adminmenu li a.wp-has-current-submenu .update-plugins, #adminmenu li:hover a .awaiting-mod, #adminmenu li.menu-top:hover > a .update-plugins { color: white; background: #dda552; }\n\n    /* Admin Menu: collapse button */\n    #collapse-menu { color: #ffffff; }\n\n    #collapse-menu:hover { color: white; }\n\n    #collapse-button div:after { color: #ffffff; }\n\n    #collapse-menu:hover #collapse-button div:after { color: white; }\n\n    /* Admin Bar */\n    #wpadminbar { color: white; background: #dd8500; }\n\n    #wpadminbar .ab-item, #wpadminbar a.ab-item, #wpadminbar > #wp-toolbar span.ab-label, #wpadminbar > #wp-toolbar span.noticon { color: white; }\n\n    #wpadminbar .ab-icon, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before, #wpadminbar .ab-item:after { color: #ffffff; }\n\n    #wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus, #wpadminbar-nojs .ab-top-menu > li.menupop:hover > .ab-item, #wpadminbar .ab-top-menu > li.menupop.hover > .ab-item { color: white; background: #dda552; }\n\n    #wpadminbar > #wp-toolbar li:hover span.ab-label, #wpadminbar > #wp-toolbar li.hover span.ab-label, #wpadminbar > #wp-toolbar a:focus span.ab-label { color: white; }\n\n    #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar li:hover .ab-item:after, #wpadminbar li:hover #adminbarsearch:before { color: white; }\n\n    /* Admin Bar: submenu */\n    #wpadminbar .menupop .ab-sub-wrapper { background: #dda552; }\n\n    #wpadminbar .quicklinks .menupop ul.ab-sub-secondary, #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu { background: #dda552; }\n\n    #wpadminbar .ab-submenu .ab-item, #wpadminbar .quicklinks .menupop ul li a, #wpadminbar .quicklinks .menupop.hover ul li a, #wpadminbar-nojs .quicklinks .menupop:hover ul li a { color: #ffffff; }\n\n    #wpadminbar .quicklinks li .blavatar, #wpadminbar .menupop .menupop > .ab-item:before { color: #ffffff; }\n\n    #wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li .ab-item:focus:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover .ab-item:after, #wpadminbar li.hover .ab-item:after, #wpadminbar li:hover #adminbarsearch:before { color: #222222; }\n\n    #wpadminbar .quicklinks li a:hover .blavatar, #wpadminbar .menupop .menupop > .ab-item:hover:before { color: white; }\n\n    /* Admin Bar: search */\n    #wpadminbar #adminbarsearch:before { color: #ffffff; }\n\n    #wpadminbar > #wp-toolbar > #wp-admin-bar-top-secondary > #wp-admin-bar-search #adminbarsearch input.adminbar-input:focus { color: white; background: #dda552; }\n\n    #wpadminbar #adminbarsearch .adminbar-input::-webkit-input-placeholder { color: white; opacity: .7; }\n\n    #wpadminbar #adminbarsearch .adminbar-input:-moz-placeholder { color: white; opacity: .7; }\n\n    #wpadminbar #adminbarsearch .adminbar-input::-moz-placeholder { color: white; opacity: .7; }\n\n    #wpadminbar #adminbarsearch .adminbar-input:-ms-input-placeholder { color: white; opacity: .7; }\n\n    /* Admin Bar: my account */\n    #wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img { border-color: #ffffff; background-color: #ffffff; }\n\n    #wpadminbar #wp-admin-bar-user-info .display-name { color: white; }\n\n    #wpadminbar #wp-admin-bar-user-info a:hover .display-name { color: #222222; }\n\n    #wpadminbar #wp-admin-bar-user-info .username { color: #ffffff; }\n\n\n    </style>\n\n    ', 'yes'),
(440, '_site_transient_timeout_browser_d7c19190f2b47f4cdb90b9748b4c63b3', '1481585206', 'yes'),
(441, '_site_transient_browser_d7c19190f2b47f4cdb90b9748b4c63b3', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"54.0.2840.99";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'yes'),
(460, '_transient_timeout_wc_low_stock_count', '1486277781', 'no'),
(461, '_transient_wc_low_stock_count', '0', 'no'),
(462, '_transient_timeout_wc_outofstock_count', '1486277782', 'no'),
(463, '_transient_wc_outofstock_count', '0', 'no'),
(466, '_transient_timeout_wc_report_customers', '1483772407', 'no'),
(467, '_transient_wc_report_customers', 'a:8:{s:32:"92f053ce3dafb6c7ef38f7e006084ffd";O:8:"stdClass":1:{s:12:"total_orders";s:1:"0";}s:32:"a389e8a7aca721f24674e9df04213e3f";O:8:"stdClass":1:{s:12:"total_orders";s:1:"0";}s:32:"fc8231f4848e5da7f7b21749a716c2d8";a:0:{}s:32:"f8df039cb41177d93660b1857b3943a9";a:0:{}s:32:"55bf55175e5b08cbfe630ef769bd7f52";O:8:"stdClass":1:{s:12:"total_orders";s:1:"0";}s:32:"1369c0dcc5439effd4ff7ffba4ba041d";O:8:"stdClass":1:{s:12:"total_orders";s:1:"0";}s:32:"d1c2e159d285ffa60ece05e4f2fc6cc1";a:0:{}s:32:"9674aec09aaa5832b23c193a5cbbeaff";a:0:{}}', 'no'),
(468, '_transient_timeout_external_ip_address_::1', '1485501533', 'no'),
(469, '_transient_external_ip_address_::1', '120.188.87.225', 'no'),
(475, 'auto_core_update_notified', 'a:4:{s:4:"type";s:6:"manual";s:5:"email";s:14:"demo@gmail.com";s:7:"version";s:5:"4.7.1";s:9:"timestamp";i:1484896765;}', 'yes'),
(478, '_transient_timeout_redux_tracking_cache', '1485501592', 'no'),
(479, '_transient_redux_tracking_cache', '1', 'no'),
(480, '_site_transient_timeout_browser_e8aa320ddb6983ade426fcffe3af7f1f', '1485501675', 'yes'),
(481, '_site_transient_browser_e8aa320ddb6983ade426fcffe3af7f1f', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'yes'),
(514, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1485296186;s:7:"checked";a:3:{s:13:"twentyfifteen";s:3:"1.5";s:14:"twentyfourteen";s:3:"1.7";s:13:"twentysixteen";s:3:"1.2";}s:8:"response";a:3:{s:13:"twentyfifteen";a:4:{s:5:"theme";s:13:"twentyfifteen";s:11:"new_version";s:3:"1.7";s:3:"url";s:43:"https://wordpress.org/themes/twentyfifteen/";s:7:"package";s:59:"https://downloads.wordpress.org/theme/twentyfifteen.1.7.zip";}s:14:"twentyfourteen";a:4:{s:5:"theme";s:14:"twentyfourteen";s:11:"new_version";s:3:"1.9";s:3:"url";s:44:"https://wordpress.org/themes/twentyfourteen/";s:7:"package";s:60:"https://downloads.wordpress.org/theme/twentyfourteen.1.9.zip";}s:13:"twentysixteen";a:4:{s:5:"theme";s:13:"twentysixteen";s:11:"new_version";s:3:"1.3";s:3:"url";s:43:"https://wordpress.org/themes/twentysixteen/";s:7:"package";s:59:"https://downloads.wordpress.org/theme/twentysixteen.1.3.zip";}}s:12:"translations";a:0:{}}', 'yes'),
(515, '_site_transient_update_plugins', 'O:8:"stdClass":4:{s:12:"last_checked";i:1485296185;s:8:"response";a:6:{s:19:"akismet/akismet.php";O:8:"stdClass":8:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.3.2.zip";s:6:"tested";s:5:"4.7.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:27:"maintenance/maintenance.php";O:8:"stdClass":8:{s:2:"id";s:5:"31968";s:4:"slug";s:11:"maintenance";s:6:"plugin";s:27:"maintenance/maintenance.php";s:11:"new_version";s:3:"3.3";s:3:"url";s:42:"https://wordpress.org/plugins/maintenance/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/maintenance.3.3.zip";s:6:"tested";s:5:"4.7.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:39:"siteorigin-panels/siteorigin-panels.php";O:8:"stdClass":8:{s:2:"id";s:5:"40030";s:4:"slug";s:17:"siteorigin-panels";s:6:"plugin";s:39:"siteorigin-panels/siteorigin-panels.php";s:11:"new_version";s:6:"2.4.21";s:3:"url";s:48:"https://wordpress.org/plugins/siteorigin-panels/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/siteorigin-panels.2.4.21.zip";s:6:"tested";s:5:"4.7.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:27:"woocommerce/woocommerce.php";O:8:"stdClass":8:{s:2:"id";s:5:"25331";s:4:"slug";s:11:"woocommerce";s:6:"plugin";s:27:"woocommerce/woocommerce.php";s:11:"new_version";s:6:"2.6.13";s:3:"url";s:42:"https://wordpress.org/plugins/woocommerce/";s:7:"package";s:61:"https://downloads.wordpress.org/plugin/woocommerce.2.6.13.zip";s:6:"tested";s:5:"4.7.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:41:"wordpress-importer/wordpress-importer.php";O:8:"stdClass":8:{s:2:"id";s:5:"14975";s:4:"slug";s:18:"wordpress-importer";s:6:"plugin";s:41:"wordpress-importer/wordpress-importer.php";s:11:"new_version";s:5:"0.6.3";s:3:"url";s:49:"https://wordpress.org/plugins/wordpress-importer/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/wordpress-importer.0.6.3.zip";s:6:"tested";s:5:"4.6.2";s:13:"compatibility";O:8:"stdClass":1:{s:5:"4.5.3";O:8:"stdClass":3:{s:7:"percent";i:100;s:5:"votes";i:1;s:11:"total_votes";i:1;}}}s:29:"wp-mail-smtp/wp_mail_smtp.php";O:8:"stdClass":9:{s:2:"id";s:3:"951";s:4:"slug";s:12:"wp-mail-smtp";s:6:"plugin";s:29:"wp-mail-smtp/wp_mail_smtp.php";s:11:"new_version";s:6:"0.10.1";s:3:"url";s:43:"https://wordpress.org/plugins/wp-mail-smtp/";s:7:"package";s:62:"https://downloads.wordpress.org/plugin/wp-mail-smtp.0.10.1.zip";s:14:"upgrade_notice";s:47:"Addition of Pepipost and cleanup of admin page.";s:6:"tested";s:5:"4.7.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}}s:12:"translations";a:0:{}s:9:"no_update";a:3:{s:33:"admin-branding/admin-branding.php";O:8:"stdClass":6:{s:2:"id";s:5:"53915";s:4:"slug";s:14:"admin-branding";s:6:"plugin";s:33:"admin-branding/admin-branding.php";s:11:"new_version";s:5:"1.1.2";s:3:"url";s:45:"https://wordpress.org/plugins/admin-branding/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/admin-branding.1.1.2.zip";}s:9:"hello.php";O:8:"stdClass":6:{s:2:"id";s:4:"3564";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";}s:39:"so-widgets-bundle/so-widgets-bundle.php";O:8:"stdClass":6:{s:2:"id";s:5:"50709";s:4:"slug";s:17:"so-widgets-bundle";s:6:"plugin";s:39:"so-widgets-bundle/so-widgets-bundle.php";s:11:"new_version";s:5:"1.7.2";s:3:"url";s:48:"https://wordpress.org/plugins/so-widgets-bundle/";s:7:"package";s:66:"https://downloads.wordpress.org/plugin/so-widgets-bundle.1.7.2.zip";}}}', 'yes'),
(516, '_transient_timeout_wc_report_sales_by_date', '1485349998', 'no'),
(517, '_transient_wc_report_sales_by_date', 'a:7:{s:32:"04211b0794aa2e23f3c48ffb213d1891";a:0:{}s:32:"5f2e81ab10ffefa8b90aebff3e4800e2";a:0:{}s:32:"71ebc3b41e66506c9ba956ea906aad6e";a:0:{}s:32:"4ed5d877d8a9c67091bf7d3205dd3c44";N;s:32:"cd4d86eaea358edfc2554531441dd3df";a:0:{}s:32:"f0dcdd6e579385c8f1714e96c0d85425";a:0:{}s:32:"e92cbac4492bef0fab72b430e3d47992";a:0:{}}', 'no'),
(518, '_transient_timeout_wc_admin_report', '1485336882', 'no'),
(519, '_transient_wc_admin_report', 'a:1:{s:32:"936fa4f43968c30ba64ae6f7dad67e47";a:0:{}}', 'no'),
(522, '_transient_timeout_wpbizplugins_uac_css_to_hide', '1485349996', 'no'),
(523, '_transient_wpbizplugins_uac_css_to_hide', '<style type="text/css">#footer-upgrade, #footer-thankyou { display: none; }                                            { display: none !important; }</style>', 'no'),
(526, '_site_transient_timeout_theme_roots', '1485297986', 'yes'),
(527, '_site_transient_theme_roots', 'a:3:{s:13:"twentyfifteen";s:7:"/themes";s:14:"twentyfourteen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'yes'),
(528, '_transient_doing_cron', '1485300032.3744399547576904296875', 'yes'),
(529, 'site_icon_url', 'http://localhost/stable/assets/images/logo.png', 'yes'),
(530, 'selogan', 'Strong Stable Safe', 'yes'),
(531, 'semboyan', 'We help you run your business in a successful way', 'yes'),
(532, 'textfooter', 'Sarana Lintas Data', 'yes'),
(533, 'gridmenulink4', '#contact-us', 'yes'),
(534, 'gridmenulink3', '#contact-us', 'yes'),
(535, 'gridmenulink2', '#contact-us', 'yes'),
(536, 'gridmenulink1', '#contact-us', 'yes'),
(537, 'gridmenu4', 'Pro Management', 'yes'),
(538, 'gridmenu3', 'New Services', 'yes'),
(539, 'gridmenu2', 'Creative Ideas', 'yes'),
(540, 'gridmenu1', 'Global Research', 'yes'),
(541, 'gridmenuicon4', 'fa fa-briefcase', 'yes'),
(542, 'gridmenuicon3', 'fa fa-cog', 'yes'),
(543, 'gridmenuicon2', 'fa fa-lightbulb-o', 'yes'),
(544, 'gridmenuicon1', 'fa fa-globe', 'yes'),
(545, 'numheader1', '10', 'yes'),
(546, 'numheader2', '30', 'yes'),
(547, 'numheader3', '20', 'yes'),
(548, 'numheader4', '24/7', 'yes'),
(549, 'textheader1', 'Years of <br> Experience', 'yes'),
(550, 'textheader2', 'Successful <br> Projects', 'yes'),
(551, 'textheader3', 'Partner <br> Projects', 'yes'),
(552, 'textheader4', 'Technical Support', 'yes'),
(553, 'backgroundimgheader', 'http://localhost/stable/assets/images/slide.jpg', 'yes'),
(554, 'admin_name', 'Fandi', 'yes'),
(555, 'admin_telp', '+62822 3490 8886 <br>+62 857 5555 5254', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `ID` bigint(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'unread',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID`, `name`, `email`, `phone`, `message`, `status`, `date`) VALUES
(5, 'achmad', 'achmad@gmail.com', '08797', 'Hallo', 'read', '2017-03-14 10:57:12'),
(6, 'falakh', 'falakh@gmail.com', '', 'hai', 'read', '2017-03-14 11:01:28'),
(4, 'achmda', 'kesatrianglungupertama@gmail.com', '081', 'hallo', 'read', '2017-02-23 08:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_id_author` int(20) unsigned NOT NULL DEFAULT '0',
  `post_author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `post_id_author`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(104, 1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Lorem Ipsum, ini adalah teks demo. Barang yang sudah dibeli tidak dapat dikembalikan atau di tukar, kecuali ada perjanjian. Lorem Ipsum, ini adalah teks demo. Barang yang sudah dibeli tidak dapat dikembalikan atau di tukar, kecuali ada perjanjian. Lorem Ipsum, ini adalah teks demo. Barang yang sudah dibeli tidak dapat dikembalikan atau di tukar, kecuali ada perjanjian.</p>\r\n', 'Policy', '', 'publish', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'page', '', 0),
(105, 0, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Barang yang sudah dibeli tidak bisa ditukar atau dikembalikan. Lorem Ipsum.</p>\r\n', 'Privacy Policy', '', 'publish', 'open', 'open', '', 'policy', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'page', '', 0),
(106, 0, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<div class="row">\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_03.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_04.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_05.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_06.png" /></p>\r\n</div>\r\n</div>\r\n\r\n<div class="row">\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_09.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_12.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_15.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_16.png" /></p>\r\n</div>\r\n</div>\r\n\r\n<div class="row">\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_20.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_23.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_24.png" /></p>\r\n</div>\r\n\r\n<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-bottom:20px">\r\n<p><img alt="ourclient" src="http://localhost/stable/assets/images/ourclient_26.png" /></p>\r\n</div>\r\n</div>\r\n', 'Our Client', '', 'publish', 'open', 'open', '', 'ourclient', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'page', '', 0),
(107, 0, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<div class="row" style="padding-bottom:20px">\r\n<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">\r\n<p style="text-align:center"><img alt="About img" height="164" src="http://localhost/stable/assets/images/page2_img1.jpg" width="168" /></p>\r\n</div>\r\n\r\n<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">\r\n<p><a href="#">SARANA LINTAS DATA merupakan badan usaha yang bergerak dalam bisnis Telekomunikasi, Informatika, Web Developer dan Software Developer.</a></p>\r\n\r\n<p>SARANA LINTAS DATA didukung oleh para profesional muda yang berpengalaman dibidangnya dan sangat berkompeten.</p>\r\n</div>\r\n\r\n<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">\r\n<p>Dengan tenaga kerja yang sangat mumpuni ini kami menyediakan layanan Tecnical Support selama 6 hari. Hal ini semata-mata karena untuk memenuhi komitmen kami untuk selalu mengedepankan kualitas produk dan layanan guna menjaga dan memelihara kepercayaan konsumen atas kinerja kami.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="row">\r\n<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\r\n<p>Sejak awal didirikannya pada tanggal 28 Desember 2014 hingga saat ini, SARANA LINTAS DATA telah mengalami berbagai transformasi. Transformasi dari usaha kecil untuk mereparasi hardware personal computer, tumbuh hingga menjadi usaha solusi teknologi jaringan dan multimedia untuk kepentingan entertaiment hingga akhirnya berkembang hingga saat ini menjadi usaha telekomunikasi, informatika, web developer dan software developer dengan sumberdaya manusia yang mampu menjawab tantangan dunia ICT yang semakin ketat persaingannya.</p>\r\n</div>\r\n</div>\r\n', 'About Us', '', 'publish', 'open', 'open', '', 'about', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 0, 'page', '', 0),
(111, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SARANA LINTAS DATA Layanan hosting server atau penitipan server di data center segingga server anda dapat diakses dari internet by remote. Anda hanya cukup membawa server dana kami yang menyediakan tempat, listrik dan koneksi internet. Layanan colocation server kami berada di Gedung Cyber, Jakarta-Indonesia dan di Gedung Intiland, Surabaya-Indonesia.\r\n', 'DEDICATED AND CO-LOCATION SERVER', '', 'publish', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 2, 'whatweoffer', '', 0),
(110, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '\r\nKami juga menyediakan kebuutuhan klien yaitu MATV (Master Antena TV), dimana perangkat HeadEnd kami konsepkan secara matang untuk memenuhi kebutuhan Chanel TV premium di Hotel dan Apartemen anda. Kami juga melayani kebutuhan pelanggan dalam jasa instalasi CATV (Client Antenna TV).\r\n', 'MATV (MASTER ANTENA TV)', '', 'publish', 'open', 'open', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 3, 'whatweoffer', '', 0),
(113, 10, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Untuk menjaga sevice level guarantee, SARANA LINTAS DATA menyediakan Helpdesk yang khusus melayani pelanggan korporasi, dan beroperasi di hari efektif kerja. SARANA LINTAS DATA Support menggunakan tool Network Monitoring System secara terintegrasi untuk memonitor layanan secara realtime dalam rangka membantu penanganan dan penyelesaian keluhan. Semoga Company Profile ini dapat memberikan informasi yang diperlukan dan dapat berlanjut kearah kerja sama yang baik Atas perhatian dan kerjasama yang baik kami ucapkan terima kasih</p>\r\n', 'Contact Us', '', 'publish', 'open', 'open', '', 'contactus', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 1, 'contactus', '', 0),
(118, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Layanan Internet dengan paket data beda bandwidth antara Global IX (international content) dan Domestik IIX / Open IXP (local content) dengan kapasitas yang simetris antara download dan upload 1:1 sesuai dengan kebutuhan pelanggan, dengan strategi implementasi untuk segmen perkantoran, Pabrik, Cafe, Hotel dan Exhibition Center. SARANA LINTAS DATA menyediakan fasilitas manajemen koneksi akses ke Internet secara dedicated routing dengan kecepatan yang bervariasi. Dengan layanan ini pelanggan dapat menikmati layanan akses Internet secara dedicated routing dengan kenyamanan akses selama 24 jam sehari dengan performansi yang handal.</p>\r\n', 'INTERNET CONNECTION', '', 'publish', 'open', 'open', '3495cd', 'ic', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-wifi', 1, 'product', 'fiber.png', 0),
(117, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>SARANA LINTAS DATA Layanan hosting server atau penitipan server di data center sehingga server Anda dapat diakses dari internet by remote. Anda hanya cukup membawa server dan kami yang menyediakan tempat, listrik dan koneksi internet. Layanan colocation server kami berada di Gedung Cyber, Jakarta-lndonesia dan di Gedung Intiland Tower, Surabaya-Indonesia.</p>\r\n', 'DEDICATED AND CO-LOCATION SERVER', '', 'publish', 'open', 'open', '2E81B1', 'ds', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-bars', 2, 'product', 'Dedicated-Server.png ', 0),
(120, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Kami juga menyediakan kebutuhan klien yaitu MATV (Master Antenna TV), dimana perangkat HeadEnd kami konsepkan secara matang untuk memenuhi kebutuhan Channel TV premium di Hotel dan Apartemen anda. Kami juga melayani kebutuhan pelanggan dalam jasa instalasi CATV (Client Antenna TV).</p>\r\n', 'MATV (MASTER ANTENA TV)', '', 'publish', 'open', 'open', '2A729C', 'matv', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-desktop', 3, 'product', 'MATV.jpg', 0),
(121, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>SARANA LINTAS DATA menawarkan solusi untuk system pangawasan dengan teknologi update menggunakan kamera CCTV (Closed-circuit television) dan IP Camera yang berkualitas. Produk CCTV kami dapat diintregasikan dengan jaringan internet sehingga memudahkan pengguna untuk memonitoring atau memantau keadaan rumah, kantor, gudang, toko, pabrik ataupun tempat usaha lainnya tanpa harus berada di lokasi seharian, sehingga bisa dipantau melalui Handphone, Laptop, Tablet PC, Komputer di mana saja dan kapan saja. SARANA LINTAS DATA menjamin adanya layanan Service after sales support yang bagus. SARANA LINTAS DATA memiliki team yang berpengalaman menangani system CCTV serta perangkat pendukung lainnya, yang sudah mendapat kepercayaan dari Instansi, Sekolah, Hotel dan Perusahaan besar lainnya.</p>\r\n', 'CCTV, IP CAMERA AND SYSTEM SUPERVEILLANCE', '', 'publish', 'open', 'open', '27658A', 'ss', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-video-camera', 4, 'product', 'cctv.jpg', 0),
(122, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="VIDEO_CONFERENCE" style="padding-top:80px">Secara umum manfaat dari layanan IP PBX (private branch exchange) adalah memberikan alternatif bagi perusahaan untuk mendapatkan jaringan private komunikasi suara baik untuk menghubungkan kantor pusat dengan cabang-cabangnnya, dengan remote user, interkoneksi dengan jaringan IP, atau juga dapat dengan jaringan PSTN. Melalui pemanfaatan teknologi IP maka layanan IP PBX lebih ekonomis dibanding layanan tradisional VPN berbasis TDM (centrex) atau hubungan antar PABX melalui leased circuit (LC) convensional. Adapun manfaat dan keunggulan layanan IP PBX : 1.) Menyediakan layanan jaringan telepon pribadi yang lebih ekonomis (efisiensi biaya) dan Jauh lebih mudah dikonfigurasi dibanding sistem telepon konvensional. 2.) Jangkauan area luas dan pelanggan dapat membangun jaringan pribadi (close user group) untuk area yang tersebar. 3.) Tidak perlu lagi kabel telepon. 4.) Dengan IP PBX konsumen dapat memberikan layanan kepada pelanggan menjadi lebih baik dan meningkatkan produktivitas, karena sistem telepon berbasis computer dapat mengintegrasikan fungsi telepon dengan aplikasi bisnis</div>\r\n\r\n<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="SOUNDS_SYSTEM" style="padding-top:80px">&nbsp;</div>\r\n', 'IP PBX, VOIP AND VIDEO CONFERENCE', '', 'publish', 'open', 'open', '235C7D', 'vc', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-comment-o', 5, 'product', 'video-conference.jpg', 0),
(109, 10, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Layanan Internet dengan paket data beda bandwidth antara Global IX (international content) dan Domestik IIX / Open IXP (local content) dengan kapasitas yang simetris antara download dan upload 1:1 sesuai dengan kebutuhan pelanggal, dengan strategi implementasi untuk segment perkantoran, Pabrik, Cafe, Hotel dan Exhibition Center. SARANA LINTAS DATA menyediakan fasilitas manajemen koneksi akses ke Internet secara dedicated routing dengan kecepatan yang bervariasi. Dengan layanan ini pelanggan dapat menikmati layanan akses Internet secara dedicated routing dengan kenyamanan akses selama 24 jam sehari dengan performansi yang handal. ', 'INTERNET CONNECTION', '', 'publish', 'open', 'open', '', 'whatweoffer', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, '', 1, 'whatweoffer', '', 0),
(123, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>SARANA LINTAS DATA menyediakan kebutuhan klien dengan respon cepat dalam kebutuhan Audio dan Multimedia. Kami siap memberikan pelatihan teknis dan Jasa Instalasi Audio untuk Ball Room, Full Band, Acoustic, Karaoke dan System Audio Gedung</p>\r\n', 'SOUNDS SYSTEM AND MULTIMEDIA ADVERTISING', '', 'publish', 'open', 'open', '1F4F6B', 'ma', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-volume-down', 6, 'product', 'sound-system.jpg', 0),
(124, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Web yang kompleks sesuai dengan permintaan dan kebutuhan anda, Membuat Sistem Acounting berbasis web, Portal, Ticketing System, Billing System dan lain Sebagainya. dengan tim yang ahli di bidang PHP dan .NET. Serta melayani request Software Hospitality (Hotel), POS (Point Of Sale), Accounting / finace dan HR System.</p>\r\n', 'WEB & SOFTWARE DEVELOPER', '', 'publish', 'open', 'open', '1B445D', 'wsd', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-html5', 7, 'product', 'software-development.png', 0),
(125, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Linux hosting, windows ASP hosting, JSP hosting, Mail hosting, blog hosting dan registrasi domain dengan menggunakan control panel CPanel dan Plesk Daily Backup</p>\r\n', 'WEB HOSTING & DOMAIN REGISTRATION', '', 'publish', 'open', 'open', '17394E', 'wh', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-globe', 8, 'product', 'web-hosting.jpg', 0),
(126, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '<p>Layanan Webmail dan Mail Server adalah layanan e-mail yang ditujukan secara khusus untuk diakses melalui browser dengan nama domain pribadi tanpa harus menggunakan domain yahoo, hotmail, gmail, etc. Dengan kata lain, pemakai e-mail bisa mengakses e-mail tanpa perlu menggunakan program e-mail client. Keuntungan Webmail adalah pemakai dapat mengirim dan menerima e-mail dari mana saja dengan cukup menggunakan browser atau MS Outlook.</p>\r\n', 'WEB MAIL, MAIL SERVER & APPLICATION', '', 'publish', 'open', 'open', '102938', 'wsa', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 'fa-envelope', 9, 'product', 'web-mail.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `users_ID` bigint(20) DEFAULT NULL,
  `namadepan` varchar(20) DEFAULT NULL,
  `namabelakang` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`users_ID`, `namadepan`, `namabelakang`) VALUES
(10, 'achmad', 'zainul falakh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'administrator'),
(2, 'achmad', 'e590ad4b83ac97f84569825e8f00c730', 'achmad@gmail.com', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`), ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `ID` bigint(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=556;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID` bigint(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
