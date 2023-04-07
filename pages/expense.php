<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note de frais</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include('../navbar.php') ?>
    <?php if (isset($_FILES["fileToUpload"])) {
        echo "Note de frais envoyée";
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    } ?>
    <h1 class="text-center">Note de frais</h1>
    <div class="container  w-50">
        <form class="form-example" method="post" enctype="multipart/form-data">
            <div class="form-example my-5">
                <label for="fileToUpload" class="form-label">Envoyer ma note de frais</label>
                <input type="file" id="fileToUpload" name="fileToUpload" class="form-control">
            </div>

            <!-- <input type="file" webkitdirectory mozdirectory /> -->
            <div class="form-example text-center">
                <button class="btn btn-success mb-5 px-5" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    <?php
    $path    = '../uploads';
    $files = scandir($path);
    ?>
    <table class="table w-50 m-auto mb-5">
        <thead class="table-success text-center">
            <tr>
                <th scope="col ">Fichiers téléchargés</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($files as $file) {
            ?>
                <tr>
                    <td> <?php echo $file ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php include('../footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>