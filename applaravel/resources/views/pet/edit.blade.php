Editar Registro de Mascota

<form action="{{ url('/pet/'. $pet->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('pet.form')
</form>