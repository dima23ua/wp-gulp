
let scrollpos = window.scrollY

const header = document.querySelector("header")
const scrollChange = 10

const add_class_on_scroll = () => header.classList.add("bg-red")
const remove_class_on_scroll = () => header.classList.remove("bg-red")

window.addEventListener('scroll', function () {
	scrollpos = window.scrollY;

	if (scrollpos >= scrollChange) { add_class_on_scroll() }
	else { remove_class_on_scroll() }

})