@section('title', 'Login | John Sabores na Cozinha')
<div class="login-container">
    <div class="login-box">
        <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo do site">
        <h2>Autenticação</h2>
        <form>
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn-login mt-2">
                Entrar
            </button>
        </form>
        <p class="mt-3 text-muted" style="font-size: 14px">Ainda não tem conta? <a href="#">Cadastre-se</a></p>
    </div>
</div>
