<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="<?php echo asset('css/app.css') ?>" type="text/css">

<script type="text/javascript">
    $(document).ready(function() {

        $("#qtd").change(function() {
            var qtd = $(this).val();

            var valor = document.getElementById('valor').innerHTML;

            var total = qtd * valor;

            var calculo = total.toFixed(2);

            $("#totalLabel").text("R$" + calculo);

            $("#totalInput").val(calculo);

        });
    });

    
</script>