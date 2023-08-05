<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>ID Number</th>
            <th>Track</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->IDnum }}</td>
                <td>{{ $student->track->name }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>