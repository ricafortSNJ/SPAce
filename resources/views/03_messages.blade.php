<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Messages</title>
<!-- CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-8Kv7V9e9r1n7IQWmAT+Rv/OVlUDJtA/7tTzKZTn+2uJ9sLRsLTrjKPPyI+FiN1jB" crossorigin="anonymous">

<!-- JavaScript links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-6Z0lRgzJUgVRoC5K0vf0yLqNSv5eTU6RITg6iCrz2U4ny4L4OnhKj3qBo/VX5U5S" crossorigin="anonymous"></script>



    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/3_assets/css/messaging.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        
    @include("layouts/03_nav")

        <!-- ========================= Main ==================== -->
        <div class="main">
            
        
        @include("layouts/03_topbar")

        
            <div class="therapists">
                <div class="cardHeader">
                    <h2>Messages</h2>
                </div>

                <table>

                        @if (count($messages_received) > 0)
                        @foreach ($messages_received as $mr)
                        @if ($loop->iteration > 7)
                        @break
                        @endif
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="/image_uploads/{{$mr->sender_id}}.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>From: {{$mr->sender_username}}<br /> 
                                    <span>Content: {{$mr->content}}</span><br />
                                    <span>Time: {{$mr->time}}</span><br />
                                    <span>Date: {{$mr->date}}</span><br />
                                </h4>
                            </td>
                            <td></td>
                            <script>
                                var datetime = document.getElementById("datetime1");
                                var currentDate = new Date();
                                datetime.innerHTML = currentDate.toLocaleString();
                            </script>
                        
                            <td  style="text-align: right;">
                                <button class="btn message" id="message">
                                    Message
                                </button>
                                <button class="btn message" id="message">
                                    Profile
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <p>Nothing to show here</p>
                        @endif
                </table>
            </div>
            
            

                
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/3_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>