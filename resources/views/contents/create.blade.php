@extends('app')

@section('content')
    <div class="container-fluid" ng-controller="addContentController">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="title">Title of content</label>
                            <input type="title" class="form-control" id="title" placeholder="Title" name="title" ng-model="title">
                        </div>
                        <br>
                        <div text-angular name="htmlcontent" ng-model="htmlcontent"></div>
                        <h3>Raw HTML in a text area</h3>
                        <textarea class="form-control col-xs-12" rows="10" ng-model="htmlcontent"></textarea>
                        <button class="btn btn-success pull-right" ng-click="save()">Create</button>
                    </div>
                {{--<form class="form-horizontal" method="POST" action={{url('contents/store')}}>--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="title">Title of content</label>--}}
                        {{--<input type="title" class="form-control" id="title" placeholder="Title" name="title">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="content">Content</label>--}}
                        {{--<textarea class="form-control" id="content" rows="10" name="content" placeholder="Content.."></textarea>--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-success pull-right">Create</button>--}}
                {{--</form>--}}
            </div>
        </div>
    </div>
@endsection