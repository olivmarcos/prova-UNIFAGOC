<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluno</title>

    <link rel="stylesheet" href="<?= ASSET ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
    <header>Inscrição</header>

    <div class="container">
        <form action="<?= url('salvar/inscricao') ?>" method="post" class="formulario">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Aluno</label><br>
                    <input type="text" name="aluno" id="aluno" placeholder="Pesquisar pelo Nome"> 
                </div>
                <div class="sections">
                    <label for="" class="label">Atividade de Extensão</label><br>
                    <input type="text" name="atividade" id="atividade" placeholder="Selecione a Atividade">
                </div>
                <div class="sections">
                    <label for="" class="label">CPF</label><br>
                    <input type="text" name="cpf">
                </div>
            </div>
            <button>Inscrever</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $("#aluno").autocomplete({
            source:"/select/aluno"
        });

        $("#atividade").autocomplete({
            source:"/select/atividade"
        });

    </script>
</body>
</html>