@extends('layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-120">

        <h1 class="page-header" style= "background-color:#222222; color:#DEDEDE; text-align:center"><center>
            {!! HTML::image('./img/logo.jpg', 'alt', array( 'width' => 150, 'height' => 150 )) !!} ONLINE ABSENCE SYSTEM
			</h1></center>
            <h2 style= "text-align:center"><small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:: Department of Mathematics, Faculty of Mathematics and Natural Science State University of Jakarta :: </small></h2></tr>
    <br>
	</br>
	
	<!-- time content -->
        <?php
        function indonesian_date ($timestamp = '', $date_format = 'l, j F Y', $suffix = 'Pukul') {
            if (trim ($timestamp) == '')
            {
                $timestamp = time ();
            }
            elseif (!ctype_digit ($timestamp))
            {
                $timestamp = strtotime ($timestamp);
            }
            # remove S (st,nd,rd,th) there are no such things in indonesia :p
            $date_format = preg_replace ("/S/", "", $date_format);
            $pattern = array (
                    '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
                    '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
                    '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
                    '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
                    '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
                    '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
                    '/April/','/June/','/July/','/August/','/September/','/October/',
                    '/November/','/December/',
            );
            $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
                    'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
                    'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
                    'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
                    'Oktober','November','Desember',
            );
            $date = date ($date_format, $timestamp);
            $date = preg_replace ($pattern, $replace, $date);
            $date = "{$date} {$suffix}";
            return $date;
        }
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

        <?php

        $hariIni = date('Y-m-d');
        $bulanIni = date('m');

        echo "<center><h3> Hari, Tanggal : ".indonesian_date()." <span id='output'></span> WIB </h3>"

        ?>
    <!-- time content -->

	 <br>
	</>
	
<!--
<h3 style="color:red"><center><u>&nbsp; &nbsp; Insert your Identity : &nbsp; &nbsp;</u></center></h3>

	<table width="800" border="0" align = "center">
	<tr>
    	<td colspan="3" bgcolor = "yellow"></td>
     </tr>
     <tr>
     	<td width="200"></td>
        <td>
		<center><form id="form1" name="form1" method="post" action="proses.html">
          <p class="animate4 bounceIn"><input type="text" id="noreg" name="noreg" placeholder="No Registrasi" /></p>
        </p>
        <p>
          <p class="animate4 bounceIn"><input type="text" id="nama" name="nama" placeholder="Nama" /></p>
        </p>
        <p>
          <p class="animate4 bounceIn">
			<select id="prodi" name="prodi">
				<option selected value = "Sistem Komputer">Sistem Komputer</option>
				<option value = "Matematika">Matematika</option>
				<option value = "Pendidikan Matematika">Pendidikan Matematika</option>
			</select>
        </p>
        <p>
          <label for="keterangan">Keterangan:</label>
          <select name="keterangan" id="keterangan">
            <option value="Hadir" selected="selected">Hadir</option>
            <option value="Sakit">Sakit</option>
            <option value="Izin">Izin</option>
            <option value="Alpha">Alpha</option>
          </select>
        </p>
        <p>
          <input name="submit" type="submit" id="submit" value="Submit">
        </p></center>
        </form>
        <td width="150"></td>
      </tr>
      <tr>
      	<td colspan="3"></td>
       </tr>
 </table>
 <br>
 </br>
 -->
        <br>
        </br>
        <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public/absence/tambah'">INPUT ABSEN</button>
 <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public/absence'">LIHAT ABSEN</button>
        <br>
        </br>
        </table>
	</div>

</div>

@stop
