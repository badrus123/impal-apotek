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
                        <form method="POST" action="<?php echo base_url('Form_obat/unggah'); ?>" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div>
                                <h4>id Obat</h4>
                                <input  class="form-control select2" type="text" name="id_obat" placeholder="id obat" required="required" style=" width: 100%;">
                            </div>
                            <div>
                                <h4>Nama Obat</h4>
                                <input  class="form-control select2" type="text" name="nama_obat" placeholder="nama obat" required="required" style=" width: 100%;">
                            </div>
                            <div class="form-group">
                                <label><h4>Tipe Obat</h4></label>
                                    <select class="form-control select2" name="type_obat" style="width: 100%;">
                                    <option value="PIL">PIL</option>
                                    <option value="Sirup">Sirup</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="None">None</option>
                                </select>
                            </div>
                            <div>
                                <h4>Harga Obat</h4>
                                <input  class="form-control select2" type="text" name="harga_obat" required="required" placeholder="harga obat" style=" width: 100%;">
                            </div>
                            <div>
                                <h4>Promo Obat</h4>
                                <input  class="form-control select2" type="text" name="promo_obat" required="required" placeholder="promo obat" style=" width: 100%;">
                            </div>
                            <div>
                                <h4>Sisa Obat</h4>
                                <input  class="form-control select2" type="text" name="sisa_obat" required="required" placeholder="sisa obat" style=" width: 100%;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div>
                                <h4>Deskripsi Obat</h4>
                                <textarea class="form-control select2" rows="5" name="deskripsi_obat" id="comment" placeholder="Tulis Deskripsi Obat"  pattern=".{0}|.{100,}" required title="minimum 100 characters"></textarea>
                            </div>
                            <div>
                                <h4>Foto Obat</h4>
                                <input type="file" name="image" required="required">
                            </div>
                            <div class="form-group">
                                <label><h4>Produk Obat</h4></label>
                                    <select class="form-control select2" name="produk_obat" style="width: 100%;">
                                    <option value="Alat Kesehatan">Alat Kesehatan</option>
                                    <option value="Bayi dan Anak">Bayi dan Anak</option>
                                    <option value="Obat">Obat</option>
                                    <option value="Perawat Kecantikan">perawat Kecantikan</option>
                                    <option value="Personal">personal</option>
                                    <option value="Supleme">Supleme</option>
                                </select>
                            </div>
                            <div>
                                </br>
                                <input class="form-control select2 btn btn-primary" type="submit" value="submit" >
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </section>




</div>
<?php 
 $this->load->view('Admin/footer_admin');
?>