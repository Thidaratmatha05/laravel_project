@extends('layouts.app')

@section('content')
<div class="container mt-2">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h1">{{ __('Student') }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('student.create') }}"> <!-- /student.create -->
                <button type="button" class="btn btn-outline-success">
                    Add
                </button>
            </a>
        </div>
    </div>
    <a class="btn btn-outline-primary" href="/major">GO student Major</a> OR
    <a class="btn btn-outline-secondary" href="/home">GO Home Page </a>
    <hr>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Student-ID</th>
            <th scope="col">Nickname</th>
            <th scope="col">Year</th>
            <th scope="col" width="280px">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($students as $student)
            <tr>
            <th>{{$student['id']}}</th>
            <th>{{$student['studentid']}}</th>
            <td>{{$student['nickname']}}</td>
            <td>{{$student['year']}}</td>
            <td>
                <form action="{{ route('student.destroy', $student['id']) }}" method="POST">
                    <a href="{{ route('student.show', $student['id']) }}" class="btn btn-info">View</a>
                    <a href="{{ route('student.edit', $student['id']) }}" class="btn btn-warning">Edit</a>
                    @csrf()

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    {!! $students->links('pagination::bootstrap-5') !!}
</div>
@endsection