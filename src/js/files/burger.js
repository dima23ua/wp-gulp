const burger = document.querySelector('.burger');

if (burger) {
  const menu = document.querySelector('.navigation');
  const html = document.querySelector('html');
  burger.addEventListener("click", function (e) {
    burger.classList.toggle('menu-active'); //add
    menu.classList.toggle('menu-active'); //add
    html.classList.toggle('lock');  //add
  });

//   const menuClose = document.querySelector('.nav__close');
//   menuClose.addEventListener("click", function (e) {
//    burger.classList.remove('menu-active');
//    menu.classList.remove('menu-active');
//    html.classList.remove('lock');
//  });
}
