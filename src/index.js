const openMenu = document.querySelector('#menu');
const showMenu = document.querySelector('#show__menu');

openMenu.addEventListener('click',function(){
    
    openMenu.classList.toggle('bx-x')
    if(openMenu.classList.contains('bx-x')){
        showMenu.classList.toggle('active');
    }
    else{
        showMenu.classList.remove('active');
    }

    
})


//darkmode
const darkmode = document.querySelector('#darkmode');
darkmode.addEventListener('click',function(){
    darkmode.classList.toggle('bxs-sun')
    if(darkmode.classList.contains('bxs-sun')){
        document.body.classList.toggle('active');
    }
    else{
        document.body.classList.remove('active');
    }
})