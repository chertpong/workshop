@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action={{url('contents/'.$content->id.'/update')}}>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="title">Title of content</label>
                        <input type="title" class="form-control" id="title" placeholder="Title"
                               value={{$content->title}} name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="10" name="content">
                            {{$content->content}}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                </form>
                <form class="form-horizontal" method="POST" action={{url('contents/'.$content->id.'/delete')}}>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger pull-left">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection