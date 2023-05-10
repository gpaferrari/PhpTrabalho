<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
  <h2>Login</h2>
  <form method="POST" action="verificaLogin.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Enter senha" name="senha">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <p>Esqueceu sua senha? <a href="telaRecuperarSenha.php">Clique aqui</a> para recuperá-la.</p>
  </form>
</div>
</body>
</html>