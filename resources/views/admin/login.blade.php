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
<div class="login">
	<div class="container">
    <div class="login-body">
    <div class="row">
      <div class="col-lg-12">
          @include('admin.partials.message')
        <h3 class="text-center">Login</h3>
        <form action="{{ route('login')}}" method="post">
      @csrf
      
        <div class="form-group">
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary form-control btn-login">Login</button>
      </div>
      
    </form>
      </div>
    </div>
    </div>
		
	</div>
</div>
<script type="text/javascript">
    // Notice how this gets configured before we load Font Awesome
    window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
<script src="{{ asset('/public/js/all.js') }}"></script>
</body>
</html>