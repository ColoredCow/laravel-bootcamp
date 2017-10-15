@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="row">
			<div class="col-xs-12 col-sm-10">
				<div class="page-header"> 
		  			<h1>Guests</h1>
		  		</div>
		  	</div>
		</div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-10">
				  <table class="table">
				  	<tr>
				  		<th>Name</th><th>Email</th><th>City</th>
				  	</tr>
				  	@foreach($guests as $guest)
				    <tr>
				    	<td><a href="/guests/{{ $guest->id }}">{{ $guest->name }}</a></td>
				    	<td>{{ $guest->email }}</td>
				    	<td>{{ $guest->city }}</td>
				    </tr>
				    @endforeach
				  </table>
			</div>
		</div>
    </div>

@endsection