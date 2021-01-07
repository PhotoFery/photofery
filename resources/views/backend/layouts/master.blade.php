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
@auth	
@include('backend.partials.header')

<div class="dashboard-body">
	
		<div class="row">
			<div class="col-md-4 sidebar-main">
			<div class="sidebar">
				
					@include('backend.partials.sidebar')
			
			</div>
			</div>
			<div class="col-md-8">
			
					@yield('content')
			
			</div>
		</div>
	
</div>
@endauth
@guest
    
    @endguest

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
    // Notice how this gets configured before we load Font Awesome
    window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
<script src="{{ asset('/public/js/all.js') }}"></script>
<script type='text/javascript'>
    $(document).ready(function(){
        $('.edit-a-delete').on('click',function(e){
            e.preventDefault();
            Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.isConfirmed) {
				$(this).closest('form').submit()
			}
			})
        })
    })
</script>
</body>
</html>

