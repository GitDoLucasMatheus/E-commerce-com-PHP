
CREATE DATABASE project_site;
USE project_site;

CREATE TABLE products (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_product VARCHAR(150) NOT NULL,
    price DOUBLE(6,2) NOT NULL,
    description VARCHAR(200) NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE = innodb;


CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(200) NOT NULL UNIQUE,
  password VARCHAR(260) NOT NULL,
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE = innodb;


CREATE TABLE person (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(250) NOT NULL,
  telephone BIGINT(10),
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE = innodb;


CREATE TABLE address (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  address VARCHAR(70),
  complement VARCHAR(40),
  state VARCHAR(20),
  city VARCHAR(20),
  cep BIGINT(8),
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE = innodb;

ALTER TABLE person ADD CONSTRAINT `fk_person_id` FOREIGN KEY ( id ) REFERENCES users( id ) ;
ALTER TABLE address ADD CONSTRAINT `fk_address_id` FOREIGN KEY ( id ) REFERENCES users( id ) ;

INSERT INTO products (name,price,description) VALUES ('Xperia',1200.00,'Celular Sony Xperia C4');



