CREATE TABLE `shopping_cart` (
  `cart_item_id` int NOT NULL,
  `user_ID` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `image` mediumblob NOT NULL,
  `quantity` int NOT NULL
);

ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `user_ID` (`user_ID`);