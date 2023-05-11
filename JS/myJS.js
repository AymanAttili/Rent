let back=document.querySelector('.back');

back.addEventListener('mouseenter',function(){
    back.src='./SVG/back1.svg';
})
back.addEventListener('mouseleave',function(){
    back.src='./SVG/back.svg';
})


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
let ownerIcon = document.getElementById('ownerIcon')
let tenant = document.getElementById('tenant');
let tenantIcon = document.getElementById('tenantIcon');

let type;

owner.addEventListener('mouseenter', function(){
    owner.style.color='#EC801D';
    owner.style.background='unset';
    owner.style.border='3.5px solid #EC801D'
    ownerIcon.src='./SVG/owner.svg'

})
owner.addEventListener('mouseleave', function(){
    if(type!=='owner'){
        owner.style.color='white';
        owner.style.background='#EC801D';
        ownerIcon.src='./SVG/owner1.svg'
    }
})
owner.addEventListener('click', function(){
    owner.style.color='#EC801D';
    owner.style.background='unset';
    owner.style.border='3.5px solid #EC801D'
    ownerIcon.src='./SVG/owner.svg'
    type='owner';

    tenant.style.color='white';
    tenant.style.background='#09203F';
    tenantIcon.src='./SVG/tenant1.svg';
})




tenant.addEventListener('mouseenter', function(){
    tenant.style.color='#09203F';
    tenant.style.background='unset';
    tenant.style.border='3.5px solid #09203F'
    tenantIcon.src='./SVG/tenant.svg'

})
tenant.addEventListener('mouseleave', function(){
    if(type!=='tenant'){
        tenant.style.color='white';
        tenant.style.background='#09203F';
        tenantIcon.src='./SVG/tenant1.svg'
    }
})
tenant.addEventListener('click', function(){
    tenant.style.color='#09203F';
    tenant.style.background='unset';
    tenant.style.border='3.5px solid #09203F'
    tenantIcon.src='./SVG/tenant.svg'
    type='tenant';

    owner.style.color='white';
    owner.style.background='#EC801D';
    ownerIcon.src='./SVG/owner1.svg';
})

