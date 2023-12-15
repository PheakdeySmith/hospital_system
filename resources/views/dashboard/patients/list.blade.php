<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->last_name }}</td>
                <td>{{ $patient->date_of_birth }}</td>
                <td>{{ $patient->gender }}</td>
                <td>{{ $patient->contact_number }}</td>
                <td>{{ $patient->address }}</td>
                <td>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No patients found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
