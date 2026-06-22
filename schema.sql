CREATE DATABASE IF NOT EXISTS schema;
USE schema;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) UNIQUE,
password VARCHAR(255)
);

INSERT INTO users(username,password)
VALUES('admin','$2y$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy');
-- mot de passe : password
