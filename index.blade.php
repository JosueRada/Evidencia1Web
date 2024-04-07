@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <forms>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Raza de la mascota</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</forms>
</div>
@endsection