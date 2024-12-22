create database `hotel`

USE `hotel`

CREATE TABLE `user` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL,
    `username` varchar(15) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)

create table `reservation` (
    `_id` INT(11) NOT NULL,
    `room_type` VARCHAR(255) NOT NULL,
    `num_rooms` INT(2) NOT NULL,
    `num_persons` INT(2) NOT NULL,
    `num_children` INT(2) NOT NULL,
    `restaurant_facilities` VARCHAR(3) NOT NULL,
    `arrival_date` DATE NOT NULL,
    `departure_date` DATE NOT NULL,
    `reg_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE `payments` (
    `_id` INT,
    `full_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `state` VARCHAR(255) NOT NULL,
    `zip_code` VARCHAR(10) NOT NULL,
    `card_name` VARCHAR(255) NOT NULL,
    `card_number` VARCHAR(20) NOT NULL,
    `exp_month` VARCHAR(20) NOT NULL,
    `exp_year` VARCHAR(4) NOT NULL,
    `cvv` VARCHAR(4) NOT NULL
)

CREATE TABLE `contact_us` (
    `_id` INT(6) UNSIGNED,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `message` TEXT NOT NULL,
    `reg_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

select * from `user`

select * from `reservation`

select * from `payments`

select * from `contact_us`

delete from `user` where `id`

delete from `reservation` where `_id`

delete from `payments` where `_id`

delete from `contact_us` where `_id`

drop table `user`

drop table `reservation`

drop table `Payments`

drop table `contact_us`
