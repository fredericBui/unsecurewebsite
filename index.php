<?php session_start() ?>
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
        <div class="alert alert-warning" role="alert">
            Tentez de compromettre la confidentialité, l'intégrité et la disponibilité de ce site !
        </div>
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
        <ul class="list-group my-5">
            <li class="list-group-item">30-01-23 : Super photo !</li>
            <li class="list-group-item">13-02-23 : Continu comme ça &#128515; !</li>
            <li class="list-group-item">23-03-23 : ...</li>
            <?php if (isset($_POST["message"])) { ?>
                <li class="list-group-item">
                    <p> <?php echo (date('d-m-y') . " :"); ?></p>
                    <?php echo ($_POST["message"]); ?>
                    <!-- <?php echo (htmlspecialchars($_POST["message"])); ?> -->
                </li>
            <?php } ?>
        </ul>
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
                <tr>
                    <td> &lt;img src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=415&q=80" alt="" srcset=""&gt; </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>