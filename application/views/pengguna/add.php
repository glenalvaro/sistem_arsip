<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tambah Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle-o"></i> Pengguna</a></li>
        <li class="active">Tambah</li>
      </ol>
    </section>


<form action="tambah_aksi" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Foto</h4>
            </div>
            <div class="box-body">
              <center><img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/kuser.png" alt="Pengguna">
              </center> 
              <br>
              <center><small>Ukr max 5 mb</small>
              <small class="text-red">gif||jpg|png</small>
              </center>
              <br>
              <center>
              <div class="input-group input-group-sm">
              <input type="file" name="foto" class="form-control" value="" required>
              </div>
              </center>    
            </div>  
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body">
              <fieldset class="content-group">
                <legend class="text-bold"> Tambah Pengguna Baru</legend>
                <a href="<?php echo base_url('pengguna'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Manajemen Pengguna</a>
                <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" value="" placeholder="Nama" required>
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" name="email" class="form-control" value="" placeholder="Email" required>
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Tempat Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" name="tempat_lahir" class="form-control" value="" placeholder="Tempat" maxlength="100" required>
                    </div>
                    <label class="col-sm-1 control-label">Tgl Lahir</label>
                    <div class="col-sm-3">
                      <input type="date" name="tgl_lahir" class="form-control" value="" placeholder="Tgl Lahir" maxlength="100" required>
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" name="alamat" class="form-control" value="" placeholder="Alamat" required>
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" name="username" class="form-control" value="" placeholder="Username" required>
                    </div>
                  </div>
                  <br>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="pass" class="form-control" value="" placeholder="Masukan Password" required>
                    </div>
                  </div>
                  <br>
                <br>
                  <div class="form-group">
                        <label class="col-sm-3 control-label" for="last-name">Level </label>
                        <div class="col-sm-8">
                          <select name="level" class="select2_single form-control" tabindex="-1" required>
                            <option disabled selected>--Pilih Level--</option>               
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
</section>
</div>



