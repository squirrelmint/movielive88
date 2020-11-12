<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">

        <img class="banners" src="https://gurubac.com/images/banner.jpg">

      </div>
    </div>
  </div>
</section>

<!-- Icons Grid -->
<section id="movie-video" class="text-center">
  <div class="container">
    <div class="row">
      <?php if (substr($data_anime['movie_picture'], 0, 4) == 'http') {
        $movie_picture = $data_anime['movie_picture'];
      } else {
        $movie_picture = $path_thumbnail . $data_anime['movie_picture'];
      }
      $url_name = urlencode(str_replace(' ', '-', $data_anime['movie_thname']))

      ?>
      <div id="movie-player">
        <div class="movie-header">
          <div class="movie-trailer">
            <iframe src="https://www.youtube.com/embed/XZveN7fBc_o" frameborder="0" allowfullscreen=""></iframe>
          </div>
          <div class="movie-thumbnail">
            <img src="https://api.vip-streaming.com/images/movie/pY6efatwoDksWZH5MmVYnjaalzK2EHiaa.jpg" alt="Dragon Rider (2020) มหัศจรรย์มังกรสุดขอบฟ้า">
          </div>
        </div>
        <iframe id="player" class="player" src="<?= base_url('player/' . $data_anime['movie_id'] . '/' . $ep_index) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>

        <!-- สำหรับ series -->
        <div class="movie-episode">
          <div id="NextEP" class="swiper-container">
            <div class="swiper-wrapper">

              <?php 
                foreach ($data_anime['ep_data'] as $key => $val) { 
                  $active = '';
                  if($ep_index==$key){
                    $active = 'active';
                  }
                  $url_nameep = urlencode(str_replace(' ', '-', $val['NameEp']));

              ?>
                <div class="swiper-slide">
                  <a onclick="goView('<?=$data_anime['movie_id']?>','<?=$url_name?>','<?= trim($key) ?>','<?= $url_nameep ?>')" tabindex="-1">
                    <img src="<?= $movie_picture ?>">
                    <span class="<?=$active?>"><?= $val['NameEp'] ?></span>
                  </a>
                </div>
              <?php } ?>

            </div>
              
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

      <div id="movie-detail">
        <div class="movie-card-detail">
          <h1 class="movie-title"><?= $data_anime['movie_thname'] ?> </h1>
          <div class="movie-description">
            <p>
              เรื่องย่อ: <?= $data_anime['movie_des'] ?>
            </p>
          </div>
          <div class="movie-box">
            <div class="movie-score">
              <i class="fas fa-star"></i> 9.8
            </div>
            <div class="movie-social">
              <a href=""><i class="fab fa-facebook-square"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-line"></i></a>
              <button class="movie-btn-report" >แจ้งหนังเสีย</button>
            </div>
          </div>
          <div class="movie-category">
            Category:
            <?php foreach ($data_anime['cate_data'] as $val) { ?>
              <a href="<?php echo base_url().'/category/'.$val['category_id'].'/'.$val['category_name'] ?>" target="_blank">
                <span class="cate-name"><?= $val['category_name'] ?></span>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">

        <img class="banners" src="https://gurubac.com/images/banner.jpg">

      </div>
    </div>
  </div>
</section>

<section id="movie-footer" class="text-center">
  <div class="container">
    <div class="row">
      <div class="movie-title-list">
        <h1>คุณอาจจะสนใจ</h1>
      </div>
      <ul id="list-movie" class="list-movie">
        <li>
          <div class="movie-box">
            <a onclick="goView('261','Kakushigoto-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B9%88%E0%B8%AD','0','EP-1' )" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">
              <img src="https://anime.vip-streaming.com/images/movie/OHnz9j8bHF443pP2ZiCXHwygjINFSZa.jpg" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">
            </a>
            <div class="movie-overlay"></div>
            <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
            <span class="movie-quality">Full HD</span>
            <span class="movie-sound">พากษ์ไทย</span>
          </div>
          <div class="title-in">
            <h2>
              <a onclick="goView('261','Kakushigoto-%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%9E%E0%B9%88%E0%B8%AD','0','EP-1' )" tabindex="-1" alt="Kakushigoto ความลับของคุณพ่อ" title="Kakushigoto ความลับของคุณพ่อ">Kakushigoto ความลับของคุณพ่อ</a>
            </h2>

            <div class="movie-score">
              <i class="fas fa-star"></i> 9.8
            </div>
          </div>
        </li>
        <li>
        <div class="movie-box">


        <a onclick="goView('256','Dr.Stone-%E0%B8%94%E0%B9%87%E0%B8%AD%E0%B8%81%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%99','0','EP-1' )" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">
        <img src="https://anime.vip-streaming.com/images/movie/zH2pewdAhETm2sxDDEVkRwEJZS8NmYd.jpg" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">
        </a>
        <div class="movie-overlay"></div>
        <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
        <span class="movie-quality">Full HD</span>
        <span class="movie-sound">พากษ์ไทย</span>
        </div>
        <div class="title-in">
        <h2>
        <a onclick="goView('256','Dr.Stone-%E0%B8%94%E0%B9%87%E0%B8%AD%E0%B8%81%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%99','0','EP-1' )" tabindex="-1" alt="Dr.Stone ด็อกเตอร์สโตน" title="Dr.Stone ด็อกเตอร์สโตน">Dr.Stone ด็อกเตอร์สโตน</a>
        </h2>

        <div class="movie-score">
        <i class="fas fa-star"></i> 9.8
        </div>
        </div>
        </li>
        <li>
        <div class="movie-box">


        <a onclick="goView('1','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7-%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-1-16','0','EP-1' )" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">
        <img src="https://anime.vip-streaming.com/images/movie/APo1BiuKo79Olfy7qcRDuZ4RTZlrxpO.jpg" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">
        </a>
        <div class="movie-overlay"></div>
        <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
        <span class="movie-quality">Full HD</span>
        <span class="movie-sound">พากษ์ไทย</span>
        </div>
        <div class="title-in">
        <h2>
        <a onclick="goView('1','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7-%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-1-16','0','EP-1' )" tabindex="-1" alt="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16" title="Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16">Detective Conan ยอดนักสืบจิ๋ว โคนัน ปี 1-16</a>
        </h2>

        <div class="movie-score">
        <i class="fas fa-star"></i> 9.8
        </div>
        </div>
        </li>
        <li>
        <div class="movie-box">


        <a onclick="goView('257','Kuroko-no-Basket-2nd-Season-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%842','0','EP-1' )" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">
        <img src="https://anime.vip-streaming.com/images/movie/d5P3XOpqJyYTIcX5wEI3q77Cdbp1YFh.jpg" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">
        </a>
        <div class="movie-overlay"></div>
        <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
        <span class="movie-quality">Full HD</span>
        <span class="movie-sound">พากษ์ไทย</span>
        </div>
        <div class="title-in">
        <h2>
        <a onclick="goView('257','Kuroko-no-Basket-2nd-Season-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%842','0','EP-1' )" tabindex="-1" alt="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2" title="Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2">Kuroko no Basket 2nd Season คุโรโกะ โนะ บาสเก็ต ภาค2</a>
        </h2>

        <div class="movie-score">
        <i class="fas fa-star"></i> 9.8
        </div>
        </div>
        </li>
        <li>
        <div class="movie-box">


        <a onclick="goView('2','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-17','0','EP-825' )" alt="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17" title="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17">
        <img src="https://anime.vip-streaming.com/images/movie/4r3fL3Otn8f48ibKKNYpnJUh3mtekK0.jpg" alt="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17" title="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17">
        </a>
        <div class="movie-overlay"></div>
        <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
        <span class="movie-quality">Full HD</span>
        <span class="movie-sound">พากษ์ไทย</span>
        </div>
        <div class="title-in">
        <h2>
        <a onclick="goView('2','Detective-Conan-%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B7%E0%B8%9A%E0%B8%88%E0%B8%B4%E0%B9%8B%E0%B8%A7%E0%B9%82%E0%B8%84%E0%B8%99%E0%B8%B1%E0%B8%99-%E0%B8%9B%E0%B8%B5-17','0','EP-825' )" tabindex="-1" alt="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17" title="Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17">Detective Conan ยอดนักสืบจิ๋วโคนัน ปี 17</a>
        </h2>

        <div class="movie-score">
        <i class="fas fa-star"></i> 9.8
        </div>
        </div>
        </li>
        <li>
        <div class="movie-box">


        <a onclick="goView('258','Kuroko-no-Basket-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%841','0','EP-1' )" alt="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1" title="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1">
        <img src="https://anime.vip-streaming.com/images/movie/eNHpM0LAJrQXU89y3dStOND5fq2P6e6.jpg" alt="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1" title="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1">
        </a>
        <div class="movie-overlay"></div>
        <span class="movie-view">4.3k <i class="fas fa-eye"></i></span>
        <span class="movie-quality">Full HD</span>
        <span class="movie-sound">พากษ์ไทย</span>
        </div>
        <div class="title-in">
        <h2>
        <a onclick="goView('258','Kuroko-no-Basket-%E0%B8%84%E0%B8%B8%E0%B9%82%E0%B8%A3%E0%B9%82%E0%B8%81%E0%B8%B0-%E0%B9%82%E0%B8%99%E0%B8%B0-%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B9%87%E0%B8%95-%E0%B8%A0%E0%B8%B2%E0%B8%841','0','EP-1' )" tabindex="-1" alt="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1" title="Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1">Kuroko no Basket คุโรโกะ โนะ บาสเก็ต ภาค1</a>
        </h2>

        <div class="movie-score">
        <i class="fas fa-star"></i> 9.8
        </div>
        </div>
        </li>






        </ul>

        <div id="movie-comment">
          <div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="light" data-width="1000" data-numposts="5"></div>
          <div id="fb-root"></div>
          <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s);
              js.id = id;
              js.src =
                'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
        </div>
    </div>
  </div>
</section>

<script>
  window.onload = function() {

    var swiper = new Swiper('#NextEP', {
        speed: 800,
        slidesPerView: 4,
        slidesPerGroup: 4,
        loopFillGroupWithBlank: true,
        spaceBetween: 10,
        mousewheel: true,
        freeMode: true,
        initialSlide: '<?= $ep_index ?>',

        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
          },
        },

        // breakpoints: {
        //   640: {
        //     slidesPerView: 2,
        //     spaceBetween: 20,
        //   },
        //   768: {
        //     slidesPerView: 4,
        //     spaceBetween: 40,
        //   },
        //   1024: {
        //     slidesPerView: 5,
        //     spaceBetween: 50,
        //   },
        // },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

  };
</script>