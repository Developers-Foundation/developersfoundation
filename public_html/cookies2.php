<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/3/17
 * Time: 9:00 PM
 */

session_start();

echo $_SESSION['nobAuth'] . "\n";
echo $_COOKIE['nobAuth'] . "\n";

if ($_COOKIE['nobAuth'] != "true") {
    echo "You are not authorized. Go away :(";
} else {
    echo "You are good :)";
}