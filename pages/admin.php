<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include('../services/dbconnect.php') ?>
    <?php
    $recipesStatement = $conn->prepare('SELECT * FROM `users`');
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    ?>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Utilisateurs</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe) { ?>
                <tr>
                    <td> <?php echo $recipe["id"], $recipe["nom"], $recipe["prenom"], $recipe["email"], $recipe["adresse"], $recipe["password"] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>