<?php
require_once('9.php');

switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo "$day - This is working day";
        break;
    case($day >= 6 && $day <= 7):
        echo "$day - This is weekend";
        break;
}