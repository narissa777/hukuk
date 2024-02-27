
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PARTNERLER</title>
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
            <h1 class="m-0">PARTNERLER ANASAYFA DÜZENLEME PANELİ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">PARTNERLER ANASAYFA DÜZENLEME </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/partnerleranasayfaduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">



   
        <div class="form-group">
          <label>Partnerler Ana Sayfa  Başlık</label>
          <input name="p_baslik" class="form-control" type="text" value="<?php echo $partnerlerimiz[0]->p_baslik ; ?>">
          <p class="help-block">Başlık ekleyiniz.</p>
        </div>
        <div class="form-group">
          <label>Partnerler Ana Sayfa Açıklama</label>
          <input name="p_aciklama" class="form-control" type="text" value="<?php echo $partnerlerimiz[0]->p_aciklama; ?>">
          <p class="help-block">Açıklama ekleyiniz.</p>
        </div>

       
        
        
        
        
        <input type="hidden" name="id" value="<?php echo $partnerlerimiz[0] ->id ; ?>">
        <button  style="margin-left:500px;" name="" type="submit" class="btn btn-info">KAYDET </button>
        
      </select>
      <br>
      <br>


      






    </form>





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