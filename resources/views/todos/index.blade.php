@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de tarea</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Busca un nombre adecuadoado para tu tarea </div>
    </div>    
    <button type="submit" class="btn btn-primary">generar tarea</button>
    </form>
</div>
@endsection 