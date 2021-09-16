<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 20px;
        }
        * {
            box-sizing: border-box;
        }
        .container {
            width: 500px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-direction: column;
            border: 1px solid #ddd;
            margin: 100px auto;
            box-shadow: 0 3px 5px rgba(0,0,0,.2);
        }

        h1 {
            width: 100%;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            margin: 0;
            margin-bottom: 20px;
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
            text-decoration: none;
            text-align: center;
        }
        .btn:hover {
            background: #0808b9;
        }

        @media (max-width: 500px) {
            .container {
                width: 100%;
                border: none;
                margin: 50px 0;
                padding: 10px;
                font-size: 16px;
                box-shadow: none;
            }

            h1 {
                font-size: 22px;
            }
        }
        @media (max-width: 400px) {
            .container {
                width: 100%;
                border: none;
                margin: 10vh 0;
                font-size: 16px;
                padding: 10px;
            }

            .btn {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
       <p><strong>Name: </strong>{{$data->name}}</p>
       <p><strong>E-mail: </strong>{{$data->email}}</p>
       <a class="btn" href="/logout">Logout</a>
    </div>
</body>
</html>