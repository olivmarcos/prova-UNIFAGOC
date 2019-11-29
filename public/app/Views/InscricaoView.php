<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluno</title>

    <link rel="stylesheet" href="<?= ASSET ?>">
</head>
<body>
    <header>Inscrição</header>

    <div class="container">
        <form action="<?= url('salvar/inscricao') ?>" method="post" class="formulario">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Aluno</label><br>
                    <input type="text" name="aluno">
                </div>
                <div class="sections">
                    <label for="" class="label">Atividade de Extensão</label><br>
                    <input type="text" name="atividade">
                </div>
                <div class="sections">
                    <label for="" class="label">CPF</label><br>
                    <input type="text" name="cpf">
                </div>
            </div>
            <button>Inscrever</button>
        </form>
    </div>
</body>
</html>