@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Search Comment') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <br>
                        <form class="form bg-white p-6 border-1" method ="GET" action="{{route('search')}}">
                        <center><textarea name="query" cols="50" placeholder= "Search here..."></textarea></center>
                            @error('query')
                                <div class="form-error">
                                    {{$message}}
                                </div>
                            @enderror 
                        <br>
                        <center><button> Submit </button></center>       
                                
                    </div>
                    </div>
                    <br>
                    <br>
                    @if(isset($display))
                        <table class="table table-hover">
                            <thead> 
                                <tr>
                                    <th>Comment/s</th>
                                </tr>
                            </thead>  
                            <tbody>  
                                @if(count($display)>0)
                                    @foreach($display as $displays)
                                        <tr>
                                        <td>{{$displays->comment_body}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><td>No result found!</td></tr>
                                @endif
                            </tbody> 
                        </table>
                    @endif                 
                </div>
            </div>
        </div>
    </div>
@endsection