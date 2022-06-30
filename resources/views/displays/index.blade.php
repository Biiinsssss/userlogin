@extends('layouts.app')
@section('title', 'Comment Display')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comments') }}</div>
                    @if(count($displays) > 0)
                        @foreach($displays as $display)
                            <div>   
                                <ul>
                                    
                                   <li> <h3><a class="navbar-brand" href="{{route('displays.show', ['display' => $display['id']])}}">{{$display['comment_body']}}</a></h3></li>
                                </ul>
                            </div>  
                        @endforeach
                    @else
                        <h2>No commentss to display</h2>
                    @endif
            </div>
        </div>    
    </div>
</div>

@endsection