<?php 
$db = new SQLite3('quiz.db');
$db->exec("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, score INTEGER)");
echo "Database and table created successfully"
?>
