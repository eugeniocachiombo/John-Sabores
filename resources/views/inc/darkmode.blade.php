<button id="btnModo" onclick="MudarCorFundo()" class="modo-toggle">
    <div id="modoClaro" class="modo-item ativo">
        <i class="fas fa-sun"></i>
        <span>Modo Claro</span>
    </div>

    <div id="modoEscuro" class="modo-item">
        <i class="fas fa-moon"></i>
        <span>Modo Escuro</span>
    </div>
</button>


<style>
    .modo-toggle {
        background: linear-gradient(135deg, #f8f9fa, #e0e0e0);
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.4s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .modo-toggle:hover {
        transform: scale(1.05);
        background: linear-gradient(135deg, #ffecd2, #fcb69f);
    }

    .modo-item {
        display: none;
        align-items: center;
        gap: 8px;
        color: #0d6efd;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.4s ease;
    }

    .modo-item i {
        font-size: 22px;
        transition: transform 0.4s ease;
    }

    .modo-item span {
        font-size: 12px;
    }

    .modo-item.ativo {
        display: flex;
    }

    .modo-item.ativo i {
        transform: rotate(360deg);
    }
</style>



<script src="{{ asset('assets/js/darkmode.js') }}"></script>
