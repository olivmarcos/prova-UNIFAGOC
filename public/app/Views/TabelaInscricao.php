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
        <a href="/cadastro/inscricao"><button>Novo</button></a>
        </div>
    <table id="tabela">
            <tr>
                <th colspan="6"><h2>Inscrições</h2></th>
            </tr>
            <t>
                <th> Id </th>
                <th> Nome </th>
                <th> Cpf </th>
                <th> Atividade </th>
                <th> Tipo </th>
                <th> Valor </th>

            </t>
            <?php if($inscricoes):
            foreach($inscricoes as $inscricao):
            {
                ?>       
                <tr>
                    <td><?php echo $inscricao['aln_id']; ?></td>
                    <td><?php echo $inscricao['aln_nome']; ?></td>
                    <td><?php echo $inscricao['aln_cpf']; ?></td>
                    <td><?php echo $inscricao['ate_titulo']; ?></td>
                    <td><?php echo $inscricao['ate_tipo']; ?></td>
                    <td><?php echo $inscricao['ate_valor']; ?></td>
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