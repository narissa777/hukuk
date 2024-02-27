<?php $this->load->view('include/header'); ?>
<link rel="stylesheet" href="<?php echo base_url("/");?>assets/css/c-css/c-bootstrap.min.css">


<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Partnerlerimiz</h2>
            <div class="div-dec"></div>
            <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>
        </div>
    </div>
</div>
</div>
</div>
<section id="team">
    <div class="container">
     <!--    <div class="row">
            <div class="col-12">
                <div class="intro">
                    <br>
                    <h1><?php echo $partnerlerimiz[0]->p_baslik; ?></h1>
                    <p class="mx-auto"><?php echo $partnerlerimiz[0]->p_aciklama; ?></p>
                </div>
            </div>
        </div> -->

        <div class="row justify-content-center">
          <?php foreach ($partnerlerimizkart as $partnerlerimizkartogeleri) {?>
            <div class="col-lg-4 col-md-8">
                <div class="team-member">
                    <div class="image">
                        <img src="<?php echo base_url('').$partnerlerimizkartogeleri->kartresim; ?>" alt="">
                        <div class="social-icons">
                            <a href="<?php echo $partnerlerimizkartogeleri->k_facebook; ?>"><i class='bx bxl-facebook'></i></a>
                            <a href="<?php echo $partnerlerimizkartogeleri->k_twitter; ?>"><i class='bx bxl-twitter'></i></a>
                            <a href="<?php echo $partnerlerimizkartogeleri->k_instagram; ?>"><i class='bx bxl-instagram'></i></a>
                            <a href="<?php echo $partnerlerimizkartogeleri->k_linkedin; ?>"><i class='bx bxl-linkedin'></i></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <h5 style="color:#dc3545;"><?php echo $partnerlerimizkartogeleri->kartbaslik; ?></h5>
                    <p style="color:#623e44;"><?php echo $partnerlerimizkartogeleri->kartaciklama; ?></p>
                </div>
            </div> 


        <?php } ?>
    </div>

</div>
</section>
<script src="<?php echo base_url("assets/");?>js/jquery.min.js"></script>
<script src="<?php echo base_url("assets/");?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url("assets/");?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url("assets/");?>js/app.js"></script>
<?php $this->load->view('include/footer'); ?>
