@section('title', 'Login | John Sabores na Cozinha')
<div class="login-container">
    <div class="login-box">
        <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo do site">
        <h2>Autenticação</h2>
        <form wire:submit.prevent="auth" >
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control"
                 id="email" placeholder="Digite seu email">
                 @error("email")
                     <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                 @enderror
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Senha</label>
                <input type="password" wire:model="password" class="form-control" 
                id="password" placeholder="Digite sua senha">
                @error("password")
                    <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn-login mt-2">
                Entrar
            </button>
        </form>
        <p class="mt-3 text-muted" style="font-size: 14px">Ainda não tem conta? <a href="#">Cadastre-se</a></p>
    </div>
</div>
