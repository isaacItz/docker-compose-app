CREATE DATABASE IF NOT EXISTS LPURLS;
USE LPURLS;
CREATE TABLE testurls (
id int(11) NOT NULL,
url varchar(512) NOT NULL,
shortened varchar(255) NOT NULL
);
CREATE USER 'lpurlsuser'@'localhost' IDENTIFIED BY 'lpurlspasswd';
GRANT ALL PRIVILEGES ON *.* TO 'lpurlsuser'@'localhost';