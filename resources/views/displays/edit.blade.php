@extends('layouts.app')
@section('content')
<head>
    
</head>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-1" method ="POST" action="{{route('displays.update', ['display'=> $display->id])}}">
    @csrf
    @method('PUT')
    <br>
    <center><textarea name="comment_body" rows ="5" cols="50" value="{{$display->comment_body}}" placeholder="Comment here...."></textarea></center>
      @error('comment_body')
        <div class="form-error">
            <center>{{$message}}</center>
        </div>
      @enderror 
      <br>
    <center><button> Submit </button></center>
        
@endsection