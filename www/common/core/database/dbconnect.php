<?php
/**
 * Created by PhpStorm.
 * User: Germo
 * Date: 12/03/2017
 * Time: 14:03
 */
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "pood");

$connect = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if (!$connect){
    die("Database Connection Failed" . mysqli_error($connect));
}