function changeVis(){
    let input = document.getElementsByClassName('sign_password');
    let icons = document.getElementsByClassName('eye');
    if(input[0].type==='password'){
        for(i=0 ; i<input.length ; i++){
            input[i].type='text';
            icons[i].src='./SVG/mdi_eye-off.svg';
        }
    }

    else{
        for(i=0 ; i<input.length ; i++){
            input[i].type='password';
            icons[i].src='./SVG/ic_baseline-remove-red-eye.svg';
        }
    }
    
}

function visEye(id){
    let eye=document.getElementById(id);
    
    id.style.visibility='visible';
}

let owner = document.getElementById('owner');
let tenant = document.getElementById('tenant');

function flip(id){
    if(id==='owner'){
        tenant.style.color='white';
        tenant.style.background='#09203F';
        tenant.src='./SVG/owner.svg';

        
        
        
        owner.style.color= '#EC801D';
        owner.style.background= 'unset';
        owner.style.border='3.5px solid var(--secondary-color)'; 
    }
    else{

    }
}