<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
</head>
<body>
  <h2>Iniciar Sesión</h2>
  <form action="iniciarSesion.php" method="post">
    <label for="email">Correo electrónico:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Iniciar Sesión</button>
  </form>
  <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
</body>
</html>
