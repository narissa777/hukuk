
<?php $this->load->view('include/header');
date_default_timezone_set('Europe/Istanbul'); 
?>
<style type="text/css">
   /* line 1, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
   .bradcam_bg {
      background-image: url(<?php echo base_url("/");?>img/banner/bradcam.png);
  }

/* line 4, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
.bradcam_bg_2 {
  background-image: url(<?php echo base_url("/");?>img/banner/bradcam2.png);
}
</style>
<style type="text/css">
    .yayininput{
        border-radius: 12px;
        border-color: #623e44;
        border-width: 3px;
        width: 400px;
        text-align: center;
        display: flex;
        justify-content: center;
    }
</style>
<style type="text/css">
    .yayinlabel{
        font-size: 15px;
        font-weight: bold;
        color: #623e44;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 13px;
        
    }
    .blog_details p {
        color: #623e44 ;
    }
</style>

<div class="page-heading">
  <div class="container " >
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text" style="z-index: 5;">
          <h2>Yayınlar</h2>
          <div class="div-dec"></div>
          <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>
      </div>
  </div>
</div>
</div>
</div>

<!-- <div class="bradcam_area">
    <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Yayınlar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- bradcam_area_end  -->

<!--================Blog Area =================-->
<section class="container" style="display: flex;
align-items: center;
justify-content: center;">

<label  class="yayinlabel">Başlık Arayın :</label>

<input class="yayininput" id="yayininput"  type="text" name="deneme">
</section>
<section class="blog_area ">
    <div class="container">

        <div class=" d-flex " id="anadiv" style="    display: flex!important;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
        justify-content: center;" >
        <?php foreach ($yayinlar as $value => $yayinlarogeleri) {

            $turkce_aylar = array(
                1 => 'Ocak',
                2 => 'Şubat',
                3 => 'Mart',
                4 => 'Nisan',
                5 => 'Mayıs',
                6 => 'Haziran',
                7 => 'Temmuz',
                8 => 'Ağustos',
                9 => 'Eylül',
                10 => 'Ekim',
                11 => 'Kasım',
                12 => 'Aralık'
            );

            $ay_sayisi = date('n', strtotime($yayinlarogeleri->b_updateedildigitarih));
            $ay = $turkce_aylar[$ay_sayisi];
            $gun = date('d', strtotime($yayinlarogeleri->b_updateedildigitarih));
            ?>
            <div id="yayindiv<?php echo $value; ?>" class=" blog_item" style="margin: 10px; width: 100%;">
                <div class="blog_item_img">
                    <img class="card-img rounded-0" src="<?php echo base_url('').$yayinlarogeleri->b_resim; ?>" alt="">
                    <a href="<?php echo base_url('admin/blogg2').'/'.$yayinlarogeleri->id; ?>" class="blog_item_date">
                        <h3><?php echo $gun; ?></h3>
                        <p> <?php echo $ay; ?></p>
                    </a>
                </div>

                <div class="blog_details">
                    <a class="d-inline-block" href="<?php echo base_url('admin/blogg2').'/'.$yayinlarogeleri->id; ?>">
                        <h2><?php echo $yayinlarogeleri->b_onbaslik; ?></h2>
                    </a>
                    <p><?php echo $yayinlarogeleri->b_onsoz; ?></p>
                    <a style="background-color: #623e44; padding: 10px; color: #e5d6b9!important;" class="btn" href="<?php echo base_url('admin/blogg2').'/'.$yayinlarogeleri->id; ?>">Devamını Oku</a>
                </div>

            </div>
        <?php } ?>
        

    </div>

    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" id="previous" onclick="previous()" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
            <?php for ($i=1; $i <= $pagecount[0]->sayi ; $i++) { ?>
                <li class="page-item">
                    <a href="#" id="page<?php echo $i; ?>" onclick="changepage(<?php echo $i; ?>)" class="page-link"><?php echo $i; ?></a>
                </li>
            <?php } ?>
            <li class="page-item">
                <a href="#" onclick="next(1)" id="next" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
</section>
<script
src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
crossorigin="anonymous"></script>
<script type="text/javascript">
    function previous(value)
    {
        $('#yayininput').val("");
        var link = value - 1 ;
        changepage(link);
    }
    function next(value)
    {
        $('#yayininput').val("");
        var link = value + 1 ;
        changepage(link);
    }    
</script>
<script type="text/javascript">
    function changepage(value)
    {
        $('#yayininput').val("");
        $("#previous").attr("onclick", "previous(" + value + ")");
        $("#next").attr("onclick", "next(" + value + ")");
        if (value == 1) 
        {
            var start = 0;
        }else
        {
            var start = (value - 1 ) * 4;
        }
        var length = 4;
        $.ajax({
         url: "yayinServerSide/",
         type: 'POST',
         data:{ start: start, length: length},
         dataType: 'json',
         success: function (data) {
            $("#anadiv").empty();
            $.each(data, function (key, value) {
                var tarih = value.b_updateedildigitarih;
                var jsTarih = new Date(tarih);
                var gun = jsTarih.getDate(); 
                var ay = jsTarih.toLocaleDateString('tr-TR', { month: 'long' });
                $("#anadiv").append(
                    `<div id="yayindiv${key}" class=" blog_item" style="margin: 10px; width: 100%;">
                    <div class="blog_item_img">
                    <img class="card-img rounded-0" src=<?php echo base_url('${value.b_resim}'); ?> alt="">
                    <a href="" class="blog_item_date">
                    <h3>${gun}</h3>
                    <p>${ay}</p>
                    </a>
                    </div>

                    <div class="blog_details">
                    <a class="d-inline-block" href="blog.php">
                    <h2>${value.b_onbaslik}</h2>
                    </a>
                    <p>${value.b_onsoz}</p>
                    <a style="background-color: #623e44; padding: 10px; color: #e5d6b9!important;" class="btn" href="<?php echo base_url('admin/blogg2').'/'.'${value.id}'; ?>">Devamını Oku</a>
                    </div>

                    </div>`
                    );
            });
        }
    });
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#yayininput").on("input", function() {
            var start = 0;
            var length = 4;
            var search = $('#yayininput').val();
            $.ajax({
             url: "yayinServerSideSearch/",
             type: 'POST',
             data:{ start: start, length: length, search:search},
             dataType: 'json',
             success: function (data) {
                $("#anadiv").empty();
                $.each(data, function (key, value) {
                   var tarih = value.b_updateedildigitarih;
                   var jsTarih = new Date(tarih);
                   var gun = jsTarih.getDate(); 
                   var ay = jsTarih.toLocaleDateString('tr-TR', { month: 'long' });

                   $("#anadiv").append(
                    `<div id="yayindiv${key}" class=" blog_item" style="margin: 10px; width: 100%;">
                    <div class="blog_item_img">
                    <img class="card-img rounded-0" src=<?php echo base_url('${value.b_resim}'); ?> alt="">
                    <a href="" class="blog_item_date">
                    <h3>${gun}</h3>
                    <p>${ay}</p>
                    </a>
                    </div>

                    <div class="blog_details">
                    <a class="d-inline-block" href="blog.php">
                    <h2>${value.b_onbaslik}</h2>
                    </a>
                    <p>${value.b_onsoz}</p>
                    <a style="background-color: #623e44; padding: 10px; color: #e5d6b9!important;" class="btn" href="<?php echo base_url('admin/blogg2').'/'.'${value.id}'; ?>">Devamını Oku</a>
                    </div>

                    </div>`
                    );
               });
            }
        });
        });
    });
</script>
<?php $this->load->view('include/footer'); ?>
