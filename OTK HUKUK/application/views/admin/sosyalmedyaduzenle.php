
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOSYAL MEDYA</title>
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
            <h1 class="m-0">SOSYAL MEDYA DÜZENLEME PANELİ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ANA SAYFA</a></li>
              <li class="breadcrumb-item active">SOSYAL MEDYA  ANASAYFA DÜZENLEME </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <?php flashread(); ?>

    <div style="margin-left:50px; margin-right:50px;"  class="panel-body">
      <form action="<?php echo base_url('admin/sosyalmedyaduzenlee'); ?>" role="form" method="POST" enctype= "multipart/form-data">



   
        <div class="form-group">
          <label>Facebook Düzenle</label>
          <input name="f_facebook" class="form-control" type="text" value="<?php echo $sosyalmedya[0]->f_facebook ; ?>">
          <p class="help-block">Facebook Adresi Ekleyiniz</p>
        </div>

        <div class="form-group">
          <label>Twitter Düzenle </label>
          <input name="f_twitter" class="form-control" type="text" value="<?php echo $sosyalmedya[0]->f_twitter; ?>">
          <p class="help-block">Twitter Adresi Ekleyiniz.</p>
        </div>

        <div class="form-group">
          <label>İnstagram Düzenle</label>
          <input name="f_instagram" class="form-control" type="text" value="<?php echo $sosyalmedya[0]->f_instagram; ?>">
          <p class="help-block">İnstagram Adresi Ekleyiniz.</p>
        </div>

        <div class="form-group">
          <label>Linkedin Düzenle Açıklama</label>
          <input name="f_linkedin" class="form-control" type="text" value="<?php echo $sosyalmedya[0]->f_linkedin; ?>">
          <p class="help-block">Linkedin Adresi Ekleyiniz.</p>
        </div>

       
        
        
        
        
        <input type="hidden" name="id" value="<?php echo $sosyalmedya[0] ->id ; ?>">
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