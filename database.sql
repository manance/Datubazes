CREATE DATABASE userdb;
USE users_ipb24;

CREATE TABLE users(
  id INT PRIMARY KEY AUTO_INCERMENT,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  phone INT(8),
  person_code VARCHAR(11)
);