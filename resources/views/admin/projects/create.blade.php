@extends('layouts.admin')
@section('content')
<div class="container-xl ">
  <form action="{{ route('admin.project.store')}}" method="POST">
    @csrf
    <div class="row row-cols-2">
      <div class="col mt-2 ">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="col mt-2">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>
      <div class="col mt-2">
        <label for="link">Link</label>
        <input type="text" class="form-control" id="link" name="link">
      </div>
      <div class="col mt-2">
        <label for="desc">Descrizione</label>
        <input type="textarea" class="form-control" id="desc" name="desc">
      </div>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-outline-success me-3">Aggiungi</button>
        <button type="reset" class="btn btn-outline-danger"> Cancella</button>
    </div>
  </form>
</div>
@endsection

