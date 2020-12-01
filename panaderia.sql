create database panaderia;
use panaderia;


CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Bimbo'),
(2, 'Gloria'),
(3, 'Costa'),
(4, 'Pura Vida'),
(5, 'San Fernando');


CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(1, 1, '0', 0, 'Pan Molde bimbo', 'pan-bimbo.jpg', 1, 15, 15),
(2, 2, '0', 0, 'Leche Gloria', 'LECHE-AZUL-GLORIA-.jpg', 1, 2, 2),
(3, 1, '0', 4, 'Pan Molde bimbo', 'pan-bimbo.jpg', 1, 15, 15),
(4, 2, '0', 4, 'Leche Gloria', 'LECHE-AZUL-GLORIA-.jpg', 1, 2, 2),
(6, 7, '0', 5, 'Pan Molde', 'pan molde.jpg', 1, 10, 10);



CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Panes\r\n'),
(2, 'Leches'),
(3, 'Dulces\r\n'),
(4, 'Embutidos\r\n');



CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Pan Molde bimbo', 15, 'Pan Molde bimbo ', 'pan-bimbo.jpg', 'Pan Molde bimbo'),
(2, 2, 2, 'Leche Gloria', 2, 'Chocolate boom', 'LECHE-AZUL-GLORIA-.jpg', 'Leche Gloria'),
(3, 3, 3, 'Chocolate boom', 1, 'ipad apple brand', 'chocolate.jpg ', 'Chocolate boom'),
(4, 2, 4, 'Leche Pura Vida', 3, 'Leche Pura Vida ', 'pura-vida.jpg', 'Leche Pura Vida'),
(5, 4, 5, 'Jamon','5', 'Jamon', 'jamon.jpg', 'Jamon'),
(6, 1, 1, 'Pan Tostado', 3, 'Pan Tostado', 'pan.jpg', 'Pan Tostado'),
(7, 1, 1, 'Pan Molde', 10, 'Pan Molde', 'pan molde.jpg', 'Pan Molde');

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(9) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'demo', 'demo', 'demo@gmal.com', '12345', '123456789', 'Kolkata', 'VIP Road'),
(2, 'Rizwan', 'Khan', 'rizwankhan.august16@gmail.com', '25f9e794323b453885f5181f1b624d0b', '983226843', 'Hutton Road', 'Kolkata'),
(3, 'Rizwan', 'Khan', 'salmankhan@gmail.com', '25f9e794323b453885f5181f1b624d0b', '838908018', 'Hutton Road', 'Asansol'),
(4, 'Juan', 'Mathas', 'ricardocorazondeleon2018@gmail.com', '107f0be83ce4115a829215412c22ebcc', '928644468', 'AV PANAMERICANA', 'sin numero'),
(5, 'tusolutionweb', 'tutos', 'tusolutionweb@gmail.com', 'e9e8c468973e6280e6a4497bdc279cf1', '965644468', 'AV ramon castila', 'san blas');


ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);


ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;


ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
