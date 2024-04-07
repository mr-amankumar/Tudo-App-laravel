@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos App') }}</div>
                
                <div class="card-body">
                   
                    <form  method="post" action="{{route('todos.update',['todo'  => $Todo])}}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$Todo->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" cols="5" rows="5" class="form-control" >{{$Todo->description}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Todo</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
