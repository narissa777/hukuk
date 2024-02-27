<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>OTK HUKUK</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/');?>/logo/otkhukuk.png" />
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/templatemo-574-mexant.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/owl.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-nice-select.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-gijgo.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>css/c-css/c-style.css">
<!--

TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->

</head>
<style type="text/css">
 footer {
  background: linear-gradient(0deg, #623e449c, #623e44), url(<?php echo base_url('/');?>img/bg_banner1.jpg), #082032;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

footer .footer-top {
  padding-top: 80px;
  padding-bottom: 40px;
}

.footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  padding-bottom: 20px;
  padding-top: 20px;
}

footer .navbar-brand {
  color: #fff;
}

footer p {
  color: #ADB3B9;
}

footer .social-icons a {
 width: 109px;
    height: 77px;
    font-size: 20px;
    margin-left: 4px;
    margin-right: 4px;
}

.loader {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: red;
  z-index: 99999;
  position: fixed;
  left: 0;
  right: 0;
}


input.form-control {
  border-color: transparent;
  height: 44px;
}

.form-control {
  background-color: rgba(0, 0, 0, 0.04);
  border-color: rgba(0, 0, 0, 0.04);;
}

.form-control:focus {
  box-shadow: none;
  border-color: var(--brand);
}
.social-icons a {
  width: 28px;
  height: 28px;
  display: inline-flex;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.25);
  text-decoration: none;
  align-items: center;
  justify-content: center;
  border-radius: 100px;
}

.social-icons a:hover {
  background-color: #fff;
  color: var(--brand);
}
.cookie-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #623e44;
  color: white;
  padding: 10px 20px;
  text-align: center;
  animation: fadeIn 1s ease 0.1s forwards;
  z-index: 5;

}
@keyframes fadeIn {
  0% {
    transform: translateY(100%);
  }
  100% {
    transform: translateY(0%);
  }
}
.cookie-bar a {
  color: #4caf50;
  text-decoration: none;
}

.btu {
 font-size: 14px;
 background-color: #212020c2;
 padding: 10px 20px !important;
 display: inline-block;
 border-radius: 5px;
 font-weight: 500;
 text-transform: capitalize;
 height: auto;
 line-height: 25px;
 letter-spacing: 0.5px;
 transition: all .3s;
 color: #e5d6b9;
}
</style>
<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?php echo base_url("admin/index");?>" class="logo">
              <img class="logos" src="<?php echo base_url('').$logo[0]->logo; ?>" alt="" >
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/index");?>" class="active">Anasayfa</a></li>
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/hakkimizda");?>">Hakkımızda</a></li>
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/faaliyet");?>">Faaliyet Alanları</a></li>
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/partner");?>">Partnerler</a></li>
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/yayin");?>">Yayınlar</a></li>
              <li class="scroll-to-section"><a href="<?php echo base_url("admin/iletisim");?>">İletişim</a></li>
              <li class="scroll-to-section" style="display:none;"><a href="contact-us.php"></a></li>
            </ul>        
            <a class="menu-trigger">
              <span style="background-color:#623e44;">Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>