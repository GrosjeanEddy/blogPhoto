<?php include("src/includes/head.php") ?>

<body id="home">

<?php 
	include("src/includes/menubar.php");
	include("src/includes/header.php") 
?>

<!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5">Rubriques</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="src/php/galerie.php">
            <span class="caption">
              <span class="caption-content">
                <h2>Galerie photo</h2>
                <p class="mb-0">Découvrez ici tous mes clichés</p>
              </span>
            </span>
            <img class="img-fluid" src="src/img/img3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="src/php/contact.php">
            <span class="caption">
              <span class="caption-content">
                <h2>Contact</h2>
                <p class="mb-0">Pour toutes informations, n'hésitez pas à me contacter</p>
              </span>
            </span>
            <img class="img-fluid" src="src/img/portfolio-1.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

<?php 
	include("src/includes/footer.php");
	include("src/includes/end.php") 
?>
 