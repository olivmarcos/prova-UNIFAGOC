<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade de Extensao</title>

    <link rel="stylesheet" href="app/Assets/css/style.css">
</head>
<body>
    <header>Cadastro de Atividade de Extensão</header>

    <div class="container">
        <form action="<?= url('salvarExtensao') ?>" class="formulario" method="post">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Título</label><br>
                    <input type="text" name="titulo">
                </div>
                <div class="">
                    <label for="" class="label">Tipo</label><br>
                    <select name="tipo" id="">
                        <option value="Projeto  ">Projeto</option>
                        <option value="Curso">Curso</option>
                    </select>
                </div>
                <div class="sections">
                    <label for="" class="label">Responsável</label><br>
                    <input type="text" name="responsavel">
                </div>
                <div class="sections">
                    <label for="" class="label">Limite de Inscrições</label><br>
                    <input type="text" name="limite">
                </div>
                <div class="sections">
                    <label for="" class="label">Local</label><br>
                    <input type="text" name="local">
                </div>
                <div class="sections">
                    <label for="" class="label">Data</label><br>
                    <input type="text" name="data">
                </div>
                <div class="sections">
                    <label for="" class="label">Hora</label><br>
                    <input type="text" name="hora">
                </div>
                <div class="">
                    <label for="" class="label">Gratuito</label><br>
                    <input type="checkbox" id="checkbox" name="sim">Sim
                    <input type="checkbox" id="checkbox" name="nao">Não
                </div>
            </div>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>