@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="row">
			<div class="col-xs-12 col-sm-10">
				<div class="page-header"> 
		  			<h1>Events</h1>
		  		</div>
		  	</div>
		</div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-10">
				  <table class="table">
				  	<tr>
				  		<th>Name</th><th>Date</th><th>Location</th><th>Theme</th>
				  	</tr>
				  	@foreach($events as $event)
				    <tr>
				    	<td><a href="/events/{{ $event->id }}">{{ $event->name }}</a></td>
				    	<td>{{ $event->date }}</td>
				    	<td>{{ $event->location }}</td>
						<td>{{ $event->theme }}</td>
				    </tr>
				    @endforeach
				  </table>
			</div>
		</div>
    </div>

@endsection