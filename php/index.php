<?php
echo 'Connecting to db...\n';
$host = 'db';
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);
echo ($conn->connection_error) ? 'Failed.' : 'Success.';
?>
