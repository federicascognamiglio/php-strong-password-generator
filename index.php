<?php

require_once 'functions.php';

if ($password_length > 4 && $password_length < 21) {
    session_start();
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
        <!-- Title -->
        <h1 class="mt-5 text-center">STRONG PASSWORD GENERATOR</h1>
        <p class="mb-5 text-center">Tell us how long your password should be and we'll generate a strong password for
            you!</p>
        <!-- Form -->
        <form action="">
            <div class="row justify-content-center align-items-end">
                <!-- Length input -->
                <div class="col-5">
                    <label for="length" class="form-label">Password length</label>
                    <input type="number" class="form-control" id="length" name="length" min="5" max="20"
                        placeholder="Ex. 5">
                    <div id="length" class="form-text">Password should contain min. 5 characters and max. 20 characters
                    </div>
                </div>
                <!-- Filters -->
                <div class="col-12">
                    <h5 class="text-center mt-5">Personalize:</h5>
                    <p class="text-center mb-4">Check allowed characters</p>
                    <div class="row justify-content-center">
                        <!-- Uppercase checkbox -->
                        <div class="col-2">
                            <input type="checkbox" id="uppercase" name="uppercase">
                            <label for="uppercase">Uppercase</label>
                        </div>
                        <!-- Lowercase checkbox -->
                        <div class="col-2">
                            <input type="checkbox" id="lowercase" name="lowercase">
                            <label for="lowercase">Lowercase</label>
                        </div>
                        <!-- Numbers checkbox -->
                        <div class="col-2">
                            <input type="checkbox" id="numbers" name="numbers">
                            <label for="numbers">Numbers</label>
                        </div>
                        <!-- Symbols checkbox -->
                        <div class="col-2">
                            <input type="checkbox" id="symbols" name="symbols">
                            <label for="symbols">Symbols</label>
                        </div>
                        <p class="text-center form-text mt-4">* If no checkbox is selected all characters will be allowed</p>
                    </div>
                </div>
                <!-- /Filters -->
                <button class="btn btn-primary col-2 mt-5">Generate</button>
        </form>
        <!-- /Form -->
    </main>
</body>

</html>