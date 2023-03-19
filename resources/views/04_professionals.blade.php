<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professionals</title>

    @include("layouts/04_head")
</head>

<body>
    @include("layouts/04_nav")

                <!-- ================= Therapists ================ -->
                <div class="users">
                    <div class="cardHeader">
                        <h2>PROFESSIONALS</h2>
                    </div>

                    <table class="table">
                        <tr style="text-align: left;">
                            <th>Profile ID</th>
                            <th>Expertise</th>
                            <th>Availability</th>
                            <th>Rates</th>
                            <th>Options</th>
                        </tr>
                        @foreach ($professionals as $professional)
                        <tr>
                            <td>{{$professional->profile_id}}</td>
                            <td>{{$professional->expertise}}</td>
                            <td>{{$professional->availability}}</td>
                            <td>{{$professional->rates}}</td>
                            <td>
                                <div class="col-lg-4" style="text-align: center;">
                                    <a class="btn more-info" href="professionals/{{$professional->professional_id}}">More Info</a>
                                    <a class="btn edit" href="professionals/{{$professional->professional_id}}/edit">Edit</a>
                                    <form id="deleteFinal" action="/admin/professionals/{{$professional->professional_id}}" method="POST">
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
                        <a class="btn create-new" href="/admin/professionals/create">Create New</a>
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>