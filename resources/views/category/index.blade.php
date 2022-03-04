@extends('layouts.master')
@section('content')
    <div class="mb-3">
        <a href="{{route('category.create')}}" class="btn btn-success btn-sm">Create</a>
    </div>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>Category</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
            <tr>
                <td>
                    {{$c->category}}
                </td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{route('category.destroy',$c->id)}}" method="POST" onsubmit="return confirm('sure ?')" class="d-inline">
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