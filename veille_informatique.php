<?php
$title = "Portfolio - Veille Informatique";
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
        <h2 class="text-center mb-4">Veille Informatique sur l'Informatique Quantique</h2>

        <!-- Exemple d'ordinateur quantique -->
        <article class="mb-5">
            <h3 class="text-center">Exemple d'ordinateur quantique</h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <img src="image/th.jpg" class="img-thumbnail" width="20%" alt="Ordinateur quantique 1">
                <img src="image/th (1).jpg" class="img-thumbnail" width="20%" alt="Ordinateur quantique 2">
                <img src="image/th (2).jpg" class="img-thumbnail" width="20%" alt="Ordinateur quantique 3">
                <img src="image/th (3).jpg" class="img-thumbnail" width="20%" alt="Ordinateur quantique 4">
            </div>
        </article>

        <hr>

        <!-- Pasqal : Une Start-up Française Innovante en Informatique Quantique -->
        <article class="mb-5">
            <h3>Pasqal : Une Start-up Française Innovante en Informatique Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://fr.wikipedia.org/wiki/Pasqal">
                        <img src="image/pasqal.jpg" class="img-fluid rounded" alt="Pasqal - Informatique Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Pasqal est une jeune pousse française, fondée en mars 2019, spécialisée dans l'informatique quantique. Elle travaille sur la mise au point d'un ordinateur quantique à atomes neutres, une technologie innovante qui pourrait révolutionner le secteur...</p>
                    <a href="https://fr.wikipedia.org/wiki/Pasqal" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Les Progrès de l'Informatique Quantique Française au Québec -->
        <article class="mb-5">
            <h3>Les Progrès de l'Informatique Quantique Française au Québec</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.lemonde.fr/en/economy/article/2024/09/25/quebec-sees-french-quantum-computing-make-headway-against-american-giants_6727253_19.html">
                        <img src="image/Sherbrook.jpg" class="img-fluid rounded" alt="Informatique Quantique au Québec">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Sherbrooke, au Québec, est devenue un centre mondial de la technologie quantique, grâce à des initiatives comme la Zone d’innovation quantique. Cette région attire des start-ups françaises telles que Quandela et Pasqal...</p>
                    <a href="https://www.lemonde.fr/en/economy/article/2024/09/25/quebec-sees-french-quantum-computing-make-headway-against-american-giants_6727253_19.html" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Willow : La Nouvelle Puce Quantique de Google -->
        <article class="mb-5">
            <h3>Willow : La Nouvelle Puce Quantique de Google</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://elpais.com/tecnologia/2024-12-09/google-presenta-willow-un-chip-cuantico-que-resuelve-en-5-minutos-una-tarea-que-un-superordenador-tardaria-cuatrillones-de-anos.html">
                        <img src="image/Willow.jpg" class="img-fluid rounded" alt="Willow - Puce Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Google a dévoilé Willow, une puce quantique capable de résoudre en cinq minutes des tâches qui prendraient des milliards d'années à un superordinateur classique...</p>
                    <a href="https://elpais.com/tecnologia/2024-12-09/google-presenta-willow-un-chip-cuantico-que-resuelve-en-5-minutos-una-tarea-que-un-superordenador-tardaria-cuatrillones-de-anos.html" class="btn btn-primary">Découvrir Willow</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 5 -->
        <article class="mb-5">
            <h3>Les Avancées Récentes de l'Informatique Quantique : Une Révolution en Cours</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.smithsonianmag.com/innovation/quantum-computing-breakthrough-180968099/">
                        <img src="image/quantum_breakthrough.jpg" class="img-fluid rounded" alt="Avancées Récentes">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Le monde de l'informatique quantique connaît des progrès rapides. Découvrez les dernières innovations qui bouleversent l'industrie...</p>
                    <a href="https://www.smithsonianmag.com/innovation/quantum-computing-breakthrough-180968099/" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 6 -->
        <article class="mb-5">
            <h3>Le Rôle des Algorithmes Quantique dans l'Avenir des Technologies</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.forbes.com/sites/bernardmarr/2023/09/14/how-quantum-computing-will-change-the-future-of-artificial-intelligence/">
                        <img src="image/quantum_algorithms.jpg" class="img-fluid rounded" alt="Algorithmes Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Les algorithmes quantiques jouent un rôle clé dans l'intelligence artificielle et l'avenir de l'informatique. Découvrez comment ils peuvent transformer des secteurs entiers...</p>
                    <a href="https://www.forbes.com/sites/bernardmarr/2023/09/14/how-quantum-computing-will-change-the-future-of-artificial-intelligence/" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 7 -->
        <article class="mb-5">
            <h3>Informatique Quantique et Sécurité : Un Nouveau Paradigme</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.wired.com/story/quantum-computing-encryption/">
                        <img src="image/quantum_security.jpg" class="img-fluid rounded" alt="Informatique Quantique et Sécurité">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>L'informatique quantique pourrait bouleverser la sécurité des systèmes informatiques actuels. Découvrez les implications pour la cryptographie...</p>
                    <a href="https://www.wired.com/story/quantum-computing-encryption/" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 8 -->
        <article class="mb-5">
            <h3>Les Progrès en Matière de Matériel Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.nature.com/articles/d41586-019-00294-3">
                        <img src="image/quantum_hardware.jpg" class="img-fluid rounded" alt="Matériel Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Les chercheurs améliorent constamment les dispositifs matériels utilisés dans l'informatique quantique. Ces progrès ouvrent la voie à des applications révolutionnaires...</p>
                    <a href="https://www.nature.com/articles/d41586-019-00294-3" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 9 -->
        <article class="mb-5">
            <h3>L'Informatique Quantique dans la Médecine : Une Nouvelle Frontière</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.medicalnewstoday.com/articles/quantum-computing-in-medicine">
                        <img src="image/quantum_medicine.jpg" class="img-fluid rounded" alt="Informatique Quantique en Médecine">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Découvrez comment l'informatique quantique pourrait transformer la médecine en améliorant la modélisation des protéines et la découverte de médicaments...</p>
                    <a href="https://www.medicalnewstoday.com/articles/quantum-computing-in-medicine" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 10 -->
        <article class="mb-5">
            <h3>Les Défis Techniques de l'Informatique Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.scientificamerican.com/article/the-challenges-of-quantum-computing/">
                        <img src="image/quantum_challenges.jpg" class="img-fluid rounded" alt="Défis Techniques de l'Informatique Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Bien que l'informatique quantique fasse des progrès, elle fait face à plusieurs défis techniques majeurs, notamment le contrôle des qubits et la correction d'erreurs...</p>
                    <a href="https://www.scientificamerican.com/article/the-challenges-of-quantum-computing/" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 11 -->
        <article class="mb-5">
            <h3>Informatique Quantique et Machine Learning : Une Synergie Prometteuse</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.techradar.com/news/quantum-computing-and-machine-learning">
                        <img src="image/quantum_machine_learning.jpg" class="img-fluid rounded" alt="Informatique Quantique et Machine Learning">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>La combinaison de l'informatique quantique et du machine learning pourrait offrir des solutions d'une puissance sans précédent dans le traitement des données...</p>
                    <a href="https://www.techradar.com/news/quantum-computing-and-machine-learning" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 12 -->
        <article class="mb-5">
            <h3>Les Applications Commerciales de l'Informatique Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.bbc.com/news/technology-59128568">
                        <img src="image/quantum_commercial_applications.jpg" class="img-fluid rounded" alt="Applications Commerciales">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>L'informatique quantique commence à trouver des applications dans le secteur privé, de la finance à la logistique en passant par les nouvelles technologies...</p>
                    <a href="https://www.bbc.com/news/technology-59128568" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 13 -->
        <article class="mb-5">
            <h3>Les Startups qui Façonnent l'Avenir de l'Informatique Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.technologyreview.com/2023/05/30/1120137/quantum-computing-startups/">
                        <img src="image/quantum_startups.jpg" class="img-fluid rounded" alt="Startups Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Un nombre croissant de startups se lancent dans l'informatique quantique, cherchant à révolutionner des secteurs allant de la cryptographie à la science des matériaux...</p>
                    <a href="https://www.technologyreview.com/2023/05/30/1120137/quantum-computing-startups/" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 14 -->
        <article class="mb-5">
            <h3>Les Perspectives de l'Informatique Quantique dans le Secteur Énergétique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.energycentral.com/c/um/quantum-computing-and-energy">
                        <img src="image/quantum_energy.jpg" class="img-fluid rounded" alt="Informatique Quantique dans l'Énergie">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>Les technologies quantiques pourraient jouer un rôle clé dans l'optimisation des systèmes énergétiques, du stockage à la production d'énergie renouvelable...</p>
                    <a href="https://www.energycentral.com/c/um/quantum-computing-and-energy" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>

        <hr>

        <!-- Article 15 -->
        <article class="mb-5">
            <h3>La Compétition Internationale en Informatique Quantique</h3>
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <a href="https://www.npr.org/2024/03/28/123456789">
                        <img src="image/quantum_competition.jpg" class="img-fluid rounded" alt="Compétition Internationale en Informatique Quantique">
                    </a>
                </div>
                <div class="col-md-8">
                    <p>La course à l'informatique quantique se joue à l'échelle mondiale. Découvrez les efforts des principaux pays et entreprises pour dominer cette technologie révolutionnaire...</p>
                    <a href="https://www.npr.org/2024/03/28/123456789" class="btn btn-primary">Lire l'article</a>
                </div>
            </div>
        </article>

    </section>
</main>

<?php include 'footer.php'; ?>
