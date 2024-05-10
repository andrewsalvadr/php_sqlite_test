<?php
$db = new SQLite3('quiz.db');
$name = $_POST['name'] ?? 'Anonymous';
$score = $_POST['score'] ?? 0;

$statement = $db->prepare('INSERT INTO users (name, score) VALUES (:name, :score)');
$statement->bindValue(':name', $name);
$statement->bindValue(':score', $score);
$statement->execute();

echo "User added successfully.";
?>
