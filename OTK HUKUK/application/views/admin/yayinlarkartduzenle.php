

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ürün Düzenle</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/fevicon.png" type="image/x-icon">
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/'); ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">


  <?php $this->load->view('admin/include/sidebar'); ?>
  <?php $this->load->view('admin/include/header'); ?>






  <!-- Content Wrapper. Contains page content -->
  <?php flashread(); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Yayınlar Kart Düzenleme Sayfası</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">Hizmetler Kart Düzenleme Sayfası</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    

    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/yayinlarkartduzenleee'); ?>" role="form" method="POST" enctype= "multipart/form-data">

        <div class="form-group">
          <label>Yayınlar Ön Kart Başlık</label>
          <input name="b_onbaslikduzenle" class="form-control" type="text" value="<?php echo $yayinlar->b_onbaslik ; ?>">
          <p class="help-block">Yayınlar kısmında bulunan kartların ön başlık kısmını düzenleyebilirsiniz.</p>
        </div>
        <div class="form-group">
          <label>Yayınlar Önsöz Kart Açıklama</label>
          <input name="b_onsozduzenle" class="form-control" type="text" value="<?php echo $yayinlar->b_onsoz; ?>">
          <p class="help-block">Yayınlar kısmında bulunan kartların önsöz kısmını düzenleyebilirsiniz.</p>
        </div>

        <div class="form-group">
          <label>Yayınlar Ana Sayfa Başlık</label>
          <input name="b_sayfabaslikduzenle" class="form-control" type="text" value="<?php echo $yayinlar->b_sayfabaslik; ?>">
          <p class="help-block">Blog ana sayfasında ki başlığı düzenleyebilirsiniz.</p>
        </div>

        <div class="form-group">
          <label>Yayınlar Anasayfa Açıklama Giriniz</label>
          <textarea  name="b_sayfaaciklamaduzenle" id="editor" rows="5" class="form-control"><?php echo $yayinlar->b_sayfaaciklama; ?></textarea>
          <p class="help-block">Blog ana sayfasında ki açıklamayı düzenleyebilirsiniz.</p>
        </div>


      
        
        
        
        
        <input type="hidden" name="id" value="<?php echo $yayinlar ->id ; ?>">
        
      </select>
      <br>
      <br>


      <button  style="margin-left:500px;" name="kaydett" type="submit" class="btn btn-info">KAYDET </button>






    </form>
    <br>

    <form action="<?php echo base_url('admin/yayinlarkartduzenleee'); ?>" role="form" method="POST" enctype= "multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $yayinlar ->id; ?>">
    <div class="form-group">
      <label>Kart Resim Seçiniz</label>
      <input name="b_resim" class="form-control" type="file" >
      <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALIDIR.KART RESİMLERİ 360X400BOYUTLARINDA OLMALIDIR.</p>
    </div>

    <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-danger">DEĞİŞTİR </button>
  </form>




    <br><br><br><br>
  </div>






  <?php $this->load->view('admin/include/footer'); ?>

  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url('/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('/'); ?>dist/js/adminlte.min.js"></script>

</body>
</html>