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
        <a href="/cadastro/extensao"><button>Novo</button></a>
        </div>
    <table id="tabela">
            <tr>
                <th colspan="6"><h2>Atividades</h2></th>
            </tr>
            <t>
                <th> Id </th>
                <th> Atividade </th>
                <th> Tipo </th>
                <th> Local </th>
                <th> Data </th>
                <th> Valor </th>
            </t>
            <?php if($atividades):
            foreach($atividades as $atividade):
            {
                ?>   
               <tr onclick="redireciona(<?php echo $atividade['ate_id'];?>)">
                    <td><?php echo $atividade['ate_id'];?></td>
                    <td><?php echo $atividade['ate_titulo'];?></td>
                    <td><?php echo $atividade['ate_tipo']; ?></td>
                    <td><?php echo $atividade['ate_local']; ?></td>
                    <td><?php echo $atividade['ate_data']; ?></td>
                    <td><?php echo $atividade['ate_valor']; ?></td>
            </a></tr>
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

    <script language='javascript' type='text/javascript'>
       function redireciona(id)
       {
           window.location.href="/listar/inscritos?id=".concat(id);
       }
    </script>
</body>
</html>
