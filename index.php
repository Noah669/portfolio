<?php
function calculerAge($dateNaissance) {
    $dateNaissance = new DateTime($dateNaissance);
    
    $aujourdhui = new DateTime();
    
    $intervalle = $aujourdhui->diff($dateNaissance);
    
    // Retourner l'âge
    return $intervalle->y;
}

$dateNaissance = '2003-09-02';
$age = calculerAge($dateNaissance);
?>

<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Noah Dassac</title>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="bg-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Portfolio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
              <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
              <li class="nav-item"><a class="nav-link" href="#skills">Compétences</a></li>
              <li class="nav-item"><a class="nav-link" href="#portfolio">Projets</a></li>
              <li class="nav-item"><a class="nav-link" href="#experience">Expériences</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Me contacter</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="page-content">
      <div id="content">
<header>
  <div class="cover bg-light">
    <div class="container px-3">
      <div class="row">
        <div class="col-lg-6 p-2"><img class="img-fluid" src="images/hellostev" alt="hello"/></div>
        <div class="col-lg-6">
          <div class="mt-5">
            <p class="lead text-uppercase mb-1">Je me présente :</p>
            <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Je suis Noah Dassac</h1>
            <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Etudiant en informatique</p>
            <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
              <nav role="navigation">
                <ul class="nav justify-content-left">
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/noah-dassac-17578a2a0/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://github.com/Noah669" title="github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a></li>
                </ul>
              </nav>
            </div>
            <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Me contacter <i class="fas fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wave-bg"></div>
</header>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2">Bonjour,</h2>
        <p>Je suis actuellement étudiant en deuxième année de BUT informatique à l'IUT2 de Grenoble. Je suis spécialisé en développement d'applications que ce soit Front-End ou Back-End. Mes études en IUT me permettre de découvrir le monde professionel lors de la création d'un projet et du travail d'équipe ou encore du comportement à avoir en entreprise.</p>
        <div class="row mt-3">
          <div class="col-sm-2">
            <div class="pb-1">Age:</div>
          </div>
          <div class="col-sm-10 phone">
            <div class="pb-1 fw-bolder">- <?= $age ?> </div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10 phone">
            <div class="pb-1 fw-bolder">- noah.dassac@gmail.com</div>
          </div>
          <div class="col-sm-2">
            <div class="pb-1">Téléphone:</div>
          </div>
          <div class="col-sm-10 phone">
            <div class="pb-1 fw-bolder">- 06 51 51 86 95</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="images/Moi.jpg" width="300" height="300" alt="moi"/></div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5" id="skills">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Mes compétences</h2>
    </div>
    <div class="text-center">
      <p class="mx-auto mb-3" style="max-width:600px">Voici mes compétences: <br> Je suis capable d'apprendre rapidement de mes tiers ou en autodidactie. <br> Je suis aussi autonome et ouvert aux projets en équipe.</p>
    </div>
    <div class="bg-light p-3">
      <div class="row">
        <div class="col-md-5">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">HTML-CSS</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">JavaScript</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width:70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">PHP</span><span>50%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">Java</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">C++</span><span>50%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 50%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">Python</span><span>70%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">Anglais - Certificat B2</span><span>80%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="py-1">
            <div class="d-flex text-small fw-bolder"><span class="me-auto">Photoshop</span><span>40%</span></div>
            <div class="progress my-1">
              <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 40%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-2 px-lg-4 pt-5" id="portfolio">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Mes projets</h2>
      <img class="clic" src="images/clicsouris.png" alt="clic">
    </div>
    <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
      <div class="grid-sizer"></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images\projet\lecture.png" data-bp="images\projet\generationlexique.png" />
            <figcaption>
              <h4 class="h5 mb-0">Approches algorithmiques</h4>
              <div>Algorithme en Java triant des mots d'un fichier et affiche la meilleure catégorie allant à chaque mots.</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/git.png" data-bp="images/projet/bios_machine_virtuelle.png"/>
            <figcaption> 
              <h4 class="h5 mb-0">Installation Virtual Machine</h4>
              <div>Installation d'une machine virtuelle sur linux avec l'image iso et le bios de la machine.</div>
            </figcaption>
          </figure></a></div>
          <div class="grid-item"><a href="#portfolio">
            <figure class="portfolio-item"><img src="images/projet/deviceforbootloader.png" data-bp="images/projet/pg_hbaconf.png"/>
              <figcaption>
                <h4 class="h5 mb-0">Installation réseau</h4>
                <div>Installation d'un serveur réseau en configurant pg_hbaconf et création d'un tutoriel en anglais.</div>
              </figcaption>
            </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/Contraites.png" data-bp="images/projet/graphique.png"/>
            <figcaption> 
              <h4 class="h5 mb-0">Création Database</h4>
              <div>Analyse de besoin pour la création d'une base de données sur le Titanic et création d'un schéma entité-association.</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/graph.png" data-bp="images/projet/vue.png"/>
            <figcaption>
              <h4 class="h5 mb-0">Exploitation Database</h4>
              <div>Nettoyage, extraction et utilisation des données sur l'accidentologie pour faire un compte rendu et des schmémas en R.</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/whimsical.png" data-bp="images/projet/partenaireseco.png"/>
            <figcaption>
              <h4 class="h5 mb-0">Création site entreprise</h4>
              <div>Création d'un recueil de besoin puis d'un site internet pour mettre en avant une entreprise afin d'aider les collégiens à trouver un stage.</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/artiste.png" data-bp="images/projet/codefest.png"/>
            <figcaption>
              <h4 class="h5 mb-0">Application gestion de festival</h4>
              <div>Gestion de projet menant à la création d'une application pour les gérants de festival afin de gèrer tous les aspects de gestion.</div>
            </figcaption>
          </figure></a></div>
      <div class="grid-item"><a href="#portfolio">
          <figure class="portfolio-item"><img src="images/projet/website.png" data-bp="images/projet/datamodel.png"/>
            <figcaption>
              <h4 class="h5 mb-0">Jeu ludo-éducatif</h4>
              <div>Gestion de projet menant à la création d'une application ludo-éducative pour réviser le baccalauréat d'histoire en voyageant dans le temps tout en s'amusant.</div>
            </figcaption>
          </figure></a></div>
    </div>
  </div>
</div>

</script>
<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Expériences</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Création d'une application ludo-éducative</h3>
                <div class="text-muted text-small">IUT2 Grenoble <small>(2023-2024)</small></div>
              </div>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Création d'une application ludo-éducative pour apprendre et réussir son bac dans la matière histoire-géographie avec un jeu à choix multiple pour voyager dans les chapitres des cours mais attention à ne pas changer le cours du temps.</p>
            <p>(Gestion de projet, GANNT, BPMN, Cahiers des charges, Persona, HTML, PHP, JavaScript).</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">Création d'un gestionnaire de festival</h3>
                <div class="text-muted text-small">IUT2 Grenoble <small>(2022-2023)</small></div>
              </div>
            </div>
          </div>
          <div class="card-body px-3 py-2">
            <p>Création d'un gestionnaire de festival pour aider les gérants à se concentrer sur les risques et non l'organisation qui se gère sur l'application en sauvegardant les données des anciens festivaux. Elle permet de gèrer les billets, les artistes, l'emploi du temps, les matériels et les bénévoles.</p>
            <p>(Recueil de besoin, Persona, Java, JavaFX).</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Me contacter</h2>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="bg-light my-2 p-3 pt-2"><form action="https://formspree.io/f/xbljrkrb"
    method="POST">
    <div class="form-group my-2">
      <label for="name" class="form-label fw-bolder">Nom</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>
    <div class="form-group my-2">
      <label for="email" class="form-label fw-bolder">Email</label>
      <input class="form-control" type="email" id="email" name="_replyto" required>
    </div>
  <div class="form-group my-2">
    <label for="message" class="form-label fw-bolder">Message</label>
    <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
  </div>
  <button class="btn btn-primary mt-2" type="submit">Envoyez</button>
</form>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5">N'hésitez pas à me contacter !</div>
          <p>Si vous êtes intéressés par mes compétences, n'hésitez pas à remplir ce formulaire pour correspondre avec moi </p>
          <p>Ou me contacter par mail ou téléphone.</p>
          <p>En attente de votre réponse !</p>
        </div>
        <div class="mt-53 px-1">
          <div class="row"> 
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">Noah.dassac@gmail.com</div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Téléphone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder phone">06 51 51 86 95</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4">Noah Dassac</div>
      <p>Etudiant en informatique</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/noah-dassac-17578a2a0/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://github.com/Noah669" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy;All rights reserved.</div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>