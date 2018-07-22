<?php
/**
 * Created by PhpStorm.
 * User: Tom Cedric Gottschlich
 * Date: 21.07.2018
 * Time: 18:39
 */

//Is the Title for the html <title>-Tag.
$s_site_title         = "Th3 H3ll0 F0rum";

//Meta information:
$s_site_author        = "Tom Cedric Gottschlich";
$s_site_description   = "Is a small forum, which is simple and needs to be expanded every now and then.";
$s_site_version       = "0.0.1";

//MySQL database settings:
$s_mysql_host         = "127.0.0.1";
$s_mysql_username     = "root";
$s_mysql_database     = "forum";
$s_mysql_password     = "";

//database connecten:
$pdo = new PDO("mysql:host=" . $s_mysql_host . ";dbname=" . $s_mysql_database, $s_mysql_username, $s_mysql_password);