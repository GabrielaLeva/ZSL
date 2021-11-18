<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylsheet" href="styl.css">
    <title>A.</title>
</head>
<body>
    <?php 
    $connect = new mysqli('localhost','root','','3gi2t');
    $sql="SELECT * FROM `users`";
    $result=$connect->query($sql);
    echo <<<TAB
        <table>
        <tr>
            <th> ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
        </tr>
TAB;
    while ($user=$result->fetch_assoc()) {
        echo <<<USER
            <tr>
                <td>$user[id]</td>
                <td>$user[NAME]</td>
                <td>$user[surname]</td>
                <td>$user[brithday]</td>
            </tr>
USER;
    }
    #2 lekcje walczyłam z unexpected end of file
    ?>
    </table>
</body>
</html>