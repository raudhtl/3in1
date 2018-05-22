
  <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>3in1</title>
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

<style>
* {margin: 0; padding: 0;}

.stop {
	padding: 10px;
	text-align: center;
}

.timer {
	padding: 10px;
	background: linear-gradient(top, #222, #444);
	overflow: hidden;
	display: inline-block;
	border: 7px solid #efefef;
	border-radius: 5px;
	position: relative;

	box-shadow:
		inset 0 -2px 10px 1px rgba(0, 0, 0, 0.75),
		0 5px 20px -10px rgba(0, 0, 0, 1);
}

.cell {
	/*Should only display 1 digit. Hence height = line height of .numbers
	and width = width of .numbers*/
	width: 0.60em;
	height: 40px;
	font-size: 30px;
	overflow: hidden;
	position: relative;
	float: left;
}

.numbers {
	width: 0.6em;
	line-height: 40px;
	font-family: digital, arial, verdana;
	text-align: center;
	color: black;

	position: absolute;
	top: 0;
	left: 0;

	/*Glow to the text*/
	text-shadow: 0 0 5px rgba(255, 255, 255, 1);
}

/*Styles for the controls*/
#timer_controls {
	margin-top: -5px;
}
#timer_controls label {
	cursor: pointer;
	padding: 5px 10px;
	background: #efefef;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	border-radius: 0 0 3px 3px;
}
input[name="controls"] {display: none;}

/*Control code*/
#stop:checked~.timer .numbers {animation-play-state: paused;}
#start:checked~.timer .numbers {animation-play-state: running;}
#reset:checked~.timer .numbers {animation: none;}

.moveten {
	/*The digits move but dont look good. We will use steps now
	10 digits = 10 steps. You can now see the digits swapping instead of
	moving pixel-by-pixel*/
	animation: moveten 1s steps(10, end) infinite;
	/*By default animation should be paused*/
	animation-play-state: paused;
}
.movesix {
	animation: movesix 1s steps(6, end) infinite;
	animation-play-state: paused;
}

/*Now we need to sync the animation speed with time speed*/
/*One second per digit. 10 digits. Hence 10s*/
.second {animation-duration: 10s;}
.tensecond {animation-duration: 60s;} /*60 times .second*/

.milisecond {animation-duration: 1s;} /*1/10th of .second*/
.tenmilisecond {animation-duration: 0.1s;}
.hundredmilisecond {animation-duration: 0.01s;}

.minute {animation-duration: 600s;} /*60 times .second*/
.tenminute {animation-duration: 3600s;} /*60 times .minute*/

.hour {animation-duration: 36000s;} /*60 times .minute*/
.tenhour {animation-duration: 360000s;} /*10 times .hour*/

@keyframes moveten {
	0% {top: 0;}
	100% {top: -400px;}
	/*height = 40. digits = 10. hence -400 to move it completely to the top*/
}

@keyframes movesix {
	0% {top: 0;}
	100% {top: -240px;}
	/*height = 40. digits = 6. hence -240 to move it completely to the top*/
}

.checkboxes label {
	font-family:Open Sans Italic;
	font-size: 12px;
	color: #666;
	border-radius: 20px 20px 20px 20px;
	background: #f0f0f0;
	padding: 3px 10px;
	text-align: left;
}
input[type=checkbox]:checked + label {
	color: white;
	background: #5bc0de;
}
</style>

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>3IN1</span></a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon" style="padding-top:40px;"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a   href="blog.html">Blog</a></li>
						<li><a class="active" href="typo.html">Codes</a></li>
						<li><a  href="events.html">Events</a></li>

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
	<div class="container">
	<div class="page">

		<!--button-->
		<div class="grid_3 grid_4">
			<div class="page-header">
       	<h3 style="text-align:center;">KOKI</h3>
      </div>

			<div class="stop">
	<!-- time to add the controls -->
	<input id="start" name="controls" type="radio" />
	<input id="stop" name="controls" type="radio" />
	<input id="reset" name="controls" type="radio" />
	<div class="timer">
		<div class="cell">
			<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
	</div>
	<!-- Lables for the controls -->
	<div id="timer_controls">
		<label for="start">Mulai</label>
		<label for="stop">Stop</label>
		<label for="reset">Reset</label>
	</div>
</div>


  <div class="bs-example">
    <table class="table">
      <tbody>
        <tr>
            <td width="60%"><h2 id="h2-bootstrap-heading"><u>Nama Makanan</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
					  <td width="30%"><h2 id="h2-bootstrap-heading"><u>Jumlah</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
						<td width="10%"><h2 id="h2-bootstrap-heading"><u>Checkbox</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
        </tr>
				<tr style="color:black;">
        <?php foreach($bayar as $b){ ?>
				<td width="60%"><h4 id="h4.-bootstrap-heading"><?php echo $b->nama_menu?><a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
				<td width="30%" style="text-align:center;"><h4 id="h4.-bootstrap-heading"><?php echo $b->total?><a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
					<td class="type-info" width="10%" style="text-align:center;">
						<form action="/action_page.php" method="get">
							<div class="checkboxes">
						<input type="checkbox" name="1" id="option-one" value="orange"><label for="option-one" class="highlight">Done</label>
						</div>
						</form>
					</td>
				</tr>
      <?php } ?>
</div>
						</form>
					</td>
				</tr>






      </tbody>

    </table>

<a href='Pilih_meja'><button type="button" class="btn btn-lg btn-info">Selesai</button></a>
<button type="button" class="btn btn-lg btn-info">Panggil Pelayan</button>

    </div>
  </div>
  <!--buttons-->

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
</body>
</html>
