 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YAYINLAR KART</title>
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
            <h1 class="m-0">Yayınlar Kart Görüntüleme Sayfası</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">AYARLAR</a></li>
              <li class="breadcrumb-item active">YAYINLAR KART GÖRÜNTÜLEME SAYFASI</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <div style="margin-left:500px; margin-right:500px;" style="color:#009531;">

    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="box box-solid">
              <div class="box-body">
                <table id="banka" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th>Kart Başlık</th>
                      <th>Kart Önsöz</th>
                      <th>Blog Sayfa Başlığı</th>
                      <th>Blog Sayfa Açıklama</th>
                      <th>Açıklama Detay</th>

                      <th>Kart Resim</th>
                      <th>Eklendiği Tarih</th>
                      <th>Update Edildiği Tarih</th>
                      <th>İşlemler</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($yayinlar as $yayinlarogeleri) {
                     ?>

                     <tr>

                      <td>
                        <p><?php echo $yayinlarogeleri->b_onbaslik ; ?></p>
                      </td>

                      <td>
                        <p><?php echo $yayinlarogeleri->b_onsoz ; ?></p>
                      </td>

                      <td>
                        <p><?php echo $yayinlarogeleri->b_sayfabaslik; ?></p>
                      </td>


                        <td>
                           <p><?php
                          $maxKarakterSayisi = 60; 
                          $metin = $yayinlarogeleri->b_sayfaaciklama;


                          if (strlen($metin) > $maxKarakterSayisi) {
                            $kisaltilmisMetin = substr($metin, 0, $maxKarakterSayisi) . '...';
                          } else {
                            $kisaltilmisMetin = $metin;
                          }

                          echo "<p>$kisaltilmisMetin</p>";
                          ?></p> 
                        </td>

                      <td>
                          <p>
                            <button type="button" style="width: 100%;" class="btn btn-info" data-toggle="modal" data-target="#modal-<?php echo $yayinlarogeleri->id; ?>">
                              Detayları Görüntüle
                            </button>
                          </p>
                          <style>
                            .modal-body {
                              white-space: pre-wrap;
                              word-wrap: break-word;
                            }
                          </style>
                          <div class="modal fade" id="modal-<?php echo $yayinlarogeleri->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalLabel">Mesaj Detayı</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <?php echo $yayinlarogeleri->b_sayfaaciklama; ?>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </td>

                       <td>
                        <p><?php echo $yayinlarogeleri->b_resim; ?></p>
                      </td>

                      <td>
                        <p><?php echo $yayinlarogeleri->b_eklendigitarih; ?></p>
                      </td>

                      <td>
                        <p><?php echo $yayinlarogeleri->b_updateedildigitarih; ?></p>
                      </td>

                      <td>
                        <a href="<?php echo base_url('admin/yayinlarkartduzenlee/'.$yayinlarogeleri->id.''); ?>" class="btn btn btn-success"><i class="fa fa-edit"></i> Düzenle</a>


                        <button type="button" class="btn btn-danger" title="urunler sil" data-toggle="modal" data-target="#modal-danger-"><i class="fas fa-trash"></i></button>

                        <div class="modal fade" id="modal-danger-">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title"><?php echo $yayinlarogeleri->b_onbaslik; ?> </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Silmek istediğinizden emin misiniz?&hellip;</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hayır</button>
                                <a href="<?php echo base_url('admin/yayinlarkartsil/'.$yayinlarogeleri->id.'') ?>" class="button"><button type="button" class="btn btn-outline-danger">Evet</button></a>
                              </div>
                            </div>

                          </div>

                        </div>
                      </td>


                    </tr>
                  <?php  }?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>





<?php $this->load->view('admin/include/footer'); ?>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url(''); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(''); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(''); ?>dist/js/adminlte.min.js"></script>
</body>
</html>