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

    <?php
    $recipesStatement = $conn->prepare('SELECT * FROM `users` WHERE `id` =' . $_GET["id"]);
    //$recipesStatement = $conn->prepare('SELECT * FROM `users` WHERE `id` = :id');
    //$recipesStatement->bindValue('id', $_GET["id"], PDO::PARAM_INT);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetch();
    ?>
    <div class="container my-5">
        <h1>My account</h1>
        <ul>
            <li>Nom : <?php echo $recipes["nom"] ?></li>
            <li>Prénom : <?php echo $recipes["prenom"] ?></li>
            <li>Email : <?php echo $recipes["email"] ?></li>
            <li>Adresse postale : <?php echo $recipes["adresse"] ?></li>
            <li>Mot de passe : <?php echo $recipes["password"] ?></li>
        </ul>
        <button class="btn btn-primary">Editer mes informations</button>
        <button class="btn btn-danger">Supprimer mon compte</button>
        <table class="table my-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Liste d'injections SQL possibles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> account.php?id=1+union+select+1,2,3,4,5,6 </td>
                </tr>
                <tr>
                    <td> account.php?id=%27%27%20%20OR%201=1 </td>
                </tr>
            </tbody>
        </table>
        <h2>Mes articles</h2>
        <?php
        $recipes = $recipesStatement->fetchAll();
        var_dump($recipes)
        ?>
    </div>
    <?php include('../footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>