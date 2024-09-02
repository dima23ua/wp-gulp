const currentLocation = location.href;
const menuItem = document.querySelectorAll('.nav__list li a');
const menuLenght = menuItem.length
for (let i = 0; i<menuLenght; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "active";
    }
}