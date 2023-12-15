<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Appointment</th>
            <th>Diagnosis</th>
            <th>Prescription</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($medicalRecords as $medicalRecord)
            <tr>
                <td>{{ $medicalRecord->id }}</td>
                <td>{{ optional($medicalRecord->patient)->first_name }}</td>
                <td>{{ optional($medicalRecord->doctor)->first_name }}</td>
                <td>{{ optional($medicalRecord->appointment)->id }}</td>
                <td>{{ $medicalRecord->diagnosis }}</td>
                <td>{{ $medicalRecord->prescription }}</td>
                <td>
                    <a href="{{ route('medical_records.edit', $medicalRecord->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('medical_records.destroy', $medicalRecord->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No medical records found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
