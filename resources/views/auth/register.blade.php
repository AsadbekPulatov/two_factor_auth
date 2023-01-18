<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(
                #1845ad,
                #23a2f6
            );
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 600px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            /*backdrop-filter: blur(10px);*/
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 30px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 40px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 7px;
            margin-top: 5px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }


    </style>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form action="{{ route('register') }}" method="post">
    <h3>Register</h3>
    @csrf
    <label for="name" class="form-label">Name</label>
    <input type="text" placeholder="John Doe" name="name" id="name">

    <label for="phone" class="form-label">Phone</label>
    <input type="text"  placeholder="911231212" name="phone" id="phone">

    <label for="email">Email</label>
    <input type="text" placeholder="Email or Phone" id="email" name="email">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <label for="confirm_password" class="form-label">Confirm Password</label>
    <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">

    <button type="submit">Register</button>
</form>
</body>
</html>


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"--}}
{{--            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <title>Register</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container p-5">--}}
{{--    <h1>Register</h1>--}}
{{--    @if(\Illuminate\Support\Facades\Session::has('error'))--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                <li>{!! \Session::get('error') !!}</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <form action="{{ route('register') }}" method="post" id="form">--}}
{{--        @csrf--}}
{{--        <div class="mb-3">--}}
{{--            <label for="name" class="form-label">Name</label>--}}
{{--            <input type="text" class="form-control" name="name" id="name">--}}
{{--        </div>--}}
{{--        <label for="phone" class="form-label">Phone</label>--}}
{{--        <div class="input-group mb-3">--}}
{{--            <span class="input-group-text" id="basic-addon1">+998</span>--}}
{{--            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="email" class="form-label">Email address</label>--}}
{{--            <input type="email" class="form-control" name="email" id="email">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="password" class="form-label">Password</label>--}}
{{--            <input type="password" class="form-control" name="password" id="password">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="confirm_password" class="form-label">Confirm   Password</label>--}}
{{--            <input type="password" class="form-control" name="confirm_password" id="confirm_password">--}}
{{--        </div>--}}
{{--        <button type="button" class="btn btn-primary" onclick="validate()">Register</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--<script>--}}
{{--    function validate(){--}}
{{--        var name = document.getElementById('name');--}}
{{--        var phone = document.getElementById('phone');--}}
{{--        var email = document.getElementById('email');--}}
{{--        var password = document.getElementById('password');--}}
{{--        var confirm = document.getElementById('confirm_password');--}}
{{--        var error = 0;--}}
{{--        if (name.value == ''){--}}
{{--            name.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        }--}}
{{--        else name.style.border = "1px solid green";--}}
{{--        if (phone.value == '' || phone.value.length != 9){--}}
{{--            phone.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        }--}}
{{--        else phone.style.border = "1px solid green";--}}
{{--        if (email.value == ''){--}}
{{--            email.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        }--}}
{{--        else email.style.border = "1px solid green";--}}
{{--        if (password.value == ''){--}}
{{--            password.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        }--}}
{{--        else password.style.border = "1px solid green";--}}
{{--        if (confirm.value == ''){--}}
{{--            confirm.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        } else confirm.style.border = "1px solid green";--}}
{{--        if (password.value != confirm.value){--}}
{{--            password.style.border = "1px solid red";--}}
{{--            confirm.style.border = "1px solid red";--}}
{{--            error++;--}}
{{--        }--}}
{{--        if (error == 0){--}}
{{--            document.getElementById('form').submit();--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--</html>--}}
