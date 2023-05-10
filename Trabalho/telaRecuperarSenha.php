<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Recuperar Senha</title>
</head>
<body>
<div class="container">
  <h2>Recuperar Senha</h2>
  <form method="POST" action="recuperarSenha.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite o email cadastrado" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Recuperar Senha</button>
  </form>
</div>
</body>
</html>
