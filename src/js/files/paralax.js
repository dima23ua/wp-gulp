let paralaxImage = document.getElementById("paralax");

document.addEventListener('scroll', () => {
   let { scrollY } = window;

   paralaxImage.style.top = 0.3 * scrollY + 'px';
});