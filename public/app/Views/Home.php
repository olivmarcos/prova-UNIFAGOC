<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?= ASSET ?>">
   <title>Document</title>
</head>
<body>
   <header></header>
   <section>
      <form action="<?= url('/login');?>"id="login" method="post">
         <div class="titulo">
            <h2>Sistema de Cadastro</h2>
         </div>
         <div class="login-item">
            <label for="">Nome</label><br>
            <input type="text" name="nome">
         </div>
         <div class="login-item">
            <label for="">Senha</label><br>
            <input type="text" name="password">
         </div>
         <button type="submit">Entrar</button>
      </form>
   </section>
   <footer></footer>
</body>
</html>