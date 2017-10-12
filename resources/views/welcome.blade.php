@extends('layouts.app')

@section('content')

    <div class="container">
    	@php
    		$event = App\Event::latest()->first();
    	@endphp
		<div class="jumbotron">
		  <h1>{{ $event->name }}</h1>
		  <p><strong>Date: </strong>{{ $event->date }}</p>
		  <p><strong>Location: </strong>{{ $event->location }}</p>
		  <p><strong>Theme: </strong>{{ $event->theme }}</p>
		  <p>{{ $event->description }}</p>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Join Now!</a></p>
		</div>
    </div>

@endsection