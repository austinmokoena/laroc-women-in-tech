<table class="table">
    <thead>
        <tr>
            <th>User</th>
            <th>Full Names</th>
            <th>Surname</th>
            <th>Status</th>
            <th>Applied At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
        <tr>
            <td>{{ $application->user->name }}</td>
            <td>{{ $application->full_names }}</td>
            <td>{{ $application->surname }}</td>
            <td>{{ $application->status }}</td>
            <td>{{ $application->created_at->format('d M Y') }}</td>
            <td>
                <form method="POST" action="{{ route('admin.applications.updateStatus', $application) }}" class="d-inline">
                    @csrf
                    @method('PUT')
                    <div class="btn-group">
                        <button type="submit" name="status" value="accepted" class="btn btn-success btn-sm">Accept</button>
                        <button type="submit" name="status" value="missing_documents" class="btn btn-warning btn-sm">Missing Docs</button>
                        <button type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">Reject</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>