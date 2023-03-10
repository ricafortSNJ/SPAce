<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Users</title>
</head>
<body>
    @include("layouts/navbar")
    
    <h1>Users Page</h1>
    <a href="/admin/users/create">Add a new user</a>
    @if (count($users) > 0)
    <table class="table">
        <tr>
            <th>User ID</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Customer</th>
            <th>Professional</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user -> user_id}}</td>
            <td>{{$user -> email_address}}</td>
            <td>{{$user -> password}}</td>
            <td>{{$user -> is_customer}}</td>
            <td>{{$user -> is_professional}}</td>
            <td><a class="btn btn-primary" href="users/{{$user->user_id}}">More Info</a>
            <a class="btn btn-warning" href="users/{{$user->user_id}}/edit">Edit</a>
            <button
            type="button"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#modal{{$user->user_id}}"
            >Delete</button>
            <div
            class="modal fade"
            id="modal{{$user->user_id}}"
            tabindex="-1"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm deletion</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    ></button>
                </div>
                <div class="modal-body">Are you sure you want to delete?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                <form action="/admin/users/{{$user -> user_id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div>
                </div>
            </div>
            </div>
            <td>
        </tr>
        @endforeach
    </table>
    @else
    <p>No Users Found</p>
    @endif
    
</body>
</html>