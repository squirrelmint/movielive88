<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anime8k</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= $document_root ?>assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= $document_root ?>assets/vendor/fontawesome-free/css/all.min.css?v=1" rel="stylesheet">
  <link href="<?= $document_root ?>assets/vendor/simple-line-icons/css/simple-line-icons.css?v=1" rel="stylesheet" type="text/css">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $document_root ?>assets/css/landing-page.css?v=1" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="<?= $document_root ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $document_root ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body>
  <div id="overlay"></div>

  <header>
    <!-- Navigation -->
    <nav id="movie-menu" class="navbar navbar-expand-lg navbar-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo" src="<?= base_url() . '/public/logo/Logo-Anime-8k-1.png' ?> ">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">

            <li class="nav-item <?= $chk_act['home'] ?>">
              <a class="nav-link" href=" <?php echo base_url() ?> ">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= $chk_act['poppular'] ?>">
              <a class="nav-link" href="#">Popular</a>
            </li>
            <li class="nav-item <?= $chk_act['netflix'] ?>">
              <a class="nav-link" href="#">Netflix</a>
            </li>
            <li class="nav-item <?= $chk_act['category'] ?>">
              <a class="nav-link" href="#">CATEGORY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#anime-contract">ติดต่อ | ขอหนัง</a>
            </li>
          </ul>
          <form id="movie-formsearch">
            <div class="input-group" id="adv-search">
              <?php
              if (!empty($keyword)) {
                $value = $keyword;
              } else {
                $value = '';
              }
              ?>

              <input id="movie-search" class="movie-search ml-auto" placeholder="Search..." value="<?php echo $value ?>">
              <div class="input-group-btn">
                <div class="btn-group" role="group">
                  <button type="submit" class="movie-search-button"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>


    <script type="text/javascript">
      $(document).ready(function() {
        $('#movie-formsearch').submit(function(e) {
          goSearch();
          return false; //<---- Add this line
        });
      });
      function goSearch() {
        var search = $.trim($("#movie-search").val())

        if (search) {
          window.location.href = "/search/" + $("#movie-search").val();
        } else {
          window.location.href = "<?= base_url() ?>";
        }
      }
        
    </script>

    <!-- Slider main container -->
    <div id="HomeSlide" class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->

          <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">Iron man</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/1.jpg">
          </div>

          <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">Joker</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/2.jpg">
          </div>

          <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">Joker</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/3.jpg">
          </div>

          <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">Joker</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/4.jpg">
          </div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  </header>