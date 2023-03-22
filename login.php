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
    <?php include('navbar.php') ?>
    <?php include('services/dbconnect.php') ?>

    <div class="container my-5">
        <h1 class="text-center">Connexion</h1>
        <form method="post" class="form-example" autocomplete="off">
            <div class="form-example">
                <label for="name" class="form-label">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-example">
                <label for="password" class="form-label">Mot de passe: </label>
                <input type="text" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-example">
                <input type="submit" value="Se connecter" class="my-3 btn btn-primary">
            </div>
        </form>
        <?php if (isset($_POST["password"])) {
            $recipesStatement = $conn->prepare("SELECT * FROM `users` WHERE `email` ='" . $_POST["email"] . "'");
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetch();
            var_dump($recipes);
        } ?>
    </div>
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>