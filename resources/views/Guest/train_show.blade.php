
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>BANGLADESH RAILWAY E-TICKET</title>

	<!-- Google font -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=PT+Sans:400') }}" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css') }}">

<!-- jQuery library -->
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>

<script src="{{ asset('bootstrap.bundle.min.js') }}"></script>


<!-- Latest compiled JavaScript -->
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
 

</head>

<body>

	<div id="booking" class="section">
	@php 

		$user_login_status=Session::get('user_login_status');
		$user_id=Session::get('user_id');
	@endphp
		@if($user_login_status)
				<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
					<a class="navbar-brand" href="{{ Url('/') }}">Bangladesh Railway</a>
					</div>
					<ul class="nav navbar-nav">
					<li class="active"><a href="{{ Url('/') }}">Home</a></li>
					<li ><a href="{{ Url('/user/dashboard/'.$user_id) }}">DashBoard</a></li>
					<li class=""><a href="{{ Url('purchase/history/'.$user_id) }}">Purchase History</a></li>
					<li class=""><a href="{{ Url('/verify-ticket') }}">Verify Ticket</a></li>
					<li class=""><a href="{{ Url('/contact-us')}}">Contact us</a></li>
					<li class=""><a href="{{ Url('/user/settings') }}">Settings</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ Url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
				</nav>
		@endif
		@if(!$user_login_status)
			<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ Url('/') }}">Bangladesh Railway</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ Url('/') }}">Home</a></li>
				<li class=""><a href="{{ Url('/verify-ticket') }}">Verify Ticket</a></li>
					<li class=""><a href="{{ Url('/contact-us')}}">Contact us</a></li>
		
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ Url('/sign-up') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="{{ Url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
			</div>
		</nav>

		@endif
		<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
	@if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
	$('.datepicker').datepicker({ 

startDate: new Date()

});
</script>
<style>
body {
    font-family: 'PT Sans', sans-serif;
}

.train-info-header {
    background: #fff;
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.train-info-header p {
    margin: 8px 0;
    font-size: 16px;
}

.train-info-header .label-text {
    color: #ff5722;
    font-weight: bold;
    display: inline-block;
    min-width: 100px;
}

.train-info-header .value-text {
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
}

.table-wrapper {
    margin: 30px auto;
    max-width: 1200px;
    padding: 0 15px;
}

#t01 {
    width: 100%;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

#t01 th {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
    font-weight: 600;
    border: none;
}

#t01 td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #e0e0e0;
}

#t01 tbody tr {
    transition: background-color 0.2s;
}

#t01 tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

#t01 tbody tr:hover {
    background-color: #f0f0f0;
}

#t01 tbody tr:last-child td {
    border-bottom: none;
}

.fare-amount {
    color: #27ae60;
    font-weight: bold;
    font-size: 15px;
}

.seat-count {
    color: #27ae60;
    font-weight: bold;
}

.train-left-msg {
    color: #e74c3c;
    font-weight: bold;
    font-size: 13px;
}

.btn-purchase {
    background-color: #27ae60;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 4px;
    font-weight: 600;
    transition: background-color 0.2s;
    cursor: pointer;
}

.btn-purchase:hover {
    background-color: #229954;
    color: white;
    text-decoration: none;
}

.btn-purchase:disabled {
    background-color: #95a5a6;
    cursor: not-allowed;
}
</style>
		@php 
			$form=Session::get('form');
			$to=Session::get('to');
			$class=Session::get('class');
			$date=Session::get('date');
		@endphp

		<div class="train-info-header">
			<p><span class="label-text">FROM:</span> <span class="value-text">{{ $form }}</span></p>
			<p><span class="label-text">TO:</span> <span class="value-text">{{ $to }}</span></p>
			<p><span class="label-text">CLASS:</span> <span class="value-text">{{ $class }}</span></p>
			<p><span class="label-text">DATE:</span> <span class="value-text">{{ $date }}</span></p>
		</div>

		<div class="section-center">        
			<div class="container">            
				<div class="row">
					<div class="table-wrapper">
					<table id="t01">
        				<thead>
							<tr>
								<th>SERIAL</th>
								<th>TRAIN NUMBER</th>
								<th>TRAIN NAME</th>
								<th>DEPARTURE</th>
								<th>ARRIVAL</th>
								<th>FARE</th>
								<th>SEAT AVAILABLE </th>
								<th>ACTION</th>
            				</tr>
        				</thead>

        				<tbody>
					@php
					$count=1;
					@endphp
					@foreach($train_list as $row)											
						<tr>
							<td>{{ $count }}</td>
							<td><strong>{{ $row->train_number }}</strong></td>
							<td>{{ $row->train_name }}</td>
							<td>{{ $row->origin_time }}</td>
							<td>{{ $row->destination_time }}</td>			
							<td><span class="fare-amount">BDT {{ number_format($row->price, 2) }}</span></td>
							<td>
							@php
							date_default_timezone_set("Asia/Dhaka");
							$current_date=date("Y-m-d");
							$current_time=date("H:i");
							$seat=0;
							$s=0;
							$seat_available=$train_list[$count-1]->seat_no;
							Session::put('$seat_available',$seat_available); 

							if($date==$current_date && $s==0)
							{
								if($current_time > $row->origin_time)
								{
									echo '<span class="train-left-msg">Train Already Left</span>';
									$seat_available=0;
									$seat=1;		
								}
								else
								{
									echo '<span class="seat-count">'.$seat_available.'</span>';
								}
							}
							else
							{
								echo '<span class="seat-count">'.$seat_available.'</span>';
							}
							@endphp
							</td>
					
							<td>
							@if($seat_available == 0)
								<button class="btn btn-purchase" disabled>Unavailable</button> 
							@else
								<a href="{{ Url('/purchase/'.$row->id) }}" class="btn btn-purchase">Purchase</a> 
							@endif
							</td>
							
							@php
								$count++;
							@endphp               
						</tr>
					@endforeach  
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>