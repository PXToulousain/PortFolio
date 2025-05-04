<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <style>
        /* Ajouter un style pour placer l'image à droite */
        .navbar-brand {
            margin-left: 10px;
        }

        .navbar img {
            height: 50px; /* Ajuster la hauteur de l'image si nécessaire */
            margin-left: auto;
        }

        .navbar-toggler {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header class="no-style">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">LAFITTE Tristan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Stages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="stage1.php">Stage 1</a></li>
                            <li><a class="dropdown-item" href="stage2.php">Stage 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="veille_informatique.php">Veille Informatique</a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.php" class="nav-link">Mes projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cv.php">A propos</a>
                    </li>
                </ul>
            </div>
            <!-- Ajouter l'image à droite -->
            <img src="docs\BvDSS6EhQHmwDMK0E4UXVQ.webp" alt="Mon image" class="img-fluid" style="border-radius : 50%; margin-right: 10px;">
        </nav>
    </header>
