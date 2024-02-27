<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row " style="    display: flex;
            justify-content: center;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;">
            <div class="col-lg-6 text-center " >
                <p><?php echo $footer[0]->aciklama; ?></p>

            </div>
        </div>
    </div>
</div>
<div class="container" style="display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: space-evenly;">
<div style="width: 39%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.3598498561196!2d29.096240177220807!3d37.7581597131147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73fc9cdcf4873%3A0xc70136b3f24e6ffa!2sTechnolobal%20Bili%C5%9Fim%20Sanayi%20ve%20Ticaret%20Limited%20%C5%9Eirketi!5e0!3m2!1str!2str!4v1697642629484!5m2!1str!2str"  width="100%" height="250px" frameborder="0" style="border:0; border-radius: 5px; position: relative; z-index: 2;" allowfullscreen=""></iframe><br>
    <a href="" style="color:white; margin: 30px;">Adres: <?php echo $contact[0]->adresaciklama;?></a><br><br>
</div>

<div class="col-auto social-icons ">
    <p>Bize Ulaşın</p>
    <div style="margin-bottom: 30px;">
       <a href="tel:<?php echo $contact[0]->phonenumberaciklama;?>"><i class='bx'><iconify-icon icon="ph:phone"></iconify-icon></i> </a>
       <a href="mailto:<?php echo $contact[0]->emailaciklama;?>"><i class='bx'><iconify-icon icon="material-symbols:mail-outline"></iconify-icon></i> </a>
       <a href="<?php echo $sosyalmedya[0]->f_facebook; ?>"><i class='bx bxl-facebook'></i></a>
   </div>
   <div>
       <a href="<?php echo $sosyalmedya[0]->f_twitter; ?>"><i class='bx bxl-twitter'></i></a>
       <a href="<?php echo $sosyalmedya[0]->f_instagram; ?>"><i class='bx bxl-instagram'></i></a>

       <a href="<?php echo $sosyalmedya[0]->f_linkedin; ?>"><i class='bx bxl-linkedin'></i></a>
   </div>

</div>
</div>


<div class="footer-bottom text-center">


    <p class="mb-0">Copyright 2021 OTK Hukuk Tüm Hakları Saklıdır</p>
    <a href="https://www.technolobal.com/tr" style="color:#e5d6b9;">Design By: Technolobal Bilişim</a><br>
    <a href="<?php echo base_url("admin/cerez");?>" style="margin:5px; color:white;">Çerez Politikamız</a>/<a  href="<?php echo base_url("admin/gizlilik");?>" style="margin:5px;color:white;">Gizlilik Politikamız</a>/<a  href="<?php echo base_url("admin/kvk");?>" style="margin:5px;color:white;">KVKK</a>/<a  href="<?php echo base_url("admin/uyari");?>" style="margin:5px;color:white;">UYARI METNİ</a>
</div>
</footer>
<!-- ... (diğer HTML kodları) ... -->

<div class="cookie-bar" id="cookie-bar">
    <p>Web sitemizde çerezleri kullanmaktayız. Daha fazla bilgi için <a href="<?php echo base_url("admin/cerez");?>" style="color:white;">Çerez Politikamızı</a> ziyaret edebilirsiniz.</p>
    <button class="btu" id="cookie-accept">Kabul Et</button>
    <button class="btu"  id="cookie-reject">Reddet</button>
</div>

<!-- ... (diğer HTML kodları) ... -->


<!-- Scripts -->
<!-- Bootstrap core JavaScript --><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/');?>js/isotope.min.js"></script>
<script src="<?php echo base_url('assets/');?>js/owl-carousel.js"></script>
<script src="<?php echo base_url('assets/');?>js/custom.js"></script>

<script src="<?php echo base_url('assets/');?>js/tabs.js"></script>
<!-- <script src="<?php echo base_url('assets/');?>js/swiper.js"></script> -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>



<!-- <script>
    var interleaveOffset = 0.5;

    var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction:false
    },
    on: {
      progress: function() {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-inner").style.transform =
          "translate3d(" + innerTranslate + "px, 0, 0)";
      }     
  },
  touchStart: function() {
    var swiper = this;
    for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
    }
},
setTransition: function(speed) {
    var swiper = this;
    for (var i = 0; i < swiper.slides.length; i++) {
      swiper.slides[i].style.transition = speed + "ms";
      swiper.slides[i].querySelector(".slide-inner").style.transition =
      speed + "ms";
  }
}
}
};

var swiper = new Swiper(".swiper-container", swiperOptions);

document.querySelectorAll(".arrow").forEach(function(item){
    item.addEventListener("mouseenter",function(){
        swiper.autoplay.stop();
    })
})
document.querySelectorAll(".arrow").forEach(function(item){
    item.addEventListener("mouseleave",function(){
        swiper.autoplay.start();
    })
})

document.querySelector(".swiper-container").addEventListener("mouseenter", function(){
    swiper.autoplay.stop();
});

document.querySelector(".swiper-container").addEventListener("mouseleave", function(){
    swiper.autoplay.start();
});

</script> -->
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var cookieBar = document.getElementById('cookie-bar');
    var acceptButton = document.getElementById('cookie-accept');
    var rejectButton = document.getElementById('cookie-reject');

    // Kullanıcının daha önce tercihini kontrol et
    var userPreference = localStorage.getItem('cookiePreference');

    // Eğer kullanıcı daha önce çerez politikasını kabul ettiyse çubuğu gizle
    if (userPreference == 'accepted') {
        cookieBar.style.display = 'none';
    }

    acceptButton.addEventListener('click', function() {
        // Çerez politikasını kabul ettiğinde yapılacak işlemler buraya gelecek

        // Kullanıcının tercihini tarayıcı çerezlerine kaydet
        localStorage.setItem('cookiePreference', 'accepted');


        cookieBar.style.display = 'none'; // Çerez çubuğunu gizle
    });

    rejectButton.addEventListener('click', function() {
        // Çerez politikasını reddettiğinde yapılacak işlemler buraya gelecek
        cookieBar.style.display = 'none'; // Çerez çubuğunu gizle
        localStorage.setItem('cookiePreference', 'accepted');
        
    });
});





</script>
<!-- <script type="text/javascript">document.addEventListener("DOMContentLoaded", () => {
   function counter(id, start, end, duration) {
      let obj = document.getElementById(id),
      current = start,
      range = end - start,
      increment = end > start ? 1 : -1,
      step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() => {
        current += increment;
        obj.textContent = current + "+";
        if (current == end) {
           clearInterval(timer);
       }
   }, step);
  }
  counter("count1", 0, 400, 3000);
  counter("count2", 100, 50, 2500);
  counter("count3", 0, 40, 3000);
});
</script> -->
<!-- 
<script type="text/javascript">
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    document.addEventListener('keydown', function(e) {
    // Ctrl+C (Cmd+C) kombinasyonunu engelle
        if ((e.ctrlKey || e.metaKey) && e.keyCode === 67) {
            e.preventDefault();
        }
    });

</script> -->


</body>
</html>