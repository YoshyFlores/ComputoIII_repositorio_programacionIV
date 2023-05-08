

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
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Opciones</a>
                </li>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a style="float:justify" href="{{ url('owner/create') }}" class="btn btn-info">Nuevo Propietario</a>
                </li><br/>
                <li class="nav-item">
                <a style="float:justify" href="{{ url('pet/create') }}" class="btn btn-warning">Nuevo Registro</a>
                </li>
    
            </div>

            </div>
            </div>
        </div>
        </nav>
        <br/>
    </head>
    
    <body>

    <div class="container-fluid text-center margin: 100px"  >
    <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" >
        <h3 style="color:#008B8B">Listado de propietarios</h3>
    </div>
    <div style="text-align:center;">
            <table class=" table " style=" border: 3px solid #7877e6; text-align:center"">
                <thead >
                <tr class = "mi-clase">

                    <th >#</th>
                    <th >Nombre</th>
                    <th></th>
                    <th >Edad</th>
                    <th></th>
                    <th >Email</th>
                    <th></th>

                    <th><a style="float:justify" href="{{ url('owner/create') }}" class="btn btn-info">Nuevo Registro</a></th>
                </tr>
                </thead>
                <tbody>
                @foreach($owners as $owner)
                <tr class = "mi-clase">
                    <td>{{ $owner->id }}</td>
                    <td>{{ $owner->full_name }}</td>
                    <td></td>
                    <td>{{ $owner->age }}</td>
                    <td></td>
                    <td>{{ $owner->email }}</td>
                    <td></td>
                    <td class="container-sm text-center" >
                    <form action="{{ url('/owner/'.$owner->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}     <!-- define el metodo que se necesita --><br/>
                        <td>
                            <a href="{{ route('owner.edit', $owner->id) }}" class="btn btn-outline-primary">Editar</a>
                            <input type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Eliminar" class="btn btn-outline-danger">
                        </td>    <br/>

                    </form>
                    </td>
                </tr>
                
                @endforeach
                    <br/>
                    </tr>
                    
                </tbody>
            </table>
            <br/>
            
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>

<style>
    table{
        margin: 100px;
        border: 3px solid #7877e6;
        background-color: #F0FFFF;
        
    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: -12%;
    }
    .container-fluid {
    width: 700px;

    /* centrar vertical y horizontalmente */
    position: absolute;
    top: 20%;
    left: 20%;
    
    }


</style>
<style>
    tr.mi-clase{
        border-bottom: 2px solid #7877e6;
        
    }
</style>