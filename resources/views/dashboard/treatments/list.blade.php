<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($treatments as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->description }}</td>
                <td>
                    @if($row->image)
                        <a href="#" data-toggle="modal" data-target="#photoModal{{ $row->id }}">
                            <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->name }} Photo" class="img-thumbnail" width="50">
                        </a>
                    @else
                        No photo available
                    @endif
                </td>
                <td>
                    <a href="{{ route('treatments.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('treatments.destroy', $row->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No rows found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
