<?php
$id = $_GET["id"];

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=album', 'root', 'root');

$sql = "SELECT * FROM artists WHERE ArtistId = $id";

$stmt = $pdo->query($sql);

$artist = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($ARTIST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form class="w-25" action="./update.php" method="POST">
        <div class="mb-3">
            <label for="artist" class="form-label">Nom de l'artiste</label>
            <input type="hidden" name="id" value="<?= $artist["ArtistId"] ?>">
            <input type="text" class="form-control" id="artist" name="name" value="<?= $artist["Name"] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>