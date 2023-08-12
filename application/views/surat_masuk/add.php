<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-12">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Tambah Data Surat</legend>
                <div class="form-group">
                  <div class="col-lg-6">
                    <a href="<?php echo base_url('surat_masuk'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Surat Masuk</a>
                  </div>
                </div>
                <br>
                <br>
                <form class="form-horizontal" action="tambah_aksi" method="post" enctype="multipart/form-data">

                   <div class="form-group">
                    <label class="control-label col-lg-2">Nama Surat Masuk</label>
                    <div class="col-lg-6">
                      <input type="text" name="nama_surat" class="form-control" value="" placeholder="Nama Surat" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Tanggal Masuk</label>
                    <div class="col-lg-6">
                      <input type="datetime-local" name="tgl_masuk" class="form-control" value="" placeholder="Tanggal Masuk" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Pengirim</label>
                    <div class="col-lg-6">
                      <input type="text" name="pengirim" class="form-control" value="" placeholder="Pengirim" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">No Surat</label>
                    <div class="col-lg-6">
                      <input type="text" name="no_surat" class="form-control" value="" placeholder="No Surat" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Tanggal Surat</label>
                    <div class="col-lg-6">
                      <input type="date" name="tgl_surat" class="form-control" value="" placeholder="tgl surat" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Kepada</label>
                    <div class="col-lg-6">
                      <input type="text" name="kepada" class="form-control" value="" placeholder="Kepada" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Perihal</label>
                    <div class="col-lg-6">
                      <input type="text" name="perihal" class="form-control" value="" placeholder="perihal surat" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2">Unggah Dokumen</label>
                    <div class="col-lg-6">
                      <input type="file" name="file" class="form-control" value="" required>
                      <small>Ukuran file max 5 mb</small>
                      <small class="text-red"> Eks. pdf|docx|jpg|png</small>

                    </div>
                  </div>

                <div class='box-footer'>
                  <div class='col-lg-8'>
                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
                  </div>

                </form>
              </fieldset>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
