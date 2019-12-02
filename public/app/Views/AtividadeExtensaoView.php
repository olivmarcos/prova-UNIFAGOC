<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade de Extensao</title>

    <link rel="stylesheet" href="<?= ASSET;?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>
<body>
    <header>Cadastro de Atividade de Extensão</header>

    <div class="container">
        <form action="<?= url('salvar/extensao') ?>" class="formulario" method="post">
            <div class="main">
                <div class="sections">
                    <label for="" class="label">Título</label><br>
                    <input type="text" name="titulo">
                </div>
                <div class="">
                    <label for="" class="label">Tipo</label><br>
                    <select name="tipo" id="tipo" onchange="validar()">
                        <option value="Projeto">Projeto</option>
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
                    <input type="text" name="data" placeholder="dd/mm/aa">
                </div>
                <div class="sections">
                    <label for="" class="label">Hora</label><br>
                    <input type="text" name="hora" placeholder="00:00">
                </div>
                <div id="op">
                    <label for="" id="labelG" class="label">Gratuito</label><br>
                    <input type="hidden" id="checkbox" name="gratuito" value="0" />
                    <input type="checkbox" class="" id="checkbox" name="gratuito" value="1" checked/>Sim

                    <label for="" id="label" class="labelValor">Valor</label>
                    <input type="text" id="valor" name="valor" value="0" hidden/>
                </div>
                <div class="">

                </div>
            </div>
            <button>Enviar</button>
        </form>
    </div>
    <footer>
        <div class="icon">
            <a href="/listar/atividade"><i class="fas fa-arrow-circle-left"></i></a>
        </div>
    </footer>

    <script>
        window.onload = function desabilitar()
        {
            document.getElementById("op").hidden = true;
            document.getElementById("valor").value = '0';
        }

        function validar()
        {
            let select = document.getElementById("tipo").value;
            if(select == "Projeto")
                document.getElementById("op").hidden = true;

            else
            {
                document.getElementById("op").hidden = false;
                document.getElementById("valor").hidden = false;
                document.getElementById("valor").value = '';
            }
        }

    </script>
</body>
</html>