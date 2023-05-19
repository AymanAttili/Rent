function myEdit(x, y){
    let form=document.getElementById(x);
    let edit=document.getElementById(y);
    if(edit.innerHTML=='Edit'){
        edit.innerHTML='Cancel';
    }
    else{
        edit.innerHTML='Edit'
    }
    form.classList.toggle('erase');
    form.querySelector('input').focus();

}