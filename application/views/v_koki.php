

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
    <script type="text/javascript">
      $(document).ready(function(){
        var dataPesanan = <?php echo json_encode($no_pesanan); ?>;
        $.each(dataPesanan, function(key, value){
          var no_pesanan=value;
          var param;
          var x;
          var res;
          var tahun;
          var waktu;
          var time;
          $.ajax({
                url: 'http://localhost/3in1/index.php/Koki/countDown',
                type: "post",
                data: {pesanan: no_pesanan},
                success: function(data){
                  data = $.parseJSON(data);
                  param=data[0].waktu;
                  x=parse(param);
                  var res = x.split(" ");
                  var tahun= res[0];
                  var waktu= res[1];
                   time=format(tahun)+" "+waktu;
                   // console.log(time);
                   var countDownDate = new Date(time).getTime();

                   var x = setInterval(function() {

                   var now = new Date().getTime();

                   var distance = now - countDownDate;

                   var days = Math.floor(distance / (1000 * 60 * 60 * 24 * 6432));
                   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60 * 6));
                   var minutes = Math.floor((distance % (1000 * 60 * 60 )) / (1000 * 60));
                   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                   document.getElementById("demo-" + no_pesanan).innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                   }, 1000);
                }
            });
        });
      });

      function parse(x){
        x=x.substring(1,x.length-1);
        return x;
      }

      function format(y){
        var mon=["Jan","Feb","Mar","Apr", "May"];
        var tahun=y.substring(0,4);
        var monf=parseInt(y.substring(5,7));
        var bulan = mon[monf-1];
        var tanggal = y.substring(y.length-2);
        var hasil = bulan +" "+ tanggal + ", "+tahun;

        return hasil;
      }
    </script>
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
	<!--content-->
	<div class="container">
	<div class="page">

		<!--button-->
		<div class="grid_3 grid_4">
			<div class="page-header">
       	<h3 style="text-align:center;">KOKI</h3>
      </div>

  <div class="bs-example">
    <table class="table">
      <tbody>
        <tr>
            <td width="40%"><h2 id="h2-bootstrap-heading"><u>Nama Makanan</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
					  <td width="20%" style="text-align:center;"><h2 id="h2-bootstrap-heading"><u>Jumlah</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
            <td width="20%" style="text-align:center;"><h2 id="h2-bootstrap-heading"><u>Time</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
						<td width="10%" style="text-align:center;"><h2 id="h2-bootstrap-heading"><u>Checkbox</u><a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
        </tr>
				<tr style="color:black;">
        <?php foreach($bayar as $b){ $i=1;?>
    				<td width="40%"><h4 id="h4.-bootstrap-heading"><?php echo $b->nama_menu?><a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
    				<td width="20%" style="text-align:center;"><h4 id="h4.-bootstrap-heading"><?php echo $b->total?><a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
            <td width="20%" style="text-align:center;"><p id="demo-<?php echo $b->no_pesanan; ?>"></p></td>
            <td class="type-info" width="10%" style="text-align:center;">
						   <form action="/action_page.php" method="get">
							     <div class="checkboxes">
						           <input type="checkbox" name="1" id="option-one-<?php echo $b->no_pesanan; ?>" value="orange"><label for="option-one-<?php echo $b->no_pesanan; ?>" class="highlight">Done</label>
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

<br><br>
<form method="post" action="Konfirmasi/pilih" class="form-inline">
<a href='Pilih_meja'><button type="button" class="btn btn-lg btn-info"
  style="width:200px;">Selesai</button></a>

<button type="submit" value="3" class="btn btn-lg btn-info" name="pilih"
  style=" width:200px; margin-left:720px;">
         Panggil Pelayan
     </button>
</form>

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
