<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/head")
    <title>Profiles</title>
</head>
<body>
    @include("layouts/navbar")
    
    <h1>Profiles Page</h1>
    @if (count($profiles) > 0)
    <table class="table">
        <tr>
            <th>Profile ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Image ID</th>
            <th>Privacy Setting</th>
        </tr>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{$profile -> profile_id}}</td>
            <td>{{$profile -> user_id}}</td>
            <td>{{$profile -> username}}</td>
            <td>{{$profile -> first_name}}</td>
            <td>{{$profile -> last_name}}</td>
            <td>{{$profile -> mobile_number}}</td>
            <td>{{$profile -> image_id}}</td>
            <td>{{$profile -> privacy_setting}}</td>
            <td><a class="btn btn-primary" href="profiles/{{$profile->profile_id}}">More Info</a>
            <a class="btn btn-warning" href="profiles/{{$profile->profile_id}}/edit">Edit</a>
            <button
            type="button"
            class="btn btn-danger"
            data-bs-toggle="modal"
            data-bs-target="#modal{{$profile->profile_id}}"
            >Delete</button>
            <div
            class="modal fade"
            id="modal{{$profile->profile_id}}"
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
                <form action="/admin/profiles/{{$profile -> profile_id}}" method="POST">
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
    <p>No Profiles Found</p>
    @endif
    
</body>
</html>