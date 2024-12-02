<?php
$servername='localhost';
$username='root';
$password='';
$dbname='herbarium';
//Initalize connection to MYSQL service and create $dbname database if not exist.
$conn=mysqli_connect($servername,$username,$password);
$sql="CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn,$sql);

//Set the default database as $dbname and then ruun its create query if not exist.
mysqli_select_db($conn,$dbname);
$sql="CREATE TABLE IF NOT EXISTS `contribution`(
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `plant_name` varchar(30) NOT NULL,
        `plant_family` varchar(30) NOT NULL,
        `plant_genus` varchar(30) NOT NULL,
        `plant_species` varchar(30) NOT NULL,
        `herbarium_img` varchar(100) NOT NULL,
        `fresh_leaf_img` varchar(100) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    CREATE TABLE IF NOT EXISTS `enquiry`(
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(25) NOT NULL,
        `last_name` varchar(25) NOT NULL,
        `email` varchar(30) NOT NULL,
        `street_address` varchar(30) NOT NULL,
        `city/town` varchar(20) NOT NULL,
        `state` enum('Sarawak','Perlis','Kedah','Penang','Perak','Selangor','Negeri Sembilan','Melaka','Johor','Kelantan','Terengganu','Pahang','Sabah') NOT NULL,
        `postcode` varchar(5) NOT NULL,
        `phone_no` varchar(15) NOT NULL,
        `tutorial` enum('tutorial','tools','care') NOT NULL,
        `dt_create` datetime NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    CREATE TABLE IF NOT EXISTS `users`(
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_name` varchar(25) NOT NULL,
        `first_name` varchar(25) NOT NULL,
        `last_name` varchar(25) NOT NULL,
        `level` enum('ADMIN','USER') NOT NULL,
        `email` varchar(30) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE(`user_name`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    -- Inserting the default Admin account
    INSERT INTO `users` (`id`, `user_name`, `first_name`, `last_name`, `level`, `email`, `password`) 
        VALUES (1, 'Admin', 'Admin', 'Admin', 'ADMIN', 'Admin@admin.com', '\$2y\$10\$bX5IWEG1xGzs7ewrpc45MeNIB/5l3hemvI.NE5LlJ/FYQ2LXtVJxq')
        ON DUPLICATE KEY UPDATE `user_name` = `user_name`;
    -- Inserting some default contributions
    INSERT INTO `contribution` (`id`,`plant_name`, `plant_family`, `plant_genus`, `plant_species`, `herbarium_img`, `fresh_leaf_img`) VALUES
        (1,'Vatica sarawakensis', 'Dipterocarpaceae', 'Vatica', 'Vatica sarawakensis', 'images/user_images/contribute/herb/Vatica sarawakensis.jpg', 'images/user_images/contribute/leaf/Vatica sarawakensis.jpg'),
        (2,'Hopea celebica Burck', 'Dipterocarpaceae', 'Hopea', 'Hopea celebica', 'images/user_images/contribute/herb/Hopea celebica.jpg', 'images/user_images/contribute/leaf/Hopea celebica.jpg'),
        (3,'Endiandra brassi C.K.Allen', 'Lauraceae', 'Endiandra', 'Endiandra brassii', 'images/user_images/contribute/herb/Endiandra brassii.jpg', 'images/user_images/contribute/leaf/Endiandra brassii.jpg'),
        (4,'Hopea discolor Thwaites', 'Dipterocarpaceae', 'Hopea', 'Hopea discolor', 'images/user_images/contribute/herb/Hopea discolor.jpg', 'images/user_images/contribute/leaf/Hopea discolor.jpg')
        ON DUPLICATE KEY UPDATE `id` = `id`;
";
mysqli_multi_query($conn,$sql);
unset($servername,$username,$password,$dbname);
while (mysqli_more_results($conn) && mysqli_next_result($conn));
//Timezone stuff just ignore. 
date_default_timezone_set("Asia/Kuala_Lumpur");
?>
