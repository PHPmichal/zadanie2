<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <meta charset="utf-8">
    <title>ZadanieI</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Dodaj Csv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="bargraph.html">Wykres</a>
            </li>
        </ul>
    </header>
    <body data-ng-app="characterSheet" class="bg-dark mb-5">
        <main>
            <article>
                <div class="text-white">
                    <form method="post" enctype="multipart/form-data" action="Import.php">
                        <div align="center">
                            <p>Upload CSV:<input type="file" name="file"></p>
                            <p><input type="submit" class="btn btn-info" name="submit" value="Import"></p>
                        </div>
                    </form>
                </div>

            </article>
        </main>
    </body>
</html>