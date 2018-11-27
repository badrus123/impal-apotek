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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
 <!-- TABLE: LATEST ORDERS -->
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

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
 								<p><?php echo $value->tipe_obat ?></p>
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
              <a href="" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="#" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
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