@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class= ".alert alert-success">
            {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('category.update', [$category->id])}}" method="post">
            {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">Edit Food Category</div>
           
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                        value="{{$category->name}}">   
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <button class="btn-btn-outline-primary">Update</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
