@extends('common.main')
@section('title','Create Profile')
@section('content')

<div class = "d-flex justify-content-center">
    <div class = "text-center m-4" style = "width: 40rem;">
<form class = "shadow-lg p-4" method="POST" action="{{ route('addUser') }}">
    @csrf
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
    @endif
    <div class="row mb-3">
        <label for="FirstName" class="col-sm-2 col-form-label">First name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="FirstName" name="FirstName">
        </div>
    </div>
    <div class="row mb-3">
        <label for="MiddleName" class="col-sm-2 col-form-label">Middle name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MiddleName" name="MiddleName">
        </div>
    </div>
    <div class="row mb-3">
        <label for="Surname" class="col-sm-2 col-form-label">Surname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Surname" name="Surname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>
    

    <button type="submit" class="btn btn-primary w-100">
    Submit
    </button>

</form>

    </div>
</div>
@endsection