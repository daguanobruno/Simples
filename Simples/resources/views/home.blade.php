<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includeDefault.head')
</head>

<body>

    <header>
        @include('includeDefault.header')
    </header>
    <div class="main-content">


        <div class="container">
            <div class="col-md-9">
                <p class="h2">
                    Mini Homebroker
                </p>
            </div>

            @if(session('erro'))
            <div id="close" class="alert alert-danger">
                {{session('erro')}}
                <a id="toggle"><i id="iconFechar" class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            @endif

            @if($index != null)
            @include('index')
            @endif

            @if($compra != null)
            @include('compra')
            @endif

            @if($vender != null)
            @include('venda')
            @endif

            @if($pesquisar != null)
            @include('pesquisa')
            @endif

        </div>
    </div>

    <footer>
        @include('includeDefault.footer')
    </footer>

</body>

</html>

<script type="text/javascript">
    $('#toggle').click(function() {
        $("#close").css("display", "none");
    });
</script>