<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/2_assets/css/style.css">
    <link rel="stylesheet" href="/2_assets/css/modal.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    
    @include("layouts/02_head")
    
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
    @include("layouts/02_nav")
        <!-- ========================= Main ==================== -->
        <div class="main">
        @include("layouts/02_topbar")

                <!-- ================= Therapists ================ -->
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
    <script src="/2_assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>