<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Profil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-circle-o"></i> Profil</a></li>
        <li class="active"><?php echo $this->session->userdata('level'); ?></li>
      </ol>
    </section>

    <!-- disini tempat menaruh isi halaman -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <ul class="list-group">
              <li class="list-group-item">Nama : <?= $this->session->userdata('nama'); ?></li>
              <li class="list-group-item">Username : <?= $this->session->userdata('username'); ?></li>
              <li class="list-group-item">Email : <?= $this->session->userdata('email'); ?></li>
              <li class="list-group-item">ID : <?= $this->session->userdata('level'); ?></li>
            </ul>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
         
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

 </div>
</section>
