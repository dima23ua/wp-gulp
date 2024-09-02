
document.addEventListener('DOMContentLoaded', () => {
   let today = new Date();
   today.setHours(0, 0, 0, 0);
   let tommorow = new Date(today.getTime() + (24 * 60 * 60 * 1000));

   const hoursValue = document.querySelector('.time-count__hours .time-count__value');
   const minutesValue = document.querySelector('.time-count__minutes .time-count__value');
   const secondsValue = document.querySelector('.time-count__seconds .time-count__value');

   const hoursText = document.querySelector('.time-count__hours .time-count__text');
   const minutesText = document.querySelector('.time-count__minutes .time-count__text');
   const secondsText = document.querySelector('.time-count__seconds .time-count__text');
   
   function declOfNum(number, titles) {  
      let cases = [2, 0, 1, 1, 1, 2];  
      return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
  }

   const timeCount = () => {

      let now = new Date();

      let leftUntil = tommorow - now;

      let hours = Math.floor(leftUntil / 1000 / 60 / 60) % 24;
      let minutes = Math.floor(leftUntil / 1000 / 60) % 60;
      let seconds = Math.floor(leftUntil / 1000) % 60;

      hoursValue.innerText = hours;
      minutesValue.innerText = minutes;
      secondsValue.innerText = seconds;

      hoursText.innerText = declOfNum(hours, ['час', 'часа', 'часов']);
      minutesText.innerText = declOfNum(minutes, ['минута', 'минуты', 'минут']);
      secondsText.innerText = declOfNum(seconds, ['секунда', 'секунды', 'секунд']);
      
   };

   timeCount();
   setInterval(timeCount, 1000);
})