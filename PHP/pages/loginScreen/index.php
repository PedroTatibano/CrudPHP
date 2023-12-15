<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="login-card">
      <img src="../../images/favicon.png" alt="" class="image">
      <h2>Login</h2>
      <h3>Entre com seus dados</h3>
      <form action="login.php" class="login-form" method="post">
        <input type="email" placeholder="👤 Email" name="inp_email">
        <input type="password" placeholder="🔒 Senha" name="inp_senha">
        <button type="submit">LOGIN</button>
      </form>
      <div class="cont">
      <button class="botao" onclick="location.href='../cadastroUser/'">
        <a>CRIAR CADASTRO</a>
        </button>
        </div>
    </div>
</body>
</html>