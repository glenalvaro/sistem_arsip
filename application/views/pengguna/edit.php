<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle-o"></i> Pengguna</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

<?php foreach($user as $e){ ?>
<form action="<?php echo base_url('pengguna/update'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Foto Sebelumnya</h4>
            </div>
            <div class="box-body">
              <center><img src="<?php echo base_url(); ?>upload/img/<?php echo $e->foto; ?>" width="190" height="170" value="<?php echo $e->foto; ?>">
              </center>
              <br>  
              <center>
              <div class="input-group input-group-sm">
              <input type="file" name="foto" class="form-control" id="foto">
              </div>
              <center>
              <small>Ukr max 5 mb</small>
              <small class="text-red">gif|jpg|png</small>
              </center>
              </center>    
            </div>  
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <legend class="text-bold"> Edit Data Pengguna</legend>
                <a href="<?php echo base_url('pengguna'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Manajemen Pengguna</a>
                <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="hidden" name="id" value="<?php echo $e->id ?>">
                      <input type="text" name="nama" class="form-control" value="<?php echo $e->nama ?>">
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" name="email" class="form-control" value="<?php echo $e->email ?>">
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $e->tempat_lahir ?>" placeholder="Tempat" maxlength="100" required>
                    </div>
                    <label class="col-sm-1 control-label">Tgl Lahir</label>
                    <div class="col-sm-3">
                      <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $e->tgl_lahir ?>" placeholder="Tempat Tgl Lahir" maxlength="100" required>
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" class="form-control" value="<?php echo $e->alamat ?>">
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" value="<?php echo $e->username ?>" >
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="text" name="pass" class="form-control" value="<?php echo $e->pass ?>">
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                        <label class="col-sm-3 control-label" for="last-name">Level </label>
                        <div class="col-sm-8">
                          <select name="level" class="select2_single form-control" tabindex="-1">
                            <option value="<?php echo $e->level ?>"><?php echo $e->level ?>
                              </option>
                              <option>admin</option>
                              <option>pegawai</option>
                          </select>
                        </div>
                  </div>
                  <br>
                <br>
                  <div class='box-footer'>
                  <div class='col-xs-12'>
                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
            </div>
              </fieldset>
              
            </div>
          </div>
        </div>
      </div>
</form>
<?php } ?>  
    </section>
</div>



