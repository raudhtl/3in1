
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?=base_url();?>assets/css2/form.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?=base_url();?>assets/css2/login.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?=base_url();?>assets/css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
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
			<script type="text/javascript" src="<?=base_url();?>assets/js/move-top.js"></script>
			<script type="text/javascript" src="<?=base_url();?>assets/js/easing.js"></script>
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
	<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
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


	<style type="text/css">

  	#wrapshopcart{
			margin:3em auto;
			padding:30px;
			background:#fff;
			box-shadow:0 0 15px #ddd;
		}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  </style>
</head>



<body >
	<div class="header head">
	 <div class="container">
		 <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms" style="padding-top:18px;">
			 <h1><a href="dashboard"><span>3IN1</a></h1>
		 </div>
			<div class="nav-icon" style="padding-top:25px;">
				<a href="#" class="navicon"></a>
					<div class="toggle">
						<ul class="toggle-menu">
							<li><a  href="dashboard">Home</a></li>
							<li><a href="menu.html">Menu</a></li>
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
					<div class="t-left">
						<span class="tit2 t-left">
							No Meja : <?php echo $this->session->userdata('no_meja');?>
						</span><br><br>
					</div>
          <div class="wrap-inputname size12 bo2 bo-rad-10" style="padding-right:10px;height:auto;">
						<?php foreach ($nama as $name) { ?>

            <div class="row">
              <div class="col-md-12   p-t-30">
                  <span class="txt5 t-left p-l-20" >
                    <i class ="fa fa-odnoklassniki">Nama : <?php echo $name['nama']?></i>
                  </span><br><br>
                      <div class="table-responsive" >
                      <table class="table" >
                          <tr>
                            <th style="text-align:right;">#</th>
                            <th style="text-align:right;">Menu</th>
                            <th style="text-align:right;">Jumlah</th>
                            <th style="text-align:right;">Harga</th>
														<th style="text-align:right;">Hapus</th>
                          </tr>

                        <tbody>
                          <?php

														$k =$this->session->userdata('i');
														$_SESSION["sum"] = 0;
															for($i=1; ; $i++){
																if (!isset($base[$name['nama']]['nama_menuu'.$i])){
																	break;
																}
																	 $sum = $base[$name['nama']]['hargaa'.$i]+$_SESSION["sum"];
																	 unset($_SESSION["sum"]);
																	 $_SESSION["sum"] = $sum;
																  $harga=number_format($_SESSION["sum"],0,",",".");

															?>
                          <tr>
                            <td style="text-align:right;"><?php echo $i;?></td>
                            <td style="text-align:right;"><?php echo $base[$name['nama']]['nama_menuu'.$i];?></td>
                            <td style="text-align:right;"><?php echo $base[$name['nama']]['jumlahh'.$i];?></td>
                            <td style="text-align:right;"><?php echo $base[$name['nama']]['hargaa'.$i];?></td>
														<td style="text-align:right;">
																<form action="PilihMenu/hapus" method = "post">
																	<input class="input100" type="text" name="name_menu" value="<?php echo $base[$name['nama']]['nama_menuu'.$i];?>" style="visibility:hidden; width:0px;">
																	<div class="btn btn-primary a-btn-slide-text" style="height:30px;">
																	<button name="name" value="<?php echo $name['nama']?>" type="submit">
																	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		        											<span><strong>Delete</strong></span></button>
																	</div>
																</form>
														</td>
                          </tr>
													<?php
												}
													 ?>
                          <tr><td></td>
                              <td style="text-align:right;">Total</td>
                              <td style="text-align:right;"></td>
															<td style="text-align:right;"><?php echo "Rp. ".$harga?></td>
                              <td></td>
                          </tr>
                        </tbody>

                      </table>


              </div>
            </div>
						<?php
							$this->session->unset_userdata('nama');
							$this->session->set_userdata('tambah', TRUE);
						 ?>

            <div class="col-md-4">
              <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23" style="height:50px;">
								<form action="PilihMenu/tambah" method = "post">
              <button name="tambah" value="<?php echo $name['nama']?>" type="submit" class="bo-rad-10 sizefull txt10 p-l-20" >Tambah Pesanan</button>
						</form>
							</div>
            </div>
<!--bagian dihapus-->

          </div>
				<?php } ?>

			</div><br><br>
						<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23 float-r" style="height:50px; width:370px; background-color: #353535; font-weight:500;">
								 <a href="Identitas"><button type="button" class="bo-rad-10 sizefull txt10 p-l-20" >Selesai</button></a>
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
		<?php function harga ($nama, $jumlah, $hargaa){
		    $total = $jumlah*$hargaa;
		    $sum = $total + $_SESSION["sum"];
		    unset($_SESSION["sum"]);
		    $_SESSION["sum"] = "$sum";
		    return $total;
		}

		?>


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
