  <!-- Icons Grid -->
  <section>
    <div class="container">
      <div class="row">
        <ul class="movie-category">
          <?php foreach($list_category as $category ){ ?>
            <li><a href=""><?=$category['category_name']?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </section>

  <section id="movie-banners" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <img class="banners" src="https://gurubac.com/images/banner.jpg">
          <img class="banners" src="https://gurubac.com/images/banner.jpg">
        </div>
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