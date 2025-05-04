<?php
$title = "Portfolio - CV";
include 'header.php';
?>

<main class="container mt-5">
    <style>
        /* Appliquer les styles généraux */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        /* Les styles généraux du contenu */
        .container {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        h2,
        h3,
        h4 {
            color: #007bff;
        }

        /* Styles spécifiques aux listes */
        ul {
            padding-left: 1rem;
        }

        /* Appliquer le style général ::before */
        ul li::before {
            content: "✔";
            color: #007bff;
            margin-right: 0.5rem;
        }

        /* Exclure le ::before pour le header */
        header.no-style ul li::before {
            content: none;
            /* Annuler le style pour les li dans le header */
        }
    </style>

    <section>
        <h2 class="text-center mb-4">A propos</h2>

        <!-- Aperçu et téléchargement du CV -->
        <div class="text-center" style="display:flex; justify-content:center;">
            <div class="col-md-6 mb-4">
                <h3>📄 Mon CV</h3>
                <a href="docs/cv.pdf" download>
                    <img src="docs/CV_Tristan_Lafitte.jpg" alt="Aperçu du CV" class="img-fluid border shadow-sm mb-2">
                </a>
                <p><a href="docs/CV_Tristan_Lafitte.pdf" download="Mon_CV.pdf" class="btn btn-primary">📥 Télécharger le CV</a></p>
            </div>
        </div>

        <!-- Aperçu et téléchargement de la feuille de compétences -->
        <div class="text-center" style="display:flex; justify-content:center;">  
            <div class="col-md-6 mb-4">
                <h3>📜 Feuille de Compétences</h3>
                <a href="docs/competences.pdf" download>
                    <img src="docs/TableauSynthèse.jpg" alt="Aperçu de la feuille de compétences" class="img-fluid border shadow-sm mb-2">
                </a>
                <p><a href="docs/TableauSynthèse.pdf" download="Feuille_de_Competences.pdf" class="btn btn-primary">📥 Télécharger la Feuille de Compétences</a></p>
            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>
