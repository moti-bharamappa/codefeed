@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                @foreach($threads as $thread)
                <h4>{{$thread->title}}</h4>
                <div class="panel-body">
                    {{$thread->body}}
                </div>
                <div class="small-text">{{$thread->created_at->diffForHumans()}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
