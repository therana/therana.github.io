 const secondHand = document.querySelector('.second-hand');
 const minsHand = document.querySelector('.min-hand');
 const hourHand = document.querySelector('.hour-hand');

 function setDate() {
     const minAudio = document.getElementById('min-sound');
     const hourAudio = document.getElementById('hour-sound');

     const now = new Date();

     const seconds = now.getSeconds();
     const secondsDegrees = ((seconds / 60) * 360) + 90;
     secondHand.style.transform = `rotate(${secondsDegrees}deg)`;

     const mins = now.getMinutes();
     const minsDegrees = ((mins / 60) * 360) + ((seconds / 60) * 6) + 90;
     minsHand.style.transform = `rotate(${minsDegrees}deg)`;

     if (secondsDegrees == 90) {
         minAudio.play();
     }


     const hour = now.getHours();
     const hourDegrees = ((hour / 12) * 360) + ((mins / 60) * 30) + 90;
     hourHand.style.transform = `rotate(${hourDegrees}deg)`;

     if (hourDegrees % 30 == 0 && secondsDegrees == 90) {
         hourAudio.play();
     }

     if (hourDegrees % 2 < 1) {
         const hourAudio = document.getElementById('hour-sound');
     }


 }



 function secAudio() {
     const audio = document.getElementById('sec-sound');
     audio.play();
 }

 setInterval(setDate, 1000);
 setInterval(secAudio, 1000);

 setDate();