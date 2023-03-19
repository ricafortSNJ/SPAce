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
                            <h2 style="text-align: center; margin-bottom: 20px;">View PROFILES</h2>
                        </div>
                        @foreach ($profile as $p)
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">User ID:</span>
                                    <span style="margin-left: 5px;">{{$p->user_id}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">First name:</span>
                                    <span style="margin-left: 5px;">{{$p->first_name}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Last name:</span>
                                    <span style="margin-left: 5px;">{{$p->last_name}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Mobile number:</span>
                                    <span style="margin-left: 5px;">{{$p->mobile_number}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Social media:</span>
                                    <span style="margin-left: 5px;">{{$p->social_media}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Location:</span>
                                    <span style="margin-left: 5px;">{{$p->location}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>