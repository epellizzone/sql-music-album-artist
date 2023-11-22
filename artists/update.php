<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=album', 'root', 'root');

$id = $_POST["id"];

$name = $_POST["name"];

$sql = "UPDATE artists SET `Name` = ? WHERE artists.ArtistId = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$name, $id]);

header("Location: ..:index.php");

?>