let count = document.getElementById("buttonCountNumber");
const btnPlus = document.getElementById("buttonCountPlus");
const btnMinus = document.getElementById("buttonCountMinus");
const regBtn = document.getElementById("regBtn");

let numNone = document.getElementById("buttonCountNumberNone");

btnPlus.onclick = function () {
   let countPlus = count.innerHTML;

   if (+countPlus <= 299) {
      count.innerHTML++;
      let countPlus = count.innerHTML;
      numNone.value = countPlus;
   }
   
   if(count.innerHTML > 0) {
      btnMinus.classList.remove('disabled');
   }

   if(count.innerHTML >= 300) {
      btnPlus.classList.add('disabled');
   }
}

btnMinus.onclick = function () {
   let countMinus = count.innerHTML;

   if (+countMinus >= 1) {
      count.innerHTML--;
      let countMinus = count.innerHTML;
      numNone.value = countMinus;
   }

   if(count.innerHTML <= 0) {
      btnMinus.classList.add('disabled');
   }

   if(count.innerHTML < 300) {
      btnPlus.classList.remove('disabled');
   }
}

regBtn.addEventListener("click", function (e) {
   numNone.value = 0;
   count.innerHTML = 0;
});
