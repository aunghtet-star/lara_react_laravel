@extends('layouts.master')
@section('content')
    <div class="mb-3">
        <a href="{{route('category.index')}}" class="btn btn-dark btn-sm">Back</a>
    </div>

    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" class="form-control" name="category">
        </div>
       <div class="form-group">
           <button type="submit" class="btn btn-sm btn-primary">Submit</button>
       </div>
    </form>
@endsection