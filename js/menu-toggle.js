var toggleBtn = document.querySelector('.toggle');
var sideBar = document.querySelector('.side-bar');
var logo = document.querySelector('.logo');
var main = document.querySelector('.main');

toggleBtn.onclick = function(){
    sideBar.classList.toggle('active');
    logo.classList.toggle('active');
    main.classList.toggle('active')
};