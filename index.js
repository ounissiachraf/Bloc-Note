let ul=document.querySelector('.list-group');

function onmouseover(e){
   if(e.target.matches('li'))
{e.target.childNodes[5].classList.remove('description');

}
}
function onmouseout(e){
    if(e.target.matches('li'))
 {e.target.childNodes[5].classList.add('description');
 
 }
}

    ul.addEventListener('mouseover',onmouseover);
    ul.addEventListener('mouseout',onmouseout);

