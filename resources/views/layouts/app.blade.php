<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>AIKA réservation</title>
    <meta content="app_creator" name="Elmarzougui Abdelghafour WEDOAPP" />
    <meta content="app_version" name="1.1" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex,nofollow" />
    <meta name="google" content="notranslate" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-aika-site.png') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?ver={{ rand(125, 800) }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    @yield('content')
</body>

</html>
