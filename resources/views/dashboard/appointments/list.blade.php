<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Department</th>
            <th>Appointment Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ optional($appointment->patient)->first_name }}</td>
                <td>{{ optional($appointment->doctor)->first_name }}</td>
                <td>{{ optional($appointment->department)->department_name }}</td>
                <td>{{ $appointment->appointment_date }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No appointments found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
