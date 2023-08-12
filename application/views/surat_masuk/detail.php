<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Surat Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i> Manajemen Arsip</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Detail Surat Masuk</h3>
          <br><br>
          <?php foreach($detail as $d){ ?>
            <table class="table">
                <tr>
                  <th>Nama Surat</th>
                  <td><?php echo $d->nama_surat ?></td>
                </tr>
                <tr>
                  <th>Tanggal Masuk</th>
                  <td><?php echo $d->tgl_masuk ?></td>
                </tr>
                <tr>
                  <th>Pengirim</th>
                  <td><?php echo $d->pengirim ?></td>
                </tr>
                <tr>
                  <th>No Surat</th>
                  <td><?php echo $d->no_surat ?></td>
                </tr>
                <tr>
                  <th>Tanggal Surat</th>
                  <td><?php echo $d->tgl_surat ?></td>
                </tr>
                <tr>
                  <th>Kepada</th>
                  <td><?php echo $d->kepada ?></td>
                </tr>
                <tr>
                  <th>Perihal</th>
                  <td><?php echo $d->perihal ?></td>
                </tr>
                <tr>
                  <th>File</th>
                  <td><a href="<?= base_url(); ?>/upload/surat_masuk/<?= $d->file; ?>" target="_blank" ><?php echo $d->file ?></a>
                  </td>
                </tr>
              </table>
            <?php } ?>
            <div class="box-footer">
                <a href="<?php echo base_url('surat_masuk'); ?>" class="btn btn-info">Kembali</a>
                <a href="<?= base_url(); ?>/upload/surat_masuk/<?= $d->file; ?>" class="btn btn-primary" download><i class="fa fa-download"></i>  Download pdf</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


