@extends('app')

@section('content')
    <div class="container-fluid" id="contentpage">
        <div class="row" id="contentrow">
            <div class="col-md-8 col-md-offset-2">
                    <article class="panel panel-default">
                        <header class="panel-heading">

                            @if(Auth::check())
                                <a href="{{url('contents/'.$content->id.'/edit')}}">
                                    <button class="btn btn-warning pull-right">Edit</button>
                                </a>
                            @endif

                            <h2><a href="{{url('contents/'.$content->id)}}" id="contentt">{{$content->title}}</a></h2>
                            <span>Publish date: <time pubdate="pubdate">{{$content->created_at}}</time></span>
                            <span>Last update: <time>{{$content->updated_at}}</time></span>
                            <span>By <i class="fa fa-user"> {{substr($content->user->email,0,2)}}</i></span>

                        </header>
                        <div class="panel-body">
                            <content>
                                {!! $content->content !!}
                            </content>
                        </div>
                    </article>
            </div>
        </div>
    </div>
@endsection