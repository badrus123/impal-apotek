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
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Details</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Inilah sejumlah produk kami yang kami berikan </h1>
            </div>
          </div>
        </div>
      </div>
    </section>

<section>
    <?php foreach ($obat -> result() as  $value) { ?> 
    	<!--Event Title-->
	<div class="event-title">
		<h2 class="event-name">Details Page</h2>
	</div>

	<!--Obat Overview-->
	<div class="row justify-content-center mt-4">
		<div class="col-md-6">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="<?php echo base_url().'obat/'.$value->image ?>" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url().'obat/'.$value->image ?>" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="<?php echo base_url().'obat/'.$value->image ?>" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>	
		<!--Obat summary card-->
		<div class="col-md-4 card-summary">
			<div class="card">
				<div class="card-body">
                    <h4 class="card-title"><b><?php echo $value->nama_obat ?></b></h4>
					<h4 class="card-title">Rp.<b><?php echo $value->harga_obat ?></b></h4>
                    <h6 class="mt-3 mb-4">Sisa Obat : <b><?php echo $value->sisa_obat ?></b></h6>
                    <h6 class="mt-3 mb-4">Discount Obat : <b><?php echo $value->promo_obat ?></b></h6>
				</div>
            </div>
            <a class="btn btn-lg btn-help-danus w-100 mt-3" href="<?php echo site_url("keranjang/index/".$value->id_obat) ?>">Masukan Keranjang</a>
        </div>
	</div>
 
     <!--Details of Event-->	
	<div class="row justify-content-center">
		<div class="col-md-12 content">
			<!--Content of Detail's Page--> 
			<div class="detail-content py-5 px-5 mb-4 rounded" id="detailContent">
				<h4 class="mb-2">Deskripsi Obat</h4>
				<p class=" text-justify mb-2">
                <?php echo $value->deskripsi_obat ?>
				</p>
				<h4 class="mb-2">Type obat</h4>
				<a><?php echo $value->type_obat ?><br></a>
				<h4 class="mb-2">Produk Obat</h4>
				<a><?php echo $value->produk_obat ?><br></a>
			</div>
		</div>
	</div>

    <!--Detail Page-->
    <?php } ?>
</section>

    
    
<?php 
 $this->load->view('footer');
?>