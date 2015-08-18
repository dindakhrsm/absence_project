<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Absen Online</title>

    <!-- Bootstrap Core CSS -->
    {{!! HTML::style('assets/css/bootstrap.min.css') !!}}

    <!-- Custom CSS -->
    {{!! HTML::style('assets/css/sb-admin.css') !!}}

    <!-- Custom Fonts -->
    {{!! HTML::style('assets/font-awesome-4.1.0/css/font-awesome.min.css') !!}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    < id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           @include('includes.header')
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           @include('includes.sidebar')
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                         @yield('content')

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<nav>@include('includes.footer')</nav>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {{!! Html::script('assets/js/jquery-1.11.0.js') !!}}

    <!-- Bootstrap Core JavaScript -->
    {{!! Html::script('assets/js/bootstrap.min.js') !!}}

</body>

</html>
