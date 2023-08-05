@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" class="@error('name') is-invalid @enderror">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
    <div class="mb-3">
    <label for="age">Age:</label>
    <input type="number" name="age" class="@error('age') is-invalid @enderror">
    @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
 

    <div class="mb-3">
    <label for="IDnum">ID Number:</label>
    <input type="number" name="IDnum" class="@error('IDnum') is-invalid @enderror">
    @error('IDnum')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
  

    <div class="mb-3">
    <label for="track_id">Choose a track:</label>
    <select name="track_id" class="@error('track_id') is-invalid @enderror">
        @foreach ($tracks as $track)
            <option value="{{ $track->id }}">{{ $track->name }}</option>
        @endforeach
    </select>
    @error('track_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
  
    <button type="submit">Submit</button>
</form>
@endsection