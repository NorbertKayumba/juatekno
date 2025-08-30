
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <header>
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
       
      </ul>
    </nav>
    <h1>JuaTekno</h1>
    <p>Des solutions digitales pour vos besoins locaux</p>
    <a href="#contact" class="btn btn-primary">Contactez-nous</a>
  </header>

  <section id="apropos">
    <h2>À propos</h2>
    <p><strong>Qui suis-je</strong></p>
    <p>Développeur spécialisé en Python, HTML/CSS, MySQL, etc.</p>
    <p>Mon objectif : aider les petites entreprises grâce à la tech.</p>
  </section>

  <section id="services">
    <h2>Services proposés</h2>
    <ul>
      <li>Conception d'applications simples (gestion de stock, facturation...)</li>
      <li>Automatisation de tâches</li>
      <li>Formulaires et interfaces personnalisés</li>
    </ul>
  </section>

  <section id="portfolio">
<h2>Projets / Portfolio</h2>
    <div class="cards">
      <div class="card">
        <p>Application de gestion de stock</p>
      </div>
      <div class="card">
        <p>Application de facturation</p>
      </div>
      <div class="card">
        <p>Interface de formulaire personnalisé</p>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2>Contactez-nous</h2>
    <form action="contact.php" method="post" class="mx-auto" style="max-width: 500px;">
      <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Votre email" required>
      </div>
      <div class="mb-3">
        <textarea name="message" rows="4" class="form-control" placeholder="Votre message" required></textarea>
      </div>
      <div class="text-center">
        <button name="send" type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </form>
    <p></p><a href="mailto:norbertkayumba0@gmail.com">norbertkayumba0@agamail.com</a></p>
    <a href="https://wa.me/243974366286" target="_blank">
   <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" style="width:24px; margin-right:8px;">
    WhatsApp</a><br>
    <a href="https://www.linkedin.com/in/norbert-kayumba-240275323?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
    <img src="https://img.icons8.com/color/48/000000/linkedin.png" alt="LinkedIn" style="width:24px;">
    LinkedIn</a>

  </section>
  <footer class="py-4 bg-dark text-white text-center">
    <div class="container">
      <small>&copy; 2025 JuaTekno. Tous droits réservés.</small>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>