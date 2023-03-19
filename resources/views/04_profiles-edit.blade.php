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
                <div style="display: flex; justify-content: center; ">
                    <div style="background-color: white; border: 1px solid black; border-radius: 10px; padding: 20px;">
                        <div class="cardHeader">
                        <h2 style="text-align: center; margin-bottom: 20px;">Edit PROFILES</h2>
                        </div>
                        @foreach ($profile as $p)
                        <form action="/admin/profiles/{{$p -> profile_id}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div style="display: flex; flex-direction: column; gap: 1px;">
                            <label style="font-weight: bold;">User ID</label>
                            <input type="number" name="user_id" value="{{$p -> user_id}}">
                            <label style="font-weight: bold;">Username</label>
                            <input type="text" name="username" value="{{$p -> username}}">
                            <label style="font-weight: bold;">First Name</label>
                            <input type="text" name="first_name" value="{{$p -> first_name}}">
                            <label style="font-weight: bold;">Last Name</label>
                            <input type="text" name="last_name" value="{{$p -> last_name}}">
                            <label style="font-weight: bold;">Mobile Number</label>
                            <input type="number" name="mobile_number" value="{{$p -> mobile_number}}">
                            <label style="font-weight: bold;">Social Media</label>
                            <input type="text" name="social_media" value="{{$p -> social_media}}">
                            <label style="font-weight: bold;">Location</label>
                            <input type="text" name="location" value="{{$p -> location}}">
                        </div>
                        <div style="display: flex; justify-content: center; margin-top: 20px;">
                            <button type="submit">Submit</button>
                        </div>
                        </form>
                        @endforeach
                    </div>
                </div>
    

    @include("layouts/04_end")
</body>

</html>