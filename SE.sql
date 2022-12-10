-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 04:14 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `online_rest`
--
    CREATE DATABASE IF NOT EXISTS `SE` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
  USE `SE`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', 'QFE6ZM', '2022-12-10 02:14:29'),
(8, 'abc888', '6d0361d5777656072438f6e314a852bc', 'abc@gmail.com', 'QX5ZMN', '2018-04-13 18:12:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(222) NOT NULL,
  `job_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`) VALUES
(1, 'Collector'),
(2, 'Janitor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mcps`
--

CREATE TABLE `mcps` (
  `mcp_id` int(222) NOT NULL,
  `mcp_name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `status` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_type_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `date` date NOT NULL,
  `area` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL DEFAULT 'Undone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `task`
--

INSERT INTO `task` (`task_id`, `task_type_id`, `u_id`, `date`, `area`, `status`) VALUES
(11, 1, 36, '2022-12-24', 'Q10', 'Done'),
(12, 2, 36, '2022-12-16', 'Q11', 'Undone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `task_type`
--

CREATE TABLE `task_type` (
  `task_type_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `task_type`
--

INSERT INTO `task_type` (`task_type_id`, `job_id`, `task_name`, `description`) VALUES
(1, 1, 'ddd', 'ddddd'),
(2, 1, 'aaaaaaaaa', 'a'),
(3, 2, 'bbbbbbbbb', 'b'),
(4, 2, 'eeeeeee', 'e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_id` int(222) NOT NULL,
  `task_complete` int(2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`, `job_id`, `task_complete`, `img`) VALUES
(35, 'trinh', 'Khoa', 'khang', 'abc@gmail.com', '0909617574', 'e10adc3949ba59abbe56e057f20f883e', 'a', 1, '2022-12-09 02:10:38', 2, 0, ''),
(36, 'khoadang', 'Trinh', 'khang', 'dangkhoa0521@gmail.com', '0909617574', 'e10adc3949ba59abbe56e057f20f883e', 'a', 1, '2022-12-10 02:13:24', 1, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(39, 33, 'Bonefish', 2, '55.77', NULL, '2022-11-30 10:25:03'),
(40, 33, 'Bonefish', 3, '55.77', NULL, '2022-11-30 10:35:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicle`
--

CREATE TABLE `vehicle` (
  `License_plates` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `vehicle`
--

INSERT INTO `vehicle` (`License_plates`, `name`, `type`, `status`) VALUES
('34A-333.33', 'Toyota-xyz', 'Truck', 'Off'),
('37A-444.44', 'HYUNDAI_1967', 'Truck', 'ON'),
('51-T3 2000', '', 'Troller', 'On'),
('51-T3 2001', '', 'Troller', 'On'),
('51-T3 2002', '', 'Troller', 'On'),
('51-T3 2004', '', 'Troller', 'Off'),
('51-T3 2011', '', 'Troller', 'Off'),
('51F-888.38', 'Ford-123', 'Truck', 'On'),
('70-F1 666.66', 'ISUZU_2020', 'Truck', 'Off');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Chỉ mục cho bảng `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `job_name` (`job_name`) USING HASH;

--
-- Chỉ mục cho bảng `mcps`
--
ALTER TABLE `mcps`
  ADD PRIMARY KEY (`mcp_id`);

--
-- Chỉ mục cho bảng `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_type` (`task_type_id`),
  ADD KEY `task_user` (`u_id`);

--
-- Chỉ mục cho bảng `task_type`
--
ALTER TABLE `task_type`
  ADD PRIMARY KEY (`task_type_id`),
  ADD KEY `task_job` (`job_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `job_user` (`job_id`);

--
-- Chỉ mục cho bảng `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Chỉ mục cho bảng `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`License_plates`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `mcps`
--
ALTER TABLE `mcps`
  MODIFY `mcp_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `task_type`
--
ALTER TABLE `task_type`
  MODIFY `task_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_type` FOREIGN KEY (`task_type_id`) REFERENCES `task_type` (`task_type_id`),
  ADD CONSTRAINT `task_user` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Các ràng buộc cho bảng `task_type`
--
ALTER TABLE `task_type`
  ADD CONSTRAINT `task_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
