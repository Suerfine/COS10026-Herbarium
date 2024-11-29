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
$sql="CREATE TABLE IF NOT EXISTS `contribution` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `plant_name` varchar(30) NOT NULL,
        `plant_family` varchar(30) NOT NULL,
        `plant_genus` varchar(30) NOT NULL,
        `plant_species` varchar(30) NOT NULL,
        `herbarium_img` blob NOT NULL,
        `fresh_leaf_img` blob NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    CREATE TABLE IF NOT EXISTS `enquiry` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(25) NOT NULL,
        `last_name` varchar(25) NOT NULL,
        `email` varchar(30) NOT NULL,
        `street_address` varchar(30) NOT NULL,
        `city/town` varchar(20) NOT NULL,
        `state` enum('Sarawak','Sabah','Perlis','Kedah','Penang','Perak','Selangor','Negeri Sembilan','Melaka','Johor','Kelantan','Terengganu','Pahang') NOT NULL,
        `postcode` varchar(5) NOT NULL,
        `phone_no` varchar(15) NOT NULL,
        `tutorial` enum('tutorial','tools','care') NOT NULL,
        `dt_create` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(30) NOT NULL,
        `last_name` varchar(30) NOT NULL,
        `level` enum('ADMIN','USER') NOT NULL,
        `email` varchar(30) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
";
mysqli_multi_query($conn,$sql);
unset($servername,$username,$password,$dbname);
while (mysqli_more_results($conn) && mysqli_next_result($conn));
//Timezone stuff just ignore. 
date_default_timezone_set("Asia/Kuala_Lumpur");
?>