<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Department Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->department_name }}</td>
                <td>
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No departments found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
