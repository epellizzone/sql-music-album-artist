<?php
$artist = $_GET["id"];
$pdo = new PDO('mysql:host=localhost;dbname=album', 'root', 'root');
$pdo->exec('SET NAMES UTF8');
$sql ="UPDATE artists set `IsActive` = 0 where `ArtistId`= ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$artist]);

header("Location: ../index.php");
?>