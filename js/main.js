/*Toggle menu del nav*/
const toggleMenuElement = document.getElementById('toggle-menu');
const mainMenuElement = document.getElementById('mainMenu');

toggleMenuElement.addEventListener('click', ()=>{
    mainMenuElement.classList.toggle('mainMenu--show');    
});

