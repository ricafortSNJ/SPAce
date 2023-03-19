<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    

    @include("layouts/04_head")
</head>

<body>
    @include("layouts/04_nav")

                <!-- ================= Therapists ================ -->
                <div class="users">
                    <div class="cardHeader">
                        <h2>USERS</h2>
                    </div>

                    <table class="table">
                        <tr>
                            <th>Email address</th>
                            <th>Password</th>
                            <th>User type</th>
                            <th>Options</th>
                        </tr>
                        <tr>
                            <td>{{$f->email_address}}</td>
                            <td>{{$f->password}}</td>
                            <td>{{$f->user_type}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$f->email_address}}</td>
                            <td>{{$f->password}}</td>
                            <td>{{$f->user_type}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{$f->email_address}}</td>
                            <td>{{$f->password}}</td>
                            <td>{{$f->user_type}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <button class="btn more-info">More Info</button>
                                    <button class="btn edit">Edit</button>
                                    <button class="btn delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                       

                    </table>
                    <div class="col-lg-4" style="text-align: center;">
                        
                        <button class="btn create-new">Create New</button>
                        
                    </div>
                </div>
            </div>

            
        </div>
    </div>

    

    @include("layouts/04_end")
</body>

</html>