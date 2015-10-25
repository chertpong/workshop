@extends('app')

@section('content')
    <div class="container-fluid" id="contentpage">
        <div class="row" id="contentrow">
            <div class="col-md-8 col-md-offset-2">
                @foreach($contents as $content)
                    <article class="panel panel-success">
                        <header class="panel-heading">
                            <h2><a href="{{url('contents/'.$content->id)}}" id="contentt">{{$content->title}}</a></h2>
                            <span>Publish date: <time pubdate="pubdate">{{$content->created_at}}</time></span>
                            <span>Last update: <time>{{$content->updated_at}}</time></span>
                            <span>By <i class="fa fa-user"> {{substr($content->user->email,0,2)}}</i></span>
                        </header>
                        <div class="panel-body">
                            <content>
                                {!! substr(strip_tags($content->content),0,50).'...' !!}
                            </content>
                            <footer>
                                <a href="{{url('contents/'.$content->id)}}"><button class="button button-pill button-inverse-flat pull-right hvr-bounce-in" id="readmoreb">Read more</button></a>
                            </footer>
                        </div>
                    </article>
                @endforeach
                    <div class="paginate">
                        {!! $contents->render() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection