
Crear registro
<form action="{{ url('/pet') }}" method="POST">
    @csrf
    @include('pet.form')
</form>
