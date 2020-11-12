
<!-- Icons Grid -->
<section class="text-center">
  <div class="container">
    <div id="movie-list" class="row">
      <div class="movie-title-list">
        <?php
          if (!empty($cate_name)) {
        
            $title = $cate_name ;

          } else if (!empty($keyword)) {
        
            $title = 'คุณกำลังค้นหา : '. $keyword;
      
          }
        ?>
        <h1><?= $title ?></h1>
      </div>
      <ul id="list-movie" class="list-movie">

        <?PHP
        if ($list_anime) {
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
          <?php  }
        } else {
          ?>

          <h3> ไม่พบหนังที่คุณค้นหา</h3>

        <?php
        } ?>


      </ul>
      <?php
      if ($list_anime) {
      ?>
        <!-- <button id="anime-loadmore">Load more ...</button> -->
      <?php
      }
      ?>

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

<script>
  $(document).ready(function() {
    var track_click = 2; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $pagination['total_page'] ?>';
    var keyword = '<?= $keyword ?>';

    if( track_click >= total_pages ){
      $("#anime-loadmore").hide(0);
    }

    $("#anime-loadmore").click(function(e) { //user clicks on button

      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click,
          'keyword': keyword,
        }, function(data) {

         //  $("#anime-loadmore").show(); //bring back load more button
          $("#list-anime").append(data); //append data received from server

          track_click++; //user click increment on load button

        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          alert(thrownError); //alert with HTTP error
        });

      }

      if(track_click >= total_pages){

        $("#anime-loadmore").hide(0);

      }

      // alert(track_click+" "+total_pages)

    });
  });
</script>