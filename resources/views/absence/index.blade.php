@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header" style= "background-color:#222222; color:#DEDEDE; text-align:center"><center>
                    {!! HTML::image('./img/logo.jpg', 'alt', array( 'width' => 150, 'height' => 150 )) !!} ONLINE ABSENCE SYSTEM
            </h1></center>
            <h2 style= "text-align:center"><small><center>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:: Department of Mathematics, Faculty of Mathematics and Natural Science State University of Jakarta ::</center></small></h2></tr>
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


    <h2 style="color:red"><center> Welcome! </center></h2>
    <table width="800" border="1" align = "center">
            <tr>
                <th><center>NO</center></th> <th><center>Noreg</center></th> <th><center>Nama</center></th> <th><center>Prodi</center></th> <th><center>Keterangan</center></th> <th><center>Tanggal</center></th>
            </tr>
            @foreach($absence as $absences)
                <absence>
                    <tr>
                        <td><center>{{$absences->no}}</center></td> <td><center>{{$absences->noreg}}</center></td> <td>{{$absences->nama}}</td> <td><center>{{$absences->prodi}}</center></td> <td><center>{{$absences->keterangan}}</center></td> <td><center>{{$absences->tgl}}</center></td>
                    </tr>
                    </table>
                </absence>

    @endforeach
            <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public'">HOME</button>
            <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public/absence/tambah'">INPUT ABSEN</button>
    </div>
    </div>
@stop
