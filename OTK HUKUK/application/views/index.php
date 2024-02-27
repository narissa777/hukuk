<?php $this->load->view('include/header'); ?>

<div class="swiper-container" id="top">

  <div class="swiper-wrapper">

    <div >
      <div class="slide-inner" style="background-image:url(http://192.168.0.31/AVUKAT/assets/upload/slider/adalet2.png);">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="header-text">
                <h2 id="text1" style=" font-style: italic; font-size: 40px;color: #623e44;"></h2>
                <h2 id="text2" style=" font-style: italic; font-size: 40px;color: #623e44;"></h2>
                <div class="div-dec" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php foreach ($slider as $sliderogeleri) {?>
  <div id="slideryazi" style="display: none;">
    <input  value="<?php echo $sliderogeleri->sliderbaslik; ?>">
  </div>
<?php } ?>

<!-- practice_area_start -->
<div class="practice_area">
  <div class="container-fluid p-0" style="display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
  flex-wrap: wrap;">
  <div class="row">
    <div class="col-xl-12">
      <div class="section_title text-center mb-60">
        <h3><?php echo $faaliyetalani[0]->ff_baslik; ?></h3>
        <br>
        <p><?php echo $faaliyetalani[0]->ff_aciklama; ?></p>
      </div>
    </div>
  </div>
</div>



<div class="row no-gutters">
  <?php foreach ($faaliyet as $faaliyetogeleri) {?>

    <div class="col-xl-3 col-md-6">
      <div class="single_practice">
        <div class="practice_image">
          <img src="<?php echo base_url('').$faaliyetogeleri->kartresim; ?>" alt="">
        </div>
        <div class="practice_hover text-center">
          <div class="hover_inner">
            <h3><?php echo $faaliyetogeleri->kartbaslik; ?></h3>
            <p style="margin:25px;"><?php echo $faaliyetogeleri->kartonsoz; ?></p>
            <a href="<?php echo base_url('admin/blogg').'/'.$faaliyetogeleri->id; ?>" class="lern_more">Açıklama İçin Tıklayınız</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<br><br><br>


<!-- practice_area_end -->

<section class="service-details">
  <div class="container">
    <div class="row">
     <div class="row">
      <div class="col-xl-12">
        <div class="section_title text-center mb-60">
          <h3><?php echo $praticearea[0]->ppbaslik; ?></h3>
          <br>
          <p><?php echo $praticearea[0]->ppaciklama; ?></p>
        </div>
      </div>
    </div>
    <div class="col-lg-10 " style="width:100%;">
      <div class="naccs">
        <div class="tabs">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu">
                <div class="active gradient-border"><span><?php echo $tablo1[0]->t_baslik; ?></span></div>
                <div class="gradient-border"><span><?php echo $tablo2[0]->t_baslik; ?></span></div>
                <div class="gradient-border"><span><?php echo $tablo3[0]->t_baslik; ?></span></div>
              </div>
            </div>
            <div class="col-lg-12">
              <ul class="nacc">
                <li class="active">
                  <div>
                    <div class="left-image" style="max-width: 457px;">
                      <img src="<?php echo base_url('').$tablo1[0]->t_resim; ?>" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?php echo $tablo1[0]->t_anabaslik; ?></h4>
                      <p><?php echo $tablo1[0]->t_anaaciklama; ?></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="left-image" style="max-width: 457px;">
                      <img src="<?php echo base_url('').$tablo2[0]->t_resim; ?>" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?php echo $tablo2[0]->t_anabaslik; ?></h4>
                      <p><?php echo $tablo2[0]->t_anaaciklama; ?></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div>
                    <div class="left-image" style="max-width: 457px;">
                      <img src="<?php echo base_url('').$tablo3[0]->t_resim; ?>" alt="">
                    </div>
                    <div class="right-content">
                      <h4><?php echo $tablo3[0]->t_anabaslik; ?></h4>
                      <p><?php echo $tablo2[0]->t_anaaciklama; ?></p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<br>
<style type="text/css">
  .card {
   display: flex;
   padding: 50px;
   margin: 20px;
   width: 500px;
   flex-direction: row;
   align-content: center;
   justify-content: space-evenly;
   align-items: center;
   border-radius: 50px;
 }

 .card p {
  margin-bottom: 5px;
}

</style>
<section >
 <div>
  <div class="row justify-content-center text-center">
   <div class="col-12">
    <h1 class="pb-3">Number counter animation in pure JavaScript</h1>
  </div>
  <div style="display:flex; flex-wrap:wrap; justify-content: center;">
   <div class=" card " style="background-color:#623e44; color: white; ">
    <div><iconify-icon icon="map:lawyer" width="100" height="100"></iconify-icon></div>
    <div>
      <p>TOPLAM VEKALETNAME SAYISI</p>
      <span id="count1" class="display-4"></span>
    </div>
  </div>
  <div class=" card " style="background-color:#623e44; color: white;">
    <div><iconify-icon icon="map:lawyer" width="100" height="100"></iconify-icon></div>
    <div>
      <p>TOPLAM DAVA </p>
      <span id="count2" class="display-4"></span>
    </div>
  </div>
  <div class=" card " style="background-color:#623e44; color: white;">
    <div><iconify-icon icon="map:lawyer" width="100" height="100"></iconify-icon></div>
    <div>
      <p>DERDEST DAVA </p>
      <span id="count3" class="display-4"></span>
    </div>
  </div>
</div>
</div>
</div>
</section>
<script src="<?php echo base_url("assets/js/slider.js"); ?>"></script>
  

<?php $this->load->view('include/footer'); ?>

