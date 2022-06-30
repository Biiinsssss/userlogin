@extends('layouts.app')
@section('title', 'Comment')
@section('content')
<head>
    
</head>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Add Comments') }}</div>
                <form class="form bg-white p-6 border-1" method ="POST" action="{{route('displays.store')}}">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  @csrf
                  <br>
                  <center><textarea name="comment_body" rows ="12" cols="60" placeholder= "Type Your Comment..." value="{{old('comment_body')}}"></textarea></center>
                    @error('comment_body')
                      <div class="form-error">
                          {{$message}}
                      </div>
                    @enderror 
                    <br>
                  <center><button> Submit </button></center>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
        
@endsection