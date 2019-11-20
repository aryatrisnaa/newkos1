<?php include"koneksi.php"; ?>

<html>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body {
      font: sans-serif;
      color: #818181;
      margin-top: 50px;
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
      font-size: 26px;
      text-transform: uppercase;  /*Teks Agar Besar*/
      color: #34495E;
      font-weight: 700; /*Ketebalan font*/
  }
  h4 {
      font-size: 19px;
      color: #303030;
      font-weight: 400;
  }
  h3 {
      font-size: 22px;
      color: #34495E  ;
      font-weight: 600;
  } 

      div.desc {
        padding: 10px;
        border-radius: 5px;
        margin-top: 50px;
        margin-left: -25px;
        height: auto;
        border-style: solid;
        border-color: #D5D8DC;
        border-width: 2px;
      }
      div.review {
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        height: auto;
        border-style: solid;
        border-color: #D5D8DC;
        border-width: 2px;
      }
      input[type=submit]:hover {
    background-color: #666464;
}

	form {
    border-radius: 5px;
    padding: 10px;
	padding-bottom:40px;
}

	.komentar {
    float: left;
    width: 75%;
    margin-top: 6px;
}

input[type=text], textarea{
    width: 500px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

.checked {
    color: orange;
}

</style>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="index.php">KOSTLY</a>
	    </div>
	 
	    <div id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">MENU UTAMA</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>


<div class="col-sm-8 col-xs-12">
    <div class="col-sm-12 col-xs-12">
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="margin-top:50px">
            <a class="center carousel-control" href="#myCarousel" role="button" >
              <span class="btn btn-default btn-lg" aria-hidden="true"></span>
            </a>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/vip/vip1.jpg" width="100%">
              </div>
              <div class="item">
                <img src="images/vip/vip2.jpg" width="100%">
              </div>
              <div class="item">
                <img src="images/vip/vip3.jpg" width="100%">
              </div>
            </div>
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

    <div class="col-sm-12 col-xs-12">
      <div class="review">
          <div id="comment">
			<form name="submitcomment" method="post" action="Submitcomment.php">Nama:<br>
			<input name="nama" type="text"><br>
			Email(optional):<br><input name="email" type="text"><br>
			Website(optional):<br><input name="website" type="text"><br>
			Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
			<input name="art_id" value="1" type="hidden">
			<input name="art_url" value="contoh.php" type="hidden"><br>
			<input name="tombol" value="Kirim" type="submit"></form></div>
			<div id="publishcomment">
			<?php $query_mysql = mysqli_query($con,"select * from comment") or die(mysql_error());
			while($data = mysqli_fetch_array($query_mysql)){
				?><p>Nama: <?php echo $data['nama']; ?></p>
				<p>Email: <?php echo $data['email']; ?></p>
				<p>Website <?php echo $data['website']; ?></p>
				<p>Komentar: <?php echo $data['komentar']; ?></p>
				<br><hr style="border: 1px dashed grey;"></hr>
				<?php
			}
			?></div>
      </div>
    </div>
</div>

<div class="col-sm-4 col-xs-12">
<div class="col-sm-12 col-xs-12">
      <div class="desc">
        <center><h2>KELAS VIP</h2>
        <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
        </center><br>
        <div style="margin-left:15px">
          <h5>Harga :</h5>
          <h3>RP. 4.000.000,00 / bulan</h3>
          <h5>Status :</h5>
          <h3 style="color:#28B463">TERSEDIA <span class="glyphicon glyphicon-ok-circle" height="30px" width="30px"></span></h3> 
        </div>
      </div>
</div>
<div class="col-sm-12 col-xs-12" style="float:right; margin-top:-30px; color:#50585D">
      <div class="desc">
        <div style="margin-left:10px; margin-top:15px">
          <h5 style="font-weight: 600">Fasilitas :</h5>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Full AC dan kamar yang berventilasi baik</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> TV 32" dengan siaran tv kabel</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Free wifi di semua area</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Free akses kolam renang</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Free Laundry untuk tamu bulanan</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Springbed queen size disertai bantal guling dan bedsheet</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Kulkas dan kamar mandi dalam</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Kitchen Set</p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Full furnish (almari, meja tulis & kursi) </p>
          <p style="padding:2px"><span class="glyphicon glyphicon-ok-sign"></span> Ruang tamu dan sofa</p>
        </div>
      </div>
</div>
<div class="col-sm-12 col-xs-12" style="float:right; margin-top:-30px; color:#50585D">
      <div class="desc">
        <div style="margin-left:10px; margin-top:15px">
          <p style="padding:5px"><span class="glyphicon glyphicon-map-marker"></span> Jl. Diponegoro No.39a, Lempongsari, Gajahmungkur, Kota Semarang, Jawa Tengah 50231</p>
          <p style="padding:5px"><span class="glyphicon glyphicon-phone-alt"></span> (024)1400356</p>
          <p style="padding:5px"><span class="glyphicon glyphicon-envelope"></span> info.kostly@hotmail.com</p>
        </div>
      </div>
</div>
</div>



</body>
		
</html>