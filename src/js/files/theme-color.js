const themeBtn = document.querySelector('.theme-btn');

const themeLight = document.querySelector('.theme-btn__light');
const themeDark = document.querySelector('.theme-btn__dark');

function initialState(themeName) {
   localStorage.setItem('theme', themeName);
   document.documentElement.className = themeName;
};

initialState('dark-theme');

function toggleTheme(){
   if(localStorage.getItem('theme') == 'light-theme') {
      initialState('dark-theme');
      themeLight.style.display = 'none';
      themeDark.style.display = 'block';
   } else {
      initialState('light-theme');
      themeLight.style.display = 'block';
      themeDark.style.display = 'none';
   };
};

themeBtn.addEventListener('click', (e) =>{
   e.preventDefault();
   toggleTheme();
});