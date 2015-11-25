<?php
session_start();
require dirname(__FILE__).'/config.php';



///Make database connection

$link = mysql_connect(DB_HOSt, DB_USER, DB_PASS) or die(mysql_error()); 

//select database

mysql_select_db('jamilkhan') or die(mysql_error());

//include function files
require ABSPATH."includes/functions.io.php";;