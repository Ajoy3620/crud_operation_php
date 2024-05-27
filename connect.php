<?php
$con = new mysqli('localhost', 'root', '', 'crudoperation');

// using MySQLi Procedural for connection
// using !$con means if not connect then show error if connect then nothing show.
if (!$con) {
    die(mysqli_error($con));
}
