var modal = document.getElementById("myModal");
var btn = document.getElementById("novo-requerimento");
var btn_cancelar = document.getElementById("cancelar-btn");

btn.onclick = function() {
    modal.style.display = "block";
}

btn_cancelar.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}