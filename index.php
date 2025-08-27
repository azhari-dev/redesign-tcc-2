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
</head>

<body>

  <div class="container">
    <?php require_once 'navbar.php' ?>
    <div class="main">
      <?php require_once 'home.php' ?>
      <?php require_once 'competitions.php' ?>
      <?php require_once 'events.php' ?>
      <?php require_once 'faq.php' ?>
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

</body>

</html>