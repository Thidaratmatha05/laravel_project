@extends('layouts.app')

@section('content')
<div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h1">{{ __('Student') }}</h1>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <strong>Student-ID</strong>
                            <input type="text" name="studentid" class="form-control" placeholder="63341xxxx-x" maxlength="11">
                            @error('studentid')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <strong>Nickname</strong>
                            <input type="text" name="nickname" class="form-control" placeholder="Waan">
                            @error('nickname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <strong>Firstname</strong>
                            <input type="text" name="firstname" class="form-control" placeholder="Thidarat">
                            @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <strong>Lastname</strong>
                            <input type="text" name="lastname" class="form-control" placeholder="Mata">
                            @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-2">
                            <strong>Year</strong>
                            <input type="number" name="year" class="form-control" placeholder="3">
                            @error('year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Code_Major_id</strong>
                            <input type="number" name="code_id" class="form-control" placeholder="1=CS, 2=DS">
                            @error('code_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('student.index') }}" class="btn btn-warning">Back</a>
                </div>
            </form>
</div>
@endsection
