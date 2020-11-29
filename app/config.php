<?php

/*
Configuration variables for the database connection using pg_connect.
Change according to your PostgreSQL setup.
DB_HOST - Database host
DB_USER - Database user
DB_PASS - User password
DB_NAME - Name of the database
*/
define('DB_HOST', 'localhost');
define('DB_USER', 'ivo');
define('DB_PASS', '1234pass');
define('DB_NAME', 'codetest');

$_SESSION["DB_CONNECTION"] = pg_connect("host=".$host." port=5432 dbname=".$name." user=".$user." password=".$pass);
