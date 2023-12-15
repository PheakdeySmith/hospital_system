<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialization</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->first_name }}</td>
                <td>{{ $doctor->last_name }}</td>
                <td>{{ $doctor->specialization }}</td>
                <td>{{ $doctor->contact_number }}</td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No doctors found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
