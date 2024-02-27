
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TABLO 3</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>images/fevicon.png" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini">


  <?php $this->load->view('admin/include/sidebar'); ?>
  <?php $this->load->view('admin/include/header'); ?>



  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TABLO 3 DÜZENLEME PANELİ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">TABLO 3 DÜZENLEME PANELİ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/tablo3duzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">



        <div class="form-group">
          <label>Kutu 3 Başlık Düzenle</label>
          <input name="t_baslik" class="form-control" type="text" value="<?php echo $tablo3[0]->t_baslik; ?>" >
          <p class="help-block">Kutu 3 in Başlığını Düzenleyebilirsiniz.</p>
        </div>

        <br>


        <div class="form-group">
          <label>Tablo 3 Ana Başlık Düzenle</label>
          <input name="t_anabaslik" class="form-control" type="text" value="<?php echo $tablo3[0]->t_anabaslik; ?>" >
          <p class="help-block">Tablo 3 in Ana Başlığını Düzenleyebilirsiniz.</p>
        </div>

        <br>



          <div class="form-group">
          <label>Açıklama Giriniz</label>
          <textarea name="t_anaaciklama" id="editor" rows="5" class="form-control"><?php echo $tablo3[0]->t_anaaciklama; ?></textarea>
          <p class="help-block"></p>
        </div>


        <br><br>



        <div class="form-group">
          <label>Tablo 3 Resim Düzenle</label>
          <input name="t_resim" class="form-control" type="file" >
          <p class="help-block">SEÇECEĞİNİZ RESİMİN İSMİNDE TÜRKÇE KARAKTER BULUNMAMALI VE BOYUTLARI DAHA UYGUN BİR GÖRÜNÜM İÇİN 400 X 600 FORMATINDA OLMALIDIR</p>
        </div>
        <button  style="margin-left:500px;" name="kaydet" type="submit" class="btn btn-info">KAYDET </button>

      </form>
      <br><br><br><br>
    </div>


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