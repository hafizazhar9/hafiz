CREATE TABLE `hafiz` (
  `ic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `blood group` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hafiz` (`ic`, `name`, `religion`, `blood group`, `address`, `phone`, `hobby`, `age`, `gender`, `email`, `images`) VALUES
('010410140065', 'Muhammad Hafiz Bin Azhar', 'Islam', 'O', 'Bukit Mahkota, Kajang Selangor', '0135234142', 'Playing games', 22, 'Male', 'hafizzhar99@gmail.com', 'hafiz.jpeg');
