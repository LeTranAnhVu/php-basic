<?php
/**
 * Created by PhpStorm.
 * User: gumi-imac-05
 * Date: 2019-04-12
 * Time: 15:09
 */

$host = "localhost";
$username = "brian123";
$password = "....";
$db = "php_basic";
//connect to database
$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn){
    die('Cannot connect the DB' . mysqli_connect_error());
}