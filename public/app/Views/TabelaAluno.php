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
<header></header>
    <div class="center">
        <div class="button">
        <a href="/cadastro/aluno"><button>Novo</button></a>
        </div>
    <table id="tabela">
            <tr>
                <th colspan="5"><h2>Alunos</h2></th>
            </tr>
            <t>
                <th> Id </th>
                <th> Nome </th>
                <th> Sexo </th>
                <th> Data de Nascimento </th>
                <th> Cpf </th>
            </t>
            <?php if($alunos):
            foreach($alunos as $aluno):
            {
                ?>       
                <tr>
                    <td><?php echo $aluno['aln_id']; ?></td>
                    <td><?php echo $aluno['aln_nome']; ?></td>
                    <td><?php echo $aluno['aln_sexo']; ?></td>
                    <td><?php echo $aluno['aln_dataNascimento']; ?></td>
                    <td><?php echo $aluno['aln_cpf']; ?></td>
                </tr>
            <?php     
            }
        endforeach;

        else:
            ?>
        <h4>N existe nada</h4>
        <?php    
        endif;?>
    </table>

    </div>

        <footer>
            <div class="icon">
                <a href="/painel"><i class="fas fa-arrow-circle-left"></i></a>
            </div>
        </footer>
</body>
</html>
