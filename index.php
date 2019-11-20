<html>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>KOSTLY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link href="gallery.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
<style>
	body {
      font: sans-serif;
      color: #818181;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #50585D;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #50585D !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #1e8df4 !important;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;  /*Teks Agar Besar*/
      color: #303030;
      font-weight: 600; /*Ketebalan font*/
  }
  h4 {
      font-size: 19px;
      color: #303030;
      font-weight: 400;
  } 
  .jumbotron{
      background-color:#50585D;
      color: #fff;
      padding: 80px ;
      font-family: sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #50585D;
      font-size: 50px;
  }
  .logo {
      color: #50585D;
      font-size: 200px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #1e8df4;
  }
  .carousel-indicators li {
      border-color: #50585D;
  }
  .carousel-indicators li.active {
      background-color: #50585D;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .item h4 {
      font-size: 19px;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .panel {
    border: 1px solid #50585D; 
    border-radius:0 !important;
}


.panel-footer .btn:hover {
    border: 1px solid #50585D;
    background-color: #fff !important;
    color: #1e8df4;
}


.panel-heading {
    color: #fff !important;
    background-color: #50585D !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}
.panel-footer {
    background-color: white !important;
}
.panel-footer h3 {
    font-size: 32px;
}
.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}
.panel-footer .btn {
    margin: 15px 0;
    background-color: #50585D;
    color: #fff;
}

.footer {
  background: #1A333C;
  padding: 10px 0;
  height: 190px;
}
.footer a {
  font-size: 23px;
  padding: 7px;
  transition: all .5s ease;
}

.footer a:hover {
  color: white;
}


   @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  .depan{
  	margin-top: -60px;
  	margin-bottom: -60px;
  	margin-right: -60px;
  	height: 100%;
  	width: 100%;
  }
  #about{
  	background-image: url('images/kost_depan.jpg');
  	background-size: 100%;
  	height: auto;
  }
  .orderbtn{
  	background-color: #34495E;
  	color: #fff;
  }

  .myImg {
    border-radius: 5px;
    transition: 0.3s;
}

.button {
    background-color: #34495E; 
    border: none;
    color: white;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.24),0 9px 25px 0 rgba(0,0,0,0.19);
}


</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#myPage"><img src="images/KOSTLY.png" width="70px" style="margin-top:-10px"></a>

	    </div>
	 
	    <div id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#about">TENTANG KAMI
	        <li><a href="#services">LAYANAN</a></li>
	        <li><a href="#kelas">TIPE KAMAR</a></li>
	        <li><a href="#contact">CONTACT</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

		  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="margin-top:50px">
		    <a class="center carousel-control" href="#myCarousel" role="button" >
		      <span class="btn btn-default btn-lg" aria-hidden="true"></span>
		      <span class="sr-only">midle</span>
		    </a>
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img src="images/home.jpg" width="100%">
		      </div>
		      <div class="item">
		        <img src="images/iklan1.jpg" width="100%">
		      </div>
		      <div class="item">
		        <img src="images/iklan2.jpg" width="100%">
		      </div>
		      <div class="item">
		        <img src="images/iklan3.jpg" width="100%">
		      </div>
		      <div class="item">
		        <img src="images/iklan4.jpg" width="100%">
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>


	<div id="about" class="container-fluid">
	  <div class="row">
	    <div class="col-sm-5" >
	      	<center><img src="images/KOSTLY2.png" width="100px"></center><br>
			<h4>KOSTLY merupakan sebuah hunian sementara eksklusif di kota Semarang</h4><br>
			<p>Kostly adalah hunian eksklusif sementara yang berada di kota Semarang. Kami memiliki prinsip untuk memberikan pelayanan kepada penghuni dengan sebaik mungkin, karena "Kepuasan Pelanggan adalah Prioritas Kami".</p><br>
			<p>Kami menawarkan hunian dengan fasilitas terbaik sekelas dengan hotel berbintang, sehingga penghuni merasa nyaman dan betah berada di Kostly. Kostly berada di pusat kota semarang, lokasi strategis dekat dengan berbagai tempat hiburan, kuliner, sentral bisnis, rumah sakit, dan pusat perbelanjaan.</p>
			<br>
		    <center><input class="btn btn-lg orderbtn" type="button" value="LIHAT KAMAR" onclick="window.location.href='#kelas'" /></center>
	    </div>
	  </div>
	</div>


	<div id="services" class="container-fluid text-center" style="background-color:#EFF2F4;height:100%">
	<br><br>	
	  <h4><b>Apa keunggulan kami ?</b></h4>
	  <br>
	  <div class="row slideanim">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-bed logo-small"></span>
	      <h4>Nyaman</h4>
	      <p>Setiap kamar didesain senyaman mungkin</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-lock logo-small"></span>
	      <h4>Aman</h4>
	      <p>Tersedianya CCTV di setiap sudut bangunan</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-leaf logo-small"></span>
	      <h4>Bersih & Terawat</h4>
	      <p>Bangunan yang bersih, terawat dan asri</p>
	    </div>
	  </div>
	<br><br><br>
	  <h4><b>Point of Interest</b></h4><br>
	  <div class="row slideanim">
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-map-marker logo-small"></span>
	      <h4>Berada di pusat kota</h4>
	      <p>10 menit dari pusat kota Semarang (Simpang 5)</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-road logo-small"></span>
	      <h4>Akses mudah</h4>
	      <p>Lokasi mudah dijangkau oleh berbagai sarana transportasi</p>
	    </div>
	    <div class="col-sm-4">
	      <span class="glyphicon glyphicon-fullscreen logo-small"></span>
	      <h4 style="color:#303030;">Lokasi strategis</h4>
	      <p>Dekat dengan Rumah Sakit, Kuliner, dan Pusat Perbelanjaan</p>
	    </div>
	  </div>
	  <br>
	  <br><br>
	  <i><h4>"Kualitas adalah prioritas kami"</h4></i>
	</div>

		<div id="kelas" class="container-fluid" style="height:94%">
		  <div class="text-center">
		    <h2>TIPE</h2>
		    <h4>Tipe kamar yang kami tawarkan</h4>
		  </div><br>

		    <div class="col-sm-4 col-xs-12">
			  <div class="gallery">
				  <img class="myImg" src="images\vip\vip3.jpg" width="300" height="200">
				<div class="desc" style="background:#FDFEFE">
				<h3>VIP</h3>
				<form>
					<input class="button button2" type="button" value="Show Detail" onclick="window.location.href='vip.php'" />
				</form>
				</div>
			  </div>
			</div>    
		    
		    <div class="col-sm-4 col-xs-12">
			  <div class="gallery">
				  <img class="myImg" src="images\deluxe\deluxe4.jpg" width="300" height="200">
				<div class="desc" style="background:#FDFEFE">
				<h3>DELUXE</h3>
				<form>
					<input class="button button2" type="button" value="Show Detail" onclick="window.location.href='deluxe.php'" />
				</form>
				</div>
			  </div>
			</div>        

		    <div class="col-sm-4 col-xs-12">
			  <div class="gallery">
				  <img class="myImg" src="images\standar\standar4.jpg" width="300" height="200">
				<div class="desc" style="background:#FDFEFE">
				<h3>STANDAR</h3>
				<form>
					<input class="button button2" type="button" value="Show Detail" onclick="window.location.href='standar.php'" />
				</form>
				</div>
			  </div>
			</div> 

		  </div>
		</div>


		<div>
		<center><a href="#myPage" title="To Top">
		    <span class="glyphicon glyphicon-chevron-up"></span>
		    <h6>Ke Atas</h6>
		</a></center>
		</div>

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
		<footer class="footer">
		<div class="col-sm-5 col-xs-12">
			<h4 class="text-center" style="color:#FFF">CONTACT</h4>

		    <div id="contact" class="col-sm-10" style="color:#FFF">
		      <p><span class="glyphicon glyphicon-map-marker"></span> Jl. Diponegoro No.39a, Lempongsari, Gajahmungkur, Kota Semarang, Jawa Tengah 50231</p>
	          <p><span class="glyphicon glyphicon-phone-alt"></span> (024)1400356</p>
	          <p><span class="glyphicon glyphicon-envelope"></span> info.kostly@hotmail.com</p>
		    </div>

			<div class="container text-center col-sm-2 col-xs-12">
			    <a href="#"><i class="fa fa-facebook"></i></a><br>
	   		 	<a href="#"><i class="fa fa-twitter"></i></a><br>
	    		<a href="#"><i class="fa fa-instagram"></i></a><br>
	  		</div>
	  	</div>
	  	<div class="col-sm-7 col-xs-12">
	  		<iframe src="https://www.google.co.id/maps/place/Jl.+Diponegoro+No.39a,+Lempongsari,+Gajahmungkur,+Kota+Semarang,+Jawa+Tengah+50231/@-7.0046684,110.4157078,18z/data=!4m5!3m4!1s0x2e708b65191f9c5d:0x879ab0d7c82a646f!8m2!3d-7.0046684!4d110.4168021" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	  	</div>
		</footer>
  
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, div a[href='#myPage'], .input[href='#kelas']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
		
</html>