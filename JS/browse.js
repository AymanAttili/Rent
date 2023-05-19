function xchange(id){
    let like = document.getElementById(id);
    console.log(like + "222");
    if(like.src.indexOf("heart1.svg") != -1){
        like.src='./SVG/heart2.svg';
    }
    else{
        like.src='./SVG/heart1.svg';
    }
}

