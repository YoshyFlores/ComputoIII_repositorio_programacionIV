
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <nav class="navbar bg-dark" data-bs-theme="dark">

        <div class="container">
            <a class="navbar-brand" href="{{URL::to('pet')}}">{{ __('Pets') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="btn btn-info" href="{{URL::to('pet')}}">{{ __('Pets') }}</a>
                </li><br/>
                <li class="nav-item">
                <a style="float:justify" href="{{ url('owner/create') }}" class="btn btn-warning">Nuevo Propietario</a>
                </li>

    
            </div>
            </div>
        </div>
        </nav>
        <br/>

    </head>
    <body>
    <div class="card abs-center" style="width: 20rem;">
        <div class="card-header text-center">
            <h4>Datos mascota</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nombre:
                <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
                @error('name')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>
            <li class="list-group-item">Edad:
                <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />
                @error('age')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>
            <li class="list-group-item">Peso (kg)
                <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($pet)?$pet->weight_kg:'' }}"><br />
                @error('weight_kg')
                    <div class="error-message">{{$message}}</di><br />
                @enderror</li>
            <li class="list-group-item">Seleccione el propietario: <select name="owner_id">
                <option value=""></option>
                @foreach($owners as $own)
                <option value="{{$own->id}}" {{ isset($pet->owner_id) == $own->id ? 'selected' : '' }}>
                    {{$own->full_name}}
                </option>
                @endforeach
            </select>
            @error('owner_id')
                <div class="error-message">{{$message}}</di><br />
            @enderror</li>
            
            <li class="list-group-item text-center"><button class="btn btn-primary" type="submit">Guardar</button></li>
        </ul>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    </body>
    </html>

    <style>
        .error-message{
            color:red
        }
        .abs-center {
        margin: 100px;
        border: 3px solid #7877e6;
        background-color: #F0FFFF;
        position: absolute;
        top: 5%;
        left: 30%;}

    </style>
    