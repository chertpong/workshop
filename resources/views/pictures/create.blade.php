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
                <form class="form-horizontal col-xs-12 col-md-4 col-md-offset-4" method="POST" action={{url('pictures/store')}} enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="title">Picture's name</label>
                        <input type="text" class="form-control" id="picture-name" placeholder="Picture's name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="content">File</label>
                        <input type="file" class="form-control" id="picture-file" name="file" required>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection