// on scroll, make header sticky //
window.addEventListener("scroll", function(){
  var header = document.querySelector(".header");
  header.classList.toggle("sticky", window.scrollY > 0);
  var top = window.scrollY;
  if (top > 0) {
    document.querySelector('#logo').setAttribute('src', "assets/images/logo.png");
  }else {
    document.querySelector('#logo').setAttribute('src', "assets/images/favicon.png");
  }
});


// on scroll, show back-to-top button //
window.addEventListener("scroll", function(){
  var toTop = document.querySelector(".back-to-top");
  toTop.classList.toggle("sticky", window.scrollY > 600);
});