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
            <div class="card">
                <div class="card-header">All Categories</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            if (count($categories)>0)
                            @foreach($categories as $key=>$categories)
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$category->name}}</td>
                            <td><a href="{{route('category.edit', [$category->id])}}">
                               <button class="btn btn-outline-success">Edit</button> 
                            </a>
                        </td>
                            <td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">
                                        Delete
                                      </button> 
                                </form>
                             </a>
                             <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <form action="{{route('category.destroy', [$category->id])}}" method="post">
                                    {{method_field('DELETE')}}@csrf
                                <button class="btn btn-outline-success">Delete</button>
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                                </form>
                                </div>
                            </div>
             </td>
                        </td>
                          </tr>
                          @endforeach
                          @else
                          <td>No category to display</td>
                          @endif
                        </tbody>
                      </table>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
