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

            .topbuttons{
                position: relative;
            }

            .btn-send{
                position: absolute;
                right: 0;
                top: 0;
            }

   
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">   
        <div class="tb">
            <div class="topbuttons">
                    <div class="ct">
                                <a href="template_create"><button type="button" class="btn btn-outline-success">Create an entry</button></a>
                                <a href="crud_show"><button type="button" class="btn btn-outline-info">Clients</button></a>
                     </div><br>
            </div>
            <div>
            {{session('msg')}}
          <table class="table table-hover">
                <thead class="thead">
                   <tr>
                    <td>Id</td>
                    <td>Subject</td>
                    <td>Message</td>            
                    <td>Action</td>   
                  </tr>
                </thead>
                <tbody>
                @foreach($templateArr as $template)
                
                <tr>
                <td>{{$template->id}}</td>
                <td>{{$template->subject}}</td>
                <td>{{$template->message}}</td>
                <td>
                    <a href="template_edit/{{$template->id}}"><button type="button" class="btn btn-outline-warning">Edit</button></a>
                    <a href="template_delete/{{$template->id}}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                </td>
                </tr>
                @endforeach
                </tbody>
          </table>
          </div>
          </div>

        </div>
    </body>
</html>
