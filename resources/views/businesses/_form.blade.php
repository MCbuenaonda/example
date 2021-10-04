@csrf

<div class="form-group row">
    <div class="col-sm-12">
        <label for="name" class="col-sm-1-12 col-form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name', $business->name) }}">
    </div>

    <div class="col-sm-12">
        <label for="address" class="col-sm-1-12 col-form-label">Direccion</label>
        <textarea name="address" class="form-control" id="address" rows="3">{{ old('address', $business->address) }}</textarea>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </div>
</div>
