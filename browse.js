
// Menu 
let menu_popup = document.querySelector('.menu_popup');
let slide = document.querySelector('#slide');

function popup(margin){
    menu_popup.style.marginLeft=`${margin}px`;
    console.log(margin);
    slide.classList.toggle('erase');
}
