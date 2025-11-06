<button id="btnModo" onclick="MudarCorFundo()" class="modo-toggle">
    <div id="modoClaro" class="modo-item ativo">
        <i class="fas fa-sun"></i>
    </div>

    <div id="modoEscuro" class="modo-item">
        <i class="fas fa-moon"></i>
    </div>
</button>

<style>
    /* Botão base */
    .modo-toggle {
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    /* Hover */
    .modo-toggle:hover {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 0.25);
    }

    /* Itens (sol e lua) */
    .modo-item {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        opacity: 0;
        transform: scale(0.8);
        transition: all 0.4s ease;
    }

    .modo-item i {
        font-size: 18px;
        transition: transform 0.4s ease;
    }

    /* Item ativo (visível) */
    .modo-item.ativo {
        opacity: 1;
        transform: scale(1);
    }

    .modo-item.ativo i {
        transform: rotate(360deg);
    }

    /* Responsivo (ajuste fino em telas pequenas) */
    @media (max-width: 768px) {
        .modo-toggle {
            width: 36px;
            height: 36px;
        }

        .modo-item i {
            font-size: 16px;
        }
    }
</style>

<script src="{{ asset('assets/js/darkmode.js') }}"></script>
