@extends('layouts.master')

@section('title' , 'Find a Ride')

@section('header')
	@include('includes.header')
@endsection

@section('content')
<div class="row" style="margin-top:130px;">
	<div class="container">
		<div class="panel panel-default" style="margin: 0px 10px">
		  	<div class="panel-heading">Find Yourself a Ride</div>
		  	<div class="panel-body">
		  		<form class="form-inline" role="form">
				  	<div class="form-group col-lg-4">
				    	<label for="find_source"><i class="fa fa-map-marker col-xs-2" style="color:green;font-size:30px;"></i></label>
				    	<input type="text" class="form-control col-xs-10" id="find_source">
				  	</div>
				  	<div class="form-group col-lg-2" style="text-align:center;"><i class="fa fa-exchange" style="color:#009688;font-size:30px;"></i></div>
				  	<div class="form-group col-lg-4">
					    <label for="find_destination"><i class="fa fa-map-marker col-xs-2" style="color:red;font-size:30px;"></i></label>
					    <input type="text" class="form-control col-xs-10" id="find_destination">
				  	</div>
				  	<div class="form-group col-lg-2" style="text-align:center;">
				  		<a type="submit"><i class="fa fa-search" style="color:#009688;font-size:30px;"></i></a>
				  		<input type="hidden" name="_token" value="{{ Session::token() }}">
					</div>
				</form>
		  	</div>
		</div>
	</div>
</div>
<div class="dummy"></div>
@foreach($posts as $post)
<div class="row post">
	<div class="post_container container">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  	<div class="panel panel-default" style="margin: 0px 10px;">
			    <div class="panel-heading row" role="tab" id="headingOne">
			    	<div class="col-md-1 col-sm-2 post-content dp">
				  		@if (Storage::disk('local')->has($post->user->first_name . '-' . $post->user->id . '.jpg'))
				            <img src="{{ route('account.image', ['filename' => $post->user->first_name . '-' . $post->user->id . '.jpg']) }}" alt="AS" class="img-circle" width="50" height="50">
				        @else
				            <img src="{{ URL::to('images/no-img_profile.png') }}" width="50" height="50">
				        @endif
				  			
			  		</div>
				  	<div class="col-md-3 col-sm-5 post-content">
				  		<i class="fa fa-map-marker" style="color:green;"></i>
				 		<span>&nbsp;&nbsp;{{ $post->source }}</span>
			 		</div>
			  		<div class="col-md-3 col-sm-5 post-content">
			  			<i class="fa fa-map-marker" style="color:red;"></i>
			  			<span>&nbsp;&nbsp;{{ $post->destination }}</span>
				  	</div>
				 	<div class="col-md-3 col-sm-4 post-content">
			  			<span>{{ $post->date }} ( {{ $post->time }} )</span>
			  		</div>
			  		<div class="col-md-1 col-sm-4 col-xs-6 post-content">
			  			<i class="fa fa-user"></i>
				  		<span>&nbsp;&nbsp;{{ $post->seats }}</span>
				 	</div>
			 		<div class="col-md-1 col-sm-4 col-xs-6 post-content more">
			  			<i class="fa fa-chevron-down" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $post->id }}" aria-expanded="true" aria-controls="collapseOne"></i>
			  		</div>
				</div>
			    <div id="collapse{{ $post->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    	    <div class="panel-body">
				    	
				    </div>
				</div>
		  	</div>
		</div>
	</div>
</div>
@endforeach


@endsection

