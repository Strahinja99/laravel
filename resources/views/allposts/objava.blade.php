@extends('layouts.app')
@section('sadrzaj')
	<h1>Nase usluge</h1>
	@if(count($postovi)>0)
			@foreach($postovi as $nasipostovi)
			<div class="card p-4">
				<h3><a href="posts/{{$nasipostovi->id}}">{{$nasipostovi->title}}</a></h3>
				<small>Napisan je {{$nasipostovi->created_at}}</small>
			</div>
			</br>
			@endforeach
			{{$postovi->links()}}
		@else
			<p>
				No Posts found
			</p>
	@endif 

@endsection
