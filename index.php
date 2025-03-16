<?php

session_start();
include_once 'functions.php';
$password_length = isset($_GET['length']) && is_numeric($_GET['length']) ? $_GET['length'] : 0;
if ( $password_length > 4 && $password_length < 21 ) {
    $_SESSION['password'] = generate_password($password_length);
    header('Location: ./password.php');
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1 class="mt-5 text-center">STRONG PASSWORD GENERATOR</h1>
        <p class="mb-5 text-center">Tell us how long your password should be and we'll generate a strong password for you!</p>

        <form action="">
            <div class="row justify-content-center align-items-end">
                <div class="col-5">
                    <label for="length" class="form-label">Password length</label>
                    <input type="number" class="form-control" id="length" name="length" min="5" max="20" placeholder="Ex. 5">
                </div>
                <button class="btn btn-primary col-2">Generate</button>
            </div>
        </form>
    </main>
</body>

</html>