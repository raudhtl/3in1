
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

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#alamat').html(div.data('alamat'));
            modal.find('#pekerjaan').attr("value",div.data('pekerjaan'));
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#yModal').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal          = $(this)
            modal.find('#nomor_meja').attr("value",div.data('nomor_meja'));
        });
    });
</script>

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
        <?php
        foreach($barang as $b){
        $pilihan=$b->nomor_meja;
        ?>
        <div class="col-md-4 menu-bottom1">
          <div class="btm-right">
              <button type="submit" data-toggle="modal" data-target="#yModal" data-nomor_meja="<?php echo $b->nomor_meja?>" name="pilihan" style= "height:380px;
                  width:100%;
                  background-position: center;
                  margin-bottom:20px;
                  background-size:350px;
                  background-image:url('<?=base_url() . 'assets/images/'.$b->gambar?>')"
                  <?php if($b->status == 'Booked'){?>
                  disabled <?php }?>> <br>
                  <div class="captn">
                    <h4>Meja Nomor <?php echo $b->nomor_meja?></h4><br>
                    <p>Status : <?php echo $b->status?></p>
                  </div>
                </button>
          </div>
      </div>

      <?php
      if ( $b->nomor_meja == 3 ||  $b->nomor_meja == 6){ ?>
        <div class="clearfix"> </div>
        <br><br>
      <?php }
      } ?>
			</div>
      <!-- Modal -->
      <div id ="yModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Masukkan Password</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
              <form method="post" action="<?php echo base_url('index.php/Pilih_meja/pilih'); ?>" >
                <div class="form-group"  >
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control"  name="password">
                </div>
                <div class="form-group"  >
                  <input type="hidden" id=nomor_meja class="form-control" name="pilihan">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info btn-block" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>

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
