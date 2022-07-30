<!DOCTYPE html>
<html>
<head>
    <title>TenMaTO</title>
</head>
<body>
<h1>Hello,</h1>
@if( isset($details['contact_us']))
<p>A client contact you. </p>
@else
<p>One new User Requested for a Design. </p>
@endif
<p><strong>Name</strong>: {{ $details['name'] }}</p>
<p><strong>Email</strong>: {{ $details['email'] }}</p>
<p><strong>Message</strong>: {{ $details['message'] }}</p>
<p>Thank you</p>
</body>
</html>
