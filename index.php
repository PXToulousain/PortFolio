<?php
$title = "Accueil - Portfolio BTS SIO2 - Epreuve E4";
include 'header.php';
?>
<main class="container">
    <style>
        /* Global Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        /* Titles */
        h2,
        h3,
        h4 {
            /* color: #007bff; */
            font-weight: 600;
        }

        /* Cards */
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.4rem;
            color: #007bff;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* Style des listes */
        ul {
            list-style-type: none;
            padding-left: 1rem;
        }

        ul li {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 0.8rem;
        }

        ul li::before {
            content: "✔";
            color: #007bff;
            margin-right: 0.5rem;
        }

        /* Accordion */
        .accordion-button {
            background-color: #f8f9fa;
            color: #007bff;
            border: 1px solid #ddd;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .accordion-button:not(.collapsed) {
            background-color: #007bff;
            color: white;
        }

        .accordion-button:hover {
            background-color: #e2e6ea;
        }

        .accordion-body {
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
            padding: 1.2rem;
            border-radius: 8px;
        }

        /* Modifications pour les sections avec des cartes */
        .card-body h3 {
            font-size: 1.25rem;
            color: #007bff;
        }

        /* Listes dans les cartes */
        .card-body ul li {
            font-size: 1rem;
            color: #555;
        }

        header.no-style ul li::before {
            content: none;
            /* Annuler le style pour les li dans le header */
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .section-title {
                font-size: 1.3rem;
            }

            h2,
            h3,
            h4 {
                font-size: 1.2rem;
            }
        }
    </style>
    <section style="text-align: center;">
        <h1>Bienvenue sur mon Portfolio</h1>
        <img src="docs\TristanPhoto.jpeg" alt="Photo de profil" width="150" style="border-radius: 50%; margin-top: 20px;">
        <h2 style="margin-top: 15px;">Je m'appelle Tristan LAFITTE</h2>
        <p>Je suis étudiant en BTS SIO2 option SLAM, et ce portfolio a pour objectif de présenter mon parcours et mes compétences dans le domaine des services informatiques. Il est conçu pour l'épreuve E4, dans laquelle je démontrerai mes compétences en gestion des services informatiques, analyse de projet, et impact environnemental des technologies.</p>

        <h3>À propos de moi</h3>
        <p>Passionné(e) par l'informatique, j'ai acquis au cours de ma formation des compétences solides en gestion de services informatiques, support technique, ainsi qu'en gestion de projets. Je suis particulièrement intéressé(e) par la mise en place de services durables, en prenant en compte les enjeux environnementaux et la gestion du patrimoine informatique.</p>

        <h3>Mes compétences</h3>
        <p>Je maîtrise plusieurs compétences techniques, allant de la gestion de l'infrastructure informatique, à la résolution d'incidents et de demandes d'assistance. Voici quelques-unes de mes compétences clés :</p>
        <ul style="list-style-type: none; padding: 0;">
            <li>🔹 Gestion du patrimoine informatique</li>
            <li>🔹 Traitement des demandes de services réseau et applicatifs</li>
            <li>🔹 Développement et mise à jour de services en ligne</li>
            <li>🔹 Participation à l'évolution d'un site web</li>
            <li>🔹 Analyse et gestion de projets informatiques</li>
            <li>🔹 Veille technologique sur l'impact environnemental des technologies</li>
        </ul>

        <h3>Mes projets et réalisations</h3>
        <p>Voici un aperçu des projets sur lesquels j'ai travaillé au cours de ma formation, notamment en lien avec les services informatiques et leur impact environnemental :</p>
        <ul style="list-style-type: none; padding: 0;">
            <li>🔹 <strong>Gestion du patrimoine informatique</strong> : Mise en place d'une méthode pour recenser et identifier les ressources numériques d'une entreprise.</li>
            <li>🔹 <strong>Veille sur l'impact environnemental des technologies</strong> : Recherche sur l'impact écologique des technologies informatiques et mise en place d'initiatives pour réduire l'empreinte carbone.</li>
            <li>🔹 <strong>Développement de services en ligne</strong> : Développement d'une plateforme pour centraliser les services informatiques internes et améliorer la gestion des demandes d'assistance.</li>
        </ul>

        <h3>Pourquoi ce portfolio ?</h3>
        <p>Ce portfolio permet de présenter de manière structurée mes projets et mes compétences acquises lors de ma formation. Il est conçu pour l’épreuve E4 et il montre comment je gère, déploie et améliore des services informatiques tout en tenant compte des enjeux environnementaux et juridiques associés à ces services.</p>

        <a href="portfolio.php" style="display: inline-block; padding: 12px 25px; background-color: #007bff; color: white; text-decoration: none; border-radius: 8px; margin-top: 20px; font-size: 18px;">Découvrir mes projets et compétences</a>
    </section>

    <section style="margin-top: 50px; text-align: center;">
        <h3>Mes compétences détaillées :</h3>
        <ul style="list-style-type: none; padding: 0;">
            <li>🔹 Gérer le patrimoine informatique : Recenser, identifier et maintenir les ressources numériques.</li>
            <li>🔹 Support technique : Répondre aux incidents et aux demandes d'assistance pour garantir la continuité des services.</li>
            <li>🔹 Gestion des services : Déployer, tester et maintenir des services informatiques pour les utilisateurs.</li>
            <li>🔹 Gestion de projets informatiques : Planifier, suivre et analyser les projets en cours pour répondre aux besoins de l'organisation.</li>
            <li>🔹 Veille environnementale : Analyser l'impact des technologies sur l'environnement et proposer des solutions pour réduire cet impact.</li>
        </ul>
    </section>

    <section style="margin-top: 50px; text-align: center;">
        <h3>Langages actuellement connues :</h3>
        <ul style="list-style-type: none; padding: 0;">
            <li>🔹 <strong> Web : </strong> Html, Css, JavaScript </li>
            <li>🔹 <strong> Back-end : </strong> PHP, Java</li>
            <li>🔹 <strong> Systèmes : </strong> Python, C++, Android, Linux, Windows</li>
            <li>🔹 <strong> Base de données : </strong> SQL, MariaDB, MongoDB, Tablespaces ORACLE, NoSQL</li>
        </ul>
    </section>
</main>

<?php include 'footer.php'; ?>