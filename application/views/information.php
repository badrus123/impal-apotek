<?php 
 $this->load->view('nav');
?>


<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('<?php echo base_url().'assets/images/bg_2.jpg'?>" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
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
    	</div>
    </section>
    

 <?php 
 $this->load->view('footer');
?>

