<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=album', 'root', 'root');

$pdo->exec('SET NAMES UTF8');

$sql = "SELECT * from artists";

$stmt = $pdo->query($sql);

$artists = $stmt->fetchAll(pdo::FETCH_ASSOC);

// Var_dump($artists);

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
    <a href="./artists/insert_form.php" class="btn btn-primary">ajouter un artists</a>
    <table class="table table-striped">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Artist</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php
            foreach ($artists as $artist) {
                ?>
                <tr>
                    <td>
                        <?= $artist["ArtistId"] ?>
                    </td>
                    <td> <a class="text-decoration-none text-reset" href="./album/artist.php?id=<?= $artist["ArtistId"] ?>"><?= $artist["Name"] ?>
                            <?= $artist["Name"] ?>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="./artists/update_form.php?id=<?= $artist["ArtistId"] ?>">Edit </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="">Delete </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

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