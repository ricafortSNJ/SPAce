<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
    @include("layouts/04_head")
</head>

<body>
    @include("layouts/04_nav")

                <!-- ================= Therapists ================ -->
                <div class="users">
                    <div class="cardHeader">
                        <h2>PROFILES</h2>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Mobile number</th>
                            <th>Social media</th>
                            <th>Privacy Setting</th>
                            <th>Location</th>
                            <th>Options</th>
                        </tr>
                        @foreach ($profiles as $profile)
                        <tr>
                            <td>{{$profile->username}}</td>
                            <td>{{$profile->first_name}}</td>
                            <td>{{$profile->last_name}}</td>
                            <td>{{$profile->mobile_number}}</td>
                            <td>{{$profile->social_media}}</td>
                            <td>{{$profile->privacy_setting}}</td>
                            <td>{{$profile->location}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <a class="btn more-info" href="profiles/{{$profile->profile_id}}">More Info</a>
                                    <a class="btn edit" href="profiles/{{$profile->profile_id}}/edit">Edit</a>
                                    <a class="btn delete">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                       

                    </table>
                    <div class="col-lg-4" style="text-align: center;">
                        <a class="btn create-new" href="/admin/profiles/create">Create New</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    

    @include("layouts/04_end")
</body>

</html>