	<!-- footer -->

	<footer class="footer-distributed">

      <div class="footer-left">
      
        <img class="footer-img" src="<?php echo base_url().'assets/images/logo.png'?>">
      
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>
      
        <p class="footer-company-name">Apotek &copy; 2018</p>
      </div>
      
      <div class="footer-center">
      
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Jl telekomunikasi no1</span> Bandung,Indonesia</p>
        </div>
      
        <div>
          <i class="fa fa-phone"></i>
          <p>+62 822-4505-013</p>
        </div>
      
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">apotek@gmail.com</a></p>
        </div>
      
      </div>
      
      <div class="footer-right">
        <a href=""><img class="footer-img-play" src="<?php echo base_url().'assets/images/googleplay.png' ?>"></a>
      
        <p class="footer-company-about">
          <span>About the Apotek</span>
          pembelian obat yang fleksibel.
        </p>
      
        <div class="footer-icons">
      
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href=""><i class="fa fa-github"></i></a>
      
        </div>
      
      </div>
      
      </footer>
      </html>
    
      <script>
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

  <!-- loader -->
<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.stellar.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/aos.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.animateNumber.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/scrollax.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/google-map.js'?>"></script>
<script src="<?php echo base_url().'assets/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/js/home.js'?>"></script>
    
  </body>
</html>