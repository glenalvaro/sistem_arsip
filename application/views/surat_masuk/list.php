<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i> Manajemen Arsip</a></li>
        <li class="active">Surat Masuk</li>
      </ol>
    </section>
<!-- disini tempat menaruh isi halaman -->
<section class="content">
  <?php
    echo $this->session->flashdata('msg');
  ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
            <div>
              <a href="<?php echo base_url('surat_masuk/tambah'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Surat Masuk</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Surat</th>
                  <th class="text-center">Nomor Surat</th>
                  <th class="text-center">Tanggal Surat</th>
                  <th class="text-center">Perihal</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($surat_masuk as $s){ 
                ?>
                <tr>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td class="text-center"><?php echo $s->nama_surat ?></td>
                  <td class="text-center"><?php echo $s->no_surat ?></td>
                  <td class="text-center"><?php echo $s->tgl_surat ?></td>
                  <td class="text-center"><?php echo $s->perihal ?></td>
                  <td class="text-center">
                      <a href="<?= base_url(); ?>/upload/surat_masuk/<?= $s->file; ?>" class="btn btn-warning btn-xs" download><i class="fa fa-download"></i></a>
                      <a href="surat_masuk/detail/<?php echo $s->id; ?>" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                        <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a href="surat_masuk/edit/<?php echo $s->id; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                      <?php }; ?>
                       <?php 
                       if ($this->session->userdata('level')=='admin') { ?>
                      <a onclick="deleteConfirm('<?php echo site_url('surat_masuk/hapus/'.$s->id) ?>')"
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


