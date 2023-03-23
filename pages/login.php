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

    <div class="container my-5 w-50">
        <h1 class="text-center mb-5">Connexion</h1>
        <form method="post" class="form-example" autocomplete="off">
            <div class="form-example mb-3">
                <label for="name" class="form-label">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>
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
        <p class="text-center"><a href="register.php">Pas de compte ? Inscrivez-vous ici</a></p>
        <?php if (isset($_POST["password"])) {
            $recipesStatement = $conn->prepare("SELECT * FROM `users` WHERE `email` LIKE '{$_POST["email"]}' AND `password` LIKE '{$_POST["password"]}'");
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetch();
            if ($recipes) {
                header("Location: http://localhost/unsecurewebsite/pages/account.php?id={$recipes["id"]}");
                $_SESSION["user_id"] = $recipes["id"];
                die();
            }
        } ?>
    </div>
    <?php include('../footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>