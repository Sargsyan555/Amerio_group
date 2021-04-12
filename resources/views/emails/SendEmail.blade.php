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
<center class="wrapper" style="background-color: #EDEDF1; padding: 20px 0">
    <div style="width:100%; text-align: center; margin-top: 20px">
        <h1 style="color: #c69500">Amerio Group</h1>
        @if(session()->get('type')=='Price')
            <p>Ask for price list</p>
        @endif
        @if(session()->get('type')=='Partner')
            <p>Become a partner</p>
        @endif
        @if(session()->get('type')=='Contact')
            <p>Contact</p>
        @endif
    </div>

@if(session()->get('type')=='Contact')
    <div style=" width:50%;     display: flex;text-align: center;align-items: center;justify-content: space-around; font-size:11px;font-family:Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Arial,sans-serif;background:#ffffff;border:solid 1px #e4e6eb;border-radius:6px;padding:6px;">
        <div style="display: flex ; width: 50%">
            <img style=" border-radius: 50%;" width="50" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="">
            <h2 style="padding-left: 10px; ">{{$data['first_name']}} {{$data['last_name']}}</h2>
        </div>
        <div style="width: 50%">
            <p style="margin-left: 10px; text-align: left; font-size: 16px">
                {{$data['contact_email']}}
            </p>
        </div>
    </div>
        <div style=" width:50%; display: flex; justify-content: center; font-size:11px;font-family:Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Arial,sans-serif;background:#ffffff;border:solid 1px #e4e6eb;border-radius:6px;padding:6px; margin-top: 10px">
        <div style="padding: 15px 10px">
            <h3 style="text-align: left">Message</h3>
            <p style="text-align: left">{{$data['contact_message']}}</p>
        </div>
    </div>
    @else
        <div style="margin-top: 15px; width:50%; display: flex; justify-content: center;padding: 15px; font-size:11px;font-family:Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Arial,sans-serif;background:#ffffff;border:solid 1px #e4e6eb;border-radius:6px;">
            <div>
                <p style="padding-left: 10px; text-align: left">Company Name</p>
                <h1 style="padding-left: 10px">{{$data['cname']}}</h1>

            </div>
    </div>

        <div style=" width:50%; display: flex; justify-content: center;padding: 15px; font-size:11px;font-family:Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Arial,sans-serif;background:#ffffff;border:solid 1px #e4e6eb;border-radius:6px; margin-top: 10px">
        <div style="padding: 15px 10px">
            <h2 style="text-align: left">Message</h2>
            <p style="text-align: left">{{$data['message']}}</p>
        </div>
    </div>
        <div style=" width:50%; display: flex; margin-top: 10px">
        <div style="width: 40%; background-color: white; padding:5px 15px; border-radius: 6px">
            <h3 style="margin-left: 10px">Telephone Number</h3>
            <p style="margin-left: 10px">{{$data['tel']}}</p>
        </div>
        <div style="width: 10%" ></div>
        <div style="width: 50%;  background-color: white; padding:5px 15px; border-radius: 6px">
            <p style="margin-left: 10px">{{$data['email']}}</p>
            <p style="margin-left: 10px">{{$data['site']}}</p>
        </div>
    </div>
    @endif
</center>

</body>
</html>
