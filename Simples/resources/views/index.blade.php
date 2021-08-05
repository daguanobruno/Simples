<form id="validacao" method="post" action="{{url('/validacao')}}">
    {{csrf_field()}}
    <div class="input-group mb-3">
        <div class="col-3">
            <input required="required" name="Ativo" placeholder="Ativo" type="text" class="form-control">
        </div>
        <div class="input-group-append" style="top: -5px; position: relative;">
            <input value="Comprar" name="Compra" id="compra" type="submit" class="btn btn-outline-success">
            <input value="Vender" name="Venda" type="submit" class="btn btn-outline-danger">
            <button class="btn"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
        </div>
    </div>

</form>