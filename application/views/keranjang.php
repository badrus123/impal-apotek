<?php 
  if ($this->session->userdata('logged_in')=='Sudah Login') {
    $this->load->view('nav_logout');
  }else{
    $this->load->view('nav');
  }
 
 ?>
 <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg'?>" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="<?php echo base_url().'Home/index'?>">Home</a></span> <span>Promo</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Inilah sejumlah produk kami yang kami berikan </h1>
            </div>
          </div>
        </div>
      </div>
    </section>


<div class="container">
<?php foreach ($transaksi -> result() as  $value) { ?>  
      <table class="table table-condensed">
        <thead>
          <tr>
           
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
      <div align="center" ><h1>Pilih Produk</h1></div>
    <div class="container">
          
      <table class="table table-condensed">
      
        <tbody>
          <form method="POST" action="<?php echo base_url('Keranjang/add'); ?>" enctype="multipart/form-data">
          <tr>
              <td><img src="<?php echo base_url().'obat/'.$value->image ?>" height="200" width="200" ></td>
              <input type="hidden" value="<?php echo $value->id_obat ?>" name="id_obat">
              <input type="hidden" value="<?php echo $value->harga_obat ?>" name="harga_obat">
            <td><h1><a href="html.html" style="color: black; text-decoration: none;" ><?php echo 'Obat '.$value->nama_obat ?></a></h1><br>
              <p><?php echo $value->deskripsi_obat ?></p><br>
              <h2><?php echo $value->harga_obat ?></h2></td>
            <td><h1 style="color: green">Stok Tersedia</h1><br>
              <input  type="number" min="2" max="100" step="2" name="order" />
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container" style="margin-top: 80px">
     <div align="center">
      <input type="submit" class="btn btn-primary"  style="width: 1000px; height: 70px" value="Lanjut Pembayaran" >
     </div>
    </div>
    <?php } ?>
    </form>
 <?php 
 $this->load->view('footer');
?>