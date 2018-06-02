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
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/bootstrap/css/bootstrap.min.css">


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/vendor/animsition/css/animsition.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/login/css/main.css">

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
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.html">Home</a></li>
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
</div><br><br>
<!--end header-->

<div class="limiter">
  <div class="container-login100" style="background-image: url('images/2.jpg');">
    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-100">

        <span class="login100-form-title p-b-53">
          Sign In With
        </span>
        <form class="login100-form validate-form flex-sb flex-w" action="Login/input" method="post">
        <div class="p-t-31 p-b-9">
          <span class="txt1">
            Username
          </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Username is required">
          <input class="input100" type="text" name="username" >
          <span class="focus-input100"></span>
        </div>

        <div class="p-t-13 p-b-9">
          <span class="txt1">
            Password
          </span>
          <a href="#" class="txt2 bo1 m-l-5">
            Forgot?
          </a>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="input100" type="password" name="password" >
          <span class="focus-input100"></span>
        </div>
        <?php if ($this->session->flashdata('msg') == TRUE) : ?>
                  <div class="alert alert-danger fade in" style="margin-top:15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Info!</strong><?php echo $this->session->flashdata('msg')?>
                  </div>
        <?php endif; ?>
        <div class="container-login100-form-btn m-t-17">
          <button type ="submit" class="login100-form-btn">
            Sign In
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
</div>


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
