@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos App') }}</div>

                <div class="card-body">
                   
                    <form  method ="post" action="{{route('todos.store')}}">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"  cols="5" rows="5" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
