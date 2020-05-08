//login pop up display

document.getElementById('login-item').addEventListener('click',
function(){
    document.querySelector('.bg-form').style.display='flex';
});

//login pop up close
document.getElementById('buton-cancel').addEventListener('click',
function(){
    document.querySelector('.bg-form').style.display='none';
});

//sign up pop up display
document.getElementById('buton-sign-up').addEventListener('click',
function(){
    document.querySelector('.signup-form').style.display='flex';
});

//sign up pop up close
document.getElementById('buton-cancel-2').addEventListener('click',
function(){
    document.querySelector('.signup-form').style.display='none';
});

//login switch to sign up pop-up
document.getElementById('buton-secundar-L').addEventListener('click',
function(){
    document.querySelector('.bg-form').style.display='none';
    document.querySelector('.signup-form').style.display='flex';
});

//sign up switch to log in pop up
document.getElementById('buton-secundar-L2').addEventListener('click',
function(){
    document.querySelector('.signup-form').style.display='none';
    document.querySelector('.bg-form').style.display='flex';
});