CREATE TABLE IF NOT EXISTS products(
	proId int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    proCat varchar(256) NOT NULL,
    proName varchar(256) NOT NULL,
    proDesc varchar(256) NOT NULL,
    proPrice int(9) NOT NULL,
    proPic BLOB NOT NULL
);

INSERT INTO products () VALUES ();

CREATE TABLE IF NOT EXISTS orders( 
    ordId int(5) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    username varchar(256) NOT NULL, 
    orders varchar(256) NOT NULL, 
    currDate DATE NOT NULL, 
    currTime TIME NOT NULL,
    totalPrice int(9) NOT NULL,
    orderState varchar(256) NOT NULL
    );

ALTER TABLE `orders` ADD `orderState` VARCHAR(256) NOT NULL AFTER `totalPrice`;