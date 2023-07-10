<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-08 10:00:00 --> Query error: MySQL server has gone away - Invalid query: SELECT count(article.id) as totalData
FROM `t_article` as `article`
LEFT JOIN `t_article_category` as `category` ON `category`.`id` = `article`.`category`
WHERE `category`.`name` NOT IN('cimanews')
AND `status` = 'publish'
ERROR - 2023-07-08 10:00:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it C:\xampp\htdocs\web-rsud-cimacan\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2023-07-08 10:00:12 --> Unable to connect to the database
ERROR - 2023-07-08 10:00:45 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:00:45 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:00:54 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:00:54 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:00:54 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:00:54 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:07 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:07 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:07 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:07 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:51 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:51 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:52 --> Severity: Warning --> Undefined array key 0 C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
ERROR - 2023-07-08 10:12:52 --> Severity: Warning --> Attempt to read property "content" on null C:\xampp\htdocs\web-rsud-cimacan\application\views\fe\parts\top-bar.php 11
