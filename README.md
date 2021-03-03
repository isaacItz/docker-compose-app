# PHP_URL_Shortener docker-compose-app
Docker Compose for Apache, PHP and mySQL

PHP Code to Shorten URLs and create links and redirection
This version is running two containers on Docker Compose

## It uses a database with the following details:
> DB Name: LPURLS

> Table Name: testurls

> Username: lpurlsuser

> Password: lpurlspasswd

## The table contains three fields:
> id: int(11)

> url: varchar(512)

> shortened: varchar(255)
