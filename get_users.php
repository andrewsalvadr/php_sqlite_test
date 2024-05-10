<?php
$db = new SQLite3('quiz.db');
$result = $db->query('SELECT * FROM users');

while ($row = $result->fetchArray()) {
    echo "ID: " . $row['id'] . " Name: " . $row['name'] . " Score: " . $row['score'] . "<br/>";
}
?>
