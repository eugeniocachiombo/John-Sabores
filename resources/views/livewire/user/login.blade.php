<div>
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | John Sabores na Cozinha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fff8f8;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background: linear-gradient(135deg, #ff5f6d, #ffc371);
      color: white;
      padding: 15px 30px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header h1 {
      font-size: 1.5rem;
      font-weight: 700;
      margin: 0;
    }

    header img {
      width: 45px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .login-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fff6f6;
    }

    .login-box {
      background: white;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    .login-box img {
      width: 100px;
      margin-bottom: 15px;
    }

    .login-box h2 {
      font-weight: 700;
      margin-bottom: 15px;
    }

    .form-control {
      border-radius: 8px;
      padding: 10px;
    }

    .btn-login {
      background: linear-gradient(135deg, #ff5f6d, #ffc371);
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      padding: 10px;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      opacity: 0.9;
      transform: scale(1.02);
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      background: #fff1f1;
      color: #777;
    }
  </style>
</head>
<body>

  <header>
    <div class="d-flex align-items-center">
      <img src="logo.png" alt="Logo">
      <h1>John Sabores na Cozinha</h1>
    </div>
  </header>

  <div class="login-container">
    <div class="login-box">
      <img src="logo.png" alt="Logo do site">
      <h2>Bem-vindo de Volta!</h2>
      <p class="text-muted">Faça login para continuar</p>
      <form>
        <div class="mb-3 text-start">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="mb-3 text-start">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn-login mt-2">Entrar</button>
      </form>
      <p class="mt-3 text-muted">Ainda não tem conta? <a href="#">Cadastre-se</a></p>
    </div>
  </div>

  <footer>
    © 2025 John Sabores na Cozinha — Todos os direitos reservados
  </footer>

</body>
</html>

</div>
