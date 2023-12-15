<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Surgeon</th>
            <th>Surgery Date</th>
            <th>Procedure Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($surgeries as $surgery)
            <tr>
                <td>{{ $surgery->id }}</td>
                <td>{{ optional($surgery->patient)->first_name }}</td>
                <td>{{ optional($surgery->surgeon)->first_name }}</td>
                <td>{{ $surgery->surgery_date }}</td>
                <td>{{ $surgery->procedure_name }}</td>
                <td>
                    <a href="{{ route('surgeries.edit', $surgery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('surgeries.destroy', $surgery->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No surgeries found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
