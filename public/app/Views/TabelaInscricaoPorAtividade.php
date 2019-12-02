<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= ASSET ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Document</title>
</head>
<body>
    <header>
        <p>Inscritos</p>
        <div class="icon">
            <a href="/painel"><i class="fas fa-home"></i></a>
        </div>
    </header>
    <div class="center">
        <div class="button">
        <a href="/cadastro/inscricao"><button>Novo</button></a>
        </div>
    <table id="tabela">
            <tr>
                <th colspan="5"><h2>Inscritos</h2></th>
            </tr>
            <t>
                <th> Id </th>
                <th> Nome </th>
                <th> Sexo </th>
                <th> Data de Nascimento </th>
                <th> Cpf </th>
            </t>
            <?php if($inscritos):
            foreach($inscritos as $inscrito):
            {
                ?>       
                <tr>
                    <td><?php echo $inscrito['aln_id']; ?></td>
                    <td><?php echo $inscrito['aln_nome']; ?></td>
                    <td><?php echo $inscrito['aln_sexo']; ?></td>
                    <td><?php echo $inscrito['aln_dataNascimento']; ?></td>
                    <td><?php echo $inscrito['aln_cpf']; ?></td>
                </tr>
            <?php     
            }
        endforeach;

        else:
            ?>
        <h4>Não há registros</h4>
        <?php    
        endif;?>
    </table>

    </div>

        <footer>
            <div class="icon">
                <a href="/listar/atividade"><i class="fas fa-arrow-circle-left"></i></a>
            </div>
        </footer>
</body>
</html>
