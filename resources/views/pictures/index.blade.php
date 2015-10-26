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
                        <button type="button" class="btn btn-warning col-xs-6">Delete</button>
                        <button type="button" class="btn btn-default col-xs-6">Copy url</button>
                        <div class="input-group">
                            <div class="input-group-addon">URL</div>
                            <input type="text" class="form-control" value="{!! url('pictures/'.$picture->file_hashed_name) !!}" name="pic-url">
                        </div>
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