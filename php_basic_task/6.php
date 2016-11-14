<?php
require_once('2.php');

if ($age >= 18 && $age <= 59) {
    echo "You should work";
}
if ($age > 59) {
    echo "It is time for you to retire";
}