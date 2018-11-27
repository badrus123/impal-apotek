<?php 
 $this->load->view('nav');
?>


    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url().'assets/images/bg_1.jpg'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Harta sejati adalah kesehatan, bukan emas dan perak</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Berobatlah agar kita tetap sehat selalu</p>
             </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Harta sejati adalah kesehatan, bukan emas dan perak</h1>
              <p class="mb-4">Berobatlah agar kita tetap sehat selalu</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-3 color-1 p-4">
    				<h3 class="mb-4">Mudah</h3>
    				<p>cari obat tanpa harus pergi dari rumah</p>
    			</div>
    			<div class="col-md-3 color-2 p-4">
    				<h3 class="mb-4">Buka Mulai</h3>
    				<p class="openinghours d-flex">
    					<span>Senin - Sabtu</span>
    					<span>8:00 - 19:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Sabtu</span>
    					<span>10:00 - 17:00</span>
    				</p>
    				<p class="openinghours d-flex">
    					<span>Minggu</span>
    					<span>10:00 - 16:00</span>
    				</p>
    			</div>
    			<div class="col-md-6 color-3 p-4">
    				<h3 class="mb-2">Pengambilan Obat</h3>
    				<form action="#" class="appointment-form">
	            <div class="row">
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-user"></span></div>
			              <input type="text" class="form-control" id="appointment_name" placeholder="nama">
			            </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-paper-plane"></span></div>
			              <input type="text" class="form-control" id="appointment_email" placeholder="email">
			            </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-calendar"></span></div>
	                  <input type="text" class="form-control appointment_date" placeholder="hari">
	                </div>    
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-clock"></span></div>
	                  <input type="text" class="form-control appointment_time" placeholder="jam">
	                </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="icon-phone2"></span></div>
	                  <input type="text" class="form-control" id="phone" placeholder="no tlpn">
	                </div>
	              </div>
	            </div>
	            <div class="form-group">
                <input type="file" class="btn btn-info"  name="fileToUpload" id="fileToUpload">
              </div>
              <div><input type="submit" value="buat perjanjian" class="btn btn-warning"></div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

    
<section class="ftco-section">
      <!--Card list!-->       
      <div class="mx-auto col-md-10 pt-5">
         <div class="card-deck">
           <div id="list-event-card" class="row">
             <!--TEMPLATE FOR DYNAMIC CARD LIST-->
             <?php $i = 1;?>
             <?php foreach ($obat -> result() as  $value) { ?>
              <?php if($i <= 6){?>  
                <div class="col-lg-4 col-md-6 col-sm-6 pb-5">
                  <div class="card">
                    <a class="img-popup-link" href="<?php echo base_url().'obat/'.$value->image ?>"><img class="card-img-top" src="<?php echo base_url().'obat/'.$value->image ?>" alt= class="card-img-top""Card image cap"></a>
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $value->nama_obat ?></h3>
                      <h6 class="card-subtitle text-muted pb-3"><?php echo $value->type_obat ?></h6>
                      <p class="card-text pt-2">
                      <?php echo $value->deskripsi_obat ?>
                      </p>
                      <div>
                        <ul class="list-inline">
                          <li class="list-inline-item text-center card-list-border card-list-footer">
                            <a class="card-list-text"><b>Harga</br></b></a>
                            <a class="card-list-subtext"><?php echo $value->harga_obat ?></a>
                          </li>
                          <li class="list-inline-item text-center card-list-border card-list-footer">
                            <a class="card-list-text"><b>Discount</br></b></a>
                            <a class="card-list-subtext"><?php echo $value->promo_obat ?></a>
                          </li>
                          <li class="list-inline-item list-subtext3 text-center card-list-footer">
                            <a class="card-list-text"><b>Sisa</br></b></a>
                            <a class="card-list-subtext"><?php echo $value->sisa_obat ?></a>
                          </li>
                        </ul>
                      </div>
                      <a href="<?php echo site_url("Detail_user/index/".$value->id_obat) ?>" class="event-card-link"></a>
                    </div>
                  </div>
                </div>
              <?php $i++;} ?>
             <?php } ?>
             </div>
           </div>
         </div>
           <div align="center" >
              <a role="button" class="btn btn-outline-warning btn-dropdown mx-auto">Lihat Semua</a>
         </div>
       </div>
</section>

 <?php 
 $this->load->view('footer');
?>

