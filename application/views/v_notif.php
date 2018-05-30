

  <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link rel="stylesheet" href="<?=base_url();?>assets/font-awesome/web-fonts-with-css/css/fontawesome-all.css" />
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></script>
<!-- animation-effect -->
<link href="<?=base_url();?>assets/css/animate.min.css" rel="stylesheet">
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
			<h1><a href="dashboard"><span>3IN1</span></a></h1>
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
    <div class="dropdown" style="margin-top:1.5em; margin-right: 30px; float:right; padding-top:25px; padding-bottom:25px;">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class ="fa fa-user-circle fa-2x"><?php echo $this->session->userdata('ses_username')?><br></i><span class="caret"></span></a>
        <ul class="dropdown-menu" style="margin-top: 50px;">
          <li ><a href="Login/logout">Logout</a></li>
        </ul>
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
					<span>Pilih Meja Yang Akan Disiapkan Makanan</span>
				</div>
				<div class="clearfix"> </div>
			</div>


			<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <div class="row">
        <div class="col-md-3 ">
        <div class="menu-bottom1">
          <form action="Notifikasi/remove" method="post">
          <div class="btm-right">
              <button type="submit" value="koki" name ="pilihan" style= "height:280px;
                  width:100%;
                  background-position: center;
                  margin-bottom:20px;
                  background-size:350px;
                  background-image:url('<?=base_url()?>assets/images/koki.jpg')"
                  <?php if($this->session->userdata('koki') != TRUE){?>
                  disabled <?php }?>><br>
                <div class="captn">
                  <h4>Koki</h4><br>
                  <p>Klik Untuk Menghilangkan Notifikasi</p>
                </div></button>
              </div>
            </form>
          </div>
          <?php
          $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
          ?>
          <a href="<?=$url?>" class="btn btn-info" style="margin-top:50px; width:260px; background-color:#40c9b4; Height:50px; font-size:25px;">Selesai</a>
        </div>
      <div class="col-md-9 menu-bottom1">
        <?php
        foreach($barang as $b){
        ?>
        <div class="col-md-4 menu-bottom1">
          <form action="Notifikasi/remove" method="post">
          <div class="btm-right">
              <button type="submit" value="<?php echo $b->nomor_meja?>" name ="pilihan" style= "height:280px;
                  width:100%;
                  background-position: center;
                  margin-bottom:20px;
                  background-size:350px;
                  background-image:url('<?=base_url() . 'assets/images/'.$b->gambar?>')"
              <?php
              $no_meja = $b->nomor_meja;
              if($this->session->userdata('no_meja'. $b->nomor_meja) != TRUE){?>
              disabled <?php }?>><br>
              <div class="captn">
                <h4>Meja Nomor <?php echo $b->nomor_meja?></h4><br>
                <p>Klik Untuk Menghilangkan Notifikasi</p>
              </div>
          </div>
        </form>
      </div>

      <?php
      if ( $b->nomor_meja == 3 ||  $b->nomor_meja == 6){ ?>
        <div class="clearfix"> </div>
        <br><br>
      <?php }
      } ?>

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
