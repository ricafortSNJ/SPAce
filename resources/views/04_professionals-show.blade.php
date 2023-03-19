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
                <div style="display: flex; justify-content: center; ">
                    <div style="background-color: white; border: 1px solid black; border-radius: 10px; padding: 20px;">
                        <div class="cardHeader">
                            <h2 style="text-align: center; margin-bottom: 20px;">View PROFESSIONALS</h2>
                        </div>
                        @foreach ($professional as $p)
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Profile ID:</span>
                                    <span style="margin-left: 5px;">{{$p->profile_id}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Expertise:</span>
                                    <span style="margin-left: 5px;">{{$p->expertise}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Availability:</span>
                                    <span style="margin-left: 5px;">{{$p->availability}}</span>
                                </div>
                                <div style="display: flex;">
                                    <span style="font-weight: bold;">Rates:</span>
                                    <span style="margin-left: 5px;">{{$p->rates}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

    

    @include("layouts/04_end")
</body>

</html>