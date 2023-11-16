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