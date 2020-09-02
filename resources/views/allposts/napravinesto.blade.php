@extends('layouts.app')
@section('sadrzaj')
	<h1>Dodaj uslugu</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
    	{{Form::label('naslovobjave', 'Naslov')}}
    	{{Form::text('naslovobjave', ' ', ['class' =>'form-control', 'placeholder'  =>'Upisi naslov'])}}
    </div>

	<div class="form-group">
    	{{Form::label('telo', 'Detaljnije o usluzi')}}
    	{{Form::textarea('telo', ' ', ['class' =>'form-control', 'placeholder'  =>'Upisi nesto u body'])}}
    </div>
{{Form::submit('Kreiraj uslugu!', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}

@endsection
