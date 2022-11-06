@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Form</h1> 
    <form method="POST" action="{{ route('student.update', $student['id']) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Student-ID</strong>
                    <input type="text" name="studentid" value="{{ $student['studentid']}}" class="form-control"  maxlength="11">
                    @error('studentid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>nickname</strong>
                    <input type="text" name="nickname" value="{{ $student['nickname']}}" class="form-control" >
                    @error('nickname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>firstname</strong>
                    <input type="text" name="firstname" value="{{ $student['firstname']}}" class="form-control" >
                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Lastname</strong>
                    <input type="text" name="lastname" value="{{ $student['lastname']}}" class="form-control" >
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Year</strong>
                    <input type="number" name="year" value="{{ $student['year']}}" class="form-control" >
                    @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group my-3">
                    <strong>Code_Major_id</strong>
                    <input type="number" name="code_id" value="{{ $student['code_id']}}" class="form-control" >
                    @error('code_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class=" btn btn-primary">Save</button>
            <a href="{{ route('student.index') }}" class="btn btn-warning">Back</a>
        </div>
    </form>
</div>
@endsection