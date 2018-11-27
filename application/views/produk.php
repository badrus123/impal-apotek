<?php 
 $this->load->view('nav');
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

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">produk Obat</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Alat Kesehatan<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menuone" class="collapse show">
						          <div class="card-body">
                                      <a align="center" href="">obat</a>
								</div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">bayi dan Anak <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menutwo" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Obat <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu3" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>

    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">perawat kecantika <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu4" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">personal<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu5" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">Supleme<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu6" class="collapse">
						          <div class="card-body">
												<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						          </div>
						        </div>
						      </div>
    						</div>
    					</div>
				    </div>
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
             <?php foreach ($obat -> result() as  $value) { ?> 
             <div class="col-lg-4 col-md-6 col-sm-6 pb-5">
               <div class="card">
                 <a class="img-popup-link" href="<?php echo base_url().'obat/'.$value->image ?>"><img class="card-img-top" src="<?php echo base_url().'obat/'.$value->image ?>" alt= class="card-img-top""Card image cap"></a>
                 <div class="card-body">
                   <h3 class="card-title"><?php echo $value->nama_obat ?></h3>
                   <h6 class="card-subtitle text-muted pb-3"><?php echo $value->type_obat ?></h6>
                   <p class="card-text pt-2">
                     Paracetamol adalah obat yang biasanya digunakan untuk mengobati rasa sakit ringan hingga sedang, mulai dari sakit kepala, nyeri haid, sakit gigi, nyeri sendi, dan nyeri yang dirasakan selama flu.Paracetamol juga bisa digunakan untuk meredakan demam.
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
               <?php } ?>
             </div>
           </div>
         </div>
           <div align="center" >
             <a  role="button" class="btn btn-outline-warning btn-dropdown mx-auto" href="">Lihat Semua</a>
         </div>
       </div>
</section>

    
    
    <?php 
 $this->load->view('footer');
?>