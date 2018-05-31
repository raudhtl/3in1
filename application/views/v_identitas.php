<!DOCTYPE html>
<html lang="en">
<head>
	<title>3IN1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?=base_url();?>assets/css2/form.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?=base_url();?>assets/css2/login.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?=base_url();?>assets/css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?=base_url();?>assets/js2/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?=base_url();?>assets/css2/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!---->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?=base_url();?>assets/js2/move-top.js"></script>
			<script type="text/javascript" src="<?=base_url();?>assets/js2/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->
	<link href="<?=base_url();?>assets/css2/styles.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css2/component.css" />
		<!-- animation-effect -->
	<link href="<?=base_url();?>assets/css2/animate.min.css" rel="stylesheet">
	<script src="<?=base_url();?>assets/js2/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<!-- //animation-effect -->
	<style>
	.buttonshop li{
		border: none;
		display: inline-block;
		margin: 0;
		list-style: none;
	}
	</style>

<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url();?>assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--
<script type="text/javascript">
	function tampil_alamat(param){

		var i;
			for(var x=1; x<=10; x++){

				document.getElementById("templatealamat".concat(x)).style.visibility = "hidden";

				}
			for(i=1; i<=param; i=i+1){

				document.getElementById("templatealamat".concat(i)).style.visibility = "visible";
			}
		}
		var windo = param;
		$.post('Identitas.php', {variable: windo});
</script>-->


	<style type="text/css">
  	body{
			background:#efefef;
			font-family:arial;
		}
  	#wrapshopcart{
			margin:3em auto;
			padding:30px;
			background:#fff;
			box-shadow:0 0 15px #ddd;
		}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.5em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  </style>
</head>



<body onload="tampil_alamat(0)">
	 <div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>3IN1</a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="typo.html">Codes</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
</div>
	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Identitas Pelanggan
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							3 in 1
						</h3>
					</div>


						<div class="row">
							<div class="col-md-4">

							</div>

							<div class="col-md-4">
								<!-- People -->
                <?php if ($this->session->flashdata('msg_sama') == TRUE) : ?>
                          <div class="alert alert-danger fade in" style="margin-top:15px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Info!</strong><?php echo $this->session->flashdata('msg_sama')?>
                          </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('msg_id') == TRUE) : ?>
                          <div class="alert alert-danger fade in" style="margin-top:15px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Info!</strong><?php echo $this->session->flashdata('msg_id')?>
                          </div>
                <?php endif; ?>

							</div>

							<div class="col-md-4">
								<!-- People -->

							</div>
						</div>
              <form method="post" action="<?php echo base_url('index.php/Identitas/input'); ?>" >
						<div class="row" id="templatealamat1">

							<div class="col-md-4">
								<!-- Name -->

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20"  type="text" name="nama" placeholder="Name" >
								</div>
							</div>

							<div class="col-md-4">
								<!-- Pesan -->
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<button class="bo-rad-10 sizefull txt10 p-l-20" type="submit">Pesan</button>
								</div>
							</div>

							<div class="col-md-4">
								<!-- lihat pesanan -->

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									 <button type="button" class="bo-rad-10 sizefull txt10 p-l-20" data-toggle="modal" data-target="#myModal1">Lihat Pesanan</button>
										<div class="modal fade" id="myModal1" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
											<div id="wrapshopcart">
												<h1>Daftar Pesanan Anda</h1>

												<table>
													<tr><th width="70%">Produk</th><th width="10%">Quantity</th><th width="20%">Jumlah</th></tr>

													<?php foreach($_SESSION['cart'] as $row):?>
														<?php
														$jumlah = $_SESSION['price'][$row['productid']] * $row['qty'];
														$total += $jumlah;
														?>

														<tr><td><?php echo $row['product'];?></td><td><?php echo $row['qty'];?></td><td><?php echo $jumlah; ?></td></tr>
													<?php endforeach;?>

													<tr class="total"><td></td><td >Total</td><td><?php echo $total;?></td></tr>
												</table>


											</div>
											</div>
										</div>
							</div>
						</div>
            </form>
						</div>



			<div class="wrap-btn-booking flex-c-m m-t-6" id="tes">
				<!-- Button3 -->
					<form method="post" action="Konfirmasi/pilih">
				<button type="submit" value="2" class="btn3 flex-c-m size20 txt11 trans-0-4" name="pilih">
									 Panggil Pelayan
							 </button>
			</form>
				<a href="lihatpesanan"><button type="button" class="btn3 flex-c-m size20 txt11 trans-0-4">
					Lihat Pesanan
				</button></a>
			</div>
		</div>
	</div>
</div>
	</section>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>


	<!--footer-->
		<div class="footer" id="footer-down">
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
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


<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?=base_url();?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/js/main.js"></script>

</body>
</html>
