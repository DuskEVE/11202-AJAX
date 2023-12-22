<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XMLHttpRequest</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="./plugin/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    $json = file_get_contents("kktix.json");
    $kktix = json_decode($json);


    ?>

<script src="./plugin/js/bootstrap.js"></script>
    <script src="./plugin/js/jquery.js"></script>
</body>
</html>