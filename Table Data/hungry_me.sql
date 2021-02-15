-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 07:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungry_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_card`
--

CREATE TABLE `menu_card` (
  `R_Id` varchar(10) DEFAULT NULL,
  `Menu_Id` varchar(10) DEFAULT NULL,
  `Dish_Id` int(10) NOT NULL,
  `Dish_Name` varchar(30) DEFAULT NULL,
  `Dish_Price` double(6,2) DEFAULT NULL,
  `Dish_Available` tinyint(1) DEFAULT '1',
  `Image_dish` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_card`
--

INSERT INTO `menu_card` (`R_Id`, `Menu_Id`, `Dish_Id`, `Dish_Name`, `Dish_Price`, `Dish_Available`, `Image_dish`) VALUES
('1', 'MID1', 1, 'Tandoori Roti set of 5 ', 25.00, 100, 'images/1.jpg'),
('1', 'MID1', 2, 'Paneer Masala', 70.00, 14, 'images/2.jpg'),
('1', 'MID1', 3, 'Dal Fry', 30.00, 40, 'images/3.jpg'),
('1', 'MID1', 4, 'Plain rice', 30.00, 39, 'images/4.jpeg'),
('1', 'MID1', 5, 'Chicken Biryani', 170.00, 14, 'images/5.jpg'),
('1', 'MID1', 6, 'Butter Chicken', 100.00, 14, 'images/6.jpg'),
('1', 'MID1', 7, 'Egg Curry', 40.00, 40, 'images/7.jpg'),
('1', 'MID1', 8, 'Mutton Korma', 80.00, 30, 'images/8.jpg'),
('1', 'MID1', 9, 'Chicken Tikka', 90.00, 25, 'images/9.jpg'),
('1', 'MID1', 10, 'Special Mutton Biryani', 180.00, 15, 'images/10.jpg'),
('2', 'MID2', 21, 'CHEESE CAKE PACK OF 2', 333.33, 15, 'images/21.jpeg'),
('2', 'MID2', 22, 'Chocolate Mud Cake', 619.00, 8, 'images/22.jpg'),
('2', 'MID2', 23, 'RASPBERRY CHEESECAKE SHOT ', 266.67, 15, 'images/23.jpg'),
('2', 'MID2', 24, 'GULKAND SHOT ', 319.00, 14, 'images/24.jpg'),
('2', 'MID2', 25, 'Gulab Jamun', 285.71, 15, 'images/25.jpg'),
('2', 'MID2', 26, 'Oreo Vanilla Icecream (700gm)', 333.33, 15, 'images/26.jpg'),
('2', 'MID2', 27, 'Pink Gauva Ice Cream', 333.00, 14, 'images/27.jpg'),
('3', 'MID3', 31, 'Veg Extravaganza', 450.00, 9, 'images/31.png'),
('3', 'MID3', 32, 'Veggie Paradise', 385.00, 10, 'images/32.jpg'),
('3', 'MID3', 33, 'Fresh Veggie', 150.00, 10, 'images/33.png'),
('3', 'MID3', 34, 'Maxican Grennwave', 385.00, 10, 'images/34.png'),
('3', 'MID3', 35, 'Non Veg Supreme', 555.00, 9, 'images/35.jpg'),
('3', 'MID3', 36, 'Chicken Golden Delight', 450.00, 10, 'images/36.png'),
('3', 'MID3', 37, 'Chicken Dominator', 555.00, 10, 'images/37.jpg'),
('3', 'MID3', 38, 'Chicken Fiesta', 450.00, 9, 'images/38.png'),
('3', 'MID3', 39, 'Coke', 30.00, 10, 'images/39.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` int(11) NOT NULL,
  `R_Id` varchar(10) DEFAULT NULL,
  `Dishes_Ordered` varchar(50) DEFAULT NULL,
  `Order_Time` datetime DEFAULT NULL,
  `Order_Bill` double(10,2) DEFAULT NULL,
  `Order_CustId` varchar(10) DEFAULT NULL,
  `Order_Status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `R_Id`, `Dishes_Ordered`, `Order_Time`, `Order_Bill`, `Order_CustId`, `Order_Status`) VALUES
(9, '1', '1,2,64', '2017-12-17 12:59:54', 310.00, '1', 'OutForDelivery'),
(10, '3', '38,31,35', '2018-11-27 05:21:54', 1455.00, '124', 'OutForDelivery'),
(11, '1', '1,6', '2018-11-27 06:13:00', 125.00, '124', 'OutForDelivery'),
(12, '2', '22', '2018-11-27 06:36:31', 619.00, '124', 'OutForDelivery'),
(13, '2', '27', '2018-11-27 06:37:02', 333.00, '124', 'OutForDelivery'),
(14, '1', '5,1', '2018-11-27 06:50:52', 195.00, '124', 'OutForDelivery'),
(15, '2', '24,22', '2018-11-27 10:16:55', 938.00, '126', 'OutForDelivery'),
(16, '1', '2,4', '2018-11-27 10:59:41', 100.00, '124', 'OutForDelivery');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `R_Id` int(11) NOT NULL,
  `R_Name` varchar(40) DEFAULT NULL,
  `R_OwnerId` varchar(10) DEFAULT NULL,
  `R_Phno` varchar(11) DEFAULT NULL,
  `R_MenuId` varchar(10) NOT NULL,
  `R_Address` varchar(300) DEFAULT NULL,
  `R_Img` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`R_Id`, `R_Name`, `R_OwnerId`, `R_Phno`, `R_MenuId`, `R_Address`, `R_Img`) VALUES
(1, 'Riyaz', '11', ' 2442563', 'MID1', 'Opp. 2nd gate, Tilakwadi, Rasal', 'images/riyaz.jpg'),
(2, 'Sweet Truth', '22', ' 2442563', 'MID2', 'Opp. 3nd gate,Sadar', 'images/st.png'),
(3, 'Dominoz Jabalpur', '33', ' 2442589', 'MID3', 'Brigade Road', 'images/Dominos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `User_Pwd` varchar(70) DEFAULT NULL,
  `User_Type` varchar(20) DEFAULT NULL,
  `User_Fname` varchar(20) DEFAULT NULL,
  `User_Lname` varchar(20) DEFAULT NULL,
  `User_Mobile` varchar(11) DEFAULT NULL,
  `User_Email` varchar(50) NOT NULL DEFAULT '',
  `User_Address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `User_Pwd`, `User_Type`, `User_Fname`, `User_Lname`, `User_Mobile`, `User_Email`, `User_Address`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Admin', 'Nikita', 'Kushwaha', '9987654332', 'nikita@gmail.com', 'IIIT'),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'Admin', 'Kritika', 'Gupta', '8976458800', 'kritika@gmail.com', 'IIIT'),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Admin', 'Shivam', 'Dubey', '9978908746', 'shivam@gmail.com', 'IIIT'),
(11, '6512bd43d9caa6e02c990b0a82652dca', 'Rest_Owner', 'Riyaz', 'Riyaz', '9876234232', 'riyaz@gmail.com', 'Belgum'),
(22, 'b6d767d2f8ed5d21a44b0e5886680cb9', 'Rest_owner', 'Sweet', 'Truth', '9087564832', 'sweet@gmail.com', 'Sadar'),
(33, '182be0c5cdcd5072bb1864cdee4d3d6e', 'Rest_Owner', 'Dominos', 'Dominos', '8834562897', 'dominos@gmail.com', 'Rasal'),
(123, '123', 'Customer', 'Amol', 'Deshpande', '8277609456', 'amol@gmail.com', 'Tilakwadi, Belagavi'),
(124, 'dd4b21e9ef71e1291183a46b913ae6f2', 'Customer', 'Aashi', 'Khare', '7896541239', 'aashi@gmail.com', 'shridhaam'),
(126, 'd64bc53880b945869498f0322b7802b1', 'Customer', 'Nishant', 'Choudhary', '9460410934', 'nishantprashantbsw@gmail.com', '4c2 Mahi Sarowar Nagar Ext,Near Dialab, Banswara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_card`
--
ALTER TABLE `menu_card`
  ADD PRIMARY KEY (`Dish_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`R_Id`,`R_MenuId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_card`
--
ALTER TABLE `menu_card`
  MODIFY `Dish_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
