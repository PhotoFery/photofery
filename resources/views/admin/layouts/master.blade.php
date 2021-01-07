<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<title>Photography</title>
<meta name="keywords" content=""  />
<meta name="description" content=""/>
<link rel="icon" type="image/ico" href="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/public/css/all.css') }}" rel="stylesheet">
</head>
<body>
@include('admin.partials.header')
@yield('content')



<script type="text/javascript">
    // Notice how this gets configured before we load Font Awesome
    window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
<script src="{{ asset('/public/js/all.js') }}"></script>
</body>
</html>

