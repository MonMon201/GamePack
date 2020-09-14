let index = 0;
let lots = document.getElementsByClassName('lot');
let overlayConatiner = document.getElementsByClassName('overlayConatiner');
let overlays = overlayConatiner[0].getElementsByClassName('overlay');

let body = document.getElementsByTagName('body');

/* Поиск оверлея по имени */
const searchByName = (name) =>{
    for(let i = 0; i < overlays.length; i++){
        let list = overlays[i].classList;
        for(let j = 0; j < list.length; j++){
            if(list[j]===name){
                return i;
            }
        }
    }
}

/* Поиск по имени карточки товара и появление соответствующего оверлея через присвоение ему необходимых модификаторов */

for(let i = 0; i < lots.length; i++){
    lots[i].onclick = () => {
        let name = lots[i].getElementsByClassName('name');
        name = name[0].getElementsByTagName('div');
        name = name[0].classList;
        name = name[0];

        index = searchByName(name);

        overlays[index].classList.remove("opacity");
        overlays[index].classList.add("index10");
        body[0].classList.add("overflow");
    }
}

let globalOverlays = document.getElementsByClassName('overlay__globalOverlay');

/* Закрытие всех оверлеев, при нажатии на чёрную область глобального оверлея */

for(let i = 0; i < globalOverlays.length; i++){
    globalOverlays[i].onclick = () => {
        index = i;
        overlays[i].classList.remove("index10");
        overlays[i].classList.add("opacity");
        body[0].classList.remove("overflow");
    }
}

let closeButtons = document.getElementsByClassName('closeButton');

/* Закрытие всех оверлеев, при нажатии на кнопку закрытия */

for(let i = 0; i < closeButtons.length; i++){
    closeButtons[i].onclick = () => {
        overlays[i].classList.remove("index10");
        overlays[i].classList.add("opacity");
        body[0].classList.remove("overflow");
    }
}

/* Закрытие всех оверлеев, при нажатии на кнопку esc (27 - это её код) */

document.onkeydown = (evnt) => { 
    if(evnt.keyCode === 27){
        for(let i = 0; i < overlays.length; i++){
            overlays[i].classList.remove("index10");
            overlays[i].classList.add("opacity");
            body[0].classList.remove("overflow");
        }
        /* если меню открыто, то оно закроется */
        if(state===true){
            overlay.classList.remove("index2");
            overlay.classList.add("opacity");
            body[0].classList.remove("overflow");
        
            menuTextBlocks[0].classList.add('moveInMenu');
            menuTextBlocks[0].classList.remove('moveOutMenu');
            menuTextBlocks[0].classList.remove('index3');
        
            openMenuButtons[0].classList.add('moveInHamburger');
            openMenuButtons[0].classList.remove('moveOutHamburger');
            openMenuButtons[0].classList.add('index3');
        
            closeMenuButtons[0].classList.add('moveOutCross');
            closeMenuButtons[0].classList.remove('moveInCross');
        }
    }
}

let menus = document.getElementsByClassName('menu');
let openMenuButtons = document.getElementsByClassName('openMenu');
let closeMenuButtons = document.getElementsByClassName('closeMenu');
let menuTextBlocks = document.getElementsByClassName('menu__textBlock');
let overlay = menus[0].getElementsByClassName('overlay');
overlay = overlay[0];
let overlay__globalOverlay = overlay.getElementsByClassName('overlay__globalOverlay');
overlay__globalOverlay = overlay__globalOverlay[0];
let state = false;

/* открытие меню, по нажатию на кнопку */

openMenuButtons[0].onclick = () =>{
    overlay.classList.remove("opacity");
    overlay.classList.add("index2");
    body[0].classList.add("overflow");

    menuTextBlocks[0].classList.remove('moveInMenu');
    menuTextBlocks[0].classList.add('index3');
    menuTextBlocks[0].classList.add('moveOutMenu');

    openMenuButtons[0].classList.remove('moveInHamburger');
    openMenuButtons[0].classList.add('moveOutHamburger');
    openMenuButtons[0].classList.remove('index3');

    closeMenuButtons[0].classList.remove('moveOutCross');
    closeMenuButtons[0].classList.add('moveInCross');
    state = true;
}

/* закрытие меню, по нажатию на кнопку */

closeMenuButtons[0].onclick = () =>{
    overlay.classList.remove("index2");
    overlay.classList.add("opacity");
    body[0].classList.remove("overflow");

    menuTextBlocks[0].classList.add('moveInMenu');
    menuTextBlocks[0].classList.remove('moveOutMenu');
    menuTextBlocks[0].classList.remove('index3');

    openMenuButtons[0].classList.add('moveInHamburger');
    openMenuButtons[0].classList.remove('moveOutHamburger');
    openMenuButtons[0].classList.add('index3');

    closeMenuButtons[0].classList.add('moveOutCross');
    closeMenuButtons[0].classList.remove('moveInCross');
    state = false;
}

/* закрытие меню, по нажатию на чёрную область глобального оверлея */

overlay__globalOverlay.onclick = () =>{
    overlay.classList.remove("index2");
    overlay.classList.add("opacity");
    body[0].classList.remove("overflow");

    menuTextBlocks[0].classList.add('moveInMenu');
    menuTextBlocks[0].classList.remove('moveOutMenu');
    menuTextBlocks[0].classList.remove('index3');

    openMenuButtons[0].classList.add('moveInHamburger');
    openMenuButtons[0].classList.remove('moveOutHamburger');
    openMenuButtons[0].classList.add('index3');

    closeMenuButtons[0].classList.add('moveOutCross');
    closeMenuButtons[0].classList.remove('moveInCross');
    state = false;
}