<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    <div class="alunos">
        <?php if($alunos): 
            foreach ($alunos as $aluno):
                ?>
            <article> 
                <h3><?= $aluno['aln_nome'];?> </h3>
                <h3><?= $aluno['aln_sexo'];?></h3>
            </article>
            <?php
            endforeach;
        else:
            ?>
            <h4>Não existem alunos cadastrados</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid repudiandae molestias ut, aperiam magnam iure autem praesentium incidunt totam nam sequi consequuntur temporibus pariatur minima in nostrum voluptatem culpa inventore?</p>
        <?php
        endif;?>

    </div>
</body>
</html>