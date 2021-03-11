@extends('layouts.app')

@section('content')
       <h1>{{$title}}</h1>
       @if(count($counsellor) > 0)
              <ul class="list-group">
                     @foreach($counsellor as $name)
                            <li class="list-group-item">{{$name}}</li>
                     @endforeach
              </ul>

       @endif
@endsection
