<?php
include "koneksi.php";
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");

if(isset($_POST["tombol"]))
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];

$result = mysqli_query($con,"insert into comment(id,nama,email,website,komentar,date) values('','$nama','$email','$website','$komentar','')");

 if($result){
	 ?>
	 <script language="javascript">
	 alert('sukses input komentar');
	 window.location="vip.php";
	 </script>
  <?php }else{
	 ?>
	 <script language="javascript">
	 alert('gagal');
	 </script>
 <?php }
 }

if(isset($_POST["tombol2"]))
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];

$result2 = mysqli_query($con,"insert into com_deluxe(id,nama,email,website,komentar,date) values('','$nama','$email','$website','$komentar','')");

 if($result2){
	 ?>
	 <script language="javascript">
	 alert('sukses input komentar');
	 window.location="deluxe.php";
	 </script>
  <?php }else{
	 ?>
	 <script language="javascript">
	 alert('gagal');
	 </script>
 <?php }
 }

 if(isset($_POST["tombol3"]))
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];

$result3 = mysqli_query($con,"insert into com_stn(id,nama,email,website,komentar,date) values('','$nama','$email','$website','$komentar','')");

 if($result3){
	 ?>
	 <script language="javascript">
	 alert('sukses input komentar');
	 window.location="standar.php";
	 </script>
  <?php }else{
	 ?>
	 <script language="javascript">
	 alert('gagal');
	 </script>
 <?php }
 }
//connect database

 
//Menampilkan data

//Memutuskan koneksi

?>