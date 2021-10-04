@csrf

<div class="form-group row">
    <div class="col-sm-12">
        <label for="name" class="col-sm-1-12 col-form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name', $product->name) }}">
    </div>

    <div class="col-sm-12">
        <label for="code" class="col-sm-1-12 col-form-label">Codigo</label>
        <input type="number" class="form-control" name="code" id="code" placeholder="" value="{{ old('code', $product->code) }}">
    </div>

    <div class="col-sm-12">
        <label for="qty" class="col-sm-1-12 col-form-label">Cantidad</label>
        <input type="number" class="form-control" name="qty" id="qty" placeholder="" value="{{ old('qty', $product->qty) }}">
    </div>

    <div class="col-sm-12">
        <label for="amount" class="col-sm-1-12 col-form-label">Precio</label>
        <input type="number" class="form-control" name="amount" id="amount" placeholder="" value="{{ old('amount', $product->amount) }}">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </div>
</div>
