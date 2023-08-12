<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle-o"></i> Pengguna</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-md-3">
         <div class="box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Foto</h4>
            </div>
            <div class="box-body">
              <?php foreach($detail as $i){ ?>
              <center><img src="<?php echo base_url(); ?>upload/img/<?php echo $i->foto; ?>" class="profile-user-img img-responsive">
              </center>
              <?php } ?> 
              <br>   
            </div>  
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title text-bold">Detail Data Pengguna</h4>
            </div>
            <div class="box-body">
              <?php foreach($detail as $i){ ?>
            <table class="table">
                <tr>
                  <th>Nama Lengkap</th>
                  <td><?php echo $i->nama ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?php echo $i->email ?></td>
                </tr>
                <tr>
                  <th>Tempat Lahir</th>
                  <td><?php echo $i->tempat_lahir ?></td>
                </tr>
                <tr>
                  <th>Tanggal Lahir</th>
                  <td><?php echo $i->tgl_lahir ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?php echo $i->alamat ?></td>
                </tr>
                <tr>
                  <th>Username</th>
                  <td><?php echo $i->username ?></td>
                </tr>
                <tr>
                  <th>Username</th>
                  <td><?php echo $i->pass ?></td>
                </tr>
                <tr>
                  <th>Level</th>
                  <td><?php echo $i->level ?></td>
                </tr>
              </table>
            <?php } ?>
            <div class="box-footer">
                <a href="<?php echo base_url('pengguna'); ?>" class="btn btn-info" style="float: right;" >Kembali</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
</div>



