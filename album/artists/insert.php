<?php

$name = $_POST["name"];

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=album', 'root', 'root');

$sql = "INSERT INTO artists (`Name`) VALUES (?)";

$stmt = $pdo->prepare($sql);

$stmt->execute([$_POST["name"]]);

header("location: ../index.php");
?>