<div id="containerOperacao" class="container">
    <div class="row">
        <div class="col">
            <span class="badge bg-success">Venda de Ativo</span>
        </div>
    </div>

    @foreach($ativo as $a)

    <form id="compra" method="post" action="{{url('/venda')}}/{{$a->codigo}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-3">
                <input disabled value="{{$a->codigo}}" name="ativo" type="text" class="form-control" aria-label="Recipient's username with two button addons">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span id="spanValor">Valor do ativo: R$<span class="valor" id="valor">{{$a->preco}}</span></span>
            </div>
        </div>
        <div class="row">
            <div id="form1col-3" class="col-3" >
                <label>Quantidade</label>
                <input required="required" min="1"  name="qtd" id="qtd" type="number" class="form-control" aria-label="Recipient's username with two button addons">
            </div>
            <div id="form2col-3" class="col-3">
                <label id="ValorOrdem" >Valor da Ordem</label>
                <label id="totalLabel" type="text" class="form-control">
                </label>
                <input style="display: none;" min="1" name="valor" id="totalInput" type="text" class="form-control" aria-label="Recipient's username with two button addons">

            </div>

        </div>
        <div class="row">
            <div id="divConfirmar" class="col-3">
                <input value="Confirmar" type="submit" class="btn btn-outline-success">
                <a href="{{url('/')}}" type="button" class="btn btn-outline-danger">Cancelar</a>
            </div>
        </div>
    </form>
    @endforeach
</div>