<!Doctype html>
    <html lang="pl">
        <head>
            <meta charset="UTF-8">
            <title>Scriiipt</title>
        </head>
        <body>
            <h3>Dane z formularza<h3>
                <?php
                    $name = $_POST["name"];
                    $a = $_POST["kolor"];
                    require_once '../functions/Function.php';
                    show();
                    echo showName($name,$a); ?>
    </html>