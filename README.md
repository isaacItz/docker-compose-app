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



## Install Docker and Docker Compose on Amazon Linux 2
> sudo yum update -y

> sudo amazon-linux-extras install -y docker

> sudo service docker start

> sudo usermod -a -G docker ec2-user

> sudo systemctl enable docker

> docker info

> sudo curl -L https://github.com/docker/compose/releases/download/1.22.0/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose

> sudo chmod +x /usr/local/bin/docker-compose

> docker-compose version



## Download the code and configure containers
> sudo yum install -y git

> git clone https://github.com/Juli-BCN/docker-compose-app.git

> cd docker-compose-app

> nano app/src/shorten.php

*Modify line 62 with your IP or DNS domain name*

> docker-compose up