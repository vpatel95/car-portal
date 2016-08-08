@extends('layouts.master')

@section('title', 'Car Portal')

@section('header')
	<div class="row header-row">
		<ul class="header-modals-link">
		    <li class="signup" data-toggle="modal" data-target="#signupModal"><h4 style="font-weight:600;">Sign Up</h4></li>
		    <li class="login" data-toggle="modal" data-target="#loginModal"><h4 style="font-weight:600;">Login</h4></li>
		</ul>	
	</div>
@endsection

@section('content')
	<div>
		<div id="signupModal" class="modal">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        		<h4 class="modal-title">REGISTER</h4>
		      		</div>
			      	<div class="modal-body">
			        	<form action="{{ route('signup') }}" method="post" class="form-horizontal">
						    <div class="form-group">
							    <label for="first_name" class="col-md-2 control-label">First Name</label>
							    <div class="col-md-10">
							       	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
							    </div>
						    </div>
						    <div class="form-group">
							    <label for="last_name" class="col-md-2 control-label">Last Name</label>
							    <div class="col-md-10">
							       	<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
							    </div>
						    </div>
						    <div class="form-group">
							    <label for="email" class="col-md-2 control-label">Email</label>
							    <div class="col-md-10">
							       	<input type="email" class="form-control" id="regEmail" name="email" placeholder="Email">
							    </div>
						    </div>
						    <div class="form-group">
						      	<label for="regPassword" class="col-md-2 control-label">Password</label>
						      	<div class="col-md-10">
						       		<input type="password" class="form-control" id="regPassword" name="password" placeholder="Minimun 8 characters">
						      	</div>
						    </div>
						    <div class="form-group">
							    <div class="col-md-10 col-md-offset-2">
							       	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							       	<button type="submit" class="btn btn-primary">Submit</button>
							       	<input type="hidden" name="_token" value="{{ Session::token() }}">
							    </div>
							</div>
						</form>
			      	</div>
		    	</div>
		  	</div>
		</div>
		<div id="loginModal" class="modal">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        		<h4 class="modal-title">LOGIN</h4>
		      		</div>
			      	<div class="modal-body">
			        	<form class="form-horizontal" action="{{ route('signin') }}" method="post">
						    <div class="form-group">
							    <label for="email" class="col-md-2 control-label">Email</label>
							    <div class="col-md-10">
							       	<input type="email" class="form-control" id="email" name="email" placeholder="Email" name="username">
							    </div>
						    </div>
						    <div class="form-group">
						      	<label for="password" class="col-md-2 control-label">Password</label>
						      	<div class="col-md-10">
						       		<input type="password" class="form-control" id="password" name="password" placeholder="Password" name="password">
						      	</div>
						    </div>
						    <div class="form-group">
							    <div class="col-md-10 col-md-offset-2">
							       	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							       	<button type="submit" class="btn btn-primary">Submit</button>
							       	<input type="hidden" name="_token" value="{{ Session::token() }}">
							    </div>
							</div>
						</form>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</div>
	<div class="container">
		<div class="row slogan">
			<p class="jumbo">FREEDOM TO GO</p>
			<p class="xlarge">Welcome to the world of ownerless car, because SHARING is BETTER</p>
		</div>
	</div>
@endsection

@section('footerlinks')
@endsection
