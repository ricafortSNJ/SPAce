<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts/00_head")
    <title>Message</title>
</head>
<body>
@include("layouts/00_nav")
    
    <h1>Message Page</h1>
    <h3>Messages Received</h3>
    @if (count($messages_received) > 0)
        <ul>
        @foreach ($messages_received as $mr)
            <li>
                <h5>From: {{$mr->sender_username}}</h5>
                <h5>Date: {{$mr->date}}</h5>
                <h5>Time: {{$mr->time}}</h5>
                <h5>Content: {{$mr->content}}</h5>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif

    <h3>Messages Sent</h3>
    @if (count($messages_sent) > 0)
        <ul>
        @foreach ($messages_sent as $ms)
            <li>
                <h5>To: {{$ms->receiver_username}}</h5>
                <h5>Date: {{$ms->date}}</h5>
                <h5>Time: {{$ms->time}}</h5>
                <h5>Content: {{$ms->content}}</h5>
            </li>
        @endforeach
        </ul>
    @else
        <p>Nothing to show here</p>
    @endif

    
    
    
</body>
</html>