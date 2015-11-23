<?php
session_start();
require dirname(__FILE__).'/config.php';



///Make database connection

$link = mysql_connect('localhost', 'root', '') or die(mysql_error()); 

//select database

mysql_select_db('jamilkhan') or die(mysql_error());

//include function files
require ABSPATH."includes/functions.io.php";;