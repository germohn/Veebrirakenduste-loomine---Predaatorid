<?php
/**
 * Created by PhpStorm.
 * User: Germo
 * Date: 26/03/2017
 * Time: 18:00
 */

session_start();
session_unset();
session_destroy();

header("location: index.php");