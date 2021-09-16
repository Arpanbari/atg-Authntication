<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        .form {
            width: 500px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            border: 1px solid #ddd;
            margin: 100px auto;
            font-size: 16px;
            box-shadow: 0 3px 5px rgba(0,0,0,.2);
        }

        h1 {
            width: 100%;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            margin: 0;
            margin-bottom: 20px;
        }

        .form-group {
            padding: 10px 0;
            width: 100%;
        }

        input {
            padding: 15px 20px;
            outline: none;
            border: 1px solid #dedede;
            width: 100%;
            background: #efefef;
            font-size: inherit;
        }

        .btn {
            width: 100%;
            border: none;
            outline: none;
            background: blue;
            padding: 15px 0;
            border-radius: 10px;
            font-size: inherit;
            color: #fff;
            font-weight: 700;
            margin: 20px 0;
            cursor: pointer;
            transition: all .2s;
        }
        .btn:hover {
            background: #0808b9;
        }


        a {
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
            color: #999;
            font-size: inherit;
            font-weight: 600px;
            font-family: inherit;
            transition: all .2s;
            margin: 20px 0;
            cursor: pointer;
        }
        a:hover {
            text-decoration: underline;
            color: blue;
        }
        .text-danger {
            margin: 0;
            margin-top: 5px;
            color: red;
        }
        .alert {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: inherit;
            text-align: center;
            width: 100%;
        }
        .alert-success {
            background: rgba(0, 128, 0, .2);
            color: green;
        }
        .alert-fail {
            background: rgba(255, 0, 0, .2);
            color: red;
        }

        @media only screen and (max-width: 500px) {
            .form {
                width: 100%;
                height: 80vh;
                margin: 50px 0;
                border: none;
                padding: 10px;
                box-shadow: none;
            }

            h1 {
                font-size: 22px;
            }
        }

        @media only screen and (max-width: 400px) {
            .form {
                font-size: 14px;
            }

            input {
                padding: 10px;
            }

            .btn {
                padding: 10px;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <form method='post' action="{{route('register-user')}}" class="form">
        @csrf
        <h1>Create account</h1>
        @if(Session::has('success')) 
        <p class="alert alert-success">{{Session::get('success')}}</p>
        @endif
        @if(Session::has('fail')) 
        <p class="alert alert-fail">{{Session::get('fail')}}</p>
        @endif
        <div class="form-group">
            <input type="text" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
            <p class="text-danger">@error('name') {{$message}} @enderror</p>
        </div>
        <div class="form-group">
            <input type="email" placeholder="Enter E-mail" name="email" value="{{old('email')}}">
            <p class="text-danger">@error('email') {{$message}} @enderror</p>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password" name="password" value="{{old('password')}}">
            <p class="text-danger">@error('password') {{$message}} @enderror</p>
        </div>
        <button class="btn">Create account</button>
        <a href="/login">Already User? Log in</a>
    </form>
</body>
</html>