@extends('layouts.master');

@section('content')
<div class="container">
	<div class="card">
	<div class="card-body">
	<h3>{{ $artikel->artikel_judul }}</h3><hr>
	<sub>Slug : {{ $artikel->artikel_slug }}</sub><br><hr>
	{{ $artikel->artikel_isi }}<br>
	<hr>
	Tag : <button class="btn btn-sm btn-info">{{ $artikel->artikel_tag }}</button>
</div>
</div>
</div>
@endsection