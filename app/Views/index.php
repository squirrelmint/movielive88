  
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

  <section class="movie-content text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <h1>MOVIELIVE88</h1>
          <h2>หนังใหม่ ดูหนังออนไลน์ครบเรื่องทุกรสที่ MOVIELIVE88</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Icons Grid -->
  <section class="text-center">
    <div class="container">
      <div class="row">
        <ul id="list-movie" class="list-movie">

          <?PHP
          foreach ($list_anime as $val) {
          ?>
            <li>
              <div class="movie-box">

                <?php if (substr($val['movie_picture'], 0, 4) == 'http') {
                  $movie_picture = $val['movie_picture'];
                } else {
                  $movie_picture = $path_thumbnail . $val['movie_picture'];
                }

                $url_name = urlencode(str_replace(' ', '-', $val['movie_thname']));
                ?>

                <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>' )" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  <img src="<?= $movie_picture ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                </a>
                <div class="movie-overlay"></div>
                <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
                <span class="movie-quality">Full HD</span>
                <span class="movie-sound">พากษ์ไทย</span>
              </div>
              <div class="title-in">
                <h2>
                  <a onclick="goView('<?= ($val['movie_id']) ?>','<?= $url_name ?>','0','<?= str_replace(' ','-' ,$val['ep_data'][0]['NameEp']) ?>' )" tabindex="-1" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                </h2>

                <div class="movie-score">
                <i class="fas fa-star"></i> 9.8
                </div>
              </div>
            </li>
          <?php  } ?>
        </ul>
        <!-- <button id="movie-loadmore">Load more ...</button> -->
      </div>
    </div>
  </section>

  <section id="movie-footer" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="navbar-brand" href="#"><img class="logo" src="<?= base_url() . '/public/logo/Logo-Anime-8k-1.png' ?> "></a>
          <p><strong>ดูอนิเมะฟรี</strong> โหลดไวแบบไม่มีสะดุดภาพคมชัดระดับ HD FullHD 4k ครบทุกเรื่องทุกรสดูได้ทุกที่ทุกเวลาทั้งบนมือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ ระบบปฏิบัติการ Android และ IOS ดูอนิเมะใหม่ให้รับชมอีกมากมาย สามารถรับชมฟรีได้ทุกที่ทุกเวลาตลอด 24 ชั่วโมง</p>
        </div>
      </div>
    </div>
  </section>
  <?php foreach ($ads as $value) {
    if ($value['ads_position'] == "2") {
  ?>

      <section id="anime-banners" class="bg-light text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 ">
              <img class="banners" src='<?php echo  $path_ads . $value['ads_picture']; ?>'>
            </div>
          </div>
        </div>
      </section>

  <?php } else {
    }
  }
  ?>
  <script>

    $(document).ready(function() {

      var track_click = 2; //track user click on "load more" button, righ now it is 0 click
      var total_pages = '<?= $pagination['total_page'] ?>';

      if( track_click >= total_pages ){
        $("#anime-loadmore").hide(0);
      }

      $("#anime-loadmore").click(function(e) { //user clicks on button

        if (track_click <= total_pages) //user click number is still less than total pages
        {
          //post page number and load returned data into result element
          $.get('<?php echo $url_loadmore ?>', {
            'page': track_click
          }, function(data) {

            // $("#anime-loadmore").show(); //bring back load more button
            $("#list-anime").append(data); //append data received from server

            track_click++; //user click increment on load button

          }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
            alert(thrownError); //alert with HTTP error
          });

        }

        if(track_click >= total_pages){

          $("#anime-loadmore").hide(0);

        }

      });

    });
  </script>