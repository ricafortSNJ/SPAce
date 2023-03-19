<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>

    @include("layouts/04_head")
</head>

<body>
    @include("layouts/04_nav")

                <!-- ================= Therapists ================ -->
                <div style="display: flex; justify-content: center; ">
                    <div style="background-color: white; border: 1px solid black; border-radius: 10px; padding: 20px;">
                        <div class="cardHeader">
                        <h2 style="text-align: center; margin-bottom: 20px;">Add BOOKINGS</h2>
                        </div>
                        <form action="/admin/bookings" method="POST">
                        @csrf
                        <div style="display: flex; flex-direction: column; gap: 1px;">
                            <label style="font-weight: bold;">User ID</label>
                            <input type="number" name="user_id">
                            <label style="font-weight: bold;">Professional ID</label>
                            <input type="number" name="professional_id">
                            <label style="font-weight: bold;">Date</label>
                            <input type="date" name="date">
                            <label style="font-weight: bold;">Time</label>
                            <input type="time" name="time">
                            <label style="font-weight: bold;">Status</label>
                            <input type="text" name="status">
                        </div>
                        <div style="display: flex; justify-content: center; margin-top: 20px;">
                            <button type="submit">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>