<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
      
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
                        <a href="crud_create"><button type="button" class="btn btn-outline-success">Create an entry</button></a>
                        <a href="template_show"><button type="button" class="btn btn-outline-info">Templates</button></a>
                    </div><br>
                <button type="button" class="btn-send btn btn-outline-success" >Send multiple</button>

                
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Select a template
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Category 1</a></li>
    <li><a class="dropdown-item" href="#">Category 2</a></li>
  </ul>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







                                <!---->
            </div>
                 <div>
                     {{session('msg')}}
                    <table class="table table-hover">
                            <thead class="thead">
                            <tr>
                                <td></td>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Surname</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Action</td>              
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($crudArr as $crud)
                            
                            <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$crud->id}}</td>
                            <td>{{$crud->name}}</td>
                            <td>{{$crud->surname}}</td>
                            <td>{{$crud->email}}</td>
                            <td>{{$crud->phone}}</td>
                            <td>
                                <a href="crud_edit/{{$crud->id}}"><button type="button" class="btn btn-outline-warning">Edit</button></a>
                                <a href="crud_delete/{{$crud->id}}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Send</button>
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
