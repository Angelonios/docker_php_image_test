<?php
echo 'sup? gonna set up db for ya, k?';
$host = 'db';
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);
echo ($conn->connection_error) ? 'I failed, no db for u' : 'I did it!';
?>
