<?php
$title = "Portfolio - Projets";
include 'header.php';
?>

<main class="container mt-5">
    <section>
        <h2 class="text-center mb-4">Mes Projets</h2>
        <div class="row">

            <!-- Projet 1 : Cas Pompier -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Cas Pompier</h5>
                        <p class="card-text">
                            Développement d’un site web en <strong>PHP / HTML / CSS / JavaScript</strong> dans un contexte pédagogique.
                            <br><br>
                            <strong>Objectif :</strong> créer une interface permettant de gérer des types d'engins (affichage, ajout, modification, suppression) avec ou sans image.
                            <br><br>
                            <strong>Fonctionnalités développées :</strong><br>
                            - Affichage des types d’engins sous forme de liste.<br>
                            - Ajout de nouveaux types avec gestion d’image (stockage du chemin, pas du fichier en base).<br>
                            - Formulaire dynamique pour la création et l’édition.<br>
                            - Boutons de suppression et de modification avec pré-remplissage des champs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 2 : Projet CMS Wordpress : EcoMobilis -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Projet CMS Wordpress : EcoMobilis</h5>
                        <p class="card-text">
                            Projet réalisé en groupe durant la première année de BTS, utilisant <strong>WordPress</strong> comme CMS.
                            <br><br>
                            <strong>Objectif :</strong> Développer un site web facilitant l’accès aux services de vélos partagés dans différentes villes, dans une démarche écologique.
                            <br><br>
                            <strong>Fonctionnalités mises en œuvre :</strong><br>
                            - Recherche de stations de vélos par ville.<br>
                            - Présentation de l’initiative EcoMobilis et de ses objectifs durables.<br>
                            - Utilisation de thèmes personnalisés et de plugins adaptés.<br>
                            - Répartition des tâches en groupe : design, contenu, structure du site, etc.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 3 : Portfolio -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">
                            Projet personnel réalisé dans le but de candidater à une école spécialisée à <strong>Montpellier</strong>.
                            <br><br>
                            <strong>Objectif :</strong> Créer un site web de présentation personnelle mettant en valeur mes projets, notamment dans le domaine du développement de jeux vidéo.
                            <br><br>
                            <strong>Contenu du site :</strong><br>
                            - Présentation de mon parcours et de mes compétences techniques.<br>
                            - Mise en avant de projets liés à la programmation de jeux (exemples, captures, démos).<br>
                            - Design clair et professionnel adapté à une candidature scolaire.<br>
                            - Site développé en <strong>HTML / CSS / JavaScript / PHP</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 4 : Veille technologique -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Veille technologique : Informatique Quantique</h5>
                        <p class="card-text">
                            Réalisation d’une veille technologique sur le thème de <strong>l’informatique quantique</strong>, dans le cadre du BTS SIO.
                            <br><br>
                            <strong>Objectif :</strong> Suivre l’évolution d’un domaine émergent à fort impact futur dans les technologies numériques.
                            <br><br>
                            <strong>Méthodologie :</strong><br>
                            - Utilisation d’outils comme <strong>Pocket</strong> et <strong>Feedly</strong> (via Feedex) pour centraliser et organiser les sources d'information.<br>
                            - Sélection d’articles récents, rapports de recherche et actualités technologiques.<br>
                            - Synthèse des avancées (qubits, ordinateurs quantiques, enjeux de cybersécurité, etc.).<br>
                            - Présentation claire des apports et limites de cette technologie.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 5 : Cas Photoforyou -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Cas Photoforyou</h5>
                        <p class="card-text">
                            Projet de fin d’année développé en <strong>duo</strong>, simulant un site de vente de photographies numériques.
                            <br><br>
                            <strong>Objectif :</strong> Concevoir une application web (non publique) pour la gestion des utilisateurs, des photos et des ventes, dans un cadre pédagogique.
                            <br><br>
                            <strong>Stack technique :</strong> <strong>Laravel (PHP)</strong>, base de données SQL, Blade pour le front-end.
                            <br><br>
                            <strong>Fonctionnalités principales :</strong><br>
                            - Authentification des utilisateurs et rôles (admin/client).<br>
                            - Ajout, modification et suppression de photos avec métadonnées.<br>
                            - Interface d’administration pour la gestion du catalogue.<br>
                            - Utilisation du framework Laravel pour structurer le projet (MVC, routage, migrations, etc.).
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 6 : Pokestore -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pokestore</h5>
                        <p class="card-text">
                            Projet de fin d’année réalisé en <strong>trio</strong>, développé en <strong>Java avec JavaFX</strong>, simulant une boutique spécialisée dans la vente de cartes Pokémon et de produits dérivés.
                            <br><br>
                            <strong>Objectif :</strong> Concevoir une application locale combinant boutique et outil pédagogique pour une entreprise fictive.
                            <br><br>
                            <strong>Fonctionnalités principales :</strong><br>
                            - Gestion du catalogue de produits (cartes, goodies).<br>
                            - Interface utilisateur intuitive pour la consultation et l’achat.<br>
                            - Module d’administration (gestion des stocks, des utilisateurs, des ventes).<br>
                            - Système de <strong>questionnaires internes</strong> à destination des employés pour évaluer leurs connaissances produits.<br>
                            - Application développée avec JavaFX pour une expérience graphique fluide et interactive.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 7 : Jeu multijoueur en Python -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Jeu multijoueur en Python</h5>
                        <p class="card-text">
                            Projet réalisé en <strong>stage de première année</strong>, consistant en un jeu multijoueur simple développé en <strong>Python</strong>.
                            <br><br>
                            <strong>Objectif :</strong> Créer une base de jeu en réseau avec peu de fonctionnalités pour expérimenter la logique client/serveur.
                            <br><br>
                            <strong>Fonctionnalités développées :</strong><br>
                            - Connexion de plusieurs joueurs sur un réseau local.<br>
                            - Déplacement de personnages sur un plateau basique.<br>
                            - Gestion minimale des collisions ou interactions.<br>
                            <br>
                            Ce projet met en évidence mes premiers pas en développement de jeux, en contraste avec les projets plus avancés comme <em>Pokestore</em>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Projet 8 : Jeu RPG avec JavaFX -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Jeu RPG avec JavaFX</h5>
                        <p class="card-text">
                            Projet personnel développé en <strong>Java avec JavaFX</strong>, servant à mettre en pratique des compétences avancées en conception d’interface graphique et en logique de jeu.
                            <br><br>
                            <strong>Objectif :</strong> Créer un jeu en mode RPG avec une progression dynamique et une interface soignée.
                            <br><br>
                            <strong>Fonctionnalités principales :</strong><br>
                            - Système de vagues d’ennemis à affronter avec montée progressive en difficulté.<br>
                            - Gain d’<strong>XP</strong> à chaque ennemi vaincu, avec possibilité d’améliorations.<br>
                            - <strong>Boutique intégrée</strong> pour acheter des objets ou compétences.<br>
                            - Apparition automatique d’un <strong>boss</strong> après un certain nombre d’ennemis éliminés.<br>
                            - Utilisation de JavaFX pour les animations, la gestion des états de jeu, et une interface fluide.
                            <br><br>
                            Ce projet illustre clairement ma montée en compétence depuis mes premières réalisations en Python.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>

<?php include 'footer.php'; ?>