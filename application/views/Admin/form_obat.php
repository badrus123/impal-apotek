<?php 
 $this->load->view('Admin/nav_admin');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'Home_admin/index'?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url().'Form_obat/index'?>">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <section class="content">
     <div class="box box-default">
        <div class="box-header with-border">
                <h3 class="box-title">INPUT OBAT</h3>
                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <h4>Nama Obat</h4>
                            <input  class="form-control select2" type="text" name="nama_obat" placeholder="nama obat" style=" width: 100%;">
                        </div>
                        <div class="form-group">
                            <label><h4>Tipe Obat</h4></label>
                                <select class="form-control select2" style="width: 100%;">
                                <option>PIL</option>
                                <option>Sirup</option>
                                <option>Tablet</option>
                                <option>None</option>
                             </select>
                        </div>
                        <div>
                            <h4>Harga Obat</h4>
                            <input  class="form-control select2" type="text" name="harga_obat" placeholder="harga obat" style=" width: 100%;">
                        </div>
                        <div>
                            <h4>Promo Obat</h4>
                            <input  class="form-control select2" type="text" name="promo_obat" placeholder="promo obat" style=" width: 100%;">
                        </div>
                        <div class="form-group">
                            <label><h4>Produk Obat</h4></label>
                                <select class="form-control select2" style="width: 100%;">
                                <option>Alat Kesehatan</option>
                                <option>Bayi dan Anak</option>
                                <option>Obat</option>
                                <option>perawat Kecantikan</option>
                                <option>personal</option>
                                <option>Supleme</option>
                             </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <h4>Sisa Obat</h4>
                            <input  class="form-control select2" type="text" name="sisa_obat" placeholder="sisa obat" style=" width: 100%;">
                        </div>
                        <div>
                            <h4>Deskripsi Obat</h4>
                            <textarea class="form-control select2" rows="5" name="deskripsi_Obat" id="comment" placeholder="Tulis Deskripsi Obat"></textarea>
                        </div>
                        <div>
                            <h4>Foto Obat</h4>
                            <input type="file" name="foto_obat">
                        </div>
                        <div>
                            </br>
                            </br>
                            <input class="form-control select2 btn btn-primary" type="submit" value="submit" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    </section>




</div>
<?php 
 $this->load->view('Admin/footer_admin');
?>