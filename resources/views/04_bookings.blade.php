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
                <div class="users">
                    <div class="cardHeader">
                        <h2>BOOKINGS</h2>
                    </div>

                    <table class="table">
                        <tr style="text-align: left;">
                            <th>User ID</th>
                            <th>Professional ID</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->user_id}}</td>
                            <td>{{$booking->professional_id}}</td>
                            <td>{{$booking->date}}</td>
                            <td>{{$booking->time}}</td>
                            <td>{{$booking->status}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <a class="btn more-info" href="bookings/{{$booking->booking_id}}">More Info</a>
                                    <a class="btn edit" href="bookings/{{$booking->booking_id}}/edit">Edit</a>
                                    <form id="deleteFinal" action="/admin/bookings/{{$booking->booking_id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="button" onclick="confirmDelete()">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        <script>
                            function confirmDelete() {
                                if (confirm('Are you sure you want to delete this entry?')) {
                                    document.getElementById('deleteFinal').submit();
                                }
                            }
                        </script>
                       

                    </table>
                    <div class="col-lg-4" style="text-align: center;">
                        <a class="btn create-new" href="/admin/bookings/create">Create New</a>
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>