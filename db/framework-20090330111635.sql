

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

-- CREATE TABLE `categories` (
--   `id` int(10) unsigned NOT NULL auto_increment,
--   `name` varchar(45) NOT NULL,
--   `parent_id` int(10) unsigned default NULL,
--   PRIMARY KEY  (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

-- INSERT INTO `categories` VALUES(1, 'Electronics', 0);
-- INSERT INTO `categories` VALUES(2, 'Toys & Games', 0);
-- INSERT INTO `categories` VALUES(3, 'Camera', 1);
-- INSERT INTO `categories` VALUES(4, 'Security', 1);
-- INSERT INTO `categories` VALUES(5, 'Games', 2);
-- INSERT INTO `categories` VALUES(6, 'Puzzles', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

-- CREATE TABLE `products` (
--   `id` int(10) unsigned NOT NULL auto_increment,
--   `category_id` int(11) NOT NULL,
--   `name` varchar(255) NOT NULL,
--   `price` varchar(45) default NULL,
--   PRIMARY KEY  (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

-- INSERT INTO `products` VALUES(1, 3, 'Product A', '34');
-- INSERT INTO `products` VALUES(2, 3, 'Product B', '40');
-- INSERT INTO `products` VALUES(3, 4, 'Product C', '50');
-- INSERT INTO `products` VALUES(4, 4, 'Product D', '50');
-- INSERT INTO `products` VALUES(5, 5, 'Product E', '44');
-- INSERT INTO `products` VALUES(6, 5, 'Product F', '55');
-- INSERT INTO `products` VALUES(7, 6, 'Product G', '45');
-- INSERT INTO `products` VALUES(8, 6, 'Product H', '23');

-- --------------------------------------------------------

--
-- Table structure for table `products_tags`
--
--
-- CREATE TABLE `products_tags` (
--   `id` int(10) unsigned NOT NULL auto_increment,
--   `product_id` int(10) unsigned NOT NULL,
--   `tag_id` int(10) unsigned NOT NULL,
--   PRIMARY KEY  (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products_tags`
--

-- INSERT INTO `products_tags` VALUES(1, 1, 1);
-- INSERT INTO `products_tags` VALUES(2, 1, 2);
-- INSERT INTO `products_tags` VALUES(3, 1, 3);
-- INSERT INTO `products_tags` VALUES(4, 2, 3);
-- INSERT INTO `products_tags` VALUES(5, 3, 4);
-- INSERT INTO `products_tags` VALUES(6, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

-- CREATE TABLE `tags` (
--   `id` int(10) unsigned NOT NULL auto_increment,
--   `name` varchar(45) NOT NULL,
--   PRIMARY KEY  (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tags`
--
--
-- INSERT INTO `tags` VALUES(1, 'Tag A');
-- INSERT INTO `tags` VALUES(2, 'Tag B');
-- INSERT INTO `tags` VALUES(3, 'Tag C');
-- INSERT INTO `tags` VALUES(4, 'Tag D');
-- 00000000000000000000000000000000

CREATE TABLE `users` (
    `id` int(10) unsigned NOT NULL auto_increment,
    `nameLogin` varchar (45) NOT NULL,
    `password` varchar(45) NOT NULL,
    `status` varchar(45) NOT NULL default "OFF",
    `role` varchar(45) NOT NULL default "users",
    `name` varchar(45) NOT NULL,
    `phone` varchar(45) NOT NULL default "123456",
    `address` varchar(45) NOT NULL default "dia chi",
    `avatar_id` varchar(45) NOT NULL default 1,
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (id, name, password, nameLogin) VALUES (1, "Quan A", "123", "duyen");
INSERT INTO `users` (id, name, password, nameLogin) VALUES (2, "Quan B", "123", "hang");
INSERT INTO `users` (id, name, password, nameLogin) VALUES (3, "Quan C", "123", "nam");
INSERT INTO `users` (id, name, password, nameLogin) VALUES (4, "Quan D", "123", "quan");

CREATE TABLE `avatars` (
    `id` int(10) unsigned NOT NULL auto_increment,
    `name` varchar(45) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `avatars` VALUES (1, "AVATAR A1");
INSERT INTO `avatars` VALUES (2, "AVATAR A2");
INSERT INTO `avatars` VALUES (3, "AVATAR A3");
INSERT INTO `avatars` VALUES (4, "AVATAR A4");
INSERT INTO `avatars` VALUES (5, "AVATAR A5");
INSERT INTO `avatars` VALUES (6, "AVATAR A6");

CREATE TABLE `orders` (
    `id` int(10) unsigned NOT NULL auto_increment,
    `user_id` int(10) unsigned NOT NULL,
    `temp` BOOLEAN default true,
    `date` datetime default CURRENT_TIMESTAMP,
    `price` int(10) default 0,
    PRIMARY KEY (`id`)
);

INSERT INTO `orders` (id, user_id) VALUES (1, 1);
INSERT INTO `orders` (id, user_id) VALUES (2, 2);
INSERT INTO `orders` (id, user_id) VALUES (3, 3);


CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `parent_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`)
);

INSERT INTO `categories` (id, name) VALUES (1, "Com");
INSERT INTO `categories` (id, name) VALUES (2, "Pho");
INSERT INTO `categories` (id, name) VALUES (3, "Chao");
INSERT INTO `categories` VALUES (4, "Com sang", 1);
INSERT INTO `categories` VALUES (5, "Com trua", 1);
INSERT INTO `categories` VALUES (6, "Com toi", 1);

CREATE TABLE `posts` (
    `id` int(10) unsigned NOT NULL auto_increment,
    `title` varchar(100) NOT NULL,
    `description` varchar(200) default "No info",
    `created_at` datetime default CURRENT_TIMESTAMP,
    `category_id` int(10) unsigned NOT NULL,
    `price` int(100) unsigned NOT NULL,
    `sale` int(100) default 0,
    `imgname` varchar(250) default "com-chay.jpg",
    PRIMARY KEY (`id`)
);

INSERT INTO `posts` (title, category_id, price) VALUES ("Com chay", "1", 100);
INSERT INTO `posts` (title, category_id, price) VALUES ("Com chay 1", "1", 100);
INSERT INTO `posts` (title, category_id, price, sale) VALUES ("Com chay 11", "1", 100, 50);

-- Detail order
CREATE TABLE `orders_posts`(
    `id` int(10) unsigned NOT NULL auto_increment,
    `order_id`  int(10) unsigned NOT NULL,
    `post_id` int(10) unsigned NOT NULL,
    `number` int(10) NOT NULL DEFAULT 1,
    PRIMARY KEY  (`id`)
);

INSERT INTO `orders_posts` (order_id, post_id) VALUES (1, 2);
INSERT INTO `orders_posts` (order_id, post_id) VALUES (1, 2);
INSERT INTO `orders_posts` (order_id, post_id) VALUES (1, 3);

CREATE TABLE `feedbacks`(
    `id` int(10) unsigned NOT NULL auto_increment,
    `post_id` int(10) unsigned NOT NULL ,
    `user_id` int(10) unsigned NOT NULL,
    `content` varchar(255) NOT NULL,
    `created_at` datetime default CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `feedbacks` (post_id, user_id, content) VALUES (1, 1, "Ngon");
INSERT INTO `feedbacks` (post_id, user_id, content) VALUES (1, 2, "Bo");
INSERT INTO `feedbacks` (post_id, user_id, content) VALUES (1, 3, "Re");

CREATE TABLE `blogs`(
    `id` int(10) unsigned NOT NULL auto_increment,
    `title` varchar(255) NOT NULL,
    `content` varchar(1000) NOT NULL,
    `imgname` varchar(250) default "banhDauXanh.jpg",
    PRIMARY KEY (`id`)
);

INSERT INTO `blogs` (title, content) VALUES ("Bánh đậu xanh", "Bánh đậu xanh là một loại bánh ngọt làm từ bột đậu xanh quết nhuyễn với đường và dầu thực vật hay mỡ động vật, thường là mỡ lợn. Bánh được cắt thành từng khối vuông nhỏ, gói giấy bạc thành hộp nhỏ,lớn hay gói giấy thấm mỡ thành từng thỏi vàng. Bánh thường được dùng khi uống trà tàu hay chè xanh, khi đó sẽ tạo cảm giác thư thái. Địa phương làm bánh đậu xanh nổi tiếng là Hải Dương.");
INSERT INTO `blogs` (title, content) VALUES ("Bánh đậu đỏ", "Bánh đậu xanh là một loại bánh ngọt làm từ bột đậu xanh quết nhuyễn với đường và dầu thực vật hay mỡ động vật, thường là mỡ lợn. Bánh được cắt thành từng khối vuông nhỏ, gói giấy bạc thành hộp nhỏ,lớn hay gói giấy thấm mỡ thành từng thỏi vàng. Bánh thường được dùng khi uống trà tàu hay chè xanh, khi đó sẽ tạo cảm giác thư thái. Địa phương làm bánh đậu xanh nổi tiếng là Hải Dương.");
INSERT INTO `blogs` (title, content) VALUES ("Bánh đậu vàng", "Bánh đậu xanh là một loại bánh ngọt làm từ bột đậu xanh quết nhuyễn với đường và dầu thực vật hay mỡ động vật, thường là mỡ lợn. Bánh được cắt thành từng khối vuông nhỏ, gói giấy bạc thành hộp nhỏ,lớn hay gói giấy thấm mỡ thành từng thỏi vàng. Bánh thường được dùng khi uống trà tàu hay chè xanh, khi đó sẽ tạo cảm giác thư thái. Địa phương làm bánh đậu xanh nổi tiếng là Hải Dương.");

