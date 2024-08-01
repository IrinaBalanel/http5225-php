@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Edit student profile
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('students.update', $student -> id) }}" method="POST">
            @if ($errors -> any())
            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>  
            @endif
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname" name="fname" value="{{old('fname') ?? $student -> fname }}">
              @error('fname')
                <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname" name="lname" value="{{old('lname') ?? $student -> lname }}">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{old('email') ?? $student -> email }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit student</button>
          </form>
    </div>
</div>
@endsection