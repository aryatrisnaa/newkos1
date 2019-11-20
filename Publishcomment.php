<?php/*
include "koneksi.php";
 ?>
 
<?php

function getcomment($art_id){
$commentquery = mysqli_query("SELECT * FROM comment WHERE art_id='$art_id'
ORDER BY id DESC") or die(mysql_error());
$commentNum = mysql_num_rows($commentquery);
echo "<h4>" . "Current comment(s)..." . "</h4>";
echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
 
while($row = mysql_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br />" . $row['komentar'] . "<br />";
 echo "<hr>";
 }
}

$query_mysql = mysqli_query($con,"select * from comment") or die(mysql_error());
while($data = mysqli_fetch_array($query_mysql)){
	echo"Nama: $data['nama']";
	echo"Email: $data['email']";
	echo"Website: $data['website']";
	echo"Komentar: $data['komentar']";
}
*/
?>