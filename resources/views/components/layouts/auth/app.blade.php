@include('inc/headHTML')
<style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fff8f8;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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

  </style>


{{ $slot }}



@include('inc/footHTML')
