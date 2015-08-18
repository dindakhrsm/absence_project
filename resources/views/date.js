<!-- content -->
<div class="mainContent"> 
  <!-- Contact details -->
  <section class="section1">
    <h2 class="sectionTitle">Content Holder 1</h2>
    <?php
include "fungsi.php";
?>

<script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<body onload="waktu()">
<center><h3>:: Lalalala ::</h3></center>
<hr>
<?php

$hariIni = date('Y-m-d');
$bulanIni = date('m');

echo "<center><h3> Hari, Tanggal : ".indonesian_date()." <span id='output'></span> WIB </h3>"

?>