<?php 
 $this->load->view('Admin/nav_admin');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Obat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- small box -->
 <!-- TABLE: LATEST ORDERS -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Obat</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
           <?php foreach ($obat -> result() as  $value) { ?> 
            <div class="box-body">
              <div class="table-responsive">
              	 <div class="col-md-12">
                            <div align="center">
                                <img class="adminDetail" src="<?php echo base_url().'obat/'.$value->image ?>" style=" width:50%; ">
                            </div>
                            <div>
                                <h4>id Obat</h4>
                                <p><?php echo $value->id_obat ?></p>
                            </div>
                            <div>
                                <h4>Nama Obat</h4>
                                <p><?php echo $value->nama_obat ?></p>
                            </div>
                            <div>
                                <h4>Tipe Obat</h4>
 								                <p><?php echo $value->type_obat ?></p>
                            </div>
                            <div>
                                <h4>Harga Obat</h4>
                                <p><?php echo $value->harga_obat ?></p>
                            </div>
                            <div>
                                <h4>Promo Obat</h4>
                                <p><?php echo $value->promo_obat ?></p>
                            </div>
                            <div>
                                <h4>Sisa Obat</h4>
                                <p><?php echo $value->sisa_obat ?></p>
                            </div>
                            <div>
                                <h4>produk Obat</h4>
                                <p><?php echo $value->produk_obat ?></p>
                            </div>
                            <div>
                                <h4>Deskripsi Obat</h4>
                                <p><?php echo $value->deskripsi_obat ?></p>
                            </div>
                        </div>




              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo base_url().'Form_obat/index'?>" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="<?php echo base_url().'TableObat_admin/index'?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
         <?php } ?>
</div>

<?php 
 $this->load->view('Admin/footer_admin');
?>