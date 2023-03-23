<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include('../navbar.php') ?>
    <?php include('../services/dbconnect.php') ?>
    <?php if (isset($_POST["password"])) {
        $recipesStatement = $conn->prepare("INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `adresse`, `password`) VALUES (NULL, '{$_POST["nom"]}', '{$_POST["prenom"]}', '{$_POST["email"]}', '{$_POST["adresse"]}', '{$_POST["password"]}');");
        $recipesStatement->execute();

        $recipesStatement = $conn->prepare("SELECT * FROM `users` ORDER BY ID DESC LIMIT 1");
        $recipesStatement->execute();
        $lastuser = $recipesStatement->fetch();
        var_dump($lastuser["id"]);
        header("Location: http://localhost/unsecurewebsite/pages/account.php?id={$lastuser["id"]}");
        die();
    } ?>
    <div class="container my-5 w-50">
        <h1 class="text-center mb-5">Inscription</h1>
        <form method="post" class="form-example" autocomplete="off">
            <div class="form-example mb-3">
                <label for="name" class="form-label">Nom: </label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-example mb-3">
                <label for="name" class="form-label">Prénom: </label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <div class="form-example mb-3">
                <label for="name" class="form-label">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-example mb-3">
                <label for="name" class="form-label">Adresse: </label>
                <input type="text" name="adresse" id="adresse" class="form-control" required>
            </div>
            <div class="form-example mb-3">
                <label for="password" class="form-label">Mot de passe: </label>
                <input type="text" name="password" id="password" class="form-control" required>
                <!-- <input type="password" name="password" id="password" class="form-control" required> -->
            </div>
            <div class="form-example text-center">
                <input type="submit" value="Se connecter" class="my-3 btn btn-primary">
            </div>
        </form>

    </div>
    <?php include('../footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>