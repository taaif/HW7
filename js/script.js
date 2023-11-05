var countDownDate = new Date("Dec 31, 2023 20:30:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("demo").innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقيقة " + seconds + " ثانية ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "لقد وصلت متأخرًا";
  }
}, 1000);

// selecting the winner

const win = document.querySelector('#winner');
const cards = document.querySelector('#cards');
 win.addEventListener('click',function() {
    cards.style.display = 'flex';
})