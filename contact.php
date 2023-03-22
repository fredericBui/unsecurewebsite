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

    <div class="container my-5">
        <h1 class="text-center">Nous contacter</h1>
        <form action="mail-success.php" method="post" class="form-example" autocomplete="off">
            <div class="form-example">
                <label for="name" class="form-label">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-example">
                <label for="message" class="form-label">Message: </label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <div class="form-example">
                <input type="submit" value="Envoyer" class="btn btn-success my-3">
            </div>
        </form>
        </br>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Liste d'injections possibles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> &lt;a href="https://www.google.com">Don't click /a&gt; </td>
                </tr>
            </tbody>
        </table>
        <a href="https://mailtrap.io/inboxes/1808091/messages" target="_blank">Lien vers la boite mail</a>
    </div>
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>