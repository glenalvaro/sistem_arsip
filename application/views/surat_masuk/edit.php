<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-12"></div>
      <div class="col-md-12">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Edit Data</legend>
                 <?php foreach($user as $u){ ?>
                <form class="form-horizontal" action="<?php echo base_url('surat_masuk/update'); ?>" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label class="control-label col-lg-2">Nama Surat</label>
                    <div class="col-lg-6">
                      <input type="hidden" name="id" value="<?php echo $u->id ?>">
                      <input type="text" name="nama_surat" class="form-control" value="<?php echo $u->nama_surat ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Tanggal Masuk</label>
                    <div class="col-lg-6">
                      <input type="datetime" name="tgl_masuk" class="form-control" value="<?php echo $u->tgl_masuk ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Pengirim</label>
                    <div class="col-lg-6">
                      <input type="text" name="pengirim" class="form-control" value="<?php echo $u->pengirim ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">No Surat</label>
                    <div class="col-lg-6">
                      <input type="text" name="no_surat" class="form-control" value="<?php echo $u->no_surat ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Tanggal Surat</label>
                    <div class="col-lg-6">
                      <input type="date" name="tgl_surat" class="form-control" value="<?php echo $u->tgl_surat ?>" >
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Kepada</label>
                    <div class="col-lg-6">
                      <input type="text" name="kepada" class="form-control" value="<?php echo $u->kepada ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Perihal</label>
                    <div class="col-lg-6">
                      <input type="text" name="perihal" class="form-control" value="<?php echo $u->perihal ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-lg-2">Unggah Dokumen</label>
                    <div class="col-lg-6">
                      <input type="file" name="file" class="form-control" value="" required>
                      <a href="<?= base_url(); ?>/upload/surat_masuk/<?= $u->file; ?>" target="_blank" >Lihat File Sebelumya</a><br>
                      <small>Ukuran file max 5 mb</small>
                      <small>Ekstensi pdf|docx|jpg|png</small>

                    </div>
                  </div>

                  <div class="box-footer">
                    <a href="<?php echo base_url('surat_masuk'); ?>" class="btn btn-primary">Kembali</a>
                    <button type="submit" name="btnsimpan" class="btn btn-info">Simpan</button>
                  </div>
                </form>
                 <?php } ?>
              </fieldset>


            </div>

        </div>
      </div>
    </div>
</div>
</div>
