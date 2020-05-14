@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Nuevo Vehiculo</h3>
 @if (count($errors)>0)
 <div class="alert alert-info">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!!Form::open(array('url'=>'tarifa','method'=>'POST','autocomplete'=>'off'))!!}
 {{Form::token()}}
 <div class="form-group">
 <label for="nombre">Tipo vehículo</label>
 <select type="text" name="role_id" id="role_id" class="form-control selectpicker" data-live-search="true" required>
 <option value="">Seleccione un tipo de Vehiculo</option>
 @foreach($tipo_vehiculo as $tipov)
 <option value="{{$tipov->id}}">{{ $tipov->nombre }}</option>
 @endforeach
 </select>
 </div>
 <div class="form-group">
 <label for="descripcion">valor</label>
 <input type="text" name="valor" class="form-control" placeholder="Valor hora...">
 </div>
 <div class="form-group">
 <label for="descripcion">Estado</label>
 <input type="text" name="estado" class="form-control" placeholder="Estado. 1-Activo 0-Inactivo...">
 </div>
 <div class="form-group">
 <button class="btn btn-success" type="submit">Guardar</button>
 <button class="btn btn-info" type="reset">Cancelar</button>
 <a href="{{ route('tarifa.index') }}" class="btn btn-danger" >Atrás</a>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection
<script> 
$(document).ready(function(){

$(".btn btn-info").click(function(){
  $(".btn btn-info").hide(1000);
  alert("Has ocultado las notificaciones");
});
});

</script> 