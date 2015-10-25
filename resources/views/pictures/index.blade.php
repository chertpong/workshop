@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="gallery col-md-8 col-md-offset-2">
                @foreach($pictures as $picture)
                    <div class="picture col-md-4">
                        <span><i class="fa fa-file-image-o"> {!! $picture->name !!}</i></span>
                        <img src="{!! url('pictures/'.$picture->file_hashed_name) !!}" class="img-responsive img-thumbnail" alt="{!! $picture->name !!}">
                        <button type="button" class="btn btn-default pull-right">Copy url</button>
                        <button type="button" class="btn btn-warning">Delete</button>
                        <span>URL of picture</span>
                        <input type="text" class="form-control" value="{!! url('pictures/'.$picture->file_hashed_name) !!}" name="pic-url">
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-md-2">
                <a href={!! url('pictures/create') !!} ><button type="button" class="btn btn-success">Upload picture</button></a>
            </div>
        </div>
    </div>
@endsection