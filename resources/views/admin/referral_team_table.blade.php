@if($referrals->isEmpty())
    <p>No referrals found.</p>
@else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S. No</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Wallet</th>
                <th>Created At</th>
                <th>Is Dummy</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($referrals as $index => $ref)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $ref->user_id }}</td>
                    <td>{{ $ref->name }}</td>
                    <td>{{ $ref->email }}</td>
                    <td>{{ $ref->username }}</td>
                    <td>₹{{ $ref->real_wallet }}</td>
                    <td>{{ $ref->created_at }}</td>
                    <td>
                        @if($ref->is_dummy == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                    </td>
                    <td>
                       {{-- vie wuser --}}
                        <a href="{{route('admin.viewUser', $ref->id)}}" class="btn btn-primary btn-sm">View</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
