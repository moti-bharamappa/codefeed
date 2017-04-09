@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Answers
                </div>
                <div class="panel-body">
                    @foreach($threads as $thread)
                        <h4><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></h4>
                        <article>{{$thread->body}}</article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
