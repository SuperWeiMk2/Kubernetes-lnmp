# 使用官方php镜像制作一个带有MySQL扩展的镜像文件，并命名为PHP-MySQL-WW
FROM php:latest

# Install MySQL extension
RUN docker-php-ext-install mysqli pdo_mysql

# Set timezone
RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && echo "Asia/Shanghai" > /etc/timezone

# Set working directory
WORKDIR /var/www/html

# Set entrypoint
CMD ["php", "-S", "0.0.0.0:8000"]

# Set image name and tag
LABEL Name=PHP-MySQL-WW Version=1.0.0