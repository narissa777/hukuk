  <!-- ***** Main Banner Area Start ***** -->
  
  <div class="swiper-container" id="top">

    <div class="swiper-wrapper">
      

      <?php foreach ($slider as $sliderogeleri) {?>
      <div class="swiper-slide">
        
        
        <div class="slide-inner" style="background-image:url(<?php echo base_url('').$sliderogeleri->resimyol; ?>;">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2><?php echo $sliderogeleri->sliderbaslik; ?></h2>
                  <div class="div-dec"></div>
                  <p><?php echo $sliderogeleri->slideryazi; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php } ?>
      
     
      
    <div class="swiper-button-next swiper-button-white arrow"></div>
    <div class="swiper-button-prev swiper-button-white arrow"></div>
   
  </div>


  <!-- ***** Main Banner Area End ***** -->