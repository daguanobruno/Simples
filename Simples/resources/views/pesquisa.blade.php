<div id="divPesquisa" class="container">
    @foreach($ativo as $a)

    <div id="input-group-pesquisa" class="input-group mb-3">
        <div class="col-3">
            <input disabled value="{{$a->codigo}}" name="Ativo" type="text" class="form-control">
        </div>
        <div class="input-group-append" style="top: -5px; position: relative;">
            <a href="{{url('/')}}" class="btn"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="row">
        <span id="span">Saldo: R${{$saldo}}</span>
    </div>
    @if ($arrayVazio == true)
    <div>
        <p>Nenhuma Operação Realizada o Ativo {{$a->codigo}}</p>
    </div>
    @else
    <div>
        <p>Operações</p>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">Operação</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordem as $o)
            <tr>
                @if($o->tipo == 1)
                <td> Compra {{$o->quantidade}} unid. {{$o->codigo_ativo}} R${{$o->valor}} </td>
                @elseif($o->tipo == 2)
                <td> Venda {{$o->quantidade}} unid. {{$o->codigo_ativo}} R${{$o->valor}} </td>
                @endif
                <td id="td">{{ \Carbon\Carbon::parse($o->data)->format('d/m/Y')}} </td>
            </tr>
            @endforeach

        </tbody>

    </table>
    @endif

    @endforeach
</div>