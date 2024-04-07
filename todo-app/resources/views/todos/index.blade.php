@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(session('success'))
          <div class="alert alert-success">{{session('success')}}</div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
               
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                           
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach ($todos as $todo)

                            <th scope="row">{{$todo->id}}</th>
                            <td>{{$todo->title}}</td>
                            <td>{{$todo->description}}</td>
                            <td><a href="{{route('todos.edit',['todo'=>$todo])}}" class="btn btn-primary">Edit</a>  <a href="{{route('todos.delete',$todo->id)}}" class="btn btn-danger">Delete</a></td>
                          </tr>
                         @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
