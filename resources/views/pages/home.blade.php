

@extends('layouts.main')

@section('title' ,'Anasayfa')

@section('content')


@include('components.home.postArea')
@include('components.home.postGallery')
@include('components.home.featureArea')
@include('components.home.tredingArea')
@include('components.home.allPostArea')
@endsection


