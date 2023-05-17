
// Menu 
let menu_popup = document.querySelector('.menu_popup');
let slide = document.querySelector('#slide');


function popup(margin){
    menu_popup.style.marginLeft=`${margin}px`;
    console.log(margin);
    slide.classList.toggle('erase');
}

function xchange(id){
    console.log(1);
    let like = document.getElementById(id);
    if(like.src=='../SVG/heart2.svg'){
        like.style.src='../SVG/heart1.svg'
    }
    else{
        like.style.src='../SVG/heart2.svg'
    }

    
}

