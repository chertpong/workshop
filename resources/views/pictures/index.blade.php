@extends('app')

@section('content')
    <div class="container-fluid" ng-controller="mainPictureController">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class=".alert-msg">
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
                </div>
                <div class="gallery col-md-8 col-md-offset-2">
                {{--@foreach($pictures as $picture)--}}
                    {{--<div class="picture col-md-4">--}}
                        {{--<span><i class="fa fa-file-image-o"> {!! $picture->name !!}</i></span>--}}
                        {{--<img src="{!! url('pictures/'.$picture->file_hashed_name) !!}" class="img-responsive img-thumbnail" alt="{!! $picture->name !!}">--}}
                        {{--<button type="button" class="btn btn-warning col-xs-6" ng-click="delete({!! url('pictures/'.$picture->id.'/delete') !!}")">Delete</button>--}}
                        {{--<button type="button" class="btn btn-default col-xs-6">Copy url</button>--}}
                        {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon">URL</div>--}}
                            {{--<input type="text" class="form-control" value="{!! url('pictures/'.$picture->file_hashed_name) !!}" name="pic-url">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                    <div class="picture col-md-4" ng-repeat="picture in pictures">
                        <span><i class="fa fa-file-image-o">[[picture.name]]</i></span>
                        <img src=[['pictures/'+picture.file_hashed_name]] class="img-responsive img-thumbnail" alt=[[picture.name]]>
                        <button type="button" class="btn btn-warning col-xs-6" ng-click=delete([[(picture.id)]])>Delete</button>
                        <button type="button" class="btn btn-default col-xs-6">Copy url</button>
                        <div class="input-group">
                            <div class="input-group-addon">URL</div>
                            <input type="text" class="form-control" value=[[path+'/'+picture.file_hashed_name]] name="pic-url">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-2">
                <a href={!! url('pictures/create') !!} ><button type="button" class="btn btn-success">Upload picture</button></a>
            </div>
        </div>
    </div>
@endsection