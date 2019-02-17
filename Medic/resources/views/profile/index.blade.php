@extends('layouts.main')
@section('content')
<div>
	<table class="table table-hover" style="margin-top: 5%; margin-left: 5%; color: black">
		<tr>
			    <th>Decease:</th>
			    <th>Date of examination:</th> 
			    <th>Description & Symptoms:</th>
			    <th></th>
		</tr>
		@foreach($deceases as $decease)
		@if (Auth::id()==$decease->user_id)
		
		  	<tr style="font-weight: italic">
		  			<td>{{$decease->name}}</td>
		    		<td>{{$decease->time}}</td> 
		    		<td>{{$decease->description}}</td>
		    </tr>
		    @else
		    @endif
    @endforeach
	</table>
</div>
@endsection