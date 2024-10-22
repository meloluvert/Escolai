@extends('layout')
@section('content')
<form>
    <div>
        <p>Escolaride</p>
        <input type="text" placeholder="Graduação" class="form-control" id="exampleInputPassword1">
        <input type="text" placeholder="%" class="form-control" id="exampleInputPassword1">
        <button class="btn btn-primary" type="submit">+</button>
        
    </div>
<div class="form-group">
    <label for="desc1">Descrição 1</label>
    <textarea class="form-control" id="desc1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="desc2">Descrição 2</label>
    <textarea class="form-control" id="desc2" rows="3"></textarea>
  </div>
  <label for="Fotos"></label>
<input type="file" id="foto" name="myfile">
</form>
@endsection
