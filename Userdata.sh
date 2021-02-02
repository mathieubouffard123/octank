Userdata


#!/bin/bash 
# Install Apache Web Server and PHP 
yum install -y httpd mysql 
amazon-linux-extras install -y php7.2 
# Install git
Yum install -y git-all

# Download repo from Git
git clone https://github.com/mathieubouffard123/octank.git /var/www/html

# Download Lab files 
#wget https://us-west-2-tcprod.s3.amazonaws.com/courses/ILT-TF-200-ARCHIT/v6.8.15/lab-2-webapp/scripts/inventory-app.zip 
#unzip inventory-app.zip -d /var/www/html/ 

# Download and install the AWS SDK for PHP 
wget https://github.com/aws/aws-sdk-php/releases/download/3.62.3/aws.zip 
unzip aws -d /var/www/html 
# Turn on web server
chkconfig httpd on 
service httpd start


