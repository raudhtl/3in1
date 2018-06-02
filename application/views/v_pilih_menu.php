<!DOCTYPE html>
<html>
<head>
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts</title>
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="<?=base_url();?>assets/css/animate.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.css"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.css"></script>

<script src="<?=base_url();?>assets/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style>
h1 {
  font-family: 'Alegreya Sans', sans-serif;
  font-weight: 300;
  margin-top: 0;
}

.control {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 18px;
}
.control input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e6e6e6;
}
.control--radio .control__indicator {
  border-radius: 50%;
}
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
  background: #ccc;
}
.control input:checked ~ .control__indicator {
  background: #2aa1c0;
}
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
  background: #0e647d;
}
.control input:disabled ~ .control__indicator {
  background: #e6e6e6;
  opacity: 0.6;
  pointer-events: none;
}
.control__indicator:after {
  content: '';
  position: absolute;
  display: none;
}
.control input:checked ~ .control__indicator:after {
  display: block;
}
.control--checkbox .control__indicator:after {
  left: 8px;
  top: 4px;
  width: 3px;
  height: 8px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
.control--checkbox input:disabled ~ .control__indicator:after {
  border-color: #7b7b7b;
}
.control--radio .control__indicator:after {
  left: 7px;
  top: 7px;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: #fff;
}
.control--radio input:disabled ~ .control__indicator:after {
  background: #7b7b7b;
}
/*batas*/
.quantity {
  position: relative;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  width: 150px;
  height: 30px;
  line-height: 1.65;
  float: left;
  display: block;
  padding: 0;
  margin: 0;
  padding-left: 20px;
  border: 1px solid #eee;
}

.quantity input:focus {
  outline: 0;
}

.quantity-nav {
  float: left;
  position: relative;
  height: 42px;
}
</style>

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="dashboard"><span>3IN1</span></a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.html">Home</a></li>
						<li><a href="menu.html">Menu</a></li>
					</ul>
				</div>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->

</div>
<!--content-->
	<div class="menu">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Pilih Meja</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Anda Nyaman Kami Senang</span>
				</div>
				<div class="clearfix"> </div>
			</div>


			<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <form role="form" id="formfield" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();">
          <input type="hidden" name="action" value="add_form" />
        <?php
        $loop=0;
        foreach($barang as $b){
        $harga=number_format($b->harga,0,",",".");

        ?>
        <div class="col-md-4 menu-bottom1">
          <div class="btm-right">
              <button type="button" data-toggle="modal" data-target="#yModal" data-nomor_meja="<?php echo $b->nama_menu?>" name="pilihan" style= "height:330px;
                  width:100%;
                  background-position: center;
                  margin-bottom:20px;
                  background-size:350px;
                  background-image:url('<?=base_url() . 'assets/images/'.$b->gambar?>')"> <br>
                  <div class="captn">
                    <h4><?php echo $b->nama_menu?></h4><br>
                    <p>Harga : <?php echo $harga?></p>
                  </div>
                </button>
          </div>

          <div class="pesan" style="background: linear-gradient(#97824b,  #ddd4bb); ">
            <form role="form" id="formfield" action="<?php echo base_url('index.php/Pilih_meja/pilih'); ?>" method="post"  enctype="multipart/form-data" onsubmit="return validateForm();">
              <input type="hidden" name="action" value="add_form" />
                <div class="quantity">
                <input type="number" min="0"`` disabled value=null id="<?php echo "jumlah".$loop?>" data-target="#yModal" name="jumlahh"><br>
              </div>
              <div class="form-group">
                <input type="hidden" value= 1 id="<?php echo "menu".$loop?>" data-target="#yModal" name="jumlahh"><br>
              </div>
              <div class="control-group">
              <div class="checkbox">
                <label class="control control--checkbox">Pilih
		                <input onclick="myFunction('<?php echo "jumlah".$loop?>', '<?php echo "menu".$loop?>', '<?php echo $b->nama_menu?>')" type="checkbox"/>
		                  <div class="control__indicator"></div>
	                   </label>
              </div>
              </div>

          </div>
      </div>
      <?php
      $loop++;
      if ( $loop == 3 ||  $loop == 6){ ?>
        <div class="clearfix"> </div>
        <br><br>
      <?php }
      } ?>
      <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#yModal" class="btn btn-default" />

    </form>


			</div>
      <!-- Modal -->
      <div class="modal fade" id="yModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm Submit</h4>
                  </div>
                  <div class="modal-body">
                          <?php
                          $i=0;
                          for($i=0; $i<2; $i++){ ?>
                          <form method="post" class="form-inline" action="<?php echo base_url('index.php/PilihMenu/pilih'); ?>" >
                          <div class="form-group"  >
                            <input type="text" id="<?php echo "m".$i?>" class="form-control" name="<?php echo "menu".$i?>">
                          </div>
                          <div class="form-group"  >
                            <input type="number" id="<?php echo "j".$i?>" class="form-control" name="<?php echo "jumlah".$i?>">
                          </div>
                            <div class="clearfix"> </div>
                        <?php  }?>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-info btn-block" type="submit">Submit</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
	</div>
  <script>
  $(document).ready(function() {
    $('#yModal').on('show.bs.modal', function (event) {
      var div = $(event.relatedTarget)
      var modal          = $(this)
      var y
        for(x=0, y=0; x<9; x=x+1, y=y+1){

          var i = $('#menu'+x).val();
          if( i != 1){
          modal.find('#j'+y).attr("value", $('#jumlah'+x).val());
          modal.find('#m'+y).attr("value", $('#menu'+x).val());
        }
        else{
          y=y-1;
        }
     }
    });
});
  </script>
  <script>
  function myFunction(param1, param2, param3) {
    document.getElementById(param1).disabled=false;
     document.getElementById(param2).value=param3;
  }
</script>

<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>

			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!--//footer-->

</body>
</html>
