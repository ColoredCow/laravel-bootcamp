@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
			<div class="col-xs-12 col-sm-8">
				<div class="page-header"> 
		  			<h1>{{ $event->name }}</h1>
		  		</div>
				<div class="panel panel-default">

				  <div class="panel-body">
				  	<address>
				  		<strong>Location</strong><br>
				  		{{ $event->location }}
				  	</address>
				  	<address>
				  		<strong>Theme</strong><br>
				  		{{ $event->theme }}
				  	</address>
				  	<address>
				  		<strong>Date</strong><br>
				  		{{ $event->date }}
				  	</address>
				  	<address>
				  		<strong>Description</strong><br>
				  		{{ $event->description }}
				  	</address>
				  </div>
				</div>
				
				<h3>Invited Guests</h3>
				<table class="table">
				  	<tr>
				  		<th>Name</th><th>Email</th><th>Status</th>
				  	</tr>
				  	@foreach($event->eventGuest as $guest)
				    <tr>
				    	<td><a href="/guests/{{$guest->guest->id}}">{{$guest->guest->name}}</a></td>
				    	<td>{{$guest->guest->email}}</td>
						<td><span class="label label-{{isset($guest->rsvp_status) ?  $guest->rsvp_status ? 'success' : 'danger' : 'warning' }}">{{isset($guest->rsvp_status) ?  $guest->rsvp_status ? 'Confirmed' : 'Declined' : 'Pending' }}</span></td>
				    </tr>
				    @endforeach
				</table>

		  	</div>
		  	<div class="col-xs-12 col-sm-4">
		  		<h3>Guest List</h3>
				<ul>
					@foreach(App\Guest::eventInvitationList($event->id); as $guest)
						<li><a href="/events/{{$event->id}}/invite/{{$guest->id}}">{{ $guest->name }}</a></li>
					@endforeach
				</ul>

		  	</div>
		</div>
    </div>

@endsection