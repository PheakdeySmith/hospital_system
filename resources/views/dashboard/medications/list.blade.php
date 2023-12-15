<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Medical Record</th>
            <th>Medication Name</th>
            <th>Dosage</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($medications as $medication)
            <tr>
                <td>{{ $medication->id }}</td>
                <td>{{ optional($medication->medicalRecord)->id }}</td>
                <td>{{ $medication->med_name }}</td>
                <td>{{ $medication->dosage }}</td>
                <td>
                    <a href="{{ route('medications.edit', $medication->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('medications.destroy', $medication->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No medications found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
