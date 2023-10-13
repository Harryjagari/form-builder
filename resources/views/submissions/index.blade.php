
<div class="container">
    <h1>Form Submissions</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Submission ID</th>
                <th>Form Name</th>
                <th>Submitted At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $submission)
                <tr>
                    <td>{{ $submission->id }}</td>
                    <td>{{ $submission->form->name }}</td>
                    <td>{{ $submission->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('submissions.show', $submission->id) }}" class="btn btn-primary">View Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
