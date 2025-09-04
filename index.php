<!DOCTYPE html>
<html lang="id">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>Trunojoyo Creative Competition 2025</title>
  <meta
    name="description"
    content="Trunojoyo Creative Competition 2025 - Wadah kolaborasi, eksplorasi, dan pengembangan diri di bidang teknologi informasi dan komunikasi" />
  <link rel="stylesheet" href="styles/styleguide.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/home.css" />
  <link rel="stylesheet" href="styles/competitions.css" />
  <link rel="stylesheet" href="styles/events.css" />
  <link rel="stylesheet" href="styles/faq.css" />
  <link rel="stylesheet" href="styles/contact.css" />
  <link rel="stylesheet" href="mobile-style/style.css" />
  <link rel="stylesheet" href="mobile-style/home.css" />
  <link rel="stylesheet" href="mobile-style/competitions.css" />
  <link rel="stylesheet" href="mobile-style/events.css" />
  <link rel="stylesheet" href="mobile-style/faq.css" />
  <link rel="stylesheet" href="mobile-style/contact.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/icon-tcc.png">
</head>

<body>

  <div class="container">
    <?php require_once 'navbar.php' ?>
    <div class="main">
      <?php require_once 'home.php' ?>
      <?php require_once 'competitions.php' ?>
      <?php require_once 'events.php' ?>
      <!-- <?php require_once 'faq.php' ?> -->
      <div class="sponsor" id="sponsor">
        <div class="headings">
          <div class="flower">
            <img src="img/union-lite.svg" alt="union-lite">
          </div>
          <p class="heading-2-bold">Special Thanks To Our</p>
          <div class="flower">
            <img src="img/union-lite.svg" alt="union-lite">
          </div>
        </div>
        <div class="contain">
          <?php require_once 'sponsor.php' ?>
          <div class="footer" id="contact">
            <?php require_once 'contact.php' ?>
            <?php require_once 'footer.php' ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'absolute_elements.php' ?>

  <script src="main.js"></script>

</body>

</html>