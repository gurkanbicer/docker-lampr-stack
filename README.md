# LAMP-R Stack built with Docker Compose

* Apache 2.4
* PHP 7.3
* MySQL 5.7, MySQL 8 or MariaDB 10.3
* PhpMyAdmin Latest
* Redis Latest

## Installation

```
git clone https://github.com/gurkanbicer/docker-lampr-stack.git
cd docker-lampr-stack
cp sample.env .env
docker-compose up -d
```

## Information

**Default Virtual Host URL:** http://localhost

**PhpMyAdmin URL:** http://localhost:8080

**MySQL Server Hostname:** mysql

**Redis Server Hostname:** redis

All ports are default. You can change it on .env file before built Docker project.

**MySQL root password is:** secret