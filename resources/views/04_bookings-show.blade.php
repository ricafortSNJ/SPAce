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
                            <h2 style="text-align: center; margin-bottom: 20px;">View BOOKINGS</h2>
                        </div>
                        @foreach ($booking as $b)
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">User ID:</span>
                                    <span style="margin-left: 5px;">{{$b->user_id}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Professional ID:</span>
                                    <span style="margin-left: 5px;">{{$b->professional_id}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Date:</span>
                                    <span style="margin-left: 5px;">{{$b->date}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Time:</span>
                                    <span style="margin-left: 5px;">{{$b->time}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Status:</span>
                                    <span style="margin-left: 5px;">{{$b->status}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>