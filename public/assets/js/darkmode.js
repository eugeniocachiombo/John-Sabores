let modoEscuro = document.querySelector("#modoEscuro");
let modoClaro = document.querySelector("#modoClaro");


function MudarCorFundo() {
    if (modoClaro.style.display == "block") {
        modoEscuro.style.display = "block";
        modoClaro.style.display = "none";
        document.body.style = "font-size: 20px;background: #222;color: white;font-family: verdana;";
        localStorage.setItem("modo", "modoEscuro");
    } else {
        modoClaro.style.display = "block";
        modoEscuro.style.display = "none";
        document.body.style = "font-size: 20px;background: white;color: black;font-family: verdana;";
        localStorage.setItem("modo", "modoClaro");
    }
}

setInterval(() => {
    if (localStorage.getItem("modo") != null) {
        if (localStorage.getItem("modo") == "modoEscuro") {
            modoEscuro.style.display = "block";
            modoClaro.style.display = "none";
            document.body.style = "font-size: 20px;background: #222;color: white;font-family: verdana;";
            //localStorage.clear("modo");
        } else {
            modoClaro.style.display = "block";
            modoEscuro.style.display = "none";
            document.body.style = "font-size: 20px;background: white;color: black;font-family: verdana;";
            //localStorage.clear("modo");
        }
    }
}, 1000);