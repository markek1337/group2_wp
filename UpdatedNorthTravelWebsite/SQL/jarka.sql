CREATE TABLE users (
    user_ID int(10) NOT NULL AUTO_INCREMENT,
    username varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    user_type varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    date_created DATE DEFAULT (CURRENT_DATE) NOT NULL,
    PRIMARY KEY (user_ID)
);
CREATE TABLE destinations (
    destination_ID int(10) NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    description varchar(100),
    link varchar(100),
    image varchar(100),
    price int(10),
    price_cat ENUM('Expensive','Average','Cheap','') NOT NULL,
    country ENUM('Finland','Sweden','Norway','Iceland','Greenland') NOT NULL ,
    seasonal ENUM('Summer','Winter','Whole year') NOT NULL ,
    PRIMARY KEY (destination_ID)
);
INSERT INTO `destinations`(`name`, `country`, `price`, `price_cat`, `seasonal`, `image`, `link`) VALUES ('Swedish Lapland', 'Sweden', '500', 'Average', 'Whole Year','1.png', '../../swedenpage.php');
INSERT INTO `destinations`(`name`, `country`, `price`, `price_cat`, `seasonal`, `image`, `link`) VALUES ('The Fjords', 'Norway', '900', 'Expensive', 'Summer','2.png', '../../norwaypage.php');
INSERT INTO `destinations`(`name`, `country`, `price`, `price_cat`, `seasonal`, `image`, `link`) VALUES ('Hveragerdi', 'Iceland', '300', 'Cheap', 'Winter','3.png', '../../icelandpage.php');
