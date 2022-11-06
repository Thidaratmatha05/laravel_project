@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View </h1> 
    <form method="POST" action="{{ route('student.show', $student['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-2">
                    <strong>Student-ID</strong>
                    <input type="text" name="studentid" value="{{ $student['studentid']}}" class="form-control"   disabled>
                    @error('studentid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-2">
                    <strong>Nickname</strong>
                    <input type="text" name="nickname" value="{{ $student['nickname']}}" class="form-control" disabled>
                    @error('nickname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-2">
                    <strong>firstname</strong>
                    <input type="text" name="firstname" value="{{ $student['firstname']}}" class="form-control" disabled>
                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-2">
                    <strong>Lastname</strong>
                    <input type="text" name="lastname" value="{{ $student['lastname']}}" class="form-control" disabled>
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-2">
                    <strong>Year</strong>
                    <input type="number" name="year" value="{{ $student['year']}}" class="form-control" disabled>
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Major_id --> 1=CS , 2=DS</strong>
                    <input type="number" name="code_id" value="{{ $student['code_id']}}" class="form-control" disabled>
                    @error('code_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{ route('student.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection