<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amerio Grupė</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body>
<center style="background-color: rgb(206,206,206); padding: 20px" class="wrapper">
    <div style="width: 50%; border: 1px solid black; border-radius: 10px; padding: 20px">
    <div>
        <h1 style="color: rgb(255,127,0); padding: 10px">Amerio Group</h1>
        @if(session()->get('type')=='Price')
            <p>Ask for price list</p>
        @endif
        @if(session()->get('type')=='Partner')
            <p>Become a partner</p>
        @endif
        @if(session()->get('type')=='Contact')
            <p>Contact us</p>
        @endif
    </div>
    <hr style="background-color: black">
    <div style="width: 100%; text-align: left">
        @if(session()->get('type')=='Contact')

        <h3>First mame</h3>
        <p>{{$data['first_name']}}</p>
        <h3>Last mame</h3>
        <p>{{$data['last_name']}}</p>
        <h3>Email</h3>
        <p>{{$data['contact_email']}}</p>
        <h3>Country</h3>
        <p>{{$data['country_contact']}}</p>
        <h3>Message</h3>
        <p>{{$data['contact_message']}}</p>
        @else
            <h3>Email</h3>
            <p>{{$data['email']}}</p>
            <h3>Site</h3>
            <p>{{$data['site']}}</p>
            <h3>Telephone</h3>
            <p>{{$data['tel']}}</p>
            <h3>Company Name</h3>
            <p>{{$data['cname']}}</p>
            <h3>Country</h3>
            <p>{{$data['country']}}</p>
            <h3>Message</h3>
            <p>{{$data['message']}}</p>
        @endif
    </div>
    </div>
</center>

</body>
</html>
