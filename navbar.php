<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/unsecurewebsite/index.php"><i class="fa-solid fa-unlock"></i> Unsecure website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/unsecurewebsite/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/unsecurewebsite/pages/contact.php">Contact</a>
                </li>
                <?php if (isset($_SESSION["user_id"])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/unsecurewebsite/pages/account.php?id=<?php echo $_SESSION["user_id"] ?>">Mon compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unsecurewebsite/services/clear-session.php">Déconnexion</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/unsecurewebsite/pages/login.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unsecurewebsite/pages/register.php">Inscription</a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>