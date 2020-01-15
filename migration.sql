

-- 1  create database  testflip
CREATE DATABASE IF NOT EXISTS `testflip` ;
USE `testflip`;

-- 2 create table testflip.disburs
CREATE TABLE IF NOT EXISTS `disburs` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `time_served` char(50) DEFAULT NULL,
    `id_disburs` char(50) DEFAULT NULL,
    `receipt` varchar(250) DEFAULT NULL,
    `status_disburs` varchar(250) DEFAULT NULL,
    `response` text,
    `request` text,
    `api` varchar(200) DEFAULT NULL,
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;