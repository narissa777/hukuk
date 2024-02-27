<?php $this->load->view('include/header'); ?>
<style type="text/css">
   /* line 1, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
   .bradcam_bg {
     background-image: url(<?php echo base_url("/");?>img/banner/bradcam.png);
  }

/* line 4, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
.bradcam_bg_2 {
  background-image: url(<?php echo base_url("/");?>img/banner/bradcam2.png);
}
.blog_details p {
   color: #623e44 ;
}
</style>
<div class="bradcam_area">
   <div class="bradcam_inner bradcam_bg_2  d-flex align-items-center">

    <div class="container">
     <div class="row">
      <div class="col-xl-12">
       <div class="bradcam_text text-center">
        <h3><?php echo $yayinlar[0]->b_onbaslik; ?> </h3>
        <div class="div-dec"></div>
        
        <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>

     </div>
  </div>
</div>
</div>
</div>
</div>
<section class="blog_area single-post-area ">
   <div class="container">
      <div class="row" style="display:flex; align-items: center; justify-content: center;">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="<?php echo base_url('').$yayinlar[0]->b_resim; ?>" alt="">
               </div>
               <div class="blog_details" style="color:#623e44;">
                  <h2><?php echo $yayinlar[0]->b_sayfabaslik; ?>
               </h2>

                 <?php echo $yayinlar[0]->b_sayfaaciklama; ?>
              
                     <!-- <div class="quote-wrapper">
                        <div class="quotes">
                           MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                           should have to spend money on boot camp when you can get the MCSE study materials yourself at
                           a fraction of the camp price. However, who has the willpower to actually sit through a
                           self-imposed MCSE training.
                        </div>
                     </div> -->


                  </div>
               </div>

               


            </div>

         </div>
      </div>
   </section>
   <?php $this->load->view('include/footer'); ?>
