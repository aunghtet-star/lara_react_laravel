<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lara react</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{route('category.index')}}">Category</a>
                    <a class="list-group-item list-group-item-action" href="{{route('watch.index')}}">Product</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Action</a>
                </div>
            </div>
            <div class="col-md-9">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif

                @if(session('update'))
                <div class="alert alert-danger">{{session('update')}}</div>
                @endif

                @if(session('delete'))
                <div class="alert alert-danger">{{session('delete')}}</div>
                @endif

                @if($errors->any())
                    @foreach($errors->all() as $e)
                        <div class="alert alert-danger">{{$e}}</div>
                    @endforeach
                @endif

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>