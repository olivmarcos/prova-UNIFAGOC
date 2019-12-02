<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluno</title>

    <link rel="stylesheet" href="<?= ASSET ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>  
    <header>
        <p>Cadastro de Alunos</p>
        <div class="icon">
            <a href="/painel"><i class="fas fa-home"></i></a>
        </div>
    </header>
    <div class="container">
        <form action="<?= url('salvar/aluno');?>" class="formulario" method="post">
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
                    <input type="text" name="data" placeholder="dd/mm/aa">
                </div>
                <div class="sections">
                    <label for="" class="label">CPF</label><br>
                    <input type="text" name="cpf" placeholder="###.###.###-##">
                </div>
            </div>
            <button>Enviar</button>
        </form>
    </div>
    <footer>
        <div class="icon">
            <a href="/listar/aluno"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </footer>
</body>
</html>