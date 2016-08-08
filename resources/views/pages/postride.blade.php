@extends('layouts.master')

@section('title', 'Post a Ride')

@section('header')
	@include('includes.header')
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form action="{{ route('post.create') }}" method="post" class="form-horizontal">
			<div class="row">
				<div class="col-md-6 travel-det">
					<div class="panel panel-default">
					  	<div class="panel-heading">Find A Travel Buddy!</div>
					  	<div class="panel-body" style="padding-bottom:27px;">
							<div class="form-group {{ $errors->has('source') ? 'has-error' : '' }}">
								<label for="source" class="col-md-2 control-label">Source</label>
								<div class="col-md-10">	
									<input type="text" name="source" class="form-control" id="source" placeholder="Source">
								</div>		
							</div>
							<div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
								<label for="destination" class="col-md-2 control-label">Destination</label>
								<div class="col-md-10">	
									<input type="text" name="destination" class="form-control" id="destination" placeholder="Destination">
								</div>		
							</div>
							<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
								<label for="date" class="col-md-2 control-label">Date</label>
								<div class="col-md-10">	
									<input type="date" name="date" class="form-control" id="date" placeholder="Date">
								</div>		
							</div>
							<div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
								<label for="time" class="col-md-2 control-label">Time</label>
								<div class="col-md-10">	
									<input type="time" name="time" class="form-control" id="time" placeholder="Time">
								</div>		
							</div>
							<div class="form-group {{ $errors->has('seats') ? 'has-error' : '' }}">
								<label for="seats" class="col-md-2 control-label">Seats</label>
								<div class="col-md-10">	
									<input type="number" name="seats" class="form-control" id="seats" placeholder="Seats">
								</div>		
							</div>
					  	</div>
					</div>
				</div>
				<div class="col-md-6 car-driver-det">
					<div class="row">
						<div class="col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Vehical Details</div>
								<div class="panel-body">
									<div class="form-group {{ $errors->has('car_model') ? 'has-error' : '' }}">
										<label for="car_model" class="col-md-2 control-label">Model</label>
										<div class="col-md-10">	
											<input type="text" name="car_model" class="form-control" id="car_model" placeholder="Model">
										</div>		
									</div>
									<div class="form-group {{ $errors->has('car_regno') ? 'has-error' : '' }}">
										<label for="car_regno" class="col-md-2 control-label">Registration No</label>
										<div class="col-md-9 col-md-offset-1">	
											<input type="text" name="car_regno" class="form-control" id="car_regno" placeholder="Registration Number">
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Driver Details</div>
								<div class="panel-body">
									<div class="form-group {{ $errors->has('driver_name') ? 'has-error' : '' }}">
										<label for="driver_name" class="col-md-2 control-label">Name</label>
										<div class="col-md-10">	
											<input type="text" name="driver_name" class="form-control" id="driver_name" placeholder="Name">
										</div>		
									</div>
									<div class="form-group {{ $errors->has('driver_license') ? 'has-error' : '' }}">
										<label for="driver_license" class="col-md-2 control-label">License</label>
										<div class="col-md-10">	
											<input type="text" name="driver_license" class="form-control" id="driver_license" placeholder="License">
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row">
	@include('includes.footer')
</div>
@endsection

	

