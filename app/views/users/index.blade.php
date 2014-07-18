@extends('layout.bootstrap3.index')

@section('content')
@if (Session::has('message'))
	<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>
        
@endif
<div class="jumbotron">
    <h2>Selamata Datang!</h2>
    <div class="">
        Di halaman Administrator Kegiatan Mahasiswa 
    </div>
</div>
@stop