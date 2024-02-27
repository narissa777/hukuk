<?php $this->load->view('include/header'); ?>


<!-- ***** Header Area End ***** -->

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h2>Faaliyet Alanları</h2>
          <div class="div-dec"></div>
          <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<div class="practice_area">
  <div class="container-fluid p-0" style="display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
  flex-wrap: wrap;">

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
</div>
</div>
<br><br><br><br>
<?php $this->load->view('include/footer'); ?>


