document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(".mostrar-ocultar");
    const content = document.querySelector(".content");

    toggleButton.addEventListener("click", function () {
        if (content.classList.contains("hidden")) {
            content.classList.remove("hidden");
            toggleButton.textContent = "▲ Ocultar Conteúdo";
        } else {
            content.classList.add("hidden");
            toggleButton.textContent = "▼ Equipe de Atendimento";
        }
    });
});
const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');
var c=0
menu.addEventListener('click', () => {
    c=c+1
    if(c==1)
    {
        document.getElementById("nav-menu").style.display="flex"
    }else{
        c=0
        document.getElementById("nav-menu").style.display="none"
    }
    
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})