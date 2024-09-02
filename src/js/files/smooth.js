document.addEventListener('DOMContentLoaded', () => {

   const blockSelect = document.querySelectorAll('.select-block');

   blockSelect.forEach(el => {
      const blockSelectHeader = el.querySelector('.select-btn');
      const blockSelectList = el.querySelector('.select-content');
      
      blockSelectHeader.addEventListener('click', () => { // при клике на кнопку
         if (el.dataset.open !== 'true') { // если значение data-атрибута open у элемента не равно 'true' и блок с контентом еще не отображен
            el.dataset.open = 'true' // тогда устанавливаем значение 'true'
            blockSelectHeader.classList.add('active');
            blockSelectList.classList.add('open');

            blockSelectList.style.maxHeight = `${blockSelectList.scrollHeight}px` // и блоку с контентом устанавливаем inline-свойсво max-height со вычисленным значением полной высоты этого блока
         } else { // если блок с контентом отображен и значение data-атрибута open у элемента равно 'true'
            el.dataset.open = 'false' // тогда устанавливаем значение 'false'
            blockSelectList.style.maxHeight = '' // и сбрасываем ранее установленное inline-свойсво max-height
            blockSelectHeader.classList.remove('active');
            blockSelectList.classList.remove('open');
         }
      });
   });
});