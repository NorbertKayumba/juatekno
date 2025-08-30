
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mes Services - JuaTekno</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .service-card {
      transition: transform 0.3s ease;
    }
    .service-card:hover {
      transform: scale(1.03);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php">JuaTekno</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-5 text-center">
    <div class="container">
      <h1 class="display-5">Mes Services</h1>
      <p class="lead">Solutions digitales adaptées aux petites entreprises</p>
    </div>
  </header>

  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card service-card h-100">
            <div class="card-body">
              <h5 class="card-title">Sites vitrines</h5>
              <p class="card-text">Création de sites web modernes pour présenter votre activité, produits ou services.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card service-card h-100">
            <div class="card-body">
              <h5 class="card-title">Applications sur mesure</h5>
              <p class="card-text">Développement d'applications web ou bureautiques pour gérer vos opérations.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card service-card h-100">
            <div class="card-body"><h5 class="card-title">Maintenance & assistance</h5>
              <p class="card-text">Suivi technique, mises à jour, corrections de bugs et support utilisateur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-4 bg-dark text-white text-center">
    <div class="container">
      <small>&copy; 2025 JuaTekno. Tous droits réservés.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>