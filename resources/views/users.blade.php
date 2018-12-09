<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="pb-2 mt-4 mb-2 border-bottom">
                <h1>
                    Busqueda de usuarios
                    {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline float-right']) }}
                    <div class="form-group">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre']) }}
                    </div>
                    &nbsp;
                    <div class="form-group">
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
                    </div>
                    &nbsp;
                    <div class="form-group">
                        {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'bio']) }}
                    </div>
                    &nbsp;
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    {{ Form::close() }}
                </h1>
            </div>
        </div>
        <div class="col">
            <table class="table table-hover mt-4">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Bio</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->bio }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="float-right">
                {{ $users->render() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
