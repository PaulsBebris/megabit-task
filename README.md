# web-test
0. Prepare MariaSQL (MySQL)
  DROP DATABASE IF EXISTS webtask;
  CREATE DATABASE webtask;
  USE webtask;
  DROP USER IF EXISTS 'task'@localhost;
  CREATE USER 'task'@localhost IDENTIFIED BY 'task';
  GRANT ALL PRIVILEGES ON task.* TO 'task'@localhost;
  FLUSH PRIVILEGES;

  CREATE TABLE `newsletter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `provider` varchar(50) DEFAULT NULL,
  `registerdate` date DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

1. Project setup. From project root directory run:

npm install

2. Start-up development server
npm run serve -- --port 8081

3. Start PHP dev server for API to work
php -S 127.0.0.1:8082
!!! on (linux/osx) if problem with PHP include - check permissions


*** import some data if you wish, or create using webform
