@extends('layouts.master')
@section('content')
    <div class="mb-3">
        <a href="{{route('watch.index')}}" class="btn btn-dark btn-sm">Back</a>
    </div>

    <form action="{{route('watch.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <select name="category_id" class="form-control">
                @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->category}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Model</label>
            <input type="text" class="form-control" name="model">
        </div>

        <div class="form-group">
            <label for="">Image</label>
            <input type="text" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description">
        </div>

       <div class="form-group">
           <button type="submit" class="btn btn-sm btn-primary">Submit</button>
       </div>
    </form>
@endsection