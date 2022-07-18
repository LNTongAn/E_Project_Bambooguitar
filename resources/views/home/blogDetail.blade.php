@extends('layout.layout')
@section('title', 'OrganicFood')
@section('content')
    <br>
    <nav class="grid wide background_white">
        <h1>{{ $b->topic }}</h1>
        <h4 style="color:gray;">{{ $b->date }}</h4>
        <img style="padding: 0 130px 0 130px" src="{{ url('img/'.$b->image) }}" alt="" width="100%" height="450px">
        <br><h3 style="padding: 0 50px 0 50px">{!! $b->content !!}</h3>
    </nav>
    <style>
        .background_white{
            background-color: white;
            padding: 2px 15px 8px 15px;
        }
    </style>
@endsection
@section('script-section')


@endsection
