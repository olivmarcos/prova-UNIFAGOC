<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluno</title>

    <link rel="stylesheet" href="app/Assets/css/style.css">
</head>
<body>
    <header>Cadastro de Alunos</header>

    <div class="container">
        <form action="<?= url('salvar');?>" class="formulario" method="post">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Nome</label><br>
                    <input type="text" name="nome">
                </div>
                <div class="">
                    <label for="" class="label">Sexo</label><br>
                    <select id="comboBox" name="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="sections">
                    <label for="" class="label">Data de Nascimento</label><br>
                    <input type="text" name="data">
                </div>
                <div class="sections">
                    <label for="" class="label">CPF</label><br>
                    <input type="text" name="cpf">
                </div>
            </div>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>