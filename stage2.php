<?php
$title = "Portfolio - Stages";
include 'header.php';
?>
<main class="container">
  <!-- En-tête -->
  <div class="text-center mb-5">
    <h2>📌 Mes Stages</h2>
    <p class="lead">Voici un aperçu détaillé de mon stage réalisé chez Gaches Chimie, où j’ai pu mettre en pratique mes compétences en informatique et contribuer à divers projets concrets.</p>
  </div>
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
h2, h3, h4 {
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
    content: none; /* Annuler le style pour les li dans le header */
}

</style>

  <!-- Informations et Objectifs -->
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h3 class="section-title">🏢 Informations Générales</h3>
          <ul class="list-unstyled">
            <li><strong>Entreprise :</strong> Gaches Chimie</li>
            <li><strong>Période :</strong> 6 janvier 2025 – 14 février 2025</li>
            <li><strong>Service :</strong> Informatique</li>
            <li><strong>Encadrant :</strong> Olivier Soulier</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h3 class="section-title">🎯 Objectifs du Stage</h3>
          <p>Durant ces six semaines, j’ai travaillé sur plusieurs missions variées, touchant à la cybersécurité, à la gestion des utilisateurs et aux bases de données :</p>
          <ul class="list-unstyled">
            <li>Mise à jour et sécurisation d’un questionnaire de cybersécurité</li>
            <li>Optimisation et évolution des logiciels utilisés par l’entreprise</li>
            <li>Développement d’une page web de statistiques pour une base Oracle</li>
            <li>Création d’un site web facilitant la gestion des utilisateurs d’un ERP</li>
            <li>Rédaction de documentations techniques et guides utilisateurs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Missions Réalisées (Accordion) -->
  <div class="mt-5">
    <h3 class="section-title">🛠 Missions Réalisées</h3>
    <div class="accordion" id="accordionMissions">
      <!-- Mission 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1️⃣ Mise à jour du questionnaire de cybersécurité
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionMissions">
          <div class="accordion-body">
            <p>Modernisation d'un questionnaire vieillissant :</p>
            <ul>
              <li>Refonte du questionnaire avec ajout de nouvelles questions et améliorations UX/UI</li>
              <li>Correction des failles de sécurité dans le système de gestion des réponses</li>
              <li>Mise en place d’une base de données améliorée pour stocker les résultats</li>
              <li>Développement d’un tableau de bord pour le suivi des résultats en temps réel</li>
              <li>Intégration d’un système de statistiques avec graphiques dynamiques (Chart.js)</li>
              <li>Rédaction d’un guide pour les utilisateurs et administrateurs</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Mission 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            2️⃣ Amélioration des logiciels internes
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMissions">
          <div class="accordion-body">
            <p>Optimisation des processus internes :</p>
            <ul>
              <li>Automatisation de l’envoi d’e-mails via Google Forms et Sheets avec Google Apps Script</li>
              <li>Refonte et maintenance de scripts existants</li>
              <li>Amélioration de la sécurité et des performances des outils internes</li>
              <li>Création d’une interface d’administration simplifiée pour la gestion des scripts</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Mission 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            3️⃣ Développement d’une page web pour les statistiques Oracle
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMissions">
          <div class="accordion-body">
            <p>Création d'une interface dynamique pour analyser les données d'une base Oracle :</p>
            <ul>
              <li>Création de graphiques interactifs (BarChart, PieChart, LineChart)</li>
              <li>Utilisation de PHP, SQL et JavaScript pour récupérer et traiter les données</li>
              <li>Ajout d’un filtrage dynamique avec AJAX pour améliorer l’expérience utilisateur</li>
              <li>Mise en place d’un système d’exportation des données en CSV</li>
              <li>Optimisation des requêtes SQL pour améliorer les temps de réponse</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Mission 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            4️⃣ Gestion des utilisateurs via un site web
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionMissions">
          <div class="accordion-body">
            <p>Développement d’un outil de gestion pour l’ERP IFS :</p>
            <ul>
              <li>Conception d’une page listant les comptes actifs avec options de tri et recherche</li>
              <li>Affichage des rôles, statuts et historiques des connexions</li>
              <li>Exportation des données en CSV pour un meilleur suivi</li>
              <li>Intégration d’un PieChart pour visualiser l’utilisation des licences ERP</li>
              <li>Mise en place d’une gestion des droits d’accès selon les profils utilisateurs</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Documentation et Perspectives -->
  <div class="row mt-5">
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h3 class="section-title">📚 Documentation et Guides</h3>
          <ul class="list-unstyled">
            <li>Guide utilisateur pour le questionnaire de cybersécurité</li>
            <li>Manuel d’utilisation des outils statistiques Oracle</li>
            <li>Documentation technique pour la gestion des utilisateurs de l’ERP</li>
            <li>Fiches de résolution des problèmes courants</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h3 class="section-title">🚀 Perspectives et Améliorations</h3>
          <ul class="list-unstyled">
            <li>Améliorer l’ergonomie et l’accessibilité des interfaces</li>
            <li>Mettre en place une authentification renforcée sur les outils sensibles</li>
            <li>Créer un système de sauvegarde automatique des bases de données</li>
            <li>Intégrer un chatbot pour guider les utilisateurs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Bilan et Conclusion -->
  <div class="row mt-5">
    <div class="col-12">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h3 class="section-title">✅ Bilan et Conclusion</h3>
          <ul class="list-unstyled">
            <li>Développement web (PHP, JavaScript, AJAX, CSS)</li>
            <li>Gestion et analyse de bases de données (SQL, Oracle)</li>
            <li>Cybersécurité et protection des données</li>
            <li>Automatisation des processus (Google Apps Script)</li>
            <li>Communication et rédaction technique</li>
          </ul>
          <p>Ce stage a enrichi mes compétences et m'a permis de comprendre les enjeux informatiques d'une entreprise.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Remerciements -->
  <div class="row mt-5">
    <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="section-title">🙏 Remerciements</h3>
          <p>Je remercie chaleureusement l’équipe informatique de Gaches Chimie pour leur accueil, leur accompagnement et leur partage d’expérience durant ce stage.</p>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Bootstrap 5 JS -->
<?php include 'footer.php'; ?>