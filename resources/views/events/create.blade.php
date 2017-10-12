@extends('layouts.app')

@section('content')

    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="page-header"> 
		  			<h1>Add new event</h1>
		  		</div>
		  	</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2"> 
				<form action="/events" method="POST">
					{{ csrf_field() }}
				  <div class="form-group">
				    <label for="event_name">Name</label>
				    <input type="text" class="form-control" id="event_name" name="name" value="{{ old('name') }}" autofocus required>
				    @if ($errors->has('name'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('name') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="event_theme">Theme</label>
				    <input type="text" class="form-control" id="event_theme" name="theme" value="{{ old('theme') }}" required>
				    @if ($errors->has('theme'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('theme') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="event_theme">Location</label>
				    <input type="text" class="form-control" id="event_location" name="location" value="{{ old('location') }}" required>
				    @if ($errors->has('location'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('location') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="event_theme">Description</label>
				    <textarea class="form-control" id="event_description" name="description" required>{{ old('description') }}</textarea>
				    @if ($errors->has('description'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('description') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <div class="form-group">
				    <label for="event_theme">Event Date</label>
				    <input type="date" class="form-control" id="event_date" name="date" value="{{ old('date') }}" required>
				    @if ($errors->has('date'))
	                    <span class="help-block">
	                        <strong>{{ $errors->first('date') }}</strong>
	                    </span>
	                @endif
				  </div>
				  <button type="submit" class="btn btn-primary">Create Event</button>
				</form>
			</div>
		</div>
    </div>

@endsection