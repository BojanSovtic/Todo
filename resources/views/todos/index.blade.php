<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>

   <div class="container">

        <h1 class="text-center my-5">Todos page</h1>

        <div class="row justify-content-center">

            <div class="col-md-8">

                <ul class="list-group">

                    <div class="card card-default">

                        <div class="card-header">
                            Todos
                        </div>

                        <div class="card-body">

                            @foreach($todos as $todo)

                            <li class="list-group-item">
                                {{ $todo->name }}

                                <button class="btn btn-primary btn-sm float-right">View</button>
                            </li>

                            @endforeach

                        </div>

                    </div>

                </ul>

            </div>

        </div>

   </div>

</body>
</html>
