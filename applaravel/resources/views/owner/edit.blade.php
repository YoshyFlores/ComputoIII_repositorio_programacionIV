Editar Registro de Propietario

<form action="{{ url('/owner/'.$owner->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('owner.form')
</form>