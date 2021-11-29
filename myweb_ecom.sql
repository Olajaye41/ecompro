-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, '038', 'mens cloth 2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam expedita assumenda magnam ipsum quae fugit asperiores quisquam natus vel ipsa?', 1000, 1, 1000, '2021-11-29 05:28:32', '2h22u2u@gg'),
(13, '039', 'women 2', 'oribus. Delectus animi asperiores libero dignissimos magni totam natus, rerum numquam earum ea odit veniam. Nobis vitae mollitia unde eligendi iusto provident animi adipisci et dolore quas autem eum corporis debitis nemo harum explicabo necessitatibus per', 130, 1, 130, '2021-11-29 05:28:32', '2h22u2u@gg'),
(14, '046', 'children 8', ' asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 1250, 1, 1250, '2021-11-29 05:59:25', '2h22u2u@gg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `priceprev` int(6) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `product_type` varchar(100) CHARACTER SET armscii8 NOT NULL,
  `product_code` varchar(80) NOT NULL,
  `rate` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `qty`, `price`, `priceprev`, `product_img`, `date`, `product_type`, `product_code`, `rate`) VALUES
(6, 'women 1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, esse!', 10, '3000.00', 0, 'images (3).jpeg', '2021-11-28 21:49:28.514411', 'women', '6', 4),
(38, 'mens cloth 2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam expedita assumenda magnam ipsum quae fugit asperiores quisquam natus vel ipsa?', 69, '1000.00', 0, 'images (4).jpeg', '2021-11-29 05:28:32.531337', 'men', '038', 2),
(39, 'women 2', 'oribus. Delectus animi asperiores libero dignissimos magni totam natus, rerum numquam earum ea odit veniam. Nobis vitae mollitia unde eligendi iusto provident animi adipisci et dolore quas autem eum corporis debitis nemo harum explicabo necessitatibus perferendis suscipit dolorem, maiores impedit at illum voluptatum! Vero laborum, ', 5, '130.00', 0, 'download (2).jpeg', '2021-11-29 05:28:32.596035', 'women', '039', 5),
(40, 'children1', 'illum maxime tempore recusandae soluta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam ', 21, '190.00', 0, 'download (1).jpeg', '2021-11-28 22:06:46.087033', 'children', '040', 5),
(41, 'man4', 'illum maxime tempore recusandae soluta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, mollitia libero voluptatum atque quidem hic corrupti temporibus. Delectus animi asperiores libero dignissimos magni totam natus, rerum numquam earum ea odit veniam.', 90, '500.00', 0, 'file-1635809686961-0440cea0b2fdimage.jpeg', '2021-11-28 22:06:46.163375', 'men', '041', 2),
(42, 'women4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, mollitia libero voluptatum atque quidem hic corrupti temporibus. Delectus animi asperiores libero dignissimos magni totam natus, rerum numquam earum ea odit veniam.tibus perferendis suscipit dolorem, maiores impedit at illum voluptatum! Vero laborum, illum maxime tempore recusandae soluta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 70, '890.00', 0, 'images (2).jpeg', '2021-11-28 22:06:46.222497', 'women', '042', 3),
(43, 'children2', 'tibus perferendis suscipit dolorem, maiores impedit at illum voluptatum! Vero laborum, illum maxime tempore recusandae soluta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 45, '450.00', 0, 'istockphoto-1283339591-170667a.jpg', '2021-11-28 22:06:46.267041', 'children', '043', 5),
(44, 'men5', 'tibus perferendis suscipit dolorem,luta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 67, '3450.00', 0, 'photo-1534303187781-59b6aa009e6f.jpeg', '2021-11-28 22:06:46.434223', 'men', '044', 4),
(45, 'women7', ', maiores impedit at illum voluptatum! Vero laborum, illum maxime tempore recusandae soluta praesentium exercitationem excepturi nihil vitae asperiores porro velit temporibus sunt nostrum rem architecto voluptatus quisquam in sunt! ', 90, '450.00', 0, 'images (1).jpeg', '2021-11-28 22:06:46.500800', 'women', '045', 5),
(46, 'children 8', ' asperiores porro velit temporibus sunt nostrum rem architecto voluptatum impedit voluptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 86, '1250.00', 0, 'TELEMMGLPICT000133804850_trans_NvBQzQNjv4BqgRl8BouVbC6HZnydG5Kn5pdzd29AV1S6GkBHLgjhxoY.jpeg', '2021-11-29 05:59:25.609209', 'children', '046', 3),
(47, 'women9', ' perferendis suscipit dolorem, maiores impedit at illum voluptatum! Vero laborum, illum maxime tempore recusandae solutauptas fugit autem quas ea sapiente at. Voluptatibus quisquam in sunt! ', 34, '340.00', 0, '5a541f944dcb39cb3d084a8071c55c99.jpg', '2021-11-28 22:06:46.589255', 'women', '047', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(5, 'dfkf', 'dd', 'ssss', 'ssss', 72282828, '2h22u2u@gg', 'eheeueueue', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
