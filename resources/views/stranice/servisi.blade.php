@extends('layouts.app')
@section('sadrzaj')

<div class="jumbotron">
  <h1 class="display-4">!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
		<h1>{{$naslov}}</h1>
		@if(count($nizservisa) >0)
			<ul class="list-group">
				@foreach($nizservisa as $nizs)
					<li class="list-group-item">{{$nizs}}</li>
				@endforeach
			</ul>
   		@endif
  
@endsection