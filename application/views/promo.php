<?php 
 $this->load->view('nav');
?>
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg'?>" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Promo</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">promo yang kami berikan</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
<div class="container">
    <br>
    <h2 align="center">Promo Obat november</h2>
	<br>
	<div class="row" id="ads">
    <!-- Category Card -->
    <?php foreach ($obat -> result() as  $value) { ?>
    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-year"><?php echo $value->promo_obat ?>%</span>
                <img class="img-fluid" src="<?php echo base_url().'obat/'.$value->image ?>" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge"><?php echo $value->type_obat ?></span>
                <span class="card-detail-badge"><?php echo $value->harga_obat ?></span>
                <span class="card-detail-badge">expr 15 januari 2019</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5><?php echo $value->nama_obat ?></h5>
                </div>
                <a class="ad-btn" href="#">View</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div>

<?php 
 $this->load->view('footer');
?>