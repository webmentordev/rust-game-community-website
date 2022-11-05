<div class="users tabcontent" id="users">
    <h1 class="title">Registered Users Database</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Status</th>
            <th>Verified</th>
            <th>Update</th>
            <th>Ban</th>
        </tr>

        <tr>
            <td>Ahmer99</td>
            <td>ahmer99@gmail.com</td>
            <td class="cap">Active</td>
            <td class="cap">Verified</td>
            <td><a href="#">Update</a></td>
            <td>
                <form action="" method="post"><button type="submit">ban</button></form>
            </td>
        </tr>

        @if ($users->count())
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="cap">{{ $user->status }}</td>
                    <td class="cap">@if ($user->email_verified_at != null)
                        Verified
                    @else
                        pending
                    @endif</td>
                    <td><a href="#">Update</a></td>
                    <td>
                        <form action="" method="post"><button type="submit">ban</button></form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>UserData</td>
                <td>UserData</td>
                <td>UserData</td>
                <td>UserData</td>
                <td>UserData</td>
                <td>UserData</td>
            </tr>
        @endif
    </table>
    <div class="pagination py-3">
        {{ $users->links() }}
    </div>
</div>