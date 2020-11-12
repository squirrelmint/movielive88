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
              <a class="nav-link" href="#">Poppular</a>
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

    <!-- Modal -->
    <div class="modal fade" id="anime-contract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#request">ขอหนัง</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#contract">ติดต่อลงโฆษณา</a>
              </li>
            </ul>

            <div class="tab-content" id="formrequest">
              <div id="request" class="tab-pane container active">
                <form class="anime-formcontract" novalidate method="POST" action="">
                  <textarea rows="4" id="request_text" type="text" class="form-control" required autocomplete="off"></textarea>
                  <center><button type="submit" class="anime-btnrequest">ส่งข้อความ</button></center>
                </form>
              </div>

              <div id="contract" class="tab-pane container fade">
                <form class="anime-formcontract" novalidate method="POST" action="">
                  <label for="ads_con_name"> ชื่อ สกุล :</label>
                  <input id="ads_con_name" name="ads_con_name" type="text" class="form-control" required autocomplete="off">
                  <div class="invalid-feedback">
                    กรุณากรอกชื่อ นามสกุล
                  </div>
                  <label for="ads_con_email"> Email :</label>
                  <input id="ads_con_email" type="text" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" required autocomplete="off">
                  <div class="invalid-feedback">
                    กรุณากรอก Email เช่น " xxx@xxx.com "
                  </div>
                  <label for="ads_con_line"> Line ID :</label>
                  <input id="ads_con_line" type="text" class="form-control" required autocomplete="off">
                  <div class="invalid-feedback">
                    กรุณากรอก Line ID
                  </div>
                  <label for="ads_con_tel"> เบอร์โทรศัพท์ :</label>
                  <input id="ads_con_tel" type="text" class="form-control" required autocomplete="off" pattern="^0([8|9|6])([0-9]{8}$)">
                  <div class="invalid-feedback">
                    กรุณากรอก เบอร์โทรศัพท์ 10หลัก เช่น " 0600000000 "
                  </div>

                  <label id="ads_con_all_alt">**กรุณากรอกข้อมูลให้ครบทุกช่อง</label>

                  <center><button type="submit" class="anime-btnrequest">ส่งข้อความ</button></center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(function() {
        $(".anime-formcontract").on("submit", function() {
          var form = $(this)[0];
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          3
          form.classList.add('was-validated');      
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        $("#ads_con_email_alt").hide();
        $('#anime-formsearch').submit(function(e) {
          goSearch();
          return false; //<---- Add this line
        });
      });

      function goSearch() {
        var animesearch = $.trim($("#anime-search").val())

        if (animesearch) {
          window.location.href = "/search/" + $("#anime-search").val();
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