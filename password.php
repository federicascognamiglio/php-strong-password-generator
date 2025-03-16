<?php

session_start();
require_once 'functions.php';
var_dump($_SESSION['password'])

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section class="container d-flex flex-column align-items-center">
        <h2 class="mt-5">YOUR STRONG PASSWORD IS:</h2>
        <p>Caratteri <?php echo strlen($_SESSION['password']) ?></p>
        <h4><?php echo $_SESSION['password'] ?></h4>
        <a href="./index.php" class="btn btn-primary mt-5">Generate another password</a>
    </section>

</body>

</html>