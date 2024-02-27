<?php $this->load->view('include/header'); ?>

<!-- ***** Header Area End ***** -->

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h2>İletişim</h2>
          <div class="div-dec"></div>
          <p style="margin:20px">Sorunlarınızı Çözerken Yanınızdayız...</p>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***** Main Banner Area End ***** -->

<section class="map">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="map">
        
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.3598498561196!2d29.096240177220807!3d37.7581597131147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73fc9cdcf4873%3A0xc70136b3f24e6ffa!2sTechnolobal%20Bili%C5%9Fim%20Sanayi%20ve%20Ticaret%20Limited%20%C5%9Eirketi!5e0!3m2!1str!2str!4v1697642629484!5m2!1str!2str"  width="100%" height="450px" frameborder="0" style="border:0; border-radius: 5px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <div class="row">
          <div class="col-lg-4">
            <div class="info-item">
              <i class="fa fa-envelope"></i>
              <h4><?php echo $contact[0]->emailbaslik; ?></h4>
              <a href="mailto:<?php echo $contact[0]->emailaciklama; ?>"><?php echo $contact[0]->emailaciklama; ?></a>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-item">
              <i class="fa fa-phone"></i>
              <h4><?php echo $contact[0]->phonenumberbaslik; ?></h4>
              <a href="tel:<?php echo $contact[0]->phonenumberaciklama; ?>"><?php echo $contact[0]->phonenumberaciklama; ?></a>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="info-item">
              <i class="fa fa-map-marked-alt"></i>
              <h4><?php echo $contact[0]->adresbaslik; ?></h4>
              <a href="#"><?php echo $contact[0]->adresaciklama; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php flashread(); ?>
<section class="contact-us-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h4>Bize Mesaj Atın</h4>
        </div>
      </div>
      <?php 
      date_default_timezone_set('Europe/Istanbul');
      $zaman=date('d.m.Y');
      $saat=date('H:i:s');


      ?>

      <div class="col-lg-10 offset-lg-1">
        <form id="contact" action="<?php echo base_url('admin/message'); ?>" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Adınız..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="phone" name="phone" id="phone" placeholder="Telefon Numaranız..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="mail" id="mail" pattern="[^ @]*@[^ @]*" placeholder="E-Mailiniz..." required="">
                <input  type="hidden" name="date" value="<?php echo $zaman ; ?>" >
                <input  type="hidden" name="time" value="<?php echo $saat ; ?>" >
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="subject" name="subject" id="subject" placeholder="Konu..." autocomplete="on" >
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Mesajınızı Buraya Giriniz"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12" style="display:flex; justify-content: center;">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Mesaj Gönder</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('include/footer'); ?>