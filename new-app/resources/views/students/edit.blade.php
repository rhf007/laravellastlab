<form method="POST" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $student->name }}" required>
    <br>
    <label for="age">Age:</label>
    <input type="number" name="age" value="{{ $student->age }}" required>
    <br>
    <label for="IDnum">ID Number:</label>
    <input type="number" name="IDnum" value="{{ $student->IDnum }}" required>
    <br>
    <label for="track_id">Choose a track:</label>
    <select name="track_id" required>
        @foreach ($tracks as $track)
            <option value="{{ $track->id }}" {{ $student->track_id == $track->id ? 'selected' : '' }}>
                {{ $track->name }}
            </option>
        @endforeach
    </select>
    <br>
    <button type="submit">Update</button>
</form>