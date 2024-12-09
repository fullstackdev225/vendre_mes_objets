<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Vendre un objet</title>
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
                    <li class="nav-item"><a href="home.php" class="nav-link text-light">Accueil</a></li>
                    <li class="nav-item"><a href="postArticle.php" class="nav-link text-light current">Vendre un objet</a></li>
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
    </header><br><br>

    <main>
        <section class="section-form">
            <div class="container">
                <form method="POST" class="form">
                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-title" class="form-label">Titre</label>
                            <input type="text" name="article-title" id="article-title" placeholder="Donnez un nom à votre article" required class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-price" class="form-label">Prix(FCFA)</label>
                            <input type="number" name="article-price" id="article-price" placeholder="0" required class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-type" class="form-label">Catégorie</label>
                            <select name="article-type" id="article-type" required class="form-control">
                                <option value="Vêtements et accéssoires">Vêtements et accéssoires</option>
                                <option value="Outils">Outils</option>
                                <option value="Electronique">Electronique</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-state" class="form-label">Etat</label>
                            <select name="article-state" id="article-state" required class="form-select">
                                <option value="Nouveau">Nouveau</option>
                                <option value="Comme neuf">Comme neuf</option>
                                <option value="Bon état">Bon état</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-description" class="form-label">Description</label>
                            <textarea name="article-description" id="article-description" minlength="10" required placeholder="Détaillez votre article" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-availability" class="form-label">Disponiblité</label>
                            <select name="article-availability" id="article-availability" required class="form-control">
                                <option value="Unique">Unique</option>
                                <option value="En stock">En stock</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <label for="article-image" class="form-label">URL de l'image</label>
                            <input type="url" name="article-image" id="article-image" required placeholder="http://..." class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-7">
                            <button type="submit" name="btn-add" id="btn-add" class="btn btn-primary">Publier</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main><br><br>

    <?php require_once('../layouts/footer.php'); ?>

    <script src="../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>