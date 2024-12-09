<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Accueil</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark">
            <div class="container">
                <a href="home.php" class="navbar-brand">
                    <img src="../icons/vendre-mes-objets.png" width="120" alt="app's icon">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item"><a href="home.php" class="nav-link text-light current">Accueil</a></li>
                    <li class="nav-item"><a href="postArticle.php" class="nav-link text-light">Vendre un objet</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../icons/user-session.png" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="profil.php" class="dropdown-item">Profile</a></li>
                            <li><a href="articleList.php" class="dropdown-item">Mes articles</a></li>
                            <li><a href="logOut.php" class="dropdown-item">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="img-background">
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/img-background.jpg" height="500" alt="" class="w-100 d-block">
                        <div class="carousel-caption text-primary fw-bold">Le meilleur endroit pour vendre vos objets</div>
                    </div>
                </div>
            </div>
        </section><br><br>

        <section class="lists">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 filter border-white bg-white shadow p-3">
                        <h3 class="text-center">Filtrer</h3><br><br>

                        <button class="btn btn-primary">Prix croissant</button><br><br>
                        <button class="btn btn-primary">Prix décroissant</button>
                    </div>

                    <div class="col-md-9 articles-lists"></div>
                </div>
            </div>
        </section>
    </main><br><br>

    <?php require_once('../layouts/footer.php'); ?>

    <script src="../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>