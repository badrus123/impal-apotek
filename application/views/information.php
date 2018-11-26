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
    			
    			<div class="col-md-12 color-3 p-4">
    				<h3 class="mb-2">Pengembalian Obat</h3>
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
                    <div class="icon"><span class="icon-phone2"></span></div>
                    <input type="text" class="form-control" id="phone" placeholder="Jenis Obat">
                  </div>
	              </div>
	              <div class="col-sm-4">
	                <div class="form-group">
	                	<div class="icon"><span class="ion-ios-clock"></span></div>
	                  <input type="text" class="form-control appointment_time" placeholder="Jumlah">
	                </div>
	              </div>
	              <div class="col-sm-4">
	                
                  <div class="form-group">
                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                    <input type="text" class="form-control appointment_date  " placeholder="Tanggal Pengembalian">
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
        <div class = "col-sm-12">
          <center> <h1 class="  ">OUR ACHIEVEMENT</h1> </center>
            <div class="items-leading clearfix ">
              <img src="assets/images/piala.png" height ="500px" align="center" />
            </div>
        </div>


    	</div>
    </section>

 <?php 
 $this->load->view('footer');
?>

