@extends('layouts.app')

@section('content')

    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="page-header"> 
		  			<h1>Add new guest</h1>
		  		</div>
		  	</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2"> 
				<form action="/guests" method="POST">
					{{ csrf_field() }}
				  <div class="form-group">
				    <label for="guest_name">Name</label>
				    <input type="text" class="form-control" id="guest_name" name="name" value="{{ old('name') }}" autofocus required>
				    @if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="guest_theme">Email</label>
				    <input type="text" class="form-control" id="guest_email" name="email" value="{{ old('email') }}" required>
				    @if ($errors->has('email'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('email') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="guest_city">City</label>
				    <input type="text" class="form-control" id="guest_city" name="city" value="{{ old('city') }}" required>
				    @if ($errors->has('city'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('city') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <button type="submit" class="btn btn-primary">Create guest</button>
				</form>
			</div>
		</div>
    </div>

@endsection