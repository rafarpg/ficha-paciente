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

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})