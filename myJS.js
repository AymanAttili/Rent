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

