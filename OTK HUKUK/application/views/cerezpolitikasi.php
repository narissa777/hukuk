<?php $this->load->view('include/header'); ?>
<style type="text/css">
   /* line 1, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
   .bradcam_bg {
     background-image: url(<?php echo base_url("/"); ?>img/banner/bradcam.png);
  }

/* line 4, C:/Users/SPN Graphics/Desktop/CL September/211 Lawyer/HTML/scss/_bradcam.scss */
.bradcam_bg_2 {
  background-image: url(<?php echo base_url("/"); ?>img/banner/bradcam2.png);
}
</style>
<div class="bradcam_area">
   <div class="bradcam_inner bradcam_bg_2  d-flex align-items-center">

    <div class="container">
     <div class="row">
      <div class="col-xl-12">
       <div class="bradcam_text text-center">
        <h3>Çerez Politikası</h3>
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
               <div class="blog_details">
                  <div style="margin-bottom: 15px;">
                     <i style="color:black; "><?php echo $cerez[0]->c_baslik; ?>
                  </i>
               </div>
               
               <p class="excert">
                  <?php echo $cerez[0]->c_aciklama; ?>
               </p>
               
               
            <!--  <div class="quote-wrapper">
               <div class="quotes" style="display:flex; align-items:center; justify-content:center; flex-wrap: wrap;">
                  Adalet gücü bağımsız olmayan bir milletin, devlet halinde varlığı kabul olunmaz.  <br>
                  <i>M. Kemal Atatürk</i>
               </div> -->
            </div>
         </div>
      </div>




   </div>

</div>
</div>
</section>
<?php $this->load->view('include/footer'); ?>
