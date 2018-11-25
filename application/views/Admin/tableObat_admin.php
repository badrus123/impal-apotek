<?php 
 $this->load->view('Admin/nav_admin');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tabel Obat
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
              <h3 class="box-title">Latest Orders</h3>

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
                    <th>ID Obat</th>
                    <th>nama obat</th>
                    <th>tipe obat</th>
                    <th>harga obat</th>
                    <th>promo obat</th>
                    <th>sisa obat</th>
                    <th>produk obat</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($obat -> result() as  $value) { ?>
                  <tr>
                    <td><a href="#"><?php echo $value->id_obat ?></a></td>
                    <td><?php echo $value->nama_obat ?></td>
                    <td><?php echo $value->type_obat ?></td>
                    <td><?php echo $value->harga_obat ?></td>
                    <td><?php echo $value->promo_obat ?></td>
                    <td><?php echo $value->sisa_obat ?></td>
                    <td><?php echo $value->produk_obat ?></td>
                    <td><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></button></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
          <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Obat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-6">
              <div>
                  <h4>id Obat</h4>
                  <input  class="form-control select2" type="text" name="id_obat" placeholder="id obat" style=" width: 100%;">
              </div>
              <div>
                  <h4>Nama Obat</h4>
                  <input  class="form-control select2" type="text" name="nama_obat" placeholder="nama obat" style=" width: 100%;">
               </div>
                            <div class="form-group">
                  <label><h4>Tipe Obat</h4></label>
                      <select class="form-control select2" name="type_obat" style="width: 100%;">
                      <option value="PIL">PIL</option>
                      <option value="Sirup">Sirup</option>
                      <option value="Tablet">Tablet</option>
                      <option value="None">None</option>
                  </
              </div>
              <div>
                  <h4>Harga Obat</h4>
                  <input  class="form-control select2" type="text" name="harga_obat" placeholder="harga obat" style=" width: 100%;">
              </div>
              <div>
                  <h4>Promo Obat</h4>
                  <input  class="form-control select2" type="text" name="promo_obat" placeholder="promo obat" style=" width: 100%;">
              </div>
              <div>
                  <h4>Sisa Obat</h4>
                  <input  class="form-control select2" type="text" name="sisa_obat" placeholder="sisa obat" style=" width: 100%;">
              </div>
          </div>
          <div class="col-md-6">
            <div>
                <h4>Deskripsi Obat</h4>
                <textarea class="form-control select2" rows="5" name="deskripsi_obat" id="comment" placeholder="Tulis Deskripsi Obat"></textarea>
            </div>
            <div>
                <h4>Foto Obat</h4>
                <input type="file" name="image">
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
        
        <!-- Modal footer -->
        <div class="modal-footer">
        </div>
        
      </div>
    </div>
  </div>
  <!-- end modal -->


</div>

<?php 
 $this->load->view('Admin/footer_admin');
?>