<?php $this->load->view('include/header'); ?>




<!-- ***** Header Area End ***** -->

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h2>Hakkımızda</h2>
          <div class="div-dec"></div>
          <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<section class="top-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image">
          <img src="<?php echo base_url('').$hakkimizda[0]->yanresim; ?>" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="accordions is-first-expanded">
          <article class="accordion">
            <div class="accordion-head">
              <span><?php echo $hakkimizda[0]->baslik1; ?></span>
              <span class="icon">
                <i class="icon fa fa-chevron-right"></i>
              </span>
            </div>
            <div class="accordion-body">
              <div class="content">
                <p><?php echo $hakkimizda[0]->baslik1aciklama; ?>
                </p>
              </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
              <span><?php echo $hakkimizda[0]->baslik2; ?></span>
              <span class="icon">
                <i class="icon fa fa-chevron-right"></i>
              </span>
            </div>
            <div class="accordion-body">
              <div class="content">
                <p><?php echo $hakkimizda[0]->baslik2aciklama; ?> 
                </p>
              </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
              <span><?php echo $hakkimizda[0]->baslik3; ?></span>
              <span class="icon">
                <i class="icon fa fa-chevron-right"></i>
              </span>
            </div>
            <div class="accordion-body">
              <div class="content">
                <p><?php echo $hakkimizda[0]->baslik3aciklama; ?></p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>  


<?php $this->load->view('include/footer'); ?>
