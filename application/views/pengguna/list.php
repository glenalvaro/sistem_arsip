<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Pengguna</a></li>
        <li class="active">Data</li>
      </ol>
    </section>

<!-- disini tempat menaruh isi halaman -->
<section class="content">
   <?php
    echo $this->session->flashdata('msg');
    ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
            <div>
               <a href="<?php echo base_url('pengguna/tambah'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Pengguna Baru</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Foto</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Username</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Level</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($pengguna as $p){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td class="text-center">
                    <img src="<?php echo base_url(); ?>upload/img/<?php echo $p->foto; ?>" width="50" height="50"> 
                  </td>
                  <td class="text-center"><?php echo $p->nama ?></td>
                  <td class="text-center"><?php echo $p->username ?></td>
                  <td class="text-center"><?php echo $p->email ?></td>
                  <td><?php echo $p->level ?></td>
                  <td class="text-center">
                      <a href="Pengguna/detail/<?php echo $p->id; ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                        <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a href="pengguna/edit/<?php echo $p->id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                      <?php }; ?>
                       <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a onclick="deleteConfirm('<?php echo site_url('pengguna/hapus/'.$p->id) ?>')"
                      href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                    <?php }; ?>
                  </td>
                </tr>
            <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


         <!--MODAL HAPUS-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">
                  <input type="hidden" name="kode" id="id_cus" value="">
                  <p>Apakah Anda yakin mau menghapus surat ini?</p>   
                </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
              </div>
              </form>
          </div>
      </div>
  </div>
<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</div>
</div>
</section>
</div>