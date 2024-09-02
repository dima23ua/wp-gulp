document.addEventListener("DOMContentLoaded", (event) => {

   let header = document.querySelector('.header');
   let main = document.querySelector('.main');
   let headerHeight = header.offsetHeight;

   

   window.addEventListener('scroll', () => {
      let scrollDistance = window.scrollY;

      if (scrollDistance >= headerHeight) {
         header.classList.add('header-fixed');
         // main.style.paddingTop = `${headerHeight}px`;

      } else {
         header.classList.remove('header-fixed');
         // main.style.paddingTop = null;
      }
   });
});