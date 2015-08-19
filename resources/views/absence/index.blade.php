@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header" style= "background-color:#222222; color:#DEDEDE; text-align:center">
                    {!! HTML::image('./img/logo.jpg', 'alt', array( 'width' => 150, 'height' => 150 )) !!} ONLINE PRESENCE SYSTEM
            </h1>
            <h2 style= "text-align:center"><small>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:: Department of Mathematics, Faculty of Mathematics and Natural Science State University of Jakarta ::</small></h2></tr>
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

<!-- to show database -->
    <h2 style="color:red; text-align:center">Welcome!</h2>
    <table width="800" border="1" align = "center">
            <tr>
                <th style="text-align:center">NO</th> <th style="text-align:center">Noreg</th> <th style="text-align:center">Nama</th> <th style="text-align:center">Prodi</th> <th style="text-align:center">Keterangan</th> <th style="text-align:center">Tanggal</th>
            </tr>

            @foreach($absence as $absences)
                <!--<tr>-->
                <absence>
                    <table width="800" border="1" align = "center">
                    <tr>
                        <td style="text-align:center">&nbsp;&nbsp;&nbsp;{{$absences->no}}&nbsp;&nbsp;&nbsp;</td> <td style="text-align:center">{{$absences->noreg}}</td> <td style="text-align:center">{{$absences->nama}}</td> <td style="text-align:center">{{$absences->prodi}}</td> <td style="text-align:center">{{$absences->keterangan}}</td> <td style="text-align:center">{{$absences->tgl}}</td>
                    </tr>
                    </table>
                </absence>

    @endforeach
        </table>
            <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public'">HOME</button>
            <button class="btn btn-default btn-block" onClick="window.location='http://localhost/first_project/public/absence/tambah'">INPUT ABSEN</button>
    </div>
    </div>
@stop
