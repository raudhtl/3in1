
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



</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="dashboard"><span>C</span><img src="<?=base_url();?>assets/images/oo.png" alt=""><img src="<?=base_url();?>assets/images/oo.png" alt="">kery</a></h1>
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
                <div class="form-group">
                  <input type="number" disabled value=null id="<?php echo "jumlah".$loop?>" data-target="#yModal" name="jumlahh"><br>
                </div>
                <div class="form-group">
                  <input type="hidden" value= 1 id="<?php echo "menu".$loop?>" data-target="#yModal" name="jumlahh"><br>
                </div>
                <div class="form-group">
                <div class="checkbox">
                  <label><input type="checkbox" onclick="myFunction('<?php echo "jumlah".$loop?>', '<?php echo "menu".$loop?>', '<?php echo $b->nama_menu?>')">Pilih</label>
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
