<?php
$connection = new mysqli('localhost', 'root', '', 'f3borja');

if (!$connection) {
    die(mysqli_error($mysqli));
}