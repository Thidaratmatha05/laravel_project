@extends('layouts.app')

@section('content')

<h1>{{ __('Major') }}</h1> <hr>
<a class="btn btn-outline-primary" href="/student">GO student Page</a> 
OR
<a class="btn btn-outline-secondary" href="/home">GO Home Page </a>
<div class="container mt-2">
   <!-- <div
    
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
       <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <!--  <a href="{{ route('major.create') }}"> <!-- /student.create 
                <button type="button" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    Insert
                </button>
            </a>
        </div>
    </div> -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Major's Keywords</th>
            <th scope="col">Description</th>
            <th scope="col" width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($majors as $major)
            <tr>
            <th>{{$major['id']}}</th>
            <th>{{$major['code']}}</th>
            <td>{{$major['description']}}</td>
            <td>
                <div class="container">
                <a href="{{ route('major.show', $major['id']) }}" class="btn btn-info">View</a>
                </div>
               <!-- <form action="{{ route('major.destroy', $major['id']) }}" method="POST">
                    <a href="{{ route('major.edit', $major['id']) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> -->
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $majors->links('pagination::bootstrap-5') !!}
</div>
@endsection