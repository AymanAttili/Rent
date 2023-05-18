
// Menu 
let menu_popup = document.querySelector('.menu_popup');
let slide = document.querySelector('#slide');


function popup(margin){
    menu_popup.style.marginLeft=`${margin}px`;
    console.log(margin);
    slide.classList.toggle('erase');
}

function xchange(id){
    let like = document.getElementById(id);
    console.log(like + "222");
    if(like.src=='./SVG/heart2.svg'){
        like.src='./SVG/heart1.svg'
    }
    else{
        like.src='./SVG/heart2.svg'
    }

    
}



