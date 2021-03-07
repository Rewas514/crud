<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .tb{
                width: 90%;
            }

            .thead{
                background-color: #69717d52;
                color: black;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .tc{
                width: 100%;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">   
            <div class="tb">
            <a href="/crud_show"><button type="button" class="btn btn-outline-info">Back</button></a><br><br>

            <form method="post" action="../crud_update/{{$crudArr->id}}">
            @csrf
            <table class="tc">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required value="{{$crudArr->name}}"></td>
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><input type="text" name="surname" required value="{{$crudArr->surname}}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required value="{{$crudArr->email}}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required value="{{$crudArr->phone}}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn btn-outline-secondary">Submit</button></td>
                </tr>
            </table>
            </form>

          </div>
        </div>
    </body>
</html>
