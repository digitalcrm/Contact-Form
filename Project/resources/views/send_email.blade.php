<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us Form</title>
		<script
	  src="https://code.jquery.com/jquery-migrate-3.1.0.js"
	  integrity="sha256-oA/lsZCgEPkbv/byAkeXSTEZTsGOPZCrtbyFBHmcGKM="
	  crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	  <style type="text/css">
	  	.box{
	  		width: 600px;
	  		margin: 0 auto;
	  		border: 1px solid #ccc;
	  	}
	  	.has-error
	  	{
	  		border-color:cc000;
	  		background-color: #ffff99;
	  	}
	  </style>
	  <h1>Contact US</h1>
	</head>
	<body>
		<br />
		<div class="container box">
			
			@if(count($errors)> 0)
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss = "alert">x</button>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>				
				</div>
			@endif

			@if($message= Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss = "alert">x</button>
					<strong>{{ $message }}</strong>   
				</div>
				@endif
			<form method="POST" action="{{ url('sendemail/send') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Enter Name:</label>
					<input type="text" name="name" class="form-control" />
				</div>
				<div class="form-group">
					<label>Enter Email:</label>
					<input type="text" name="email" class="form-control" />
				</div>
				<div class="form-group">
					<label>Enter Message:</label>
					<textarea type="text" name="message" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="send" class="btb btn-info"/ >
				</div>
			</form>
		</div>
	</body>
</html>