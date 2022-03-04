@extends('layouts.master')
@section('content')
    <div class="mb-3">
        <a href="{{route('watch.create')}}" class="btn btn-success btn-sm">Create</a>
    </div>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>Category</th>
                <th>Model</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($watches as $w)
            <tr>
                <td>
                    {{$w->category->category}}
                </td>
                <td>
                    {{$w->model}}
                </td>
                <td>
                    <img src="{{$w->image}}" alt="" style="width:100px">
                </td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{route('watch.destroy',$w->id)}}" method="POST" onsubmit="return confirm('sure ?')" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
   </table>
@endsection