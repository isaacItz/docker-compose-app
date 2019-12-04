FROM ubuntu:18.04
MAINTAINER "Julian Martin" <julian.martin@leaseplan.com>

# Install dependencies
RUN apt-get update
RUN apt-get -y install apache2
RUN apt-get -y install curl
RUN apt-get -y install mysql-client

# Install apache and write ServerName
RUN rm -rf /var/www/*
ADD src /var/www/html
RUN echo ServerName ${HOSTNAME} >> /etc/apache2/apache2.conf

# Install PHP Extensions
RUN DEBIAN_FRONTEND=noninteractive apt-get -y install php libapache2-mod-php php-mysql 
ADD config/dir.conf /etc/apache2/mods-enabled/dir.conf

# Configure apache
RUN echo '. /etc/apache2/envvars' > /root/run_apache.sh
RUN echo 'mkdir -p /var/run/apache2' >> /root/run_apache.sh
RUN echo 'mkdir -p /var/lock/apache2' >> /root/run_apache.sh
RUN echo '/usr/sbin/apache2 -D FOREGROUND' >> /root/run_apache.sh
RUN chmod 755 /root/run_apache.sh

EXPOSE 80

CMD /root/run_apache.sh
