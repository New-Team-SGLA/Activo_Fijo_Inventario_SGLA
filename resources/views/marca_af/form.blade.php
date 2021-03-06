<!-- {{--  <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="id" type="number" id="id" value="{{ isset($marca_af->id) ? $marca_af->id : ''}}" >
    {!! $errors->first('id', '<p class="form-text text-danger">:message</p>') !!}
</div>  --}} -->
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" type="text" id="nombre" value="{{ isset($marca_af->nombre) ? $marca_af->nombre : old('nombre')}}" >
    {!! $errors->first('nombre', '<p class="form-text text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" type="text" id="descripcion" value="{{ isset($marca_af->descripcion) ? $marca_af->descripcion : old('descripcion')}}" >
    {!! $errors->first('descripcion', '<p class="form-text text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="control-label">{{ 'Estado' }}</label>
    <select name="estado" class="form-control  {{$errors->has('estado')?'is-invalid':''}}" >        
        <option value="1">Activo</option>        
        <option value="2">Inactivo</option>        
    </select>
    {!! $errors->first('estado', '<p class="form-text text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
