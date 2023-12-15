<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Total Amount</th>
            <th>Invoice Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ optional($invoice->patient)->first_name }}</td>
                <td>${{ number_format($invoice->total_amount, 2) }}</td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>
                    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No invoices found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
