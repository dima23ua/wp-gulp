let tab = function () {
   let tabNav = document.querySelectorAll('.link-button'),
      tabContent = document.querySelectorAll('.link-block'),
      tabName;

   tabNav.forEach(item => {
      item.addEventListener('click', selectTabNav)
   });

   function selectTabNav() {
      tabNav.forEach(item => {
         item.classList.remove('tab-active');
      });
      this.classList.add('tab-active');
      tabName = this.getAttribute('data-tab-name');
      selectTabContent(tabName);
   }
   function selectTabContent(tabName) {
      tabContent.forEach(item => {
         item.classList.contains(tabName) ? item.classList.add('tab-active') : item.classList.remove('tab-active');
      })
   }
};
tab();
