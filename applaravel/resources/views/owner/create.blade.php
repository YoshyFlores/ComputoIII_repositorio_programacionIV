Crear propietario
<form action="{{ url('/owner') }}" method="POST">
    @csrf
    @include('owner.form');
</form>