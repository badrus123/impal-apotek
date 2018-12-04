<?php 
  if ($this->session->userdata('logged_in')=='Sudah Login') {
    $this->load->view('Admin/nav_admin');
  }

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tabel Pengembalian
        <small>panel admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tabel Obat</li>
      </ol>
    </section>
    <br>
 <!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pengembalian Obat</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>email</th>
                    <th>jenis obat</th>
                    <th>jumlah obat</th>
                    <th>tanggal pengembalian</th>

                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($obat -> result() as  $value) { ?>
                  <tr>
                    <td><?php echo $value->nama  ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><?php echo $value->jenis_obat ?></td>
                    <td><?php echo $value->jumlah_obat ?></td>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          <!-- /.box -->
</div>
          <!-- The Modal -->

</div>

<?php 
 $this->load->view('Admin/footer_admin');
?>