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
		  	</div>
		</div>
    </div>

@endsection