<?php

require_once("config/db.php");

$sqlUsers = "CREATE TABLE IF NOT EXISTS users (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sqlTasks = "CREATE TABLE IF NOT EXISTS taskS (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  description TEXT,
  due_date DATE,
  user_id INT UNSIGNED,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";

$stmt = $connection->prepare($sqlUsers);
$stmt->execute();

$stmt = $connection->prepare($sqlTasks);
$stmt->execute();