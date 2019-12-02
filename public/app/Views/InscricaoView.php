<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluno</title>

    <link rel="stylesheet" href="<?= ASSET ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>
<body>
    <header>Inscrição</header>

    <div class="container">
        <form action="<?= url('salvar/inscricao') ?>" method="post" class="formulario">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Aluno</label><br>
                    <input type="text" name="aluno" id="aluno" placeholder="Pesquisar pelo Nome"> 
                    <input type="hidden" name="aluno-id" id="aluno-id"> 
                    <input type="hidden" name="aluno-cpf" id="aluno-cpf"> 
                </div>
                <div class="sections">
                    <label for="" class="label">Atividade de Extensão</label><br>
                    <input type="text" name="atividade" id="atividade" placeholder="Pesquisar pela Atividade">
                    <input type="hidden" name="atividade-id" id="atividade-id"> 

                </div>
            </div>
            <button>Inscrever</button>
        </form>
    </div>

    <footer>
        <div class="icon">
            <a href="/listar/inscricao"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $("#aluno").autocomplete({
            minLenght: 0,
            source:"/select/aluno",
            focus: function( event, ui ) {
                $("#aluno").val( ui.item.label );

                return false;
            },
            select: function( event, ui ) {
                $("#aluno").val( ui.item.label );
                $("#aluno-id").val( ui.item.value );
                $("#aluno-cpf").val( ui.item.cpf );

                return false;
            }
        });

        $("#atividade").autocomplete({
            minLenght: 0,
            source:"/select/atividade",
            focus: function( event, ui ) {
                $("#atividade").val( ui.item.label );

                return false;
            },
            select: function( event, ui ) {
                $("#atividade").val( ui.item.label );
                $("#atividade-id").val( ui.item.value );

                return false;
            }
        });
    </script>
</body>
</html>