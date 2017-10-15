@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
			<div class="col-xs-12 col-sm-8">
				<div class="page-header"> 
		  			<h1>{{ $guest->name }}</h1>
		  		</div>
				<div class="panel panel-default">

				  <div class="panel-body">
				  	<address>
				  		<strong>Email</strong><br>
				  		{{ $guest->email }}
				  	</address>
				  	<address>
				  		<strong>City</strong><br>
				  		{{ $guest->city }}
				  	</address>
				  </div>
				</div>
				

		  	</div>
		  	<div class="col-xs-12 col-sm-4">

		  	</div>
		</div>
    </div>

@endsection