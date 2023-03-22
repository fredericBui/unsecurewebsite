<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unsecure website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container my-5">
        <h1>Bienvenue sur le site le moins sécurisé</h1>
        <article>
            <div class="card" style="width: 18rem;">
                <img src="https://images.pexels.com/photos/3937887/pexels-photo-3937887.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </article>
        <form method="post" class="form-example" autocomplete="off">
            <div class="form-example">
                <label for="message">Commentaires: </label></br>
                <textarea name="message" id="message" required></textarea>
            </div>
            <div class="form-example">
                <input type="submit" value="Poster" class="btn btn-primary">
            </div>
        </form>
        <?php if (isset($_POST["message"])) { ?>
            <div class="my-3 p-3 card">
                <?php echo ($_POST["message"]); ?>
            </div>
        <?php } ?>
        </br>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Liste d'injections possibles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> &lt;script&gt; alert("JS injection"); &lt;/script&gt; </td>
                </tr>
                <tr>
                    <td> &lt;script&gt; document.getElementsByTagName("body")[0].innerHTML = ""; &lt;/script&gt; </td>
                </tr>
                <tr>
                    <td>
                        &lt;script&gt;window.location.href = "http://www.google.com";&lt;/script&gt;
                    </td>
                </tr>
                <tr>
                    <td>
                        &lt;script&gt;window.location.href = "http://localhost/unsecurewebsite/index.php";&lt;/script&gt;
                    </td>
                </tr>
                <tr>
                    <td>
                        &lt;script&gt;</br>
                        let body = document.getElementsByTagName("body")[0];</br>
                        let p = document.createElement("p");</br>
                        p.innerHTML = "Hello world"</br>
                        body.append(p);</br>
                        &lt;/script&gt;
                    </td>
                </tr>
                <tr>
                    <td> &lt;h1&gt; HTML Injection &lt;/h1&gt; </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>